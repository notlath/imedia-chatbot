<?php
/**
 * Inventive Media Chatbot — Knowledge Base
 *
 * Contains the static knowledge base and the dynamic WordPress content builder.
 * The static KB is the always-available foundation; the dynamic KB supplements
 * it with live page/post content pulled from the WordPress database.
 */

if (! defined('ABSPATH')) {
    exit;
}

// ============================================================
// PART A: Static Knowledge Base (comprehensive, always available)
// ============================================================
function gemini_get_static_knowledge()
{
    return <<<'KB'
=== INVENTIVE MEDIA — OFFICIAL INFORMATION ===

COMPANY: Inventive Media
FOUNDED: 2006
TYPE: IT Training Center & Digital Services Provider
WEBSITE: https://www.inventivemedia.com.ph/
ADDRESS: Karmela Building 2590, 3rd Floor, Manchas Street corner Venecia Street, Makati City 1205, Philippines
PHONE: +63 936 9700874 | +63 933 1348856
EMAIL: inventivemedia.ph@gmail.com

SOCIAL MEDIA:
- Facebook: https://www.facebook.com/inventivemedia.ph/
- LinkedIn: https://www.linkedin.com/company/3617353/
- Twitter: https://twitter.com/inventivemediaa
- YouTube: https://www.youtube.com/channel/UCjvks9ensBSmO2tIThGfNtg
- Instagram: https://www.instagram.com/InventiveMediaPH/

ACCREDITATIONS & PARTNERS:
- Pearson VUE Accredited Testing Center
- PhilGEPS Accredited Center
- VENTENY Employee Happiness Partner
- International Partner: Trent Global College, Singapore

FOUNDER: Henry N. Ong II — Pioneer of CMS web development courses in the Philippines

RATINGS: 4.8/5 on Facebook Reviews · 4.9/5 on Google Re=== COURSE CATEGORIES & COURSES ===

All courses include: Face-to-Face instruction, Hands-on training, Globally Recognized Course Certificate, and Unlimited Free Class Retakes (valid 1 year).

--- GRAPHICS & 3D ---
1. Adobe Photoshop CC 2026 — Essentials to Advanced | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/
   Overview: Master Photoshop and Generative AI (Adobe Firefly, Generative Fill, Generative Expand) in 3 days with hands-on training in photo manipulation, retouching, and compositing.

2. Adobe Lightroom CC 2026 | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/adobe-lightroom-graphic-design-course-philippines/
   Overview: Adobe Photoshop Lightroom simplifies photo editing, offering precise tools without the complexity of Photoshop. It’s perfect for photographers who want efficient image processing while enhancing their photos.

3. Adobe Illustrator CC 2026 — Essentials to Advanced | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/adobe-illustrator-philippines-training/

4. Adobe InDesign CC 2026 — Essentials to Advanced | 2 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/adobe-indesign-cc-training-tutorial-philippines/

5. CorelDraw 2025 — Essentials to Advanced | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/corel-draw-x7/

6. Adobe Animate CC | 2 Days
   URL: https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/

7. Autodesk 3DS Max — 3D Modeling & Animation ⏸️ ON HOLD
   URL: https://www.inventivemedia.com.ph/3ds-max-training-philippines-3d-animation-course/
   STATUS: Currently on hold. Not available for enrollment at this time.

--- WEB DEVELOPMENT (Front-End) ---
8. HTML5, CSS3 & BootStrap | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/html-tutorials-and-css-training-philippines/

9. JavaScript Essentials | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/javascript-jquery-training-course-philippines/

10. React JS Essentials | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/react-js-tutorial-training-philippines/

11. jQuery Essentials
    URL: https://www.inventivemedia.com.ph/jquery-tutorial-javascript-training-course-philippines/

--- WEB DEVELOPMENT (Back-End) ---
12. PHP with MySQL | 4 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/php-tutorial-mysql-training-course-philippines/

13. Laravel 12 PHP Framework | 4 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/laravel-training-philippines-php-web-development/
    Overview: Build robust web applications with Laravel's elegant syntax. Final project: basic eCommerce site with admin panel, product management, shopping cart, and checkout.

14. CodeIgniter PHP Framework | 4 Days
    URL: https://www.inventivemedia.com.ph/codeigniter-training-course-philippines-php-framework/

15. Ruby On Rails
    URL: https://www.inventivemedia.com.ph/ruby-on-rails-ror-training-course-philippines/

--- WEB DEVELOPMENT (CMS) ---
16. WordPress CMS | 3 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/wordpress-tutorial-training-philippines/

17. Mastering WordPress with Elementor | 2 Days
    URL: https://www.inventivemedia.com.ph/wordpress-elementor-training-philippines/

18. Joomla CMS | 2 Days
    URL: https://www.inventivemedia.com.ph/joomla-tutorial-training-philippines/

19. Drupal CMS | 3 Days
    URL: https://www.inventivemedia.com.ph/drupal-tutorial-training-philippines/

--- VIDEO & FILM ---
20. Adobe Premiere Pro CC 2026 — Essentials to Advanced | 3 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/adobe-premiere-pro-video-editing-training-film-courses-philippines/

21. Adobe After Effects CC 2026 — Essentials to Advanced | 3 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/adobe-after-effects-video-editing-training-film-courses-philippines/

22. DaVinci Resolve 18 — Video & Film Editing | 3 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/davinci-resolve-training-philippines-video-film-course/

23. Indie Film Making
    URL: https://www.inventivemedia.com.ph/indie-film-making/

--- DIGITAL MARKETING ---
24. Digital Marketing Fundamentals | 2 Days (Online | Virtual Setup)
    URL: https://www.inventivemedia.com.ph/digital-marketing-training-course-philippines/
    SETUP: This course is conducted in an Online | Virtual setup.

25. Search Engine Optimization (SEO) | 3 Days
    URL: https://www.inventivemedia.com.ph/seo-training-philippines/

26. Social Media Marketing (SMM) | 3 Days
    URL: https://www.inventivemedia.com.ph/social-media-marketing-training-philippines/

27. Google Ads (PPC) Certification | 3 Days
    URL: https://www.inventivemedia.com.ph/digital-marketing-training-philippines-google-ads-ppc/

--- NETWORK & SECURITY ---
28. Basic Networking: Wired & Wireless | 2 Days
    URL: https://www.inventivemedia.com.ph/networking-training-courses-philippines/

29. CCTV Security Surveillance — Install, Configure & Manage | 3 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/cctv-training-course-philippines/
    Overview: Advanced CCTV program aligned with international standards. Covers design, installation, maintenance, and operation of Analog, IP-based, and Wireless CCTV systems. Supports Hikvision, Dahua, Uniview, AVTech, D-Link, Tenda. Recognized as the Best CCTV Training School since 2006.

30. Fire Detection & Alarm System (FDAS) — Conventional & Addressable | 3 Days
    URL: https://www.inventivemedia.com.ph/fire-detection-alarm-system-training-philippines/

31. Fiber Optics Installer / Technician | 3 Days
    URL: https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines/

32. Windows Server 2022: Administration | 2 Days
    URL: https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/

33. Windows Server 2022: Active Directory | 2 Days
    URL: https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/

--- SOFTWARE PROGRAMMING ---
34. Python Programming Essentials | 4 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/python-software-training-philippines/

35. Django Python Framework | 4 Days
    URL: https://www.inventivemedia.com.ph/django-python-framework-training-philippines/

36. Python for Data Science | 4 Days
    URL: https://www.inventivemedia.com.ph/python-data-science-training-philippines/

37. Java Programming Essentials | 4 Days
    URL: https://www.inventivemedia.com.ph/java-programming-software-training-philippines/

--- IT CERTIFICATION ---
38. AWS Cloud Practitioner | 2 Days
    URL: https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/

39. AWS Solutions Architecting
    URL: https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/

40. Microsoft Azure Fundamentals (Exam: AZ-900) | 2 Days
    URL: https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/

41. Microsoft Azure Administrator (Exam: AZ-104) | 3 Days
    URL: https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/

42. ITIL v4 Foundation — IT Service Management | 2 Days
    URL: https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/

=== PROMOS & DISCOUNTS ===

PROMO PAGE: https://www.inventivemedia.com.ph/training-promo/

PROMO MECHANICS:
- Courses in a Package Promo must be availed within the same month
- Promo rates are subject to change without prior notice

UNLIMITED FREE CLASS RETAKES:
- Valid for 1 year from the date of course attended
- Limited to the same course the student availed
- Student must have completed the course first

SINGLE COURSE DISCOUNTS (Early Bird / Group):
- Graphics & 3D courses: ₱1,000 – ₱2,000 off
- Video & Film courses: ₱500 – ₱1,500 off
- Web Development Front-End: ₱1,000 – ₱1,500 off
- Web Development Back-End / Programming: ₱2,000 – ₱3,000 off
- CMS courses: ₱1,000 – ₱1,500 off
- Digital Marketing: ₱1,000 – ₱1,500 off
- Network & Security: ₱500 – ₱3,000 off
- IT Certifications: ₱2,000 – ₱5,000 off

COURSE BUNDLE DISCOUNTS:
- WordPress CMS + WordPress with Elementor (2 Course Package): ₱20,000 regular price → ₱4,000 off
- Basic Networking + CCTV Security Surveillance (2 Course Package): ₱21,000 regular price → ₱5,000 off

=== CORPORATE / IN-HOUSE TRAINING ===

PAGE: https://www.inventivemedia.com.ph/in-housecorporate-training/
Description: Expert-led on-site training tailored to company needs.

Requirements:
- Minimum 6 participants
- Client provides venue with workstations and pre-installed software
- Client provides trainer's meals
- Outside Metro Manila: client covers transportation, board & lodging for trainer

Corporate Rates (per person):
- HTML, CSS & Tailwind: 3 Days / 30 Hours / ₱17,500
- JavaScript Essentials: 3 Days / 30 Hours / ₱17,500
- ReactJS Essentials: 3 Days / 30 Hours / ₱19,000
- PHP with MySQL: 4 Days / 40 Hours / ₱19,000
- Laravel PHP Framework: 4 Days / 40 Hours / ₱19,000
- CodeIgniter PHP Framework: 4 Days / 40 Hours / ₱19,000
- WordPress CMS: 3 Days / 30 Hours / ₱14,000
- WordPress with Elementor: 3 Days / 30 Hours / ₱14,000
- Joomla CMS: 2 Days / 20 Hours / ₱14,000
- Drupal CMS: 3 Days / 30 Hours / ₱14,000

=== SERVICES OFFERED ===
1. Web Development & Design — https://www.inventivemedia.com.ph/web-development-design-philippines/
2. Graphic Designing — https://www.inventivemedia.com.ph/graphic-design/
3. Mobile App Development — https://www.inventivemedia.com.ph/mobile-application/
4. SEO / Digital Marketing Services — https://www.inventivemedia.com.ph/digital-marketing-services
5. In-House / Corporate Training — https://www.inventivemedia.com.ph/in-housecorporate-training/

=== KEY DIFFERENTIATORS ===
- Pioneer since 2006 — first to offer CCTV, WordPress, Joomla, Drupal, Laravel, Bootstrap training in the Philippines
- Only school with international-grade CCTV facilities
- Only internationally certified CCTV instructor in the Philippines (BTEC-certified)
- The sole Filipino instructor teaching CCTV courses worldwide (Philippines, China, Hong Kong, Singapore)
- Uses Adobe Enterprise Licensed software
- ~85% of government agencies and LGUs take web development classes from Inventive Media
- Globally recognized course certificates

=== CURRENT JOB OPENINGS ===
- UI/UX Design Trainer
- React JS Trainer
- Fiber Optic Trainer
- Laravel Framework Trainer
- Windows Server Trainer
- Social Media Marketing Trainer
- Google Ads Trainer
- On-the-Job Training / Apprenticeship positions

=== KEY PAGES ===
- Homepage: https://www.inventivemedia.com.ph/
- Promos & Pricing: https://www.inventivemedia.com.ph/training-promo/
- Training Schedule: https://www.inventivemedia.com.ph/computer-it-courses-training-schedules/
- Testimonials: https://www.inventivemedia.com.ph/testimonials/
- Corporate Training: https://www.inventivemedia.com.ph/in-housecorporate-training/

=== FREQUENTLY ASKED QUESTIONS (FAQ) ===

Q: DO YOU OFFER ONLINE COURSES? / WHICH COURSES ARE ONLINE?
A: Most of our courses are conducted face-to-face with hands-on training. However, our Digital Marketing Fundamentals course is specifically offered in an Online | Virtual setup.

All courses include Unlimited Free Class Retakes for 1 year!

NOTE: This is one of the most frequently asked questions. Inventive Media is an IT training school and most courses are taken in face-to-face modality with hands-on training.

=== COURSE PAGE SECTIONS & LINKING RULES ===

    Every course page has 4 tab sections. Always link users directly to the relevant section using these URL fragment patterns:

      [course-url]#details   → View Details (Description, Syllabus)
      [course-url]#fees      → View Fees (Pricing, Discounts)
      [course-url]#schedule  → View Schedule (Dates, Times)
      [course-url]#register  → Register Now (Enrollment Form)

    LINKING RULES — follow these strictly:
    - User asks about PRICE, COST, FEE, HOW MUCH → link to the Fees section ([course-url]#fees)
      Example: "How much is Photoshop?" → [Adobe Photoshop — View Fees](https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/#fees)
    - User asks about SCHEDULE, DATES, WHEN, NEXT CLASS → link to the Schedule section ([course-url]#schedule)
      Example: "When is the next CCTV class?" → [CCTV — View Schedule](https://www.inventivemedia.com.ph/cctv-training-course-philippines/#schedule)
    - User wants to ENROLL, REGISTER, SIGN UP, HOW TO JOIN → link to the Register section ([course-url]#register)
      Example: "How do I register for Laravel?" → [Laravel — Register Here](https://www.inventivemedia.com.ph/laravel-training-philippines-php-web-development/#register)
    - User asks for general INFO, DETAILS, OVERVIEW, OUTLINE → link to the Details section ([course-url]#details)
      Example: "Tell me more about Python" → [Python — View Details](https://www.inventivemedia.com.ph/python-software-training-philippines/#details)

    Do NOT just give the base URL when a more specific section link applies.
    Do NOT display or guess the exact peso price — always direct users to the **Fees** section of the course page.


PER-COURSE SECTION LINKS:

--- GRAPHICS & 3D ---
Adobe Photoshop:  #details https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/#details | #fees https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/#fees | #schedule https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/#schedule | #register https://www.inventivemedia.com.ph/adobe-photoshop-philippines-training/#register
Adobe Lightroom:  #details https://www.inventivemedia.com.ph/adobe-lightroom-graphic-design-course-philippines/#details | #fees https://www.inventivemedia.com.ph/adobe-lightroom-graphic-design-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/adobe-lightroom-graphic-design-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/adobe-lightroom-graphic-design-course-philippines/#register
Adobe Illustrator: #details https://www.inventivemedia.com.ph/adobe-illustrator-philippines-training/#details | #fees https://www.inventivemedia.com.ph/adobe-illustrator-philippines-training/#fees | #schedule https://www.inventivemedia.com.ph/adobe-illustrator-philippines-training/#schedule | #register https://www.inventivemedia.com.ph/adobe-illustrator-philippines-training/#register
Adobe InDesign:   #details https://www.inventivemedia.com.ph/adobe-indesign-cc-training-tutorial-philippines/#details | #fees https://www.inventivemedia.com.ph/adobe-indesign-cc-training-tutorial-philippines/#fees | #schedule https://www.inventivemedia.com.ph/adobe-indesign-cc-training-tutorial-philippines/#schedule | #register https://www.inventivemedia.com.ph/adobe-indesign-cc-training-tutorial-philippines/#register
CorelDRAW:        #details https://www.inventivemedia.com.ph/corel-draw-x7/#details | #fees https://www.inventivemedia.com.ph/corel-draw-x7/#fees | #schedule https://www.inventivemedia.com.ph/corel-draw-x7/#schedule | #register https://www.inventivemedia.com.ph/corel-draw-x7/#register
Adobe Animate:    #details https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/#details | #fees https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/#fees | #schedule https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/#schedule | #register https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/#register
Autodesk 3DS Max: ⏸️ ON HOLD - Currently unavailable for enrollment.

--- WEB DEVELOPMENT ---
HTML, CSS & Tailwind: #fees https://www.inventivemedia.com.ph/html-tutorials-and-css-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/html-tutorials-and-css-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/html-tutorials-and-css-training-philippines/#register
JavaScript:       #fees https://www.inventivemedia.com.ph/javascript-jquery-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/javascript-jquery-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/javascript-jquery-training-course-philippines/#register
React JS:         #fees https://www.inventivemedia.com.ph/react-js-tutorial-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/react-js-tutorial-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/react-js-tutorial-training-philippines/#register
jQuery:           #fees https://www.inventivemedia.com.ph/jquery-tutorial-javascript-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/jquery-tutorial-javascript-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/jquery-tutorial-javascript-training-course-philippines/#register
PHP with MySQL:   #fees https://www.inventivemedia.com.ph/php-tutorial-mysql-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/php-tutorial-mysql-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/php-tutorial-mysql-training-course-philippines/#register
Laravel:          #fees https://www.inventivemedia.com.ph/laravel-training-philippines-php-web-development/#fees | #schedule https://www.inventivemedia.com.ph/laravel-training-philippines-php-web-development/#schedule | #register https://www.inventivemedia.com.ph/laravel-training-philippines-php-web-development/#register
CodeIgniter:      #fees https://www.inventivemedia.com.ph/codeigniter-training-course-philippines-php-framework/#fees | #schedule https://www.inventivemedia.com.ph/codeigniter-training-course-philippines-php-framework/#schedule | #register https://www.inventivemedia.com.ph/codeigniter-training-course-philippines-php-framework/#register
WordPress CMS:    #fees https://www.inventivemedia.com.ph/wordpress-tutorial-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/wordpress-tutorial-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/wordpress-tutorial-training-philippines/#register
WordPress Custom Theme with Elementor: #fees https://www.inventivemedia.com.ph/wordpress-elementor-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/wordpress-elementor-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/wordpress-elementor-training-philippines/#register
Joomla:           #fees https://www.inventivemedia.com.ph/joomla-tutorial-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/joomla-tutorial-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/joomla-tutorial-training-philippines/#register
Drupal:           #fees https://www.inventivemedia.com.ph/drupal-tutorial-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/drupal-tutorial-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/drupal-tutorial-training-philippines/#register

--- VIDEO & FILM ---
Adobe Premiere Pro: #fees https://www.inventivemedia.com.ph/adobe-premiere-pro-video-editing-training-film-courses-philippines/#fees | #schedule https://www.inventivemedia.com.ph/adobe-premiere-pro-video-editing-training-film-courses-philippines/#schedule | #register https://www.inventivemedia.com.ph/adobe-premiere-pro-video-editing-training-film-courses-philippines/#register
Adobe After Effects: #fees https://www.inventivemedia.com.ph/adobe-after-effects-video-editing-training-film-courses-philippines/#fees | #schedule https://www.inventivemedia.com.ph/adobe-after-effects-video-editing-training-film-courses-philippines/#schedule | #register https://www.inventivemedia.com.ph/adobe-after-effects-video-editing-training-film-courses-philippines/#register
DaVinci Resolve:  #fees https://www.inventivemedia.com.ph/davinci-resolve-training-philippines-video-film-course/#fees | #schedule https://www.inventivemedia.com.ph/davinci-resolve-training-philippines-video-film-course/#schedule | #register https://www.inventivemedia.com.ph/davinci-resolve-training-philippines-video-film-course/#register
Indie Film Making: #fees https://www.inventivemedia.com.ph/indie-film-making/#fees | #schedule https://www.inventivemedia.com.ph/indie-film-making/#schedule | #register https://www.inventivemedia.com.ph/indie-film-making/#register

--- DIGITAL MARKETING ---
Digital Marketing Fundamentals: #fees https://www.inventivemedia.com.ph/digital-marketing-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/digital-marketing-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/digital-marketing-training-course-philippines/#register
SEO:              #fees https://www.inventivemedia.com.ph/seo-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/seo-training-philippines-search-engine-optimization/#schedule | #register https://www.inventivemedia.com.ph/seo-training-philippines-search-engine-optimization/#register
Social Media Marketing: #fees https://www.inventivemedia.com.ph/social-media-marketing-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/social-media-marketing-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/social-media-marketing-training-philippines/#register
Google Ads:       #fees https://www.inventivemedia.com.ph/digital-marketing-training-philippines-google-ads-ppc/#fees | #schedule https://www.inventivemedia.com.ph/digital-marketing-training-philippines-google-ads-ppc/#schedule | #register https://www.inventivemedia.com.ph/digital-marketing-training-philippines-google-ads-ppc/#register

--- NETWORK & SECURITY ---
Basic Networking: #fees https://www.inventivemedia.com.ph/networking-training-courses-philippines/#fees | #schedule https://www.inventivemedia.com.ph/networking-training-courses-philippines/#schedule | #register https://www.inventivemedia.com.ph/networking-training-courses-philippines/#register
CCTV:             #fees https://www.inventivemedia.com.ph/cctv-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/cctv-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/cctv-training-course-philippines/#register
FDAS:             #fees https://www.inventivemedia.com.ph/fire-detection-alarm-system-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/fire-detection-alarm-system-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/fire-detection-alarm-system-training-philippines/#register
Fiber Optics:     #fees https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines/#register
Windows Server Administration: #fees https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#schedule | #register https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#register
Windows Server Active Directory: #fees https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#fees | #schedule https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#schedule | #register https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#register

--- SOFTWARE PROGRAMMING ---
Python:           #fees https://www.inventivemedia.com.ph/python-software-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/python-software-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/python-software-training-philippines/#register
Django:           #fees https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#register
Python Data Science: #fees https://www.inventivemedia.com.ph/python-data-science-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/python-data-science-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/python-data-science-training-philippines/#register
Java:             #fees https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#register

--- IT CERTIFICATION ---
AWS Cloud Practitioner: #fees https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#fees | #schedule https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#schedule | #register https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#register
AWS Solutions Architect: #fees https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#register
Microsoft Azure Fundamentals: #fees https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#register
Microsoft Azure Administrator: #fees https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#register
ITIL v4 Foundation: #fees https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#fees | #schedule https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#schedule | #register https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#register

=== PAYMENT OPTIONS ===

Accepted Payment Methods:
- Cash
- Bank Cheque (Note: Payment should clear before the training date)
- Bank/Online Transfer
- Globe GCash
- Credit Card (Temporarily Not Available)

Payment Arrangement for Physical/Face-to-Face Classes:
- Once the training has been confirmed to push through, a 50% payment is required for the class. The balance can be settled during the first day of the class.

Payment Arrangement for Virtual/Online Classes:
- Joining any Live Online Training will require full payment. Payment shall only be requested once the class is confirmed to push through.

=== TRAINING PROPOSAL REQUEST ===

To proceed with a training proposal, the following details are required:
1. Company Name
2. Company Address
3. Name of Addressee
4. Training Course and Preferred Schedule
5. Email Address for Correspondence

E-mail the details to: info@inventivemedia.com.ph

Once the above information is received, the official training proposal will be promptly prepared and sent.

=== CLASS CONFIRMATION & PAYMENT POLICY ===

Minimum Participation:
- The center requires a minimum of five to six (5–6) confirmed participants for a public class to proceed.
- Once this number is reached, participants will be contacted via email or SMS to re-verify their reservation.

Mandatory Reply Policy:
- Upon receiving the confirmation message, participants must respond via email or SMS to acknowledge their status.
- IMPORTANT: This step is essential to distinguish legitimate applicants from the high volume of daily spam registrations (approx. 40%). Failure to acknowledge a reservation may result in the contact information being restricted from future registrations in the system.

Payment Terms:
- Payment details will be shared only after the class is officially confirmed.
- Initial Payment: A 50% downpayment is required once the training is confirmed.
- Remaining Balance: The final 50% may be settled on the first day of the class.

KB;
}

// ============================================================
// PART B: Dynamic WordPress Content (auto-updated from DB)
// ============================================================
function gemini_get_dynamic_knowledge()
{
    // Use transient cache — avoids DB queries on every chat message
    $cached = get_transient('gemini_chatbot_wp_context');
    if ($cached !== false) {
        return $cached;
    }

    $context_parts = [];

    $query = new WP_Query([
        'post_type'      => ['page', 'post'],
        'post_status'    => 'publish',
        'posts_per_page' => 50,
        'orderby'        => 'modified',
        'order'          => 'DESC',
    ]);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $title   = get_the_title();
            $url     = get_permalink();
            $content = wp_strip_all_tags(strip_shortcodes(get_the_content()));
            $content = preg_replace('/\s+/', ' ', trim($content));

            // Truncate individual pages to prevent token overflow
            if (strlen($content) > 800) {
                $content = substr($content, 0, 800) . '...';
            }

            if (! empty($content)) {
                $context_parts[] = "PAGE: {$title}\nURL: {$url}\nCONTENT: {$content}";
            }
        }
        wp_reset_postdata();
    }

    $result = implode("\n\n---\n\n", $context_parts);

    // Cap total dynamic context at ~20K characters
    if (strlen($result) > 20000) {
        $result = substr($result, 0, 20000) . "\n[Additional content truncated]";
    }

    // Cache for 1 hour
    set_transient('gemini_chatbot_wp_context', $result, HOUR_IN_SECONDS);

    return $result;
}
