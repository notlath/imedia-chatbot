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

RATINGS: 4.8/5 on Facebook Reviews · 4.9/5 on Google Reviews

=== COURSE CATEGORIES & COURSES ===

All courses include: Face-to-Face instruction, Hands-on training, Globally Recognized Course Certificate, and Unlimited Free Class Retakes (valid 1 year). Please note that the course durations listed on our website are strictly fixed and cannot be extended.

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
   URL: https://www.inventivemedia.com.ph/adobe-indesign-training-tutorial-philippines/

5. CorelDRAW 2025 — Essentials to Advanced | 3 Days | 9am–7pm
   URL: https://www.inventivemedia.com.ph/corel-draw-training-philippines-graphic-design-course/

6. Adobe Animate CC | 2 Days
   URL: https://www.inventivemedia.com.ph/adobe-flash-phillippines-training/

7. Autodesk 3DS Max — 3D Modeling & Animation ⏸️ ON HOLD
   URL: https://www.inventivemedia.com.ph/3ds-max-training-philippines-3d-animation-course/
   STATUS: Currently on hold. Not available for enrollment at this time.

--- WEB DEVELOPMENT (Front-End) ---
8. HTML, CSS & Tailwind | 3 Days | 9am–7pm
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
    URL: https://www.inventivemedia.com.ph/adobe-after-effects-training-philippines-video-editing-film-making-course/

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
    URL: https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines-foa/

32. Windows Server 2022: Administration | 2 Days
    URL: https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/

33. Windows Server 2022: Active Directory | 2 Days
    URL: https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/

--- SOFTWARE PROGRAMMING ---
34. Python Programming Essentials | 4 Days | 9am–7pm
    URL: https://www.inventivemedia.com.ph/python-programming-language-training-course-philippines/

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
Description: Expert-led on-site training tailored to company needs. We offer in-house corporate training exclusively within Metro Manila, subject to our instructors' availability.

Requirements:
- Minimum 6 participants
- Client provides venue with workstations and pre-installed software
- Client provides trainer's meals

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

Q: HOW TO APPLY? (JOBS vs. COURSE ENROLLMENT)
A: If someone asks a question related to "How to apply", your answer should distinguish between applying for a job and enrolling in a course. The response should be something like:
"If you are applying as a trainer or for an open job position, please email your resume to inventivemedia.ph@gmail.com. Or are you asking about enrolling in our training courses? If you are looking to enroll, please let me know which course you are interested in so I can assist you!"

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
Adobe InDesign:   #details https://www.inventivemedia.com.ph/adobe-indesign-training-tutorial-philippines/#details | #fees https://www.inventivemedia.com.ph/adobe-indesign-training-tutorial-philippines/#fees | #schedule https://www.inventivemedia.com.ph/adobe-indesign-training-tutorial-philippines/#schedule | #register https://www.inventivemedia.com.ph/adobe-indesign-training-tutorial-philippines/#register
CorelDRAW:        #details https://www.inventivemedia.com.ph/corel-draw-training-philippines-graphic-design-course/#details | #fees https://www.inventivemedia.com.ph/corel-draw-training-philippines-graphic-design-course/#fees | #schedule https://www.inventivemedia.com.ph/corel-draw-training-philippines-graphic-design-course/#schedule | #register https://www.inventivemedia.com.ph/corel-draw-training-philippines-graphic-design-course/#register
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
Adobe After Effects: #fees https://www.inventivemedia.com.ph/adobe-after-effects-training-philippines-video-editing-film-making-course/#fees | #schedule https://www.inventivemedia.com.ph/adobe-after-effects-training-philippines-video-editing-film-making-course/#schedule | #register https://www.inventivemedia.com.ph/adobe-after-effects-training-philippines-video-editing-film-making-course/#register
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
Fiber Optics:     #fees https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines-foa/#fees | #schedule https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines-foa/#schedule | #register https://www.inventivemedia.com.ph/fiber-optic-technician-training-philippines-foa/#register
Windows Server Administration: #fees https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#schedule | #register https://www.inventivemedia.com.ph/microsoft-windows-server-2022-training-philippines-administration/#register
Windows Server Active Directory: #fees https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#fees | #schedule https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#schedule | #register https://www.inventivemedia.com.ph/windows-server-2022-training-active-directory/#register

--- SOFTWARE PROGRAMMING ---
Python:           #fees https://www.inventivemedia.com.ph/python-programming-language-training-course-philippines/#fees | #schedule https://www.inventivemedia.com.ph/python-programming-language-training-course-philippines/#schedule | #register https://www.inventivemedia.com.ph/python-programming-language-training-course-philippines/#register
Django:           #fees https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/django-python-framework-training-philippines/#register
Python Data Science: #fees https://www.inventivemedia.com.ph/python-data-science-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/python-data-science-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/python-data-science-training-philippines/#register
Java:             #fees https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/java-programming-software-training-philippines/#register

--- IT CERTIFICATION ---
AWS Cloud Practitioner: #fees https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#fees | #schedule https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#schedule | #register https://www.inventivemedia.com.ph/aws-training-philippines-cloud-practitioner/#register
AWS Solutions Architect: #fees https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/aws-system-architect-training-philippines/#register
Microsoft Azure Fundamentals: #fees https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/microsoft-azure-fundamentals-certification-training-philippines/#register
Microsoft Azure Administrator: #fees https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#fees | #schedule https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#schedule | #register https://www.inventivemedia.com.ph/microsoft-azure-administrator-certification-training-philippines/#register
ITIL v4 Foundation: #fees https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#fees | #schedule https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#schedule | #register https://www.inventivemedia.com.ph/itil-training-philippines-foundation-certification/#register

=== FACULTY & INSTRUCTORS (DETAILED PROFILES) ===

FACULTY PAGE: https://www.inventivemedia.com.ph/faculty/

Inventive Media's faculty consists of 37 experienced industry professionals and certified instructors. Below are their detailed profiles:

--- INSTRUCTOR #1 ---
Name: Henry N. Ong II
Title: Founder
Profile: https://www.inventivemedia.com.ph/faculty/
Note: Pioneer of CMS web development courses in the Philippines. Founded Inventive Media in 2006.

--- INSTRUCTOR #2 ---
Name: Dianna A. Azores
Title: Marketing Communication Consultant
Profile: https://www.inventivemedia.com.ph/dianna-a-azores/
Skills: SEO, SEM, Social Media Marketing, Google AdWords, Google Analytics, Email Marketing, Lead Generation, Marketing Research, Content Writing, Canva
Experience: Marketing Communications Consultant at Inventive Media (Jul 2022–Present); Marketing Manager at Inventive Media (Nov 2018–Jun 2022); Senior Marketing Executive at Inventive Media (Aug 2017–Oct 2018); Digital Marketing Specialist/Instructor at Inventive Media (Sep 2015–Jul 2017)
Education: Pamantasan ng Lungsod ng Maynila — BS Marketing
Certifications: Google Analytics, Google Ads, HubSpot Inbound Marketing, HubSpot Content Marketing, Hootsuite Social Marketing
Awards: Women Who Lead Award (Inventive Media 2023), Certified Top Performing Employee Award 2021

--- INSTRUCTOR #3 ---
Name: Joandlyn Mariano
Title: President & Growth Strategy Director
Profile: https://www.inventivemedia.com.ph/joandlyn-mariano/
Skills: SEO, SEM, Content Writing, Social Media Marketing, Digital Marketing, Google AdWords, Email Marketing, HTML, CSS, Management
Experience: President & CSO at Inventive Media (Oct 2018–Present); General Manager at Inventive Media (Oct 2015–Sep 2018); Digital Marketing Manager at Inventive Media (2014-2015); Sales Representative at Concentrix (2012)
Education: Pamantasan ng Lungsod ng Maynila — BS Marketing

--- INSTRUCTOR #4 ---
Name: Jan Panado
Title: Web Developer
Profile: https://www.inventivemedia.com.ph/jan-panado/
Skills: HTML, CSS, Bootstrap, PHP, Laravel, WordPress, JavaScript, jQuery, MySQL, React, Angular, Vue, Python, Ruby on Rails, Java, C#, .NET
Experience: Web Development Instructor at Inventive Media (Feb 2016–Present); Web Developer at Inventive Media (2016–Present)
Education: Colegio De San Juan De Letran — BS Information Technology
Certifications: MTA (HTML/CSS, Python, JavaScript, Database Administration, Windows OS, Security, Networking, Mobility), MOS (Word, Excel, PowerPoint, Access, Outlook), ACA (Photoshop, Dreamweaver, Animate, Premiere Pro)

--- INSTRUCTOR #5 ---
Name: Stephen Singer
Title: Software Engineer
Profile: https://www.inventivemedia.com.ph/stephen-s-singer/
Skills: HTML, CSS, Bootstrap, PHP, MySQL, Laravel, JavaScript, jQuery, React, Python, Django, Java, Spring Boot, Ruby on Rails, Git, REST API
Experience: Software Engineer at Yondu, Inc. (Jul 2022–Present); Software Developer at Bizmates Philippines (May 2019–Jul 2022)
Education: Mapua University — BS Electronics Engineering

--- INSTRUCTOR #6 ---
Name: Michael S. Riparip
Title: Network Specialist
Profile: https://www.inventivemedia.com.ph/michael-s-riparip/
Skills: Network Security, Cybersecurity, Firewalls, VPN, Cisco Technologies, CCTV, TCP/IP
Experience: Network Security Specialist with 10+ years experience. Pre-Sales/Implementation Manager at Astoria Technologies; Technical Assistance Manager; Network Engineer at various firms
Education: STI College — BS Information Technology
Certifications: CompTIA Network+, CompTIA Security+, Cisco CCNA, Cisco CCNP

--- INSTRUCTOR #7 ---
Name: Richelle Bondoc
Title: Digital Marketing Specialist
Profile: https://www.inventivemedia.com.ph/richelle-marie-bondoc/
Skills: SEO, SEM, Social Media Marketing, Google AdWords, Google Analytics, Email Marketing, Content Marketing, Facebook Ads, HTML, CSS
Experience: Digital Marketing Specialist at Inventive Media; SEO Specialist; Social Media Manager; Digital Marketing Instructor
Education: University of the East — BS Business Administration
Certifications: Google Ads, Google Analytics, HubSpot Inbound Marketing, HubSpot Email Marketing, Hootsuite Social Marketing

--- INSTRUCTOR #8 ---
Name: Jansen Ang
Title: Java Developer
Profile: https://www.inventivemedia.com.ph/jansen-ang-java-python-trainer/
Skills: Java, Spring Framework, Python, AWS, Azure, Docker, Kubernetes, MySQL, PostgreSQL, MongoDB, REST API, Microservices
Experience: Java Developer and Cloud Specialist with extensive enterprise development experience
Certifications: AWS Certified Solutions Architect Associate, AWS Certified Cloud Practitioner, Azure Fundamentals (AZ-900), Azure Administrator (AZ-104), Oracle Certified Java Programmer

--- INSTRUCTOR #9 ---
Name: J.R. De Guzman
Title: Network & Cybersecurity Expert
Profile: https://www.inventivemedia.com.ph/j-r-de-guzman/
Skills: AWS, Cisco, Network Security, Cybersecurity, Tenable Nessus, Cloud Computing, Firewalls, Penetration Testing
Experience: AWS Authorized Instructor; Network Security Consultant; Cybersecurity Specialist with experience in vulnerability assessment and penetration testing
Certifications: AWS Certified Solutions Architect, AWS Certified Cloud Practitioner, Cisco CCNA, CompTIA Security+

--- INSTRUCTOR #10 ---
Name: James Santos
Title: MCT | Database Administrator
Profile: https://www.inventivemedia.com.ph/james-santos/
Skills: Microsoft Azure, Database Administration, SQL Server, MySQL, PowerShell, Windows Server, Active Directory, Cloud Computing
Experience: Senior Database Administrator with extensive experience in enterprise database management; Microsoft Certified Trainer
Certifications: Microsoft Certified Trainer (MCT), Azure Solutions Architect Expert, Azure Administrator Associate, Azure Database Administrator Associate, Azure Fundamentals, AWS Certified Cloud Practitioner

--- INSTRUCTOR #11 ---
Name: Elise Aguilar
Title: Content Marketing Director
Profile: https://www.inventivemedia.com.ph/elise-aguilar/
Skills: SEO, Content Strategy, Content Marketing, Social Media Marketing, Copywriting, Email Marketing, Google Analytics, WordPress
Experience: Content Marketing Director specializing in SEO content strategy and digital marketing campaigns
Certifications: HubSpot Content Marketing, HubSpot Inbound Marketing, Yoast SEO

--- INSTRUCTOR #12 ---
Name: Alfie Apodaca
Title: Google Ads Expert
Profile: https://www.inventivemedia.com.ph/alfie-apodaca/
Skills: Google Ads, Google Analytics, PPC, SEM, Social Media Marketing, Facebook Ads, Campaign Management, Digital Marketing Strategy
Experience: Google Ads Expert with extensive experience in PPC campaign management and optimization; Marketing and ad campaign management specialist
Certifications: Google Ads Search, Google Ads Display, Google Ads Video, Google Ads Shopping, Google Analytics

--- INSTRUCTOR #13 ---
Name: Monie Ferran
Title: MCT, MCP, MCSE, MCSA, MCITP
Profile: https://www.inventivemedia.com.ph/monie-m-ferran/
Skills: Windows Server, Active Directory, Microsoft Azure, Hyper-V, System Administration, Cloud Computing, PowerShell, Networking
Experience: Cloud Solutions Architect and Systems Engineer; Microsoft Certified Trainer with extensive experience in Microsoft technologies and infrastructure
Certifications: Microsoft Certified Trainer (MCT), MCSE (Cloud Platform & Infrastructure), MCSA (Windows Server 2012/2016), MCITP (Enterprise Administrator), MCP

--- INSTRUCTOR #14 ---
Name: Wally Lim
Title: Motion Graphics Artist / SFX Artist
Profile: https://www.inventivemedia.com.ph/wally-v-lim/
Skills: Adobe Photoshop, Adobe Illustrator, Adobe InDesign, CorelDraw, Adobe Premiere, Adobe After Effects, Adobe Audition, Sony Vegas, Final Cut Pro, Digital Printing
Experience: Graphics Specialist/Broadcast Designer/SFX Artist at TV5 ABC Development Corporation (2011–Present); Post Engineer/Motion Graphics Artist at Evolution Post/GMA7 (2010–2011); Multimedia Artist at Sportaclez (2009–2010); Multi Media Designer at U-LEARN Solutions (2006–Present)
Education: Immaculate Conception College — BS Secondary Education, Major in Math and Science

--- INSTRUCTOR #15 ---
Name: Monika Ortega
Title: Web and Multimedia Specialist
Profile: https://www.inventivemedia.com.ph/monika-ortega/
Skills: SEO, SEM, Social Media Marketing, Google AdWords, Google Analytics, Lead Generation, Market Research, HTML, CSS, Bootstrap, Adobe Photoshop, Adobe InDesign
Experience: Demand Generation Manager at Botify (Aug 2022–Present); Director for Partnership Communications at Women in AI (May 2022–Present); Digital Marketing Manager at Element, Inc (Dec 2021–Aug 2022); Head of Marketing at Senti AI (Sep 2019–Dec 2021); Specialist Instructor for Digital Marketing at CIIT College (Jul 2019–Mar 2022)
Education: De La Salle University — BSC Business Management; Development Academy of the Philippines — Data Analyst
Certifications: HubSpot Email Marketing, AWS Business Professional, AWS Machine Learning, HubSpot Inbound Marketing
Awards: #1 Web Designer by DotPH (Apr 2013), 3rd Place Globe Nationwide Teknobiz Idea Challenge (Feb 2009)

--- INSTRUCTOR #16 ---
Name: Danniel Libor
Title: Web Developer | Software Engineer
Profile: https://www.inventivemedia.com.ph/danniel-libor/
Skills: PHP, Laravel/Lumen, HTML, CSS, Bootstrap, Vue, JavaScript, Node, Express, Electron, Nuxt, Git, MySQL, Vuetify, PHPUnit, Docker, AWS, RabbitMQ
Experience: Software Engineer at Yondu, Inc (Jul 2022–Present); Full Stack Web Development Instructor at KodeGo (Jan 2023–Present); IT Software Developer at Bizmates Philippines (May 2019–Jul 2022)
Education: San Beda College of Alabang — BS Information Technology
Certifications: MTA (Python, HTML/CSS, Mobility, Windows OS, HTML5 App Dev, Database Admin, Software Development), MOS (Word, Excel, PowerPoint, Access), Udemy AWS Certified Developer Associate, Udemy Microservices Architecture

--- INSTRUCTOR #17 ---
Name: Ced Rick Flores
Title: Java Developer
Profile: https://www.inventivemedia.com.ph/ced-rick-flores/
Skills: HTML, CSS, Bootstrap, PHP, Laravel, Java, SQL, Python, C#, C++, Spring Framework, Elasticsearch, Swagger, PostgreSQL, Redis, JUnit, Mockito
Experience: Java Developer at Collabera Technologies/myCWT (Feb 2022–Present) — developing microservices with Java and Spring Framework; Associate Software Engineer at Infor (Sep 2020–Feb 2022) — backend and search engine APIs
Education: University of the Philippines Manila — BS Computer Science (Statistics Track)
Projects: ProGene (deep learning tool for melanoma prognosis), Scheduling Algorithms Visualizer

--- INSTRUCTOR #18 ---
Name: Engr. Reynan Gelera
Title: FDAS Engineer
Profile: https://www.inventivemedia.com.ph/reynan-a-gelera/
Skills: Fire Detection and Alarm Systems, CCTV, Electrical Designing, Lead Generation, Sales and Marketing
Experience: Enterprise Sales Manager at Honeywell Security and Fire (Dec 2015–Dec 2016); Assistant General Manager at HMR Solutions Inc (Nov 2012–Nov 2015); Senior Pre-Sales/Design Engineer at Capital Technology in Qatar (Mar 2008–Mar 2012) — won major projects including New Doha International Airport
Education: Adamson University — BS Electronics and Communications Engineering; Rizal Technological University — MBA
Certifications: Registered Electronics and Communications Engineer (PRC), Certified Project Management Associate (Australian Wide Business Training), Edwards Vigilant Fire Alarm Certified Installer

--- INSTRUCTOR #19 ---
Name: Ellison Bartolome
Title: MCT | Database Administrator
Profile: https://www.inventivemedia.com.ph/ellison-bartolome/
Skills: Microsoft Azure, Database Administration, DB2, MySQL, Teradata, ITIL 4, Linux/Unix/Windows Systems
Experience: Senior DB2/MySQL DBA at Manulife IT Delivery Center (Apr 2022–Present); Senior Teradata DBA at Teradata/EClaro (Feb 2016–Apr 2022) — Lead DBA for North American accounts; Faculty at UST Computer Science Department (Aug 2013–May 2018) — Best Thesis Adviser Awardee 2018
Education: University of Santo Tomas — BS Computer Science
Certifications: Microsoft Certified Trainer, Azure Solutions Architect Expert, Azure Administrator Associate, Azure AI Engineer Associate, Azure AI/Data/AZ-900 Fundamentals, Oracle Cloud Infrastructure Associate, ITIL 4 Foundations, Teradata Certified Professional

--- INSTRUCTOR #20 ---
Name: Sil Silvestre
Title: CPA, Digital Marketing Consultant
Profile: https://www.inventivemedia.com.ph/sil-m-silvestre/
Skills: SEO, Google AdWords, Digital Media Buying, Content Marketing, Social Media Marketing, Email Marketing, WordPress, Magento, Joomla, Drupal, Amazon Ads, Walmart Ads
Experience: Senior Advertising Executive at JUVO+ (Oct 2021–Present) — managing $100k monthly ad budget across Amazon, Walmart, Target, eBay; Digital Marketing Coach at ShoreMarketing (Oct 2017–Present); Country Manager at iMoney Philippines (Jun 2013–Sep 2014)
Education: Pamantasan ng Lungsod ng Maynila — BS Accountancy
Certifications: Google AdWords, Google Analytics, HubSpot Inbound Marketing

--- INSTRUCTOR #21 ---
Name: Vincent Valenzuela
Title: Creative Director | Video Specialist
Profile: https://www.inventivemedia.com.ph/vincent-valenzuela/

--- INSTRUCTOR #22 ---
Name: Eizel Arianne Jugueta
Title: Multimedia & Design Specialist
Profile: https://www.inventivemedia.com.ph/eizel-arianne-d-c-jugueta/
Skills: HTML, CSS, Adobe Photoshop, Adobe Lightroom, Adobe Illustrator, Adobe InDesign, Adobe XD, Adobe Animate, Adobe Dreamweaver
Experience: Graphic Designer at Microsourcing Phils. (Feb 2015–Present) — designs gift & loyalty cards for Moneris Solutions; Web Graphic Designer at Ensogo Phils. (Sep 2014–Dec 2014); Graphics Artist at Unison Computer Systems (Dec 2012–Sep 2014); Internet Marketer/Graphics Artist at Philippine Science Centrum (Feb 2012–Oct 2012)
Education: ICCT Colleges Foundation Inc. — BS Information Technology

--- INSTRUCTOR #23 ---
Name: Bienvenido Basal
Title: Web and Multimedia Specialist
Profile: https://www.inventivemedia.com.ph/bienvenido-s-basal/
Skills: HTML, CSS, Bootstrap, PHP, Laravel, CodeIgniter, Java, SQL, Python, C#, C++, Adobe Photoshop, CorelDraw, Adobe Animate, Adobe Premiere, Adobe Captivate, Adobe Dreamweaver, Google Sketchup, Maya, Studio Max
Experience: Head of MIS Section at Foreign Service Institute, DFA (Apr 2012–Present); Part-Time Lecturer at Inventive Media (Aug 2015–Jun 2019); Part-Time Instructor at Pamantasan ng Valenzuela (2013–Present); IT Professor at multiple institutions
Education: Soongsil University (Korea) — MEng, Global ICT Convergence; Technological University of the Philippines — MA Education, Major in Educational Technology; Caloocan City Polytechnic College — BS Industrial Education

--- INSTRUCTOR #24 ---
Name: James Bañez
Title: Full-Stack Developer
Profile: https://www.inventivemedia.com.ph/james-banez/
Skills: HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, Laravel, CodeIgniter, Python, Java, Microsoft Azure, MySQL, Oracle, Google Cloud Platform, C#, ASP.NET, Spring MVC, Django
Experience: Sr. Specialist at NetSuite Philippines Inc. (2015–Present); Senior Specialist on Applications Development at Maersk Global Services Centres (2014–2015); Sr. Software Analyst and Developer at FurtherEdge Inc. (2013–2014)
Education: STI College Angeles City — BS Computer Science

--- INSTRUCTOR #25 ---
Name: Josef Amarra
Title: Web Developer | Digital Marketing Specialist
Profile: https://www.inventivemedia.com.ph/josef-amarra/
Skills: HTML, CSS, Bootstrap, JavaScript, jQuery, Java, Perl, C/C++, C#, .NET, Microsoft SQL Server
Experience: Co-Founder of MAYANI (May 2019–Present) — agri-ecommerce platform connecting 23,000+ farmers to 10,000+ customers, backed by ADB, AgFunder, World Bank-IFC; Software Engineer at FactSet Philippines (Nov 2010–Apr 2012); Co-owner at Union Digital PH — digital marketing firm
Education: De La Salle University Manila — BS Computer Science, Software Technology specialization

--- INSTRUCTOR #26 ---
Name: Justin V. Macugay
Title: MCP, MCT, MCITP, MCTS
Profile: https://www.inventivemedia.com.ph/justin-v-macugay/
Skills: Windows Server, Active Directory, Networking, System Administration, Hyper-V, PowerShell
Experience: Microsoft Certified Trainer with experience in Windows Server administration and enterprise infrastructure
Certifications: Microsoft Certified Trainer (MCT), Microsoft Certified Professional (MCP), MCITP, MCTS

--- INSTRUCTOR #27 ---
Name: Paolo Bertola
Title: Director, VFX Designer, Film Editor, Concept Artist, Writer
Profile: https://www.inventivemedia.com.ph/paolo-bertola/
Skills: Adobe Premiere Pro, Adobe Photoshop, Adobe After Effects, Particle Illusion, 3DStudio Max, Poser Pro; Expertise in Direction, Screenplay, VFX Design, Video Editing, Video Compositing, 3D Animation, Fight Choreography
Experience: Extensive filmography since 1994 with 25+ films (IMDB listed); VFX Supervisor for 60+ cinema/TV productions including Imagine You & Me, Princess in the Palace, Kidlat Serial TV (64 episodes), Arachnicide; Directed commercials for Ferrero, Salvatore Ferragamo, E.N.I., General Electric, Parmigiano Reggiano, GoldenLady

--- INSTRUCTOR #28 ---
Name: Muriel Orobia
Title: Digital Marketing Manager
Profile: https://www.inventivemedia.com.ph/muriel-l-orobia/
Skills: SEM, Google AdWords, Google Search/Display/Mobile Advertising, Google Analytics, Adobe Photoshop, Adobe Illustrator, PPC, Social Media Marketing
Experience: Digital Communications Officer at Wentworth Healthcare, Australia (Oct 2022–Present); Co-Founder at Sygnify (Jul 2020–Present); Head of Digital at Century Properties (Jun 2017–Mar 2018); Digital Marketing Manager at Columbus Capital (Jul 2014–Jun 2017); Senior Campaign Optimiser at Google ANZ/VXI Global Solutions (Jul 2012–Sep 2014)
Education: Our Lady of Fatima University
Certifications: Google AdWords Fundamentals, Google Search/Display/Mobile Advertising, Google Analytics, Adobe Photoshop, Adobe Illustrator, Facebook Blueprint

--- INSTRUCTOR #29 ---
Name: Roman Marcus Abad
Title: Creative Director | Filmmaker
Profile: https://www.inventivemedia.com.ph/roman-marcus-abad/
Skills: Video Production, Media Production, Art Direction, Creative Direction, Digital Marketing, Storytelling, Digital Media, Advertising, Videography, Photography, Video Post-Production
Experience: Creative Director at Penbrothers (Feb 2023–Present); Freelance Film & Creative Director (Jun 2012–Present); Creative Director at Grace School of Theology (Oct 2019–Jun 2022); Content & Video Production Manager at EcoRenew Group (Oct 2018–Aug 2019); Founder & Creative Director at Empyre Media (Mar 2017–Oct 2018)
Education: Meridian International College — BA Film; San Beda College Alabang — BA Communications and Media Studies
Awards: Grand Prize Winner, Vision Petron National Student Art Competition 2013 (first short film category)

--- INSTRUCTOR #30 ---
Name: Ruel G. Nopal
Title: Web Development Specialist
Profile: https://www.inventivemedia.com.ph/ruel-g-nopal/
Skills: HTML, CSS, Bootstrap, XML, JavaScript, jQuery, PHP, Laravel, Ruby on Rails, Agile, MySQL, WordPress, Drupal, Joomla, Photoshop, SEO
Experience: Head of Engineering and Security at Prosperna (Mar 2022–Present); Mentor/Advisor at Newchip Accelerator (Dec 2022–Present); DevSecOps Associate Manager at Accenture (Apr 2021–Mar 2022); Founder of RaketHostPH (Apr 2016–Jan 2020); Senior Full Stack Developer at Protos EzyVA (Apr 2013–Apr 2016)
Education: Southern Leyte State University — BS Civil Engineering; Informatics — Web Development
Awards: Featured in Coderstrust Magazine (Bangladesh), Radio Guest on DZME discussing freelancing

--- INSTRUCTOR #31 ---
Name: Carlo L. Pantilano
Title: MCSA, MCSE, MCITP, MCTS
Profile: https://www.inventivemedia.com.ph/carlo-l-pantilano/
Skills: Networking (Wired and Wireless), Windows Server, Citrix, EMC, Cloud Computing, Structured Cabling, Firewall
Experience: Technical Architect at SoftwareOne Inc. (Dec 2016–Present); Technical Consultant at Dimension Data Inc. (Sep 2013–Dec 2016); Solutions Consultant at Phil-Data Business Systems (Mar 2012–Aug 2013)
Certifications: Citrix Certified Professional/Associate (Virtualization), EMC Information Storage Associate, MCSE (Private Cloud, Cloud Platform & Infrastructure, Productivity, Communication), MCSA (Windows Server 2012, Windows 7), MCITP (Virtualization Administrator, Enterprise Desktop Administrator), HTML5 with JavaScript and CSS3 Specialist

--- INSTRUCTOR #32 ---
Name: Kyeth Harryz C. Pallanan
Title: MCT, MCTS, MCP, MCSA, CCNA
Profile: https://www.inventivemedia.com.ph/kyeth-harryz-c-pallanan/
Skills: Windows Server, Active Directory, Networking, Cisco Technologies, System Administration
Experience: IT Technical Trainer and Systems Engineer with Microsoft and Cisco certifications
Certifications: Microsoft Certified Trainer (MCT), MCTS, MCP, MCSA, Cisco CCNA

--- INSTRUCTOR #33 ---
Name: Harold B. Tomas
Title: MCP, MCTS, MCITP, TESDA NC-II
Profile: https://www.inventivemedia.com.ph/harold-b-tomas/
Skills: Windows Server, Networking (Wired and Wireless), Firewall, Windows Operating Systems, PowerShell, Computer Hardware and Software, Structured Cabling
Experience: IT Operation Team Lead at Volenday (Oct 2022–Present); IT Infrastructure Architect at Volenday (Oct 2018–Oct 2022); Senior Systems Administrator at ProV International (Apr 2012–Oct 2018); System Administrator at UST Global (Aug 2011–Apr 2012); IT R&D Systems Administrator at TELUS International Philippines (Apr 2010–Jul 2011)
Education: Adamson University — BS Computer Engineering; Don Bosco Technical Institute, Tarlac
Certifications: ITIL Foundation Level, MCP/MCTS/MCITP Enterprise Administrator (Windows Server 2003/2008, Windows 7), TESDA NC-II Computer Hardware Servicing
Awards: Outstanding IT Specialist of the Year 2008 (ePLDT Ventus)

--- INSTRUCTOR #34 ---
Name: Sydel Palinlin
Title: Web Development Specialist
Profile: https://www.inventivemedia.com.ph/sydel-palinlin/
Skills: HTML, CSS, JavaScript, PHP, Laravel, React, Vue, Angular, Node.js, Python, Ruby on Rails, MySQL, PostgreSQL, MongoDB, Git
Experience: Web Developer and Software Engineer with extensive experience in full-stack web development across multiple frameworks and languages

--- INSTRUCTOR #35 ---
Name: Ritche Villarico
Title: CoE, MCT, MCSA, MCP, MCITP, ITILv3
Profile: https://www.inventivemedia.com.ph/ritche-m-villarico/
Skills: Active Directory, Windows Server, DNS, System Administration, Network Administration, VPN, Firewalls, Cisco Technologies, TCP/IP, Network Security, Linux, Cloud Computing, Virtualization, ITIL, Telecommunications
Experience: Assistant Manager IT / Shipboard IT Manager at Royal Caribbean Cruises Ltd. (Mar 2017–Present); ITIS Information Technology Infrastructure Specialist at Royal Caribbean (Nov 2013–Apr 2016); Senior Server Admin Wintel at Fidelity National Information Services (2011–2012); Lecturer at Far Eastern University (May 2012–Mar 2013)
Education: Far Eastern University — Masters in Information Technology; Technological Institute of the Philippines — BS Computer Engineering
Certifications: Microsoft Certified Trainer, MCP, Linux Professional Institute LPIC-1

--- INSTRUCTOR #36 ---
Name: Kirsten Nicole Mendoza
Title: Multimedia & Design Specialist
Profile: https://www.inventivemedia.com.ph/kirsten-nicole-mendoza/
Skills: Adobe Illustrator, Adobe Photoshop, Google AdWords, Google Analytics, Search Engine Marketing
Experience: Google Ads Strategist at Concentrix (May 2021–May 2022) — Paid Search, Display, Video Campaigns; Marketing Director at Anytime Fitness (Jun 2020–Sep 2020); Freelance Designer at Cinqo Media Inc. (Jan 2015–Mar 2020); Graphic and Product Designer at SMB Global HK Ltd in Hangzhou, China (Oct 2013–May 2014)
Education: University of Santo Tomas — Advertising, Architecture & Fine Arts; First Academy of Computer Arts — Visual Graphic Design; Philippine Center for Creative Imaging — Web Design
Certifications: Google Ads (Shopping, Display, Video, Search)
Awards: Club Manager of the Year (Anytime Fitness Inspire Brands, Dec 2017)

--- INSTRUCTOR #37 ---
Name: John Vincent Paragna
Title: MCP, MCTS, MCSA, MCITP, ITIL V3
Profile: https://www.inventivemedia.com.ph/john-vincent-paragna/
Skills: Cisco Networking, Windows Server, Windows Operating System, Technical Support, Hyper-V, Network Administration, VoIP, System Administration, Security, Telephony, Virtualization, Disaster Recovery, Firewalls, Data Privacy, ITIL Process
Experience: Assistant Manager at Infosys BPM (Dec 2018–Present) — managing IT staffs, service design, capacity/security management; Technical Director at STRATOC Inc/Accedeo Inc (Mar 2016–Nov 2018); Senior Network Engineer at MiraMed (May 2013–Mar 2016); Regional IT Support Engineer at Asia Halcrow/Ch2mHill covering whole APAC (Jan 2010–Nov 2011)
Education: AMA Computer University — BS Electronics and Communication Engineering; Zero To Mastery Academy — Ethical Hacking
Certifications: Certified LEAN SIX SIGMA Yellow Belt, MCP/MCTS/MCSA/MCITP, ITIL V3, NSE 1/2/3 (Fortinet)

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

/*
 * @author Lathrell Pagsuguiron
 * @copyright 2026 Inventive Media - Web Developer Intern
 * @link https://linkedin.com/in/lathrell
 */
