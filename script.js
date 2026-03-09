(function () {
  console.log("Inventive Media AI assistant initialized");

  // Conversation history for multi-turn context
  let conversationHistory = [];

  // Flag to indicate if we're dragging quick replies (prevent click activation)
  let isDraggingQuickReplies = false;

  // Using Event Delegation: Attach one listener to the body
  document.body.addEventListener("click", function (e) {
    // 1. Toggle Button or Icon inside Button clicked
    if (e.target.closest("#chatToggle") || e.target.closest("#chatClose")) {
      const chatWindow = document.getElementById("chatWindow");
      const chatToggle = document.getElementById("chatToggle");
      const chatInput = document.getElementById("chatInput");

      if (chatWindow && chatToggle) {
        const isOpening = !chatWindow.classList.contains("open");

        chatWindow.classList.toggle("open");
        chatToggle.classList.toggle("active");

        // Update accessibility
        chatWindow.setAttribute("aria-hidden", !isOpening);

        if (isOpening && chatInput) {
          setTimeout(() => chatInput.focus(), 300);
        }
      }
    }

    // 2. Send Button clicked
    if (e.target.closest("#chatSend")) {
      handleSendMessage();
    }

    // 3. Quick Replies clicked
    if (e.target.classList.contains("gc-quick-reply")) {
      // Prevent click if we were dragging to scroll
      if (isDraggingQuickReplies) {
        e.preventDefault();
        e.stopPropagation();
        return;
      }
      const text = e.target.getAttribute("data-text");
      const chatInput = document.getElementById("chatInput");
      if (chatInput) {
        chatInput.value = text;
        handleSendMessage();
      }
    }
  });

  // Handle Enter Key (still needs a direct listener on the input)
  document.addEventListener("keypress", function (e) {
    if (e.key === "Enter" && document.activeElement.id === "chatInput") {
      handleSendMessage();
    }
  });

  let isSending = false; // Rate-limit guard
  const hardcodedResponses = {
    "What courses do you offer?": `We offer a wide range of IT training courses across various categories! Here are our main course categories:

- **Graphics & 3D**
- **Web Development (Front-End)**
- **Web Development (Back-End)**
- **Web Development (CMS)**
- **Video & Film**
- **Digital Marketing**
- **Network & Security**
- **Software Programming**
- **IT Certification**

All our courses include **Unlimited Free Class Retakes for 1 year**! Let me know if you'd like to explore courses within a specific category.`,
    "What are your current promos?": `We have various promos and discounts available for both single courses and course bundles! All our courses also include Unlimited Free Class Retakes for 1 year.

You can view all our current offers on our Promos page:
🎁 [View Promos](https://www.inventivemedia.com.ph/training-promo/)`,
    "What is the training schedule?": `You can find our complete training schedule, including dates and times for all courses, on our dedicated Schedule page:

📅 [View Schedule](https://www.inventivemedia.com.ph/computer-it-courses-training-schedules/)

Remember, all courses include Unlimited Free Class Retakes for 1 year!`,
    "Where are you located?": `We are located at Karmela Building 2590, 3rd Floor, Manchas Street corner Venecia Street, Makati City 1205, Philippines.

You can easily find us here:
📍 [View on Google Maps](https://maps.app.goo.gl/cKHeUGygaVkKHRCMA)`,
  };

  async function handleSendMessage() {
    if (isSending) return; // Block while waiting for response
    const input = document.getElementById("chatInput");
    if (!input || !input.value.trim()) return;

    const sendBtn = document.getElementById("chatSend");
    const message = input.value.trim();

    // 1. Instant Hardcoded Response Check
    if (hardcodedResponses[message]) {
      appendMessage(message, "user");
      input.value = "";

      // Hide quick replies and system message
      const qr = document.getElementById("chatQuickReplies");
      if (qr) qr.style.display = "none";
      const sysMsg = document.getElementById("chatSystemMsg");
      if (sysMsg) sysMsg.style.display = "none";

      const reply = hardcodedResponses[message];
      appendMessage(reply, "bot");

      // Track history even for hardcoded
      conversationHistory.push({role: "user", text: message});
      conversationHistory.push({role: "bot", text: reply});
      if (conversationHistory.length > 12) {
        conversationHistory = conversationHistory.slice(-12);
      }
      return;
    }

    isSending = true;
    input.disabled = true;
    if (sendBtn) sendBtn.disabled = true;

    appendMessage(message, "user");
    input.value = "";

    // Hide quick replies and system message after first interaction
    const qr = document.getElementById("chatQuickReplies");
    if (qr) qr.style.display = "none";

    const sysMsg = document.getElementById("chatSystemMsg");
    if (sysMsg) sysMsg.style.display = "none";

    showTyping();

    try {
      const response = await fetch(chatConfig.apiUrl, {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({
          message: message,
          history: conversationHistory,
        }),
      });
      const data = await response.json();
      hideTyping();

      const reply =
        data.reply || "Sorry, I couldn't get a response. Please try again.";
      appendMessage(reply, "bot");

      // Track conversation history for multi-turn context
      conversationHistory.push({role: "user", text: message});
      conversationHistory.push({role: "bot", text: reply});

      // Keep last 12 turns to stay within token limits
      if (conversationHistory.length > 12) {
        conversationHistory = conversationHistory.slice(-12);
      }
    } catch (error) {
      hideTyping();
      appendMessage("Connection error. Please try again.", "bot");
    } finally {
      // Re-enable input after 3-second cooldown
      setTimeout(function () {
        isSending = false;
        input.disabled = false;
        if (sendBtn) sendBtn.disabled = false;
        input.focus();
      }, 3000);
    }
  }

  function appendMessage(text, sender) {
    const messages = document.getElementById("chatMessages");
    const div = document.createElement("div");
    div.className = `gc-msg ${sender}`;
    const time = new Date().toLocaleTimeString([], {
      hour: "2-digit",
      minute: "2-digit",
    });
    const content = sender === "bot" ? renderMarkdown(text) : escapeHtml(text);
    div.innerHTML = `<div class="gc-msg-content">${content}</div><span class="gc-msg-time">${time}</span>`;
    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
  }

  function escapeHtml(text) {
    const el = document.createElement("div");
    el.textContent = text;
    return el.innerHTML;
  }

  function renderMarkdown(text) {
    let html = escapeHtml(text);

    // Bold: **text**
    html = html.replace(/\*\*(.+?)\*\*/g, "<strong>$1</strong>");
    // Italic: *text* (single line only, avoids matching bullet-point * markers)
    html = html.replace(/\*([^*\n]+)\*/g, "<em>$1</em>");
    // Inline code: `code`
    html = html.replace(/`([^`]+)`/g, "<code>$1</code>");
    // Links: [text](url)
    html = html.replace(
      /\[([^\]]+)\]\(([^)]+)\)/g,
      '<a href="$2" target="_blank" rel="noopener">$1</a>',
    );

    // Process list items line by line
    const lines = html.split("\n");
    let out = [],
      inList = false,
      listTag = "";

    for (const line of lines) {
      const trimmed = line.trim();

      // Headings: ### text
      const heading = trimmed.match(/^(#{1,6})\s+(.+)/);
      // Horizontal rule: --- or ***
      const hr = /^[-*_]{3,}$/.test(trimmed);
      const ul = trimmed.match(/^[-*\u2022]\s+(.+)/);
      const ol = trimmed.match(/^\d+[.)]\s+(.+)/);

      if (heading) {
        if (inList) {
          out.push("</" + listTag + ">");
          inList = false;
        }
        const level = heading[1].length;
        out.push("<h" + level + ">" + heading[2] + "</h" + level + ">");
      } else if (hr) {
        if (inList) {
          out.push("</" + listTag + ">");
          inList = false;
        }
        out.push("<hr>");
      } else if (ul) {
        if (!inList || listTag !== "ul") {
          if (inList) out.push("</" + listTag + ">");
          out.push("<ul>");
          inList = true;
          listTag = "ul";
        }
        out.push("<li>" + ul[1] + "</li>");
      } else if (ol) {
        if (!inList || listTag !== "ol") {
          if (inList) out.push("</" + listTag + ">");
          out.push("<ol>");
          inList = true;
          listTag = "ol";
        }
        out.push("<li>" + ol[1] + "</li>");
      } else {
        if (inList) {
          out.push("</" + listTag + ">");
          inList = false;
        }
        out.push(trimmed === "" ? "<br>" : trimmed + "<br>");
      }
    }
    if (inList) out.push("</" + listTag + ">");

    html = out.join("");
    html = html.replace(/(<br>){3,}/g, "<br><br>");
    html = html.replace(/<br>$/g, "");
    return html;
  }

  // ── Hash-based Tab Activator ──────────────────────────────────────────────
  // When the user clicks a chatbot link like /course-url/#fees, the page loads
  // and this script automatically finds the matching tab and clicks it.
  function activateTabFromHash() {
    const hash = window.location.hash.replace("#", "").toLowerCase();
    const validTabs = ["details", "fees", "schedule", "register"];
    if (!hash || !validTabs.includes(hash)) return;

    // Wait for Elementor / page JS to finish rendering tabs
    setTimeout(function () {
      // Candidate selectors used by Elementor tab widgets (old + new versions)
      const candidates = document.querySelectorAll(
        [
          ".e-n-tab-title", // Elementor Nested Tabs (v3.16+)
          ".elementor-tab-title", // Elementor classic Tabs widget
          "[role='tab']", // Generic ARIA tabs
          ".nav-tab", // Generic nav tabs
          ".tab-title", // Generic tab title
        ].join(", "),
      );

      for (const tab of candidates) {
        if (tab.textContent.trim().toLowerCase() === hash) {
          tab.click();
          // Scroll the tab into view smoothly
          setTimeout(function () {
            tab.scrollIntoView({behavior: "smooth", block: "start"});
          }, 150);
          return;
        }
      }

      // Fallback: look for any clickable element whose href matches the hash
      const fallback = document.querySelector(`[href="#${hash}"]`);
      if (fallback) {
        fallback.click();
        fallback.scrollIntoView({behavior: "smooth", block: "start"});
      }
    }, 800); // 800 ms gives Elementor time to boot
  }

  // Run on initial page load and on hash navigation
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", activateTabFromHash);
  } else {
    activateTabFromHash();
  }
  window.addEventListener("hashchange", activateTabFromHash);
  // ─────────────────────────────────────────────────────────────────────────

  function showTyping() {
    const messages = document.getElementById("chatMessages");
    const el = document.createElement("div");
    el.className = "gc-typing-indicator";
    el.id = "typingIndicator";
    el.innerHTML = "<span></span><span></span><span></span>";
    messages.appendChild(el);
    messages.scrollTop = messages.scrollHeight;
  }

  function hideTyping() {
    const el = document.getElementById("typingIndicator");
    if (el) el.remove();
  }

  // ── Drag-to-Scroll for Quick Replies ──────────────────────────────────────
  function initQuickRepliesDrag() {
    const quickRepliesContainer = document.getElementById("chatQuickReplies");
    if (!quickRepliesContainer) return;

    let isDown = false;
    let startX;
    let scrollLeft;

    quickRepliesContainer.addEventListener("mousedown", (e) => {
      isDown = true;
      isDraggingQuickReplies = false;
      quickRepliesContainer.classList.add("active");
      startX = e.pageX - quickRepliesContainer.offsetLeft;
      scrollLeft = quickRepliesContainer.scrollLeft;
    });

    quickRepliesContainer.addEventListener("mouseleave", () => {
      isDown = false;
      quickRepliesContainer.classList.remove("active");
    });

    quickRepliesContainer.addEventListener("mouseup", () => {
      isDown = false;
      quickRepliesContainer.classList.remove("active");
      // Reset isDraggingQuickReplies shortly after click completes
      setTimeout(() => {
        isDraggingQuickReplies = false;
      }, 50);
    });

    quickRepliesContainer.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - quickRepliesContainer.offsetLeft;
      const walk = (x - startX) * 2; // Scroll-fast
      if (Math.abs(walk) > 5) {
        isDraggingQuickReplies = true; // Mark as dragging if moved significantly
      }
      quickRepliesContainer.scrollLeft = scrollLeft - walk;
    });
  }

  // Initialize on DOM load
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initQuickRepliesDrag);
  } else {
    initQuickRepliesDrag();
  }
  // ─────────────────────────────────────────────────────────────────────────
})();
