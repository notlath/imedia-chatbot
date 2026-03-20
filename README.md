# Inventive Media Gemini Chatbot

AI-powered chatbot for WordPress using Google's Gemini API with customizable knowledge base.

## Features

- **Google Gemini AI Integration** - Powered by Google's latest Gemini models
- **Customizable Knowledge Base** - Edit the chatbot's knowledge directly from WordPress admin
- **Conversation Logging** - Log conversations to Google Sheets for analysis
- **Multiple AI Models** - Choose from various Gemini models (Flash, Pro, etc.)
- **WordPress Admin Settings** - Easy configuration without touching code
- **Dynamic Content Integration** - Automatically pulls content from WordPress posts/pages
- **Face-to-Face Chat UI** - Modern, responsive chat interface

## Installation

1. Upload the `gemini-chatbot` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **Settings → Gemini Chatbot** to configure

## Configuration

### First-Time Setup

1. Navigate to **WordPress Admin → Settings → Gemini Chatbot**
2. Enter your **Google Gemini API Key** (get one from [Google AI Studio](https://aistudio.google.com/apikey))
3. Configure other settings as needed
4. Click **Save Settings**

### Settings Overview

#### API Configuration
- **API Key**: Your Google Gemini API key
- **Model**: Select which Gemini model to use
  - **Gemini 2.5 Series**: `gemini-2.5-pro`, `gemini-2.5-flash`, `gemini-2.5-flash-lite`
  - **Gemini 2.0 Series**: `gemini-2.0-flash` (Recommended), `gemini-2.0-flash-lite`
  - **Gemini 1.5 Series**: `gemini-1.5-pro`, `gemini-1.5-flash`, `gemini-1.5-flash-8b`
  - **Preview Models**: `gemini-3.1-pro-preview`, `gemini-3.1-flash-lite-preview`, `gemini-3-pro-preview`, `gemini-3-flash-preview`
- **Temperature**: Controls response randomness (0-2)
  - 0 = More focused and deterministic
  - 2 = More creative and random
  - Default: 0.7
- **Max Output Tokens**: Maximum response length (128-8192)
  - Default: 1024

#### Knowledge Base
- **Static Knowledge Base**: Core information the chatbot uses
  - Pre-filled with default Inventive Media knowledge
  - Fully editable via textarea
  - Can be reset to defaults
  - Leave empty to use code defaults

#### Conversation Logging
- **Google Sheets Webhook URL**: URL to log conversations to Google Sheets
- **Enable Logging**: Toggle conversation logging on/off

#### General Settings
- **Enable Chatbot**: Globally enable/disable the chatbot
  - Uncheck to temporarily disable without deactivating plugin

### Utilities
- **Clear Dynamic Knowledge Cache**: Clear cached WordPress content
  - Use after updating posts/pages that should be in the knowledge base

## Usage

### Display Chatbot

Add the chatbot to any page or post using the shortcode:

```
[gemini_chat]
```

### Migration from Constants

If you previously used constants (`GEMINI_API_KEY`, `GOOGLE_SHEETS_WEBHOOK_URL`), they will be automatically migrated to the database settings on first admin page load.

You can safely remove these constants from `wp-config.php` after migration.

## Google Sheets Logging Setup

To log conversations to Google Sheets:

1. Create a new Google Sheet
2. Create a Google Apps Script (Extensions → Apps Script)
3. Use this script:

```javascript
function doPost(e) {
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  var data = JSON.parse(e.postData.contents);
  
  sheet.appendRow([
    new Date(),
    data.message,
    data.reply,
    data.ip
  ]);
  
  return ContentService.createTextOutput(JSON.stringify({success: true}));
}
```

4. Deploy as Web App (Execute as: Me, Access: Anyone)
5. Copy the deployment URL to **Gemini Chatbot Settings → Google Sheets Webhook URL**

## Customization

### Editing Knowledge Base

1. Go to **Settings → Gemini Chatbot**
2. Scroll to **Knowledge Base** section
3. Edit the textarea with your custom knowledge
4. Click **Save Settings**

The knowledge base supports:
- Company information
- Course details
- FAQs
- Contact information
- Any custom content you want the AI to reference

### Changing AI Behavior

Adjust these settings to change how the AI responds:

- **Temperature**: Lower = more focused, Higher = more creative
- **Max Tokens**: Controls response length
- **Model**: Different models have different capabilities and costs

## Troubleshooting

### "Sorry, I couldn't get a response"

This error appears when:
1. **Invalid API Key** - Check your API key in settings
2. **No API Key Set** - Configure API key in settings
3. **API Quota Exceeded** - Check your Google AI Studio quota
4. **Network Error** - Check server connectivity

**Solution**: Go to Settings → Gemini Chatbot and verify your API key

### Chatbot Not Appearing

1. Check if chatbot is enabled in **Settings → Gemini Chatbot → Enable Chatbot**
2. Verify shortcode `[gemini_chat]` is on the page
3. Check browser console for JavaScript errors

### Conversations Not Logging

1. Verify **Enable Logging** is checked
2. Check **Google Sheets Webhook URL** is set correctly
3. Test webhook URL directly
4. Verify Google Apps Script deployment permissions

## Version History

### Version 2.1
- Added WordPress Admin settings page
- Database-driven configuration
- Editable knowledge base via admin
- Auto-migration from constants
- Enable/disable toggle
- Admin notices for setup
- Support for latest Gemini 2.5 and 3.x preview models

### Version 2.0
- Initial release with Gemini API integration
- Static and dynamic knowledge base
- Google Sheets logging
- Hardcoded configuration

## Credits

**Developer**: Lathrell Pagsuguiron (Web Developer Intern)  
**Company**: Inventive Media  
**Year**: 2026  
**LinkedIn**: [linkedin.com/in/lathrell](https://linkedin.com/in/lathrell)

## Support

For issues or questions:
- Email: inventivemedia.ph@gmail.com
- Phone: +63 936 9700874 / +63 933 1348856
- Website: https://www.inventivemedia.com.ph/
