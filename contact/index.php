
<?php
$pageTitle = "Contact Us | Patil Brothers";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="Contact Patil Brothers for precision sheet metal fabrication, custom manufacturing, laser cutting, bending and fabrication services.">

    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">
</head>

<body>

    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main>

        <!-- CONTACT HERO -->
        <section class="contact-hero relative isolate flex min-h-[480px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[540px] lg:min-h-[600px]">

            <img
                src="/assets/images/contactus-hero.png"
                alt="Precision laser cutting at Patil Brothers"
                fetchpriority="high"
                class="contact-hero-image absolute inset-0 -z-30 h-full w-full object-cover object-[62%_center]"
            >

            <div class="absolute inset-0 -z-20 bg-gradient-to-r from-[#17191d]/95 via-[#17191d]/78 to-[#17191d]/25 max-md:from-[#17191d]/92 max-md:via-[#17191d]/80 max-md:to-[#17191d]/60"></div>

            <div class="absolute inset-0 -z-20 bg-gradient-to-t from-[#17191d]/70 via-transparent to-[#17191d]/35"></div>

            <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-[48%] w-36 -skew-x-[22deg] bg-gradient-to-b from-red-700/45 to-transparent sm:w-52"></div>

            <div class="pointer-events-none absolute -right-24 top-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-b from-red-700/30 to-transparent lg:block"></div>

            <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-px w-full bg-gradient-to-r from-red-600/70 via-white/10 to-transparent"></div>

            <div class="mx-auto w-full max-w-[1440px] px-5 pb-14 pt-32 sm:px-8 sm:pb-16 sm:pt-36 lg:px-12 lg:pb-20 lg:pt-40">

                <div class="contact-hero-copy max-w-3xl">

                    <nav aria-label="Breadcrumb" class="contact-hero-breadcrumb mb-6">
                        <ol class="inline-flex flex-wrap items-center gap-3 rounded-full border border-white/20 bg-[#17191d]/55 px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-white/75 backdrop-blur-md sm:text-sm">
                            <li>
                                <a href="/" class="transition hover:text-white">Home</a>
                            </li>
                            <li aria-hidden="true" class="text-white/40">/</li>
                            <li aria-current="page" class="text-[#ff303b]">Contact Us</li>
                        </ol>
                    </nav>

                    <p class="contact-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        Let's Start a Conversation
                    </p>

                    <h1 class="contact-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Contact <span class="text-[#ff303b]">Us</span>
                    </h1>

                    <div class="contact-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>

                    <p class="contact-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">
                        Have a project in mind? Talk to our team about precision sheet metal
                        fabrication, custom manufacturing, and a solution tailored to your requirements.
                    </p>

                    <div class="contact-hero-actions mt-8 flex flex-wrap items-center gap-4">

                        <a
                            href="tel:+919595880764"
                            class="group inline-flex items-center gap-3 rounded-lg border border-white/25 bg-[#17191d]/55 px-6 py-3.5 text-sm font-semibold text-white backdrop-blur-md transition hover:border-[#e31e2f] hover:bg-[#292d32]/80 sm:px-7"
                        >
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 shrink-0 text-[#ff303b]" aria-hidden="true">
                                <path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z"/>
                            </svg>
                            Call Us: +91 959-588-0764
                        </a>

                        <a
                            href="#contact-form"
                            class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 transition hover:bg-red-700 sm:px-7"
                        >
                            Send an Enquiry
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-hover:translate-x-1" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </section>


        <!-- CONTACT DETAILS AND FORM -->
        <section id="contact" class="contact-section relative overflow-hidden bg-white py-12 sm:py-16 lg:py-20">

            <div class="mx-auto max-w-[1240px] px-5 sm:px-8">

                <div class="grid min-w-0 items-start gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.05fr)] lg:gap-12">

                    <!-- Contact Details -->
                    <div class="contact-reveal contact-from-left min-w-0">

                        <div class="flex items-center gap-3">
                            <span class="h-[3px] w-9 bg-red-600"></span>
                            <span class="text-sm font-semibold uppercase tracking-wide text-red-600">Contact Us</span>
                        </div>

                        <h2 class="mt-4 text-4xl font-extrabold leading-tight tracking-tight text-[#15171a] sm:text-5xl">
                            Get In <span class="text-red-600">Touch</span>
                        </h2>

                        <p class="mt-3 max-w-md text-base leading-relaxed text-gray-600">
                            Let's discuss your project requirements. Our team is ready to
                            help you find the right manufacturing solution.
                        </p>

                        <div class="mt-6 grid max-w-md gap-4 sm:grid-cols-2 lg:grid-cols-1">

                            <!-- Phone -->
                            <a href="tel:+919595880764"
                               class="contact-info-card group flex min-h-[88px] min-w-0 items-start gap-3 rounded-lg border border-gray-100 bg-white p-4 shadow-[0_2px_12px_rgba(0,0,0,0.08)] transition hover:-translate-y-1 hover:border-red-100 hover:shadow-md">

                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-md bg-red-50 text-red-600">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1.5a14 14 0 0 0 6.5 6.5L16 14l5 2v3a2 2 0 0 1-2 2A17 17 0 0 1 3 5Z"/>
                                    </svg>
                                </span>

                                <span class="min-w-0 pt-0.5">
                                    <span class="block text-xs text-gray-500">Phone Number</span>
                                    <span class="mt-1 block text-sm font-semibold leading-snug text-gray-900">+91 959-588-0764</span>
                                    <span class="block text-sm font-semibold leading-snug text-gray-900">+91 85306 81818</span>
                                </span>
                            </a>

                            <!-- Email -->
                            <a href="mailto:precisionengineering71@gmail.com"
                               class="contact-info-card group flex min-h-[88px] min-w-0 items-start gap-3 rounded-lg border border-gray-100 bg-white p-4 shadow-[0_2px_12px_rgba(0,0,0,0.08)] transition hover:-translate-y-1 hover:border-red-100 hover:shadow-md">

                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-md bg-red-50 text-red-600">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="14" rx="2"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6"/>
                                    </svg>
                                </span>

                                <span class="min-w-0 pt-0.5">
                                    <span class="block text-xs text-gray-500">Business Email</span>
                                    <span class="mt-1 block break-all text-sm font-semibold leading-snug text-gray-900">precisionengineering71@gmail.com</span>
                                    <span class="block break-all text-sm font-semibold leading-snug text-gray-900">info@precisionengineering1.com</span>
                                </span>
                            </a>

                        </div>
                    </div>


                    <!-- WhatsApp Enquiry Form -->
                    <div id="contact-form"
                         class="contact-reveal contact-from-right min-w-0 scroll-mt-28 rounded-xl border border-gray-100 bg-white p-5 shadow-[0_2px_14px_rgba(0,0,0,0.09)] sm:p-6">

                        <div class="flex items-center gap-3">
                            <span class="h-[3px] w-9 bg-red-600"></span>
                            <span class="text-sm font-semibold uppercase tracking-wide text-red-600">Send Us A Message</span>
                        </div>

                        <h3 class="mt-3 text-2xl font-bold tracking-tight text-[#15171a] sm:text-3xl">
                            Request a Quote
                        </h3>

                        <p class="mt-1 text-sm leading-relaxed text-gray-500">
                            Fill out the form to prepare your enquiry in WhatsApp.
                        </p>

                        <form id="whatsapp-contact-form" class="mt-5 space-y-3.5">

                            <div class="grid min-w-0 gap-3 sm:grid-cols-2">
                                <div class="contact-field min-w-0">
                                    <input id="name" name="name" type="text" placeholder=" " required autocomplete="name"
                                           class="peer h-[58px] w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20">
                                    <label for="name" class="contact-floating-label">Your Name <span class="text-red-600">*</span></label>
                                </div>

                                <div class="contact-field min-w-0">
                                    <input id="company" name="company" type="text" placeholder=" " autocomplete="organization"
                                           class="peer h-[58px] w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20">
                                    <label for="company" class="contact-floating-label">Company Name</label>
                                </div>
                            </div>

                            <div class="contact-field min-w-0">
                                <input id="email" name="email" type="email" placeholder=" " required autocomplete="email"
                                       class="peer h-[58px] w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20">
                                <label for="email" class="contact-floating-label">Email Address <span class="text-red-600">*</span></label>
                            </div>

                            <div class="grid min-w-0 gap-3 sm:grid-cols-2">
                                <div class="contact-field min-w-0">
                                    <input id="phone" name="phone" type="tel" placeholder=" " autocomplete="tel"
                                           class="peer h-[58px] w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20">
                                    <label for="phone" class="contact-floating-label">Phone Number</label>
                                </div>

                                
                            </div>

                            <div class="contact-field min-w-0">
                                <textarea id="message" name="message" placeholder=" " rows="5" required
                                          class="peer min-h-[140px] w-full resize-y rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 pb-3 pt-5 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20"></textarea>
                                <label for="message" class="contact-floating-label contact-textarea-label">Your Message <span class="text-red-600">*</span></label>
                            </div>

                            <button type="submit"
                                    class="group inline-flex min-h-11 items-center justify-center gap-2 rounded-md bg-[#17191d] px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600 focus-visible:ring-offset-2">
                                Send Message
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6"/>
                                </svg>
                            </button>

                            <p id="contact-status" role="status" aria-live="polite" class="min-h-5 text-sm"></p>
                        </form>
                    </div>

                </div>

                <!-- Google Maps -->
                <div class="contact-reveal contact-map mt-8 sm:mt-10">
                    <div class="contact-map-card relative h-[280px] overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-[0_20px_40px_-12px_rgba(0,0,0,0.15)] sm:h-[300px] lg:h-[295px]">
                        <iframe
                            src="https://www.google.com/maps?q=Sr.+No.+230%2F7%2C+S-Block%2C+MIDC%2C+Bhosari+411026&output=embed"
                            title="Patil Brothers location on Google Maps"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen
                            class="h-full w-full border-0">
                        </iframe>
                    </div>
                </div>

            </div>
        </section>

    </main>


    <!-- CONTACT PAGE STYLES -->
    <style>
        .contact-hero-image {
            transform: scale(1.045);
            opacity: .65;
            transition: transform 1600ms cubic-bezier(.22,1,.36,1), opacity 1000ms ease;
        }

        .contact-hero.contact-hero-entered .contact-hero-image {
            transform: scale(1);
            opacity: 1;
        }

        .contact-hero-copy > * {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 700ms ease, transform 750ms cubic-bezier(.22,1,.36,1);
        }

        .contact-hero.contact-hero-entered .contact-hero-breadcrumb { opacity: 1; transform: translateY(0); transition-delay: 100ms; }
        .contact-hero.contact-hero-entered .contact-hero-eyebrow { opacity: 1; transform: translateY(0); transition-delay: 220ms; }
        .contact-hero.contact-hero-entered .contact-hero-title { opacity: 1; transform: translateY(0); transition-delay: 320ms; }
        .contact-hero.contact-hero-entered .contact-hero-rule { opacity: 1; transform: translateY(0); transition-delay: 430ms; }
        .contact-hero.contact-hero-entered .contact-hero-description { opacity: 1; transform: translateY(0); transition-delay: 520ms; }
        .contact-hero.contact-hero-entered .contact-hero-actions { opacity: 1; transform: translateY(0); transition-delay: 650ms; }

        .contact-hero-actions a {
            transition: background-color 250ms ease, border-color 250ms ease, transform 250ms ease, box-shadow 250ms ease;
        }

        .contact-hero-actions a:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -12px rgba(220,38,38,.45);
        }

        .contact-field {
            position: relative;
        }

        .contact-floating-label {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
            font-size: 15px;
            transition: opacity 150ms ease;
        }

        .contact-field input:focus + .contact-floating-label,
        .contact-field input:not(:placeholder-shown) + .contact-floating-label,
        .contact-field textarea:focus + .contact-floating-label,
        .contact-field textarea:not(:placeholder-shown) + .contact-floating-label {
            opacity: 0;
        }

        .contact-field .contact-textarea-label {
            top: 20px;
            transform: none;
        }

        .contact-reveal {
            opacity: 0;
            transition: opacity 700ms ease, transform 700ms cubic-bezier(.2,.7,.2,1);
            will-change: opacity, transform;
        }

        .contact-from-left { transform: translate3d(-24px,0,0); }
        .contact-from-right { transform: translate3d(24px,16px,0); transition-delay: 100ms; }
        .contact-map { transform: translate3d(0,24px,0); transition-delay: 80ms; }

        .contact-reveal.contact-visible {
            opacity: 1;
            transform: translate3d(0,0,0);
        }

        .contact-info-card {
            transition: transform 250ms ease, border-color 250ms ease, box-shadow 250ms ease;
        }

        .contact-info-card:hover { transform: translateY(-4px); }

        .contact-map-card {
            transition: box-shadow 300ms ease, border-color 300ms ease;
        }

        .contact-map-card:hover {
            border-color: rgba(220,38,38,.28);
            box-shadow: 0 24px 48px -16px rgba(0,0,0,.42);
        }

        .contact-section input,
        .contact-section textarea {
            transition: border-color 220ms ease, background-color 220ms ease, box-shadow 220ms ease;
        }

        .contact-section button[type="submit"] {
            transition: background-color 220ms ease, transform 220ms ease, box-shadow 220ms ease;
        }

        .contact-section button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(220,38,38,.18);
        }

        @media (max-width: 480px) {
            .contact-hero-copy {
                width: 100%;
            }

            .contact-hero-title {
                font-size: clamp(2.75rem, 12vw, 3.5rem);
                overflow-wrap: break-word;
            }

            .contact-hero-breadcrumb ol {
                max-width: 100%;
            }

            .contact-hero-actions a {
                max-width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .contact-hero-image,
            .contact-hero-copy > *,
            .contact-hero-actions a,
            .contact-reveal,
            .contact-info-card,
            .contact-map-card,
            .contact-section input,
            .contact-section textarea,
            .contact-section button[type="submit"] {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
                animation: none !important;
            }
        }
    </style>


    <!-- CONTACT PAGE JAVASCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hero = document.querySelector(".contact-hero");
            const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            // Hero entrance animation
            if (hero) {
                if (reduceMotion) {
                    hero.classList.add("contact-hero-entered");
                } else {
                    requestAnimationFrame(function () {
                        hero.classList.add("contact-hero-entered");
                    });
                }
            }

            // Scroll reveal animations
            const elements = document.querySelectorAll(".contact-reveal");

            if (reduceMotion || !("IntersectionObserver" in window)) {
                elements.forEach(function (element) {
                    element.classList.add("contact-visible");
                });
            } else {
                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("contact-visible");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: "0px 0px -35px 0px"
                });

                elements.forEach(function (element) {
                    observer.observe(element);
                });
            }

            // WhatsApp-only enquiry form
            const form = document.getElementById("whatsapp-contact-form");
            const status = document.getElementById("contact-status");

            if (form) {
                form.addEventListener("submit", function (event) {
                    event.preventDefault();

                    if (!form.reportValidity()) {
                        return;
                    }

                    const data = new FormData(form);

                    const name = data.get("name")?.toString().trim() || "";
                    const company = data.get("company")?.toString().trim() || "";
                    const email = data.get("email")?.toString().trim() || "";
                    const phone = data.get("phone")?.toString().trim() || "";
                    
                    const message = data.get("message")?.toString().trim() || "";

                    const whatsappMessage = [
                        "New Enquiry - Patil Brothers",
                        "Name: " + name,
                        "Company: " + (company || "Not provided"),
                        "Email: " + email,
                        "Phone: " + (phone || "Not provided"),
                       
                        "Message: " + message
                    ].join("\n");

                    const whatsappUrl =
                        "https://wa.me/919595880764?text=" +
                        encodeURIComponent(whatsappMessage);

                    const whatsappWindow = window.open(
                        whatsappUrl,
                        "_blank",
                        "noopener,noreferrer"
                    );

                    if (status) {
                        status.textContent = whatsappWindow
                            ? "WhatsApp opened with your enquiry. Press Send in WhatsApp to deliver your message."
                            : "If WhatsApp did not open, allow pop-ups and submit the form again.";
                        status.className = "min-h-5 text-sm text-green-600";
                    }
                });
            }
        });
    </script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
