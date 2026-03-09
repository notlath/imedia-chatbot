# Inventive Media Gemini Chatbot

**A WordPress chatbot plugin powered by the Google Gemini API, designed to help visitors easily discover and inquire about Inventive Media's IT training courses.**

This document provides a comprehensive guide on what the plugin does, how the Gemini API enhances the visitor experience, and how to integrate it into your WordPress website.

## 📖 How It Works (Explanation)

The Inventive Media Gemini Chatbot leverages the **Gemini 2.5 Flash** model to provide intelligent, context-aware responses to website visitors exploring IT training courses. 

**How the Gemini API helps the chatbot:**
* **Intelligent Routing:** It understands natural language queries about courses, schedules, pricing, and promos.
* **Contextual Knowledge:** It combines a hardcoded **Static Knowledge Base** with a **Dynamic Knowledge Base** (pulling directly from your WordPress posts and pages) to ensure answers are accurate, up-to-date, and strictly related to Inventive Media.
* **Cost Optimization:** Specific common queries (like asking for "online courses") bypass the API with hardcoded responses to save Gemini API credits limit.

**For Website Visitors:**
Visitors simply click the chat icon in the bottom corner of the website. They can type questions or use quick-reply buttons (Courses, Promos, Schedule, Location). The assistant responds with concise, friendly answers and direct links to relevant course pages or Google Maps locations, streamlining their search for the right IT training.

---

## 🛠️ How to Integrate with WordPress (How-to Guide)

Follow these steps to install and display the chatbot on your site.

### 1. Installation
1. Upload the `gemini-chatbot` folder to your `/wp-content/plugins/` directory.
2. Go to the **Plugins** menu in your WordPress admin dashboard.
3. Activate the **Inventive Media Gemini Chatbot** plugin.

### 2. Displaying the Chatbot
To display the chatbot interface to your visitors, simply use the following shortcode where you want the chat window to be loaded:

```text
[gemini_chat]
```

*Tip: You can add this shortcode to a global footer widget or footer template file to make the chatbot available across your entire website seamlessly.*

---

## ⚙️ Configuration (How-to Guide)

To make the plugin work, you must define your API keys and webhook URLs in your WordPress configuration (`wp-config.php`).

### Setting the Gemini API Key
To connect the chatbot to Google's AI, define your Gemini API key. Edit your WordPress root directory's `wp-config.php` file and add the following line just before `/* That's all, stop editing! Happy publishing. */`:

```php
define('GEMINI_API_KEY', 'your_actual_gemini_api_key_here');
```

### Setting up the Google Sheets Webhook
The plugin includes a feature to log all user messages and chatbot replies to a Google Sheet. This is highly useful for quality monitoring and lead tracking. 

To enable this, create a Google Apps Script Webhook that accepts POST requests, and define the URL in `wp-config.php`:

```php
define('GOOGLE_SHEETS_WEBHOOK_URL', 'your_google_script_webhook_url_here');
```

*Note: The logging process is non-blocking, meaning it runs in the background and won't slow down the chat experience for your visitors.*

---

## 📚 Technical Reference

* **`gemini-chatbot.php`**: The main plugin file handling initialization, REST API endpoints (`/gemini-chat/v1/send`), shortcode registration, and the Google Sheets webhook POST requests.
* **`knowledge-base.php`**: Contains the logic for gathering the static and dynamic text used to guide the Gemini model.
* **`script.js` & `style.css`**: Handles the frontend user interface, asynchronous API calls, and animations.
* **Transient Cache**: Dynamic knowledge is cached using WordPress transients (`gemini_chatbot_wp_context`). Updating any post or page automatically clears this cache to ensure Gemini reads the latest content.
