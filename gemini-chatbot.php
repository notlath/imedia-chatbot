<?php
    /**
 * Plugin Name: Inventive Media Gemini Chatbot
 * Description: AI chatbot using Gemini API with static + dynamic WordPress knowledge base. Shortcode: [gemini_chat]
 * Version: 2.0
 */

    if (! defined('ABSPATH')) {
    exit;
    }

    // Load knowledge base functions (static + dynamic WP_Query)
    require_once plugin_dir_path(__FILE__) . 'knowledge-base.php';

    // 1. Enqueue CSS and JS
    add_action('wp_enqueue_scripts', function () {
    // Force a version number (time()) to bypass browser caching during testing
    wp_enqueue_style('gemini-chat-style', plugin_dir_url(__FILE__) . 'style.css', [], time());

    wp_enqueue_script(
        'gemini-chat-script',
        plugin_dir_url(__FILE__) . 'script.js',
        [],
        time(),
        true// This forces it to load in the footer
    );

    wp_localize_script('gemini-chat-script', 'chatConfig', [
        'apiUrl' => rest_url('gemini-chat/v1/send'),
    ]);
    });

    // 2. Register API Endpoint
    add_action('rest_api_init', function () {
    register_rest_route('gemini-chat/v1', '/send', [
        'methods'             => 'POST',
        'callback'            => 'handle_gemini_chat',
        'permission_callback' => '__return_true',
    ]);
    });

    function handle_gemini_chat($request)
    {
    $user_message = sanitize_text_field($request->get_param('message'));
    $history      = $request->get_param('history') ?: [];

    // Check for online course queries - return hardcoded response to save API credits
    $online_patterns = [
        'online course',
        'online courses',
        'virtual course',
        'virtual courses',
        'remote course',
        'remote courses',
        'distance learning',
        'online class',
        'online classes',
        'virtual class',
        'virtual classes',
        'online training',
        'virtual training',
        'remote training',
        'offer online',
        'have online',
        'any online',
        'online available',
        'online modality',
        'online setup',
    ];

    $message_lower = strtolower($user_message);
    foreach ($online_patterns as $pattern) {
        if (strpos($message_lower, $pattern) !== false) {
            $hardcoded_reply = "Most of our courses are conducted face-to-face with hands-on training. However, our **Digital Marketing Fundamentals** course is specifically offered in an **Online | Virtual setup**.\n\nAll courses include **Unlimited Free Class Retakes** for 1 year!";

            // Log to Google Sheets (even for hardcoded responses)
            gemini_log_to_google_sheets($user_message, $hardcoded_reply);

            return new WP_REST_Response(['reply' => $hardcoded_reply], 200);
        }
    }

    // API Configuration
    $api_key = defined('GEMINI_API_KEY') ? GEMINI_API_KEY : '';
    $model   = 'gemini-2.5-flash';
    $url   = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$api_key}";

    // Build system instruction from both knowledge sources
    $static_kb  = gemini_get_static_knowledge();
    $dynamic_kb = gemini_get_dynamic_knowledge();

    $system_text = "You are the official AI assistant for Inventive Media (https://www.inventivemedia.com.ph/), a premier IT training center in Makati City, Philippines, operating since 2006.

ROLE & BEHAVIOR:
- Answer questions about courses, schedules, pricing, promos, services, location, and contact information.
- Always mention that all courses include 'Unlimited Free Class Retakes for 1 year'.
- If a user asks what courses are offered generally, ONLY list the broad course CATEGORIES initially to avoid long lists.
- If a user asks about courses within a specific category, then list the specific courses available in that category.
- When listing courses in a category, put the 'View Details' link on the SAME LINE as the course name (e.g., '• Course Name — [View Details](url)'). NEVER put the link as a separate bullet point.
- Be friendly, professional, and helpful. Use a warm, approachable tone.
- When discussing specific courses, include the course page URL so the user can learn more.
- If you don't know an exact answer (e.g., a specific future schedule date or unlisted price), direct users to the Schedule page (https://www.inventivemedia.com.ph/computer-it-courses-training-schedules/), Promos page (https://www.inventivemedia.com.ph/training-promo/), or suggest contacting Inventive Media directly.
- CRITICAL: Be extremely concise! Keep responses to 1-3 short sentences. Avoid long paragraphs entirely so users actually read the message.
- Use bullet points and bold text for clarity when listing items.
- If the user greets you, greet them back warmly and ask how you can help.
- Do NOT make up information not in your knowledge base.
- You may recommend courses based on user interests or career goals.
- For enrollment inquiries, direct them to call +63 936 9700874 / +63 933 1348856 or email inventivemedia.ph@gmail.com.
- When asked about location or where you are located, always include the Google Maps link as an anchor: [📍 View on Google Maps](https://maps.app.goo.gl/YDoiLV73Maimib1a9)

=== STATIC KNOWLEDGE BASE ===
{$static_kb}

=== DYNAMIC WEBSITE CONTENT ===
{$dynamic_kb}";

    // Build multi-turn conversation for Gemini
    $contents = [];
    if (is_array($history)) {
        // Limit to last 6 turns (3 exchanges) to reduce token usage
        $history = array_slice($history, -6);

        foreach ($history as $turn) {
            if (isset($turn['role'], $turn['text'])) {
                $role       = ($turn['role'] === 'user') ? 'user' : 'model';
                $contents[] = [
                    'role'  => $role,
                    'parts' => [['text' => sanitize_text_field($turn['text'])]],
                ];
            }
        }
    }
    $contents[] = [
        'role'  => 'user',
        'parts' => [['text' => $user_message]],
    ];

    $body = json_encode([
        'system_instruction' => [
            'parts' => [['text' => $system_text]],
        ],
        'contents'           => $contents,
        'generationConfig'   => [
            'temperature'     => 0.7,
            'topP'            => 0.9,
            'maxOutputTokens' => 1024,
        ],
    ]);

    $response = wp_remote_post($url, [
        'headers' => ['Content-Type' => 'application/json'],
        'body'    => $body,
        'timeout' => 30,
    ]);

    if (is_wp_error($response)) {
        return new WP_REST_Response(['reply' => 'Sorry, I encountered a connection error. Please try again.'], 500);
    }

    $raw_body  = wp_remote_retrieve_body($response);
    $http_code = wp_remote_retrieve_response_code($response);
    $data      = json_decode($raw_body, true);

    // Rate limit: return a friendly retry message
    if ($http_code === 429) {
        return new WP_REST_Response(['reply' => '⏳ The assistant is a bit busy right now. Please wait a few seconds and try again.'], 200);
    }

    // Surface the real Gemini API error if present
    if (isset($data['error'])) {
        $err_msg  = $data['error']['message'] ?? 'Unknown API error.';
        $err_code = $data['error']['code'] ?? $http_code;
        return new WP_REST_Response(['reply' => "⚠️ API Error ({$err_code}): {$err_msg}"], 200);
    }

    // Check if response contains no valid candidates (API returned fallback message)
    if (! isset($data['candidates']) || empty($data['candidates'])) {
        return new WP_REST_Response(['reply' => '⏳ The assistant is currently busy. Please wait a few seconds and try again.'], 200);
    }

    $bot_reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Sorry, I could not process your request. Please try again or contact us directly.';

    // Filter out generic fallback messages from Gemini
    if (strpos($bot_reply, "I'm helping a lot of students") !== false ||
        strpos($bot_reply, "admissions team") !== false) {
        return new WP_REST_Response(['reply' => '⏳ The assistant is currently busy. Please wait a few seconds and try again.'], 200);
    }

    // Log to Google Sheets
    gemini_log_to_google_sheets($user_message, $bot_reply);

    return new WP_REST_Response(['reply' => $bot_reply], 200);
    }

    /**
 * Logs chatbot conversations to Google Sheets via webhook.
 *
 * @param string $user_message The user's question/message.
 * @param string $bot_reply    The bot's response.
 * @return void
 */
    function gemini_log_to_google_sheets($user_message, $bot_reply)
    {
    // Only log if webhook URL is defined
    if (! defined('GOOGLE_SHEETS_WEBHOOK_URL') || ! GOOGLE_SHEETS_WEBHOOK_URL) {
        return;
    }

    // Get user IP address
    $user_ip = '';
    if (! empty($_SERVER['HTTP_CLIENT_IP'])) {
        $user_ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $user_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    }

    // Prepare data for Google Sheets
    $payload = json_encode([
        'message' => $user_message,
        'reply'   => $bot_reply,
        'ip'      => $user_ip,
    ]);

    // Send to Google Apps Script webhook (non-blocking)
    wp_remote_post(GOOGLE_SHEETS_WEBHOOK_URL, [
        'headers'  => ['Content-Type' => 'application/json'],
        'body'     => $payload,
        'timeout'  => 5,
        'blocking' => false, // Don't wait for response to avoid slowing down chat
    ]);
    }

    // 3. Clear dynamic knowledge cache when content is updated
    add_action('save_post', function () {
    delete_transient('gemini_chatbot_wp_context');
    });

    // 4. The Shortcode: [gemini_chat]
    add_shortcode('gemini_chat', function () {
    ob_start(); ?>

    <div class="gc-chatbot-window" id="chatWindow" role="dialog" aria-hidden="true">
      <div class="gc-chat-header">
        <div class="gc-chat-header-avatar">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8V4H8" /><rect x="4" y="8" width="16" height="12" rx="2" /><circle cx="9" cy="13" r="1" /><circle cx="15" cy="13" r="1" /></svg>
          <span class="gc-status-dot"></span>
        </div>
        <div class="gc-chat-header-info">
          <h2>Inventive Media</h2>
          <span>Online</span>
        </div>
        <button class="gc-chat-close" id="chatClose" aria-label="Close chat">×</button>
      </div>

      <div class="gc-chat-messages" id="chatMessages">
        <div class="gc-msg bot">Hi! 👋 I'm the Inventive Media AI assistant. How can I help you today?</div>
        <div class="gc-msg-system" id="chatSystemMsg">Note: For the most accurate information on course fees and schedules, just ask! I'll gladly point you to the right page on our website.</div>
      </div>

      <div class="gc-chat-input-wrapper">
        <div class="gc-quick-replies" id="chatQuickReplies">
          <button class="gc-quick-reply" data-text="What courses do you offer?">📚 Courses</button>
          <button class="gc-quick-reply" data-text="What are your current promos?">🏷️ Promos</button>
          <button class="gc-quick-reply" data-text="What is the training schedule?">📅 Schedule</button>
          <button class="gc-quick-reply" data-text="Where are you located?">📍 Location</button>
        </div>
        <div class="gc-chat-input-area">
          <input type="text" class="gc-chat-input" id="chatInput" placeholder="Type a message…" autocomplete="off" />
          <button class="gc-chat-send" id="chatSend" aria-label="Send message"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>
        </div>
      </div>
    </div>

    <button class="gc-chatbot-toggle" id="chatToggle" aria-label="Open chat">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" /></svg>
    </button>
    <?php
    return ob_get_clean();
    });