<?php
/**
 * Gemini Chatbot Admin Settings Page
 * 
 * Provides a WordPress admin interface to configure:
 * - API settings (API key, model, temperature, max tokens)
 * - Knowledge base (static content)
 * - Logging settings (Google Sheets webhook)
 * - General settings (enable/disable chatbot)
 */

if (!defined('ABSPATH')) {
    exit;
}

// Show admin notice if API key is not configured
add_action('admin_notices', 'gemini_chatbot_admin_notices');
function gemini_chatbot_admin_notices()
{
    $api_key = get_option('gemini_chatbot_api_key', '');
    
    // Only show on admin pages, not on the settings page itself
    $screen = get_current_screen();
    if ($screen && $screen->id === 'settings_page_gemini-chatbot-settings') {
        return;
    }
    
    if (empty($api_key)) {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p>
                <strong>Gemini Chatbot:</strong> API key not configured. 
                <a href="<?php echo admin_url('options-general.php?page=gemini-chatbot-settings'); ?>">Configure Settings</a>
            </p>
        </div>
        <?php
    }
}

// Add admin menu item
add_action('admin_menu', 'gemini_chatbot_add_admin_menu');
function gemini_chatbot_add_admin_menu()
{
    add_options_page(
        'Gemini Chatbot Settings',
        'Gemini Chatbot',
        'manage_options',
        'gemini-chatbot-settings',
        'gemini_chatbot_settings_page'
    );
}

// Register settings
add_action('admin_init', 'gemini_chatbot_register_settings');
function gemini_chatbot_register_settings()
{
    // API Settings Section
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_api_key');
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_model');
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_temperature');
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_max_tokens');
    
    // Knowledge Base Section
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_static_kb');
    
    // Logging Section
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_webhook_url');
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_enable_logging');
    
    // General Settings
    register_setting('gemini_chatbot_settings_group', 'gemini_chatbot_enabled');
    
    add_settings_section(
        'gemini_chatbot_api_section',
        'API Configuration',
        'gemini_chatbot_api_section_callback',
        'gemini-chatbot-settings'
    );
    
    add_settings_section(
        'gemini_chatbot_kb_section',
        'Knowledge Base',
        'gemini_chatbot_kb_section_callback',
        'gemini-chatbot-settings'
    );
    
    add_settings_section(
        'gemini_chatbot_logging_section',
        'Conversation Logging',
        'gemini_chatbot_logging_section_callback',
        'gemini-chatbot-settings'
    );
    
    add_settings_section(
        'gemini_chatbot_general_section',
        'General Settings',
        'gemini_chatbot_general_section_callback',
        'gemini-chatbot-settings'
    );
    
    // API Settings Fields
    add_settings_field(
        'gemini_chatbot_api_key',
        'API Key',
        'gemini_chatbot_api_key_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_api_section'
    );
    
    add_settings_field(
        'gemini_chatbot_model',
        'Model',
        'gemini_chatbot_model_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_api_section'
    );
    
    add_settings_field(
        'gemini_chatbot_temperature',
        'Temperature',
        'gemini_chatbot_temperature_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_api_section'
    );
    
    add_settings_field(
        'gemini_chatbot_max_tokens',
        'Max Output Tokens',
        'gemini_chatbot_max_tokens_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_api_section'
    );
    
    // Knowledge Base Fields
    add_settings_field(
        'gemini_chatbot_static_kb',
        'Static Knowledge Base',
        'gemini_chatbot_static_kb_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_kb_section'
    );
    
    // Logging Fields
    add_settings_field(
        'gemini_chatbot_webhook_url',
        'Google Sheets Webhook URL',
        'gemini_chatbot_webhook_url_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_logging_section'
    );
    
    add_settings_field(
        'gemini_chatbot_enable_logging',
        'Enable Logging',
        'gemini_chatbot_enable_logging_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_logging_section'
    );
    
    // General Settings Fields
    add_settings_field(
        'gemini_chatbot_enabled',
        'Enable Chatbot',
        'gemini_chatbot_enabled_callback',
        'gemini-chatbot-settings',
        'gemini_chatbot_general_section'
    );
}

// Section callbacks
function gemini_chatbot_api_section_callback()
{
    echo '<p>Configure your Google Gemini API settings. Get your API key from <a href="https://aistudio.google.com/apikey" target="_blank">Google AI Studio</a>.</p>';
}

function gemini_chatbot_kb_section_callback()
{
    echo '<p>Customize the static knowledge base that the chatbot uses. This is the core information the chatbot will reference.</p>';
}

function gemini_chatbot_logging_section_callback()
{
    echo '<p>Configure conversation logging to Google Sheets. Leave webhook URL empty to disable logging.</p>';
}

function gemini_chatbot_general_section_callback()
{
    echo '<p>General chatbot settings and controls.</p>';
}

// Field callbacks
function gemini_chatbot_api_key_callback()
{
    $api_key = get_option('gemini_chatbot_api_key', '');
    $masked = $api_key ? str_repeat('*', strlen($api_key) - 8) . substr($api_key, -8) : '';
    ?>
    <input type="password" name="gemini_chatbot_api_key" value="<?php echo esc_attr($api_key); ?>" 
           class="regular-text" placeholder="Enter your Gemini API key" />
    <?php if ($api_key): ?>
        <p class="description">Current key: <?php echo esc_html($masked); ?></p>
    <?php endif; ?>
    <p class="description">Your Google Gemini API key. <a href="https://aistudio.google.com/apikey" target="_blank">Get API Key</a></p>
    <?php
}

function gemini_chatbot_model_callback()
{
    $model = get_option('gemini_chatbot_model', 'gemini-2.0-flash');
    $models = [
        // Gemini 2.5 Series
        'gemini-2.5-pro' => 'Gemini 2.5 Pro',
        'gemini-2.5-flash' => 'Gemini 2.5 Flash',
        'gemini-2.5-flash-lite' => 'Gemini 2.5 Flash Lite',
        
        // Gemini 2.0 Series
        'gemini-2.0-flash' => 'Gemini 2.0 Flash (Recommended)',
        'gemini-2.0-flash-lite' => 'Gemini 2.0 Flash Lite',
        
        // Gemini 1.5 Series
        'gemini-1.5-pro' => 'Gemini 1.5 Pro',
        'gemini-1.5-flash' => 'Gemini 1.5 Flash',
        'gemini-1.5-flash-8b' => 'Gemini 1.5 Flash-8B',
        
        // Experimental & Preview Models (from docs)
        'gemini-3.1-pro-preview' => 'Gemini 3.1 Pro Preview',
        'gemini-3.1-flash-lite-preview' => 'Gemini 3.1 Flash Lite Preview',
        'gemini-3-pro-preview' => 'Gemini 3 Pro Preview',
        'gemini-3-flash-preview' => 'Gemini 3 Flash Preview',
    ];
    ?>
    <select name="gemini_chatbot_model" class="regular-text">
        <?php foreach ($models as $value => $label): ?>
            <option value="<?php echo esc_attr($value); ?>" <?php selected($model, $value); ?>>
                <?php echo esc_html($label); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <p class="description">Select the Gemini model to use. Flash models are faster and cheaper.</p>
    <?php
}

function gemini_chatbot_temperature_callback()
{
    $temperature = get_option('gemini_chatbot_temperature', '0.7');
    ?>
    <input type="number" name="gemini_chatbot_temperature" value="<?php echo esc_attr($temperature); ?>" 
           min="0" max="2" step="0.1" class="small-text" />
    <p class="description">Controls randomness (0 = focused, 2 = creative). Recommended: 0.7</p>
    <?php
}

function gemini_chatbot_max_tokens_callback()
{
    $max_tokens = get_option('gemini_chatbot_max_tokens', '1024');
    ?>
    <input type="number" name="gemini_chatbot_max_tokens" value="<?php echo esc_attr($max_tokens); ?>" 
           min="128" max="8192" step="128" class="small-text" />
    <p class="description">Maximum length of generated responses. Recommended: 1024</p>
    <?php
}

function gemini_chatbot_static_kb_callback()
{
    $static_kb = get_option('gemini_chatbot_static_kb', '');
    
    // Load default from knowledge-base.php if empty
    if (empty($static_kb) && function_exists('gemini_get_static_knowledge')) {
        $static_kb = gemini_get_static_knowledge();
    }
    ?>
    <textarea name="gemini_chatbot_static_kb" rows="20" class="large-text code" 
              placeholder="Enter your static knowledge base content..."><?php echo esc_textarea($static_kb); ?></textarea>
    <p class="description">The core knowledge base for the chatbot. Leave empty to use default from code.</p>
    <button type="button" class="button" onclick="if(confirm('Reset to default knowledge base?')) { 
        document.querySelector('[name=gemini_chatbot_static_kb]').value = ''; 
        alert('Knowledge base will reset to defaults on save.'); 
    }">Reset to Default</button>
    <?php
}

function gemini_chatbot_webhook_url_callback()
{
    $webhook_url = get_option('gemini_chatbot_webhook_url', '');
    ?>
    <input type="url" name="gemini_chatbot_webhook_url" value="<?php echo esc_attr($webhook_url); ?>" 
           class="large-text" placeholder="https://script.google.com/macros/s/.../exec" />
    <p class="description">Google Apps Script webhook URL for logging conversations to Google Sheets. Leave empty to disable.</p>
    <?php
}

function gemini_chatbot_enable_logging_callback()
{
    $enabled = get_option('gemini_chatbot_enable_logging', '1');
    ?>
    <label>
        <input type="checkbox" name="gemini_chatbot_enable_logging" value="1" <?php checked($enabled, '1'); ?> />
        Enable conversation logging to Google Sheets
    </label>
    <?php
}

function gemini_chatbot_enabled_callback()
{
    $enabled = get_option('gemini_chatbot_enabled', '1');
    ?>
    <label>
        <input type="checkbox" name="gemini_chatbot_enabled" value="1" <?php checked($enabled, '1'); ?> />
        Enable chatbot on the website
    </label>
    <p class="description">Uncheck to temporarily disable the chatbot without deactivating the plugin.</p>
    <?php
}

// Settings page HTML
function gemini_chatbot_settings_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    
    // Handle cache clear
    if (isset($_POST['clear_cache']) && check_admin_referer('gemini_clear_cache')) {
        delete_transient('gemini_chatbot_wp_context');
        echo '<div class="notice notice-success"><p>Cache cleared successfully!</p></div>';
    }
    
    ?>
    <div class="wrap">
        <h1>Gemini Chatbot Settings</h1>
        
        <?php settings_errors(); ?>
        
        <form method="post" action="options.php">
            <?php
            settings_fields('gemini_chatbot_settings_group');
            do_settings_sections('gemini-chatbot-settings');
            submit_button('Save Settings');
            ?>
        </form>
        
        <hr>
        
        <h2>Utilities</h2>
        <form method="post">
            <?php wp_nonce_field('gemini_clear_cache'); ?>
            <p>
                <button type="submit" name="clear_cache" class="button button-secondary">
                    Clear Dynamic Knowledge Cache
                </button>
                <span class="description">Clear the cached WordPress content that supplements the knowledge base.</span>
            </p>
        </form>
        
        <hr>
        
        <h2>Shortcode</h2>
        <p>Use this shortcode to display the chatbot on any page or post:</p>
        <code>[gemini_chat]</code>
        
        <h2>Quick Links</h2>
        <ul>
            <li><a href="https://aistudio.google.com/apikey" target="_blank">Get Google Gemini API Key</a></li>
            <li><a href="https://ai.google.dev/gemini-api/docs" target="_blank">Gemini API Documentation</a></li>
            <li><a href="https://developers.google.com/apps-script" target="_blank">Google Apps Script (for logging)</a></li>
        </ul>
    </div>
    
    <style>
        .form-table th {
            width: 200px;
        }
        .code {
            font-family: monospace;
        }
    </style>
    <?php
}
