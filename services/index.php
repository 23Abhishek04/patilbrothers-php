<?php
$pageTitle = "Our Services | Patil Brothers";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <meta
        name="description"
        content="Explore Patil Brothers' precision sheet metal fabrication, cutting, bending, welding and custom manufacturing services."
    >

    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">
</head>

<body>

    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main>

        <!-- Services Hero Section -->
        <section id="servicesHero"
            class="service-hero relative isolate flex min-h-[560px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[620px] lg:min-h-[700px]">

            <!-- Background Image -->
            <img
                src="/assets/images/services-hero.png"
                alt="Precision sheet metal fabrication at Patil Brothers"
                fetchpriority="high"
                class="service-hero-image absolute inset-0 -z-30 h-full w-full object-cover object-[62%_center]"
            >

            <!-- Overlays -->
            <div class="absolute inset-0 -z-20 bg-gradient-to-r from-[#17191d]/95 via-[#17191d]/75 to-[#17191d]/20 max-md:from-[#17191d]/90 max-md:via-[#17191d]/75 max-md:to-[#17191d]/55"></div>

            <div class="absolute inset-0 -z-20 bg-gradient-to-t from-[#17191d]/70 via-transparent to-[#17191d]/30"></div>

            <!-- Red Accents -->
            <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-[48%] w-36 -skew-x-[22deg] bg-gradient-to-b from-red-700/50 to-transparent sm:w-52"></div>

            <div class="pointer-events-none absolute -right-24 top-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-b from-red-700/30 to-transparent lg:block"></div>

            <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-px w-full bg-gradient-to-r from-red-600/70 via-white/10 to-transparent"></div>

            <!-- Hero Content -->
            <div class="service-hero-content mx-auto w-full max-w-[1440px] px-5 pb-16 pt-36 sm:px-8 sm:pb-20 sm:pt-40 lg:px-12 lg:pb-24 lg:pt-44">

                <div class="service-hero-copy max-w-3xl">

                    <!-- Breadcrumb -->
                    <nav aria-label="Breadcrumb" class="service-hero-breadcrumb mb-7">
                        <ol class="inline-flex flex-wrap items-center gap-3 rounded-full border border-white/20 bg-[#17191d]/55 px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-white/75 backdrop-blur-md sm:text-sm">
                            <li>
                                <a href="/" class="transition hover:text-white">Home</a>
                            </li>
                            <li aria-hidden="true" class="text-white/40">/</li>
                            <li aria-current="page" class="text-[#ff303b]">Services</li>
                        </ol>
                    </nav>

                    <!-- Eyebrow -->
                    <p class="service-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        What We Do
                    </p>

                    <!-- Heading -->
                    <h1 class="service-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Our <span class="text-[#ff303b]">Services</span>
                    </h1>

                    <div class="service-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>

                    <!-- Description -->
                    <p class="service-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">
                        From precision sheet metal fabrication to custom manufacturing solutions,
                        we help turn your requirements into dependable, high-quality components.
                    </p>

                    <!-- CTA -->
                    <div class="service-hero-cta mt-8 flex flex-wrap items-center gap-4">
                        <a
                            href="/contact"
                            class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 hover:bg-red-700 sm:px-7"
                        >
                            Request a Quote
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"
                            >
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Services Cards / Content -->
        <?php require __DIR__ . '/../includes/services.php'; ?>

    </main>

    <?php require __DIR__ . '/../includes/footer.php'; ?>

    <!-- Services Hero CSS -->
    <style>
        .service-hero-image {
            transform: scale(1.045);
            opacity: 0.65;
            transition:
                transform 1600ms cubic-bezier(0.22, 1, 0.36, 1),
                opacity 1000ms ease;
        }

        .service-hero-entered .service-hero-image {
            transform: scale(1);
            opacity: 1;
        }

        .service-hero-copy > * {
            opacity: 0;
            transform: translateY(22px);
            transition:
                opacity 700ms ease,
                transform 750ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .service-hero-entered .service-hero-breadcrumb {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 100ms;
        }

        .service-hero-entered .service-hero-eyebrow {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 220ms;
        }

        .service-hero-entered .service-hero-title {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 320ms;
        }

        .service-hero-entered .service-hero-rule {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 430ms;
        }

        .service-hero-entered .service-hero-description {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 520ms;
        }

        .service-hero-entered .service-hero-cta {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 650ms;
        }

        .service-hero-cta a {
            transition:
                background-color 250ms ease,
                transform 250ms ease,
                box-shadow 250ms ease;
        }

        .service-hero-cta a:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -12px rgba(220, 38, 38, 0.65);
        }

        @media (max-width: 480px) {
            .service-hero-copy {
                width: 100%;
            }

            .service-hero-title {
                font-size: clamp(2.75rem, 12vw, 3.5rem);
                overflow-wrap: break-word;
            }

            .service-hero-breadcrumb ol {
                max-width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .service-hero-image,
            .service-hero-copy > *,
            .service-hero-cta a {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>

    <!-- Services Hero Animation -->
    <script>
        (function () {
            var hero = document.getElementById('servicesHero');

            if (!hero) return;

            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                hero.classList.add('service-hero-entered');
                return;
            }

            window.requestAnimationFrame(function () {
                hero.classList.add('service-hero-entered');
            });
        })();
    </script>

</body>
</html>
