<?php
$pageTitle = "Laser Cutting Facility | Patil Brothers";

$base_url    = '/';
$contact_url = '/contact';
$hero_image  = '/assets/images/Lasercutting-hero.png';
$hero_alt    = 'Precision laser cutting and sheet metal fabrication at Patil Brothers';
$eyebrow     = 'Precision Manufacturing';
$description = 'Precision cutting for complex profiles and clean edges, helping deliver consistent components for your sheet metal manufacturing requirements.';
$cta_text    = 'Request a Quote';

$CURRENT_SLUG = 'LaserCuttingFacility';

$sidebarServices = [
    ['slug' => 'LaserCuttingFacility', 'title' => 'Laser Cutting Facility', 'image' => '/assets/images/services/laser.webp'],
    ['slug' => 'PlasmaCuttingFacility', 'title' => 'Plasma Cutting Facility', 'image' => '/assets/images/services/plasma.webp'],
    ['slug' => 'BendingFacility', 'title' => 'Bending Facility', 'image' => '/assets/images/services/bending.webp'],
    ['slug' => 'WeldingFacility', 'title' => 'Welding Facility', 'image' => '/assets/images/services/welding.webp'],
    ['slug' => 'Fabrication&Assembly', 'title' => 'Fabrication & Assembly', 'image' => '/assets/images/services/fabrication.webp'],
    ['slug' => 'WellEquippedInfrastructure', 'title' => 'Well Equipped Infrastructure with Design Centre', 'image' => '/assets/images/services/machined.webp'],
];

$laserServices = [
    ['title' => 'Metal Cutting', 'text' => 'Stainless steel, aluminum, brass, and other metals with exceptional precision.', 'icon' => 'layers'],
    ['title' => 'Acrylic & Plastic Cutting', 'text' => 'Clean edges and precise shapes for prototypes and finished products.', 'icon' => 'layers-dashed'],
    ['title' => 'Wood Cutting', 'text' => 'Perfect for creating intricate designs and custom shapes in wood.', 'icon' => 'layers'],
    ['title' => 'Custom Laser Etching', 'text' => 'Personalization and design engraving on various materials.', 'icon' => 'laser'],
];

if (!function_exists('laserEscape')) {
    function laserEscape($value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">

    <style>
        .about-hero-image {
            transform: scale(1.045);
            opacity: 0.65;
            transition:
                transform 1600ms cubic-bezier(0.22, 1, 0.36, 1),
                opacity 1000ms ease;
        }

        .about-hero-entered .about-hero-image {
            transform: scale(1);
            opacity: 1;
        }

        .about-hero-copy > * {
            opacity: 0;
            transform: translateY(22px);
            transition:
                opacity 700ms ease,
                transform 750ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .about-hero-entered .about-hero-breadcrumb {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 100ms;
        }

        .about-hero-entered .about-hero-eyebrow {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 220ms;
        }

        .about-hero-entered .about-hero-title {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 320ms;
        }

        .about-hero-entered .about-hero-rule {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 430ms;
        }

        .about-hero-entered .about-hero-description {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 520ms;
        }

        .about-hero-entered .about-hero-cta {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 650ms;
        }

        .about-hero-cta a {
            transition:
                background-color 250ms ease,
                transform 250ms ease,
                box-shadow 250ms ease;
        }

        .about-hero-cta a:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -12px rgba(220, 38, 38, 0.65);
        }

        @media (max-width: 480px) {
            .about-hero-copy { width: 100%; }

            .about-hero-title {
                font-size: clamp(2.75rem, 12vw, 3.5rem);
                overflow-wrap: break-word;
            }

            .about-hero-breadcrumb ol { max-width: 100%; }
        }

        @media (prefers-reduced-motion: reduce) {
            .about-hero-image,
            .about-hero-copy > *,
            .about-hero-cta a {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }

        /* Middle content section */
        .laser-main,
        .laser-main *,
        .laser-sidebar-card,
        .laser-sidebar-card * {
            box-sizing: border-box;
        }

        .laser-main {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 64px 0 88px;
            background: #fff;
        }

        .laser-background-accent {
            position: absolute;
            top: 96px;
            left: -96px;
            z-index: -1;
            width: 160px;
            height: 256px;
            transform: skewX(-22deg);
            background: linear-gradient(180deg, #fee2e2, transparent);
            pointer-events: none;
        }

        .laser-layout {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 360px;
            align-items: start;
            gap: 48px;
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 48px;
        }

        .laser-article,
        .laser-sidebar {
            min-width: 0;
        }

        .laser-section-label {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .laser-section-label > span:first-child {
            flex: 0 0 32px;
            width: 32px;
            height: 2px;
            background: #ff1620;
        }

        .laser-section-label > span:last-child {
            color: #525252;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: .3em;
            text-transform: uppercase;
        }

        .laser-overview-title {
            margin: 12px 0 0;
            color: #0a0a0a;
            font-size: clamp(30px, 4.5vw, 60px);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -.035em;
            overflow-wrap: anywhere;
        }

        .laser-overview-title span { color: #ff1620; }

        .laser-divider {
            width: 100%;
            height: 1px;
            margin-top: 20px;
            background: linear-gradient(90deg, #d4d4d4, transparent);
        }

        .laser-paragraph {
            max-width: 900px;
            margin: 24px 0 0;
            color: #525252;
            font-size: 16px;
            line-height: 1.8;
        }

        .laser-services-section { margin-top: 40px; }

        .laser-services-section > h2 {
            margin: 0;
            color: #0a0a0a;
            font-size: clamp(21px, 2.2vw, 28px);
            font-weight: 700;
            line-height: 1.3;
        }

        .laser-service-cards {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin: 20px 0 0;
            padding: 0;
            list-style: none;
        }

        .laser-service-card {
            min-width: 0;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-radius: 16px;
            background: #fafafa;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .laser-service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 32px rgba(23, 23, 23, .08);
        }

        .laser-service-icon { display: block; color: #ff1620; }
        .laser-service-icon svg { display: block; width: 44px; height: 44px; }

        .laser-service-card h3 {
            margin: 16px 0 0;
            color: #0a0a0a;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.5;
        }

        .laser-service-card p {
            margin: 8px 0 0;
            color: #737373;
            font-size: 14px;
            line-height: 1.7;
        }

        .laser-sidebar {
            position: sticky;
            top: 112px;
            align-self: start;
        }

        .laser-sidebar-card {
            overflow: hidden;
            width: 100%;
            border: 1px solid #f1f1f1;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 18px 45px rgba(23, 23, 23, .12);
        }

        .laser-sidebar-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 20px;
            background: #ff1620;
            color: #fff;
        }

        .laser-sidebar-heading h2 { margin: 0; font-size: 18px; font-weight: 700; }
        .laser-sidebar-heading svg { flex: 0 0 20px; width: 20px; height: 20px; }

        .laser-sidebar-list {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .laser-sidebar-item { min-width: 0; border-bottom: 1px solid #f1f1f1; }
        .laser-sidebar-item:last-child { border-bottom: 0; }

        .laser-sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
            padding: 12px 16px;
            color: #171717;
            text-decoration: none;
            transition: background-color .2s ease;
        }

        .laser-sidebar-link:hover { background: #fafafa; }
        .laser-sidebar-link.is-active { background: #fef2f2; }

        .laser-sidebar-image-wrap {
            display: block;
            flex: 0 0 72px;
            width: 72px;
            height: 56px;
            overflow: hidden;
            border-radius: 6px;
            background: #e5e5e5;
        }

        .laser-sidebar-image-wrap img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .3s ease;
        }

        .laser-sidebar-link:hover .laser-sidebar-image-wrap img { transform: scale(1.06); }

        .laser-sidebar-title {
            flex: 1 1 auto;
            min-width: 0;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.4;
            overflow-wrap: anywhere;
        }

        .laser-sidebar-arrow {
            display: flex;
            flex: 0 0 32px;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border: 1px solid #d4d4d4;
            border-radius: 50%;
            color: #171717;
        }

        .laser-sidebar-arrow svg { width: 14px; height: 14px; }

        .laser-sidebar-link.is-active .laser-sidebar-arrow,
        .laser-sidebar-link:hover .laser-sidebar-arrow {
            border-color: #ff1620;
            background: #ff1620;
            color: #fff;
        }

        @media (max-width: 1100px) {
            .laser-layout {
                grid-template-columns: minmax(0, 1fr) 320px;
                gap: 28px;
                padding-right: 28px;
                padding-left: 28px;
            }
        }

        @media (max-width: 900px) {
            .laser-layout {
                grid-template-columns: minmax(0, 1fr);
                gap: 32px;
                padding-right: 24px;
                padding-left: 24px;
            }

            .laser-sidebar {
                position: static;
                top: auto;
                width: 100%;
            }

            .laser-sidebar-list { grid-template-columns: repeat(2, minmax(0, 1fr)); }

            .laser-sidebar-item:nth-child(odd) { border-right: 1px solid #f1f1f1; }
        }

        @media (max-width: 767px) {
            .laser-main { overflow: hidden; padding: 28px 0 42px; }

            .laser-layout {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 26px;
                padding: 0 12px;
            }

            .laser-article,
            .laser-sidebar {
                display: block;
                width: 100%;
                min-width: 0;
                max-width: 100%;
                margin: 0;
            }

            .laser-section-label { gap: 8px; }
            .laser-section-label > span:first-child { flex-basis: 18px; width: 18px; }
            .laser-section-label > span:last-child { font-size: 8px; letter-spacing: .25em; }

            .laser-overview-title {
                margin-top: 10px;
                font-size: clamp(26px, 7.2vw, 34px);
                line-height: 1.14;
            }

            .laser-divider { margin-top: 14px; }
            .laser-paragraph { margin-top: 14px; font-size: 14px; line-height: 1.8; }
            .laser-services-section { margin-top: 24px; }
            .laser-services-section > h2 { font-size: 18px; line-height: 1.4; }

            .laser-service-cards {
                grid-template-columns: minmax(0, 1fr);
                gap: 9px;
                margin-top: 11px;
            }

            .laser-service-card { padding: 16px 14px; border-radius: 12px; }
            .laser-service-card:hover { transform: none; }
            .laser-service-icon svg { width: 32px; height: 32px; }
            .laser-service-card h3 { margin-top: 8px; font-size: 14px; }
            .laser-service-card p { margin-top: 4px; font-size: 13px; line-height: 1.65; }

            .laser-sidebar {
                position: static !important;
                inset: auto !important;
                align-self: stretch;
            }

            .laser-sidebar-card {
                position: relative;
                width: 100%;
                max-width: 100%;
                border-radius: 11px;
                box-shadow: 0 8px 22px rgba(23, 23, 23, .09);
            }

            .laser-sidebar-heading { min-height: 42px; padding: 10px 12px; }
            .laser-sidebar-heading h2 { font-size: 14px; }
            .laser-sidebar-heading svg { width: 16px; height: 16px; flex-basis: 16px; }
            .laser-sidebar-list { display: grid; grid-template-columns: minmax(0, 1fr); }

            .laser-sidebar-item,
            .laser-sidebar-item:nth-child(odd) {
                border-right: 0;
                border-bottom: 1px solid #f1f1f1;
            }

            .laser-sidebar-link { gap: 9px; padding: 9px; }

            .laser-sidebar-image-wrap {
                flex: 0 0 48px;
                width: 48px;
                height: 36px;
                border-radius: 4px;
            }

            .laser-sidebar-title { font-size: 12px; line-height: 1.35; }

            .laser-sidebar-arrow {
                flex: 0 0 26px;
                width: 26px;
                height: 26px;
            }

            .laser-sidebar-arrow svg { width: 12px; height: 12px; }
        }

        @media (max-width: 380px) {
            .laser-layout { padding-right: 10px; padding-left: 10px; }
            .laser-service-card { padding: 14px 12px; }
            .laser-sidebar-link { gap: 7px; padding: 8px; }
            .laser-sidebar-image-wrap { flex-basis: 40px; width: 40px; height: 32px; }
            .laser-sidebar-title { font-size: 11px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .laser-sidebar-image-wrap img,
            .laser-service-card {
                transition: none !important;
            }
        }

    </style>
</head>
<body>

    <!-- Shared Header -->
    <?php require_once __DIR__ . '/../../includes/header.php'; ?>

    <main>

        <!-- Hero retained from the About Us design -->
        <section id="aboutHero"
            class="about-hero relative isolate flex min-h-[560px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[620px] lg:min-h-[700px]">

            <img
                src="<?= htmlspecialchars($hero_image, ENT_QUOTES, 'UTF-8') ?>"
                alt="<?= htmlspecialchars($hero_alt, ENT_QUOTES, 'UTF-8') ?>"
                fetchpriority="high"
                class="about-hero-image absolute inset-0 -z-30 h-full w-full object-cover object-[62%_center]"
            >

            <div class="absolute inset-0 -z-20 bg-gradient-to-r from-[#17191d]/95 via-[#17191d]/75 to-[#17191d]/20 max-md:from-[#17191d]/90 max-md:via-[#17191d]/75 max-md:to-[#17191d]/55"></div>
            <div class="absolute inset-0 -z-20 bg-gradient-to-t from-[#17191d]/70 via-transparent to-[#17191d]/30"></div>

            <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-[48%] w-36 -skew-x-[22deg] bg-gradient-to-b from-red-700/50 to-transparent sm:w-52"></div>
            <div class="pointer-events-none absolute -right-24 top-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-b from-red-700/30 to-transparent lg:block"></div>
            <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-px w-full bg-gradient-to-r from-red-600/70 via-white/10 to-transparent"></div>

            <div class="mx-auto w-full max-w-[1440px] px-5 pb-16 pt-36 sm:px-8 sm:pb-20 sm:pt-40 lg:px-12 lg:pb-24 lg:pt-44">
                <div class="about-hero-copy max-w-3xl">

                    <nav aria-label="Breadcrumb" class="about-hero-breadcrumb mb-7">
                        <ol class="inline-flex flex-wrap items-center gap-3 rounded-full border border-white/20 bg-[#17191d]/55 px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-white/75 backdrop-blur-md sm:text-sm">
                            <li><a href="/" class="transition hover:text-white">Home</a></li>
                            <li aria-hidden="true" class="text-white/40">/</li>
                            <li><a href="/services/" class="transition hover:text-white">Services</a></li>
                            <li aria-hidden="true" class="text-white/40">/</li>
                            <li aria-current="page" class="text-[#ff303b]">Laser Cutting</li>
                        </ol>
                    </nav>

                    <p class="about-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        <?= htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8') ?>
                    </p>

                    <h1 class="about-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Laser Cutting <span class="text-[#ff303b]">Facility</span>
                    </h1>

                    <div class="about-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>

                    <p class="about-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">
                        <?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>
                    </p>

                    <div class="about-hero-cta mt-8 flex flex-wrap items-center gap-4">
                        <a href="<?= htmlspecialchars($contact_url, ENT_QUOTES, 'UTF-8') ?>"
                           class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 hover:bg-red-700 sm:px-7">
                            <?= htmlspecialchars($cta_text, ENT_QUOTES, 'UTF-8') ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="h-5 w-5 transition-transform group-hover:translate-x-1" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

<section class="laser-main" aria-labelledby="laser-overview-heading">
    <div class="laser-background-accent"></div>

    <div class="laser-layout">

        <article class="laser-article">
            <div class="laser-section-label">
                <span></span>
                <span>Overview</span>
            </div>

            <h2 class="laser-overview-title" id="laser-overview-heading">
                Laser Cutting <span>Facility</span>
            </h2>

            <div class="laser-divider"></div>

            <p class="laser-paragraph">
                At Precision Engineering, we specialize in high-precision laser cutting services for a wide range of materials, including metal, plastic, wood, and more. Our state-of-the-art laser cutting technology offers exceptional accuracy, clean edges, and fast turnaround times to meet the needs of businesses across various industries.
            </p>

            <section class="laser-services-section">
                <h2>Our Laser Cutting Services</h2>

                <ul class="laser-service-cards">
                    <?php foreach ($laserServices as $service): ?>
                        <li class="laser-service-card">
                            <span class="laser-service-icon" aria-hidden="true">
                                <?php if ($service['icon'] === 'laser'): ?>
                                    <svg viewBox="0 0 48 48" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 5h20v8H14zM18 13v6h12v-6M21 19v6h6v-6M24 25v6M10 43l6-8M38 43l-6-8M24 34v9M17 42h14"></path>
                                    </svg>
                                <?php else: ?>
                                    <svg viewBox="0 0 48 48" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M24 6l18 9-18 9-18-9 18-9z"></path>
                                        <path
                                            d="M6 24l18 9 18-9"
                                            <?php if ($service['icon'] === 'layers-dashed'): ?>
                                                stroke-dasharray="3 3"
                                            <?php endif; ?>
                                        ></path>
                                        <path d="M6 33l18 9 18-9"></path>
                                    </svg>
                                <?php endif; ?>
                            </span>

                            <h3><?= laserEscape($service['title']) ?></h3>
                            <p><?= laserEscape($service['text']) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </article>

        <aside class="laser-sidebar">
            <div class="laser-sidebar-card">
                <div class="laser-sidebar-heading">
                    <h2>Our Services</h2>
                    <svg viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.2"
                        stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h.01M4 12h.01M4 18h.01M9 6h11M9 12h11M9 18h11"></path>
                    </svg>
                </div>

                <nav aria-label="Our services">
                    <ul class="laser-sidebar-list">
                        <?php foreach ($sidebarServices as $service): ?>
                            <?php
                                $active = $service['slug'] === $CURRENT_SLUG;
                                $serviceUrl = '/services/' . rawurlencode($service['slug']) . '/';
                            ?>

                            <li class="laser-sidebar-item">
                                <a
                                    href="<?= laserEscape($serviceUrl) ?>"
                                    class="laser-sidebar-link<?= $active ? ' is-active' : '' ?>"
                                    <?= $active ? 'aria-current="page"' : '' ?>
                                >
                                    <span class="laser-sidebar-image-wrap">
                                        <img
                                            src="<?= laserEscape($service['image']) ?>"
                                            alt=""
                                            loading="lazy"
                                        >
                                    </span>

                                    <span class="laser-sidebar-title">
                                        <?= laserEscape($service['title']) ?>
                                    </span>

                                    <span class="laser-sidebar-arrow">
                                        <svg viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round" aria-hidden="true">
                                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </aside>

    </div>
</section>

    </main>

    <!-- Shared Footer -->
    <?php require_once __DIR__ . '/../../includes/footer.php'; ?>

    <!-- Hero entrance animation retained from About Us -->
    <script>
        (function () {
            var hero = document.getElementById('aboutHero');

            if (!hero) return;

            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                hero.classList.add('about-hero-entered');
                return;
            }

            window.requestAnimationFrame(function () {
                hero.classList.add('about-hero-entered');
            });
        })();
    </script>

</body>
</html>
