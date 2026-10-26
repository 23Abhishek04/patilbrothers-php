
<?php
$pageTitle = "Gallery | Patil Brothers";

$galleryImages = [
    [
        'src' => '/assets/images/gallery/1.png',
        'alt' => 'Project requirements and consultation',
    ],
    [
        'src' => '/assets/images/gallery/2.png',
        'alt' => 'Project quotation and engineering planning',
    ],
    [
        'src' => '/assets/images/gallery/3.png',
        'alt' => 'Precision manufacturing and production',
    ],
    [
        'src' => '/assets/images/gallery/4.png',
        'alt' => 'Finished project and delivery',
    ],
    [
        'src' => '/assets/images/gallery/5.png',
        'alt' => 'Sheet metal fabrication project',
    ],
    [
        'src' => '/assets/images/gallery/6.png',
        'alt' => 'Industrial manufacturing work',
    ],
    [
        'src' => '/assets/images/gallery/7.png',
        'alt' => 'Precision engineering components',
    ],
    [
        'src' => '/assets/images/gallery/8.png',
        'alt' => 'Fabrication and assembly work',
    ],
    [
        'src' => '/assets/images/gallery/9.png',
        'alt' => 'Completed industrial project',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="Explore Patil Brothers' precision engineering, sheet metal fabrication, and industrial manufacturing projects.">

    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">
</head>

<body>

    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main class="min-h-screen bg-white">

        <!-- GALLERY HERO -->
        <section class="gallery-hero relative isolate flex min-h-[560px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[620px] lg:min-h-[700px]">

            <!-- Background Image -->
            <img
                src="/assets/images/gallery-hero.png"
                alt="Industrial sheet metal fabrication and precision manufacturing at Patil Brothers"
                fetchpriority="high"
                class="gallery-hero-image absolute inset-0 -z-30 h-full w-full object-cover object-[62%_center]"
            >

            <!-- Dark Overlays -->
            <div class="absolute inset-0 -z-20 bg-gradient-to-r from-[#17191d]/95 via-[#17191d]/75 to-[#17191d]/20 max-md:from-[#17191d]/90 max-md:via-[#17191d]/75 max-md:to-[#17191d]/55"></div>

            <div class="absolute inset-0 -z-20 bg-gradient-to-t from-[#17191d]/70 via-transparent to-[#17191d]/30"></div>

            <!-- Red Accents -->
            <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-[48%] w-36 -skew-x-[22deg] bg-gradient-to-b from-red-700/50 to-transparent sm:w-52"></div>

            <div class="pointer-events-none absolute -right-24 top-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-b from-red-700/30 to-transparent lg:block"></div>

            <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-px w-full bg-gradient-to-r from-red-600/70 via-white/10 to-transparent"></div>

            <!-- Hero Content -->
            <div class="gallery-hero-content mx-auto w-full max-w-[1440px] px-5 pb-16 pt-36 sm:px-8 sm:pb-20 sm:pt-40 lg:px-12 lg:pb-24 lg:pt-44">

                <div class="gallery-hero-copy max-w-3xl">

                    <!-- Breadcrumb -->
                    <nav aria-label="Breadcrumb" class="gallery-hero-breadcrumb mb-7">
                        <ol class="inline-flex flex-wrap items-center gap-3 rounded-full border border-white/20 bg-[#17191d]/55 px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-white/75 backdrop-blur-md sm:text-sm">

                            <li>
                                <a href="/" class="transition hover:text-white">
                                    Home
                                </a>
                            </li>

                            <li aria-hidden="true" class="text-white/40">/</li>

                            <li aria-current="page" class="text-[#ff303b]">
                                Gallery
                            </li>

                        </ol>
                    </nav>

                    <!-- Eyebrow -->
                    <p class="gallery-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        Our Work in Focus
                    </p>

                    <!-- Heading -->
                    <h1 class="gallery-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Our <span class="text-[#ff303b]">Gallery</span>
                    </h1>

                    <div class="gallery-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>

                    <!-- Description -->
                    <p class="gallery-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">
                        Explore our precision engineering, sheet metal fabrication, and manufacturing
                        work—showcasing the craftsmanship, technology, and attention to detail behind every project.
                    </p>

                    <!-- CTA -->
                    <div class="gallery-hero-cta mt-8 flex flex-wrap items-center gap-4">
                        <a
                            href="/contact"
                            class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 transition hover:bg-red-700 sm:px-7"
                        >
                            Start a Project

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
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>


        <!-- GALLERY GRID -->
        <section
            aria-label="Project gallery"
            class="bg-white px-5 py-10 sm:px-8 sm:py-14 lg:px-10 lg:py-16"
        >
            <div class="mx-auto grid max-w-[1240px] grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">

                <?php foreach ($galleryImages as $index => $image): ?>

                    <div
                        class="gallery-image group relative aspect-[4/3] overflow-hidden rounded-lg bg-gray-100"
                        style="--gallery-delay: <?= (int) $index * 120 ?>ms;"
                    >
                        <img
                            src="<?= htmlspecialchars($image['src'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($image['alt'], ENT_QUOTES, 'UTF-8') ?>"
                            loading="lazy"
                            decoding="async"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                        >

                        <!-- Hover Overlay -->
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

    </main>


    <!-- GALLERY STYLES -->
    <style>
        /* Hero background animation */
        .gallery-hero-image {
            transform: scale(1.045);
            opacity: 0.65;
            transition:
                transform 1600ms cubic-bezier(0.22, 1, 0.36, 1),
                opacity 1000ms ease;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-image {
            transform: scale(1);
            opacity: 1;
        }

        /* Hero text entrance */
        .gallery-hero-copy > * {
            opacity: 0;
            transform: translateY(22px);
            transition:
                opacity 700ms ease,
                transform 750ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-breadcrumb {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 100ms;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-eyebrow {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 220ms;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-title {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 320ms;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-rule {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 430ms;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-description {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 520ms;
        }

        .gallery-hero.gallery-hero-entered .gallery-hero-cta {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 650ms;
        }

        .gallery-hero-cta a {
            transition:
                background-color 250ms ease,
                transform 250ms ease,
                box-shadow 250ms ease;
        }

        .gallery-hero-cta a:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -12px rgba(220, 38, 38, 0.65);
        }

        /* Gallery image entrance */
        @keyframes gallery-image-enter {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gallery-image {
            opacity: 0;
            animation: gallery-image-enter 650ms ease-out forwards;
            animation-delay: var(--gallery-delay, 0ms);
        }

        .gallery-image img {
            transition: transform 700ms ease-out;
        }

        .gallery-image:hover img {
            transform: scale(1.05);
        }

        /* Small-screen adjustments */
        @media (max-width: 480px) {
            .gallery-hero-copy {
                width: 100%;
            }

            .gallery-hero-title {
                font-size: clamp(2.75rem, 12vw, 3.5rem);
                overflow-wrap: break-word;
            }

            .gallery-hero-breadcrumb ol {
                max-width: 100%;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .gallery-hero-image,
            .gallery-hero-copy > *,
            .gallery-hero-cta a,
            .gallery-image,
            .gallery-image img {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
                animation: none !important;
            }
        }
    </style>


    <!-- GALLERY JAVASCRIPT -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hero = document.querySelector(".gallery-hero");
            const reduceMotion = window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches;

            if (hero) {
                if (reduceMotion) {
                    hero.classList.add("gallery-hero-entered");
                } else {
                    requestAnimationFrame(function () {
                        hero.classList.add("gallery-hero-entered");
                    });
                }
            }
        });
    </script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
