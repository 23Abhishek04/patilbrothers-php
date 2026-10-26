
<?php
// Patil Brothers - Plasma Cutting Facility

$pageTitle = 'Plasma Cutting Facility | Patil Brothers';
$pageDescription = 'High-quality plasma cutting services for steel, aluminum, and other suitable conductive metals.';

$hero_image = '/assets/images/PlasmaCutting-hero.png';
$hero_alt = 'Plasma cutting and sheet metal fabrication at Patil Brothers';
$eyebrow = 'Precision Manufacturing';
$description = 'Powerful plasma cutting for thick metal sections, delivering efficient cuts and dependable results for demanding fabrication requirements.';
$contact_url = '/contact/';
$cta_text = 'Request a Quote';
$CURRENT_SLUG = 'PlasmaCuttingFacility';

$sidebarServices = [
    ['slug' => 'LaserCuttingFacility', 'title' => 'Laser Cutting Facility', 'image' => '/assets/images/services/laser.webp'],
    ['slug' => 'PlasmaCuttingFacility', 'title' => 'Plasma Cutting Facility', 'image' => '/assets/images/services/plasma.webp'],
    ['slug' => 'BendingFacility', 'title' => 'Bending Facility', 'image' => '/assets/images/services/bending.webp'],
    ['slug' => 'WeldingFacility', 'title' => 'Welding Facility', 'image' => '/assets/images/services/welding.webp'],
    ['slug' => 'Fabrication&Assembly', 'title' => 'Fabrication & Assembly', 'image' => '/assets/images/services/fabrication.webp'],
    ['slug' => 'WellEquippedInfrastructure', 'title' => 'Well Equipped Infrastructure with Design Centre', 'image' => '/assets/images/services/machined.webp'],
];

$plasmaServices = [
    [
        'title' => 'Steel Cutting',
        'text' => 'Cutting solutions for structural components, frames, plates, and industrial parts.'
    ],
    [
        'title' => 'Aluminum Cutting',
        'text' => 'Plasma cutting for suitable aluminum thicknesses and fabrication requirements.'
    ],
    [
        'title' => 'Stainless Steel Cutting',
        'text' => 'Cutting stainless steel components for a variety of industrial applications.'
    ],
    [
        'title' => 'Conductive Metal Cutting',
        'text' => 'Cutting solutions for suitable conductive metals according to project specifications.'
    ],
    [
        'title' => 'Custom Shapes and Profiles',
        'text' => 'Cutting parts and profiles according to required dimensions and designs.'
    ],
];

$whyChoose = [
    [
        'number' => '01',
        'title' => 'Efficient Cutting',
        'text' => 'Plasma cutting is suitable for many metal-cutting applications where productivity and efficient processing are important.'
    ],
    [
        'number' => '02',
        'title' => 'Thick Metal Capability',
        'text' => 'The process is particularly useful for cutting conductive metal sections that are suitable for plasma equipment.'
    ],
    [
        'number' => '03',
        'title' => 'Versatile Applications',
        'text' => 'Cut profiles and components for a range of industrial fabrication and manufacturing requirements.'
    ],
    [
        'number' => '04',
        'title' => 'Custom Requirements',
        'text' => 'Components can be planned around the required dimensions, profile, and project specifications.'
    ],
    [
        'number' => '05',
        'title' => 'Practical Production',
        'text' => 'An effective cutting option for suitable materials, thicknesses, and production quantities.'
    ],
];

function plasmaEscape($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function plasmaServiceUrl($slug): string
{
    return '/services/' . rawurlencode($slug) . '/';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= plasmaEscape($pageTitle) ?></title>
    <meta name="description" content="<?= plasmaEscape($pageDescription) ?>">

    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">

    <style>
        /* =========================================
           SHARED HERO DESIGN
        ========================================= */

        .about-hero-image {
            transform: scale(1.045);
            opacity: .65;
            transition:
                transform 1600ms cubic-bezier(.22, 1, .36, 1),
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
                transform 750ms cubic-bezier(.22, 1, .36, 1);
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
            box-shadow: 0 14px 28px -12px rgba(220, 38, 38, .65);
        }

        /* =========================================
           PLASMA MAIN CONTENT
        ========================================= */

        .plasma-main,
        .plasma-main *,
        .plasma-sidebar-card,
        .plasma-sidebar-card * {
            box-sizing: border-box;
        }

        .plasma-main {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 64px 0 88px;
            background: #fff;
        }

        .plasma-background-accent {
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

        .plasma-layout {
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

        .plasma-article,
        .plasma-sidebar {
            min-width: 0;
        }

        .plasma-section-label {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .plasma-section-label > span:first-child {
            flex: 0 0 32px;
            width: 32px;
            height: 2px;
            background: #ff1620;
        }

        .plasma-section-label > span:last-child {
            color: #525252;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: .3em;
            text-transform: uppercase;
        }

        .plasma-overview-title {
            margin: 12px 0 0;
            color: #0a0a0a;
            font-size: clamp(30px, 4.5vw, 60px);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: -.035em;
            overflow-wrap: anywhere;
        }

        .plasma-overview-title span {
            color: #ff1620;
        }

        .plasma-divider {
            width: 100%;
            height: 1px;
            margin-top: 20px;
            background: linear-gradient(90deg, #d4d4d4, transparent);
        }

        .plasma-paragraph {
            max-width: 900px;
            margin: 24px 0 0;
            color: #525252;
            font-size: 16px;
            line-height: 1.8;
        }

        /* Service cards */

        .plasma-services-section {
            margin-top: 40px;
        }

        .plasma-services-section > h2,
        .plasma-why-section > h2 {
            margin: 0;
            color: #0a0a0a;
            font-size: clamp(21px, 2.2vw, 28px);
            font-weight: 700;
            line-height: 1.35;
        }

        .plasma-service-cards {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin: 20px 0 0;
            padding: 0;
            list-style: none;
        }

        .plasma-service-card {
            min-width: 0;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-radius: 16px;
            background: #fafafa;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .plasma-service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 32px rgba(23, 23, 23, .08);
        }

        .plasma-card-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #fef2f2;
            color: #ff1620;
        }

        .plasma-card-icon svg {
            display: block;
            width: 25px;
            height: 25px;
        }

        .plasma-service-card h3 {
            margin: 16px 0 0;
            color: #0a0a0a;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.5;
        }

        .plasma-service-card p {
            margin: 8px 0 0;
            color: #737373;
            font-size: 14px;
            line-height: 1.7;
        }

        /* Why choose section */

        .plasma-why-section {
            margin-top: 48px;
        }

        .plasma-why-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-top: 22px;
        }

        .plasma-why-card {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            min-width: 0;
            padding: 18px;
            border: 1px solid #f1f1f1;
            border-radius: 12px;
            background: #fff;
        }

        .plasma-why-number {
            display: flex;
            flex: 0 0 38px;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 8px;
            background: #fef2f2;
            color: #e31e2f;
            font-size: 12px;
            font-weight: 800;
        }

        .plasma-why-card h3 {
            margin: 0;
            color: #171717;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.5;
        }

        .plasma-why-card p {
            margin: 6px 0 0;
            color: #737373;
            font-size: 13px;
            line-height: 1.7;
        }

        /* Sidebar */

        .plasma-sidebar {
            position: sticky;
            top: 112px;
            align-self: start;
        }

        .plasma-sidebar-card {
            overflow: hidden;
            width: 100%;
            border: 1px solid #f1f1f1;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 18px 45px rgba(23, 23, 23, .12);
        }

        .plasma-sidebar-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 20px;
            background: #ff1620;
            color: #fff;
        }

        .plasma-sidebar-heading h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
        }

        .plasma-sidebar-heading svg {
            flex: 0 0 20px;
            width: 20px;
            height: 20px;
        }

        .plasma-sidebar-list {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .plasma-sidebar-item {
            min-width: 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .plasma-sidebar-item:last-child {
            border-bottom: 0;
        }

        .plasma-sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
            padding: 12px 16px;
            color: #171717;
            text-decoration: none;
            transition: background-color .2s ease;
        }

        .plasma-sidebar-link:hover {
            background: #fafafa;
        }

        .plasma-sidebar-link.is-active {
            background: #fef2f2;
        }

        .plasma-sidebar-image-wrap {
            display: block;
            flex: 0 0 72px;
            width: 72px;
            height: 56px;
            overflow: hidden;
            border-radius: 6px;
            background: #e5e5e5;
        }

        .plasma-sidebar-image-wrap img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .3s ease;
        }

        .plasma-sidebar-link:hover .plasma-sidebar-image-wrap img {
            transform: scale(1.06);
        }

        .plasma-sidebar-title {
            flex: 1 1 auto;
            min-width: 0;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.4;
            overflow-wrap: anywhere;
        }

        .plasma-sidebar-arrow {
            display: flex;
            flex: 0 0 32px;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border: 1px solid #d4d4d4;
            border-radius: 50%;
            color: #171717;
            transition: color .2s ease, background-color .2s ease, border-color .2s ease;
        }

        .plasma-sidebar-arrow svg {
            width: 14px;
            height: 14px;
        }

        .plasma-sidebar-link.is-active .plasma-sidebar-arrow,
        .plasma-sidebar-link:hover .plasma-sidebar-arrow {
            border-color: #ff1620;
            background: #ff1620;
            color: #fff;
        }

        /* Tablet */

        @media (max-width: 1100px) {
            .plasma-layout {
                grid-template-columns: minmax(0, 1fr) 320px;
                gap: 28px;
                padding-right: 28px;
                padding-left: 28px;
            }
        }

        @media (max-width: 900px) {
            .plasma-layout {
                grid-template-columns: minmax(0, 1fr);
                gap: 32px;
                padding-right: 24px;
                padding-left: 24px;
            }

            .plasma-sidebar {
                position: static;
                top: auto;
                width: 100%;
            }

            .plasma-sidebar-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .plasma-sidebar-item:nth-child(odd) {
                border-right: 1px solid #f1f1f1;
            }
        }

        /* Mobile */

        @media (max-width: 767px) {
            .plasma-main {
                padding: 28px 0 42px;
            }

            .plasma-layout {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 26px;
                padding: 0 12px;
            }

            .plasma-article,
            .plasma-sidebar {
                display: block;
                width: 100%;
                min-width: 0;
                max-width: 100%;
                margin: 0;
            }

            .plasma-section-label {
                gap: 8px;
            }

            .plasma-section-label > span:first-child {
                flex-basis: 18px;
                width: 18px;
            }

            .plasma-section-label > span:last-child {
                font-size: 8px;
                letter-spacing: .25em;
            }

            .plasma-overview-title {
                margin-top: 10px;
                font-size: clamp(26px, 7.2vw, 34px);
                line-height: 1.14;
            }

            .plasma-divider {
                margin-top: 14px;
            }

            .plasma-paragraph {
                margin-top: 14px;
                font-size: 14px;
                line-height: 1.8;
            }

            .plasma-services-section {
                margin-top: 24px;
            }

            .plasma-services-section > h2,
            .plasma-why-section > h2 {
                font-size: 18px;
                line-height: 1.4;
            }

            .plasma-service-cards {
                grid-template-columns: minmax(0, 1fr);
                gap: 9px;
                margin-top: 11px;
            }

            .plasma-service-card {
                padding: 16px 14px;
                border-radius: 12px;
            }

            .plasma-service-card:hover {
                transform: none;
            }

            .plasma-card-icon {
                width: 34px;
                height: 34px;
            }

            .plasma-card-icon svg {
                width: 21px;
                height: 21px;
            }

            .plasma-service-card h3 {
                margin-top: 9px;
                font-size: 14px;
            }

            .plasma-service-card p {
                margin-top: 4px;
                font-size: 13px;
                line-height: 1.65;
            }

            .plasma-why-section {
                margin-top: 30px;
            }

            .plasma-why-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 9px;
                margin-top: 14px;
            }

            .plasma-why-card {
                gap: 11px;
                padding: 14px 12px;
            }

            .plasma-why-number {
                flex-basis: 32px;
                width: 32px;
                height: 32px;
                font-size: 11px;
            }

            .plasma-why-card h3 {
                font-size: 14px;
            }

            .plasma-why-card p {
                font-size: 12px;
            }

            .plasma-sidebar {
                position: static !important;
                inset: auto !important;
                align-self: stretch;
            }

            .plasma-sidebar-card {
                position: relative;
                width: 100%;
                max-width: 100%;
                border-radius: 11px;
                box-shadow: 0 8px 22px rgba(23, 23, 23, .09);
            }

            .plasma-sidebar-heading {
                min-height: 42px;
                padding: 10px 12px;
            }

            .plasma-sidebar-heading h2 {
                font-size: 14px;
            }

            .plasma-sidebar-heading svg {
                width: 16px;
                height: 16px;
                flex-basis: 16px;
            }

            .plasma-sidebar-list {
                grid-template-columns: minmax(0, 1fr);
            }

            .plasma-sidebar-item,
            .plasma-sidebar-item:nth-child(odd) {
                border-right: 0;
                border-bottom: 1px solid #f1f1f1;
            }

            .plasma-sidebar-link {
                gap: 9px;
                padding: 9px;
            }

            .plasma-sidebar-image-wrap {
                flex: 0 0 48px;
                width: 48px;
                height: 36px;
                border-radius: 4px;
            }

            .plasma-sidebar-title {
                font-size: 12px;
                line-height: 1.35;
            }

            .plasma-sidebar-arrow {
                flex-basis: 26px;
                width: 26px;
                height: 26px;
            }

            .plasma-sidebar-arrow svg {
                width: 12px;
                height: 12px;
            }

            .about-hero-copy {
                width: 100%;
            }

            .about-hero-title {
                font-size: clamp(2.75rem, 12vw, 3.5rem);
                overflow-wrap: break-word;
            }

            .about-hero-breadcrumb ol {
                max-width: 100%;
            }
        }

        @media (max-width: 380px) {
            .plasma-layout {
                padding-right: 10px;
                padding-left: 10px;
            }

            .plasma-service-card {
                padding: 14px 12px;
            }

            .plasma-sidebar-link {
                gap: 7px;
                padding: 8px;
            }

            .plasma-sidebar-image-wrap {
                flex-basis: 40px;
                width: 40px;
                height: 32px;
            }

            .plasma-sidebar-title {
                font-size: 11px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .about-hero-image,
            .about-hero-copy > *,
            .about-hero-cta a,
            .plasma-sidebar-image-wrap img,
            .plasma-service-card,
            .plasma-sidebar-arrow {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>

<?php require_once __DIR__ . '/../../includes/header.php'; ?>

<main>

    <!-- HERO: SAME DESIGN AS LASER CUTTING / ABOUT US -->

    <section id="aboutHero"
        class="about-hero relative isolate flex min-h-[560px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[620px] lg:min-h-[700px]">

        <img
            src="<?= plasmaEscape($hero_image) ?>"
            alt="<?= plasmaEscape($hero_alt) ?>"
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

                        <li>
                            <a href="/" class="transition hover:text-white">Home</a>
                        </li>

                        <li aria-hidden="true" class="text-white/40">/</li>

                        <li>
                            <a href="/services/" class="transition hover:text-white">Services</a>
                        </li>

                        <li aria-hidden="true" class="text-white/40">/</li>

                        <li aria-current="page" class="text-[#ff303b]">
                            Plasma Cutting
                        </li>

                    </ol>
                </nav>

                <p class="about-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                    <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                    <?= plasmaEscape($eyebrow) ?>
                </p>

                <h1 class="about-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                    Plasma Cutting
                    <span class="text-[#ff303b]">Facility</span>
                </h1>

                <div class="about-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>

                <p class="about-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">
                    <?= plasmaEscape($description) ?>
                </p>

                <div class="about-hero-cta mt-8 flex flex-wrap items-center gap-4">
                    <a
                        href="<?= plasmaEscape($contact_url) ?>"
                        class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 hover:bg-red-700 sm:px-7"
                    >
                        <?= plasmaEscape($cta_text) ?>

                        <svg viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-5 w-5 transition-transform group-hover:translate-x-1"
                            aria-hidden="true">
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- PLASMA CUTTING CONTENT -->

    <section class="plasma-main" aria-labelledby="plasma-overview-heading">

        <div class="plasma-background-accent"></div>

        <div class="plasma-layout">

            <article class="plasma-article">

                <div class="plasma-section-label">
                    <span></span>
                    <span>Overview</span>
                </div>

                <h2 class="plasma-overview-title" id="plasma-overview-heading">
                    Plasma Cutting <span>Facility</span>
                </h2>

                <div class="plasma-divider"></div>

                <p class="plasma-paragraph">
                    Plasma cutting is an efficient metal-cutting process used to create components and profiles from suitable electrically conductive materials. At Patil Brothers, our plasma cutting services support industrial fabrication requirements where accurate profiles, practical production times, and dependable results are important.
                </p>

                <p class="plasma-paragraph">
                    From structural components to custom-cut profiles, the cutting process is selected according to material type, thickness, dimensions, and project requirements.
                </p>

                <section class="plasma-services-section" aria-labelledby="plasma-services-heading">

                    <h2 id="plasma-services-heading">Our Plasma Cutting Services</h2>

                    <ul class="plasma-service-cards">

                        <?php foreach ($plasmaServices as $index => $service): ?>

                            <li class="plasma-service-card">

                                <span class="plasma-card-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <?php if ($index === 0): ?>
                                            <path d="M12 3 3 8l9 5 9-5-9-5Z"/>
                                            <path d="m3 12 9 5 9-5M3 16l9 5 9-5"/>
                                        <?php elseif ($index === 1): ?>
                                            <path d="M4 5h16v14H4z"/>
                                            <path d="M8 9h8M8 13h5"/>
                                            <path d="m16 16 2 2 3-4"/>
                                        <?php elseif ($index === 2): ?>
                                            <path d="M12 3 4 7v10l8 4 8-4V7l-8-4Z"/>
                                            <path d="m4 7 8 5 8-5M12 12v9"/>
                                        <?php elseif ($index === 3): ?>
                                            <circle cx="12" cy="12" r="8"/>
                                            <path d="M12 4v16M4 12h16"/>
                                        <?php else: ?>
                                            <path d="M4 4h16v16H4z"/>
                                            <path d="M8 4v16M4 8h16"/>
                                            <path d="m12 12 3-3"/>
                                        <?php endif; ?>
                                    </svg>
                                </span>

                                <h3><?= plasmaEscape($service['title']) ?></h3>

                                <p><?= plasmaEscape($service['text']) ?></p>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </section>

                <section class="plasma-why-section" aria-labelledby="plasma-why-heading">

                    <h2 id="plasma-why-heading">
                        Why Choose Our Plasma Cutting Services?
                    </h2>

                    <div class="plasma-divider"></div>

                    <div class="plasma-why-grid">

                        <?php foreach ($whyChoose as $item): ?>

                            <article class="plasma-why-card">

                                <span class="plasma-why-number">
                                    <?= plasmaEscape($item['number']) ?>
                                </span>

                                <div>
                                    <h3><?= plasmaEscape($item['title']) ?></h3>
                                    <p><?= plasmaEscape($item['text']) ?></p>
                                </div>

                            </article>

                        <?php endforeach; ?>

                    </div>

                </section>

            </article>

            <!-- SHARED SERVICE SIDEBAR -->

            <aside class="plasma-sidebar">

                <div class="plasma-sidebar-card">

                    <div class="plasma-sidebar-heading">
                        <h2>Our Services</h2>

                        <svg viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            aria-hidden="true">
                            <path d="M4 6h.01M4 12h.01M4 18h.01M9 6h11M9 12h11M9 18h11"/>
                        </svg>
                    </div>

                    <nav aria-label="Our services">
                        <ul class="plasma-sidebar-list">

                            <?php foreach ($sidebarServices as $service): ?>

                                <?php
                                    $active = $service['slug'] === $CURRENT_SLUG;
                                    $serviceUrl = plasmaServiceUrl($service['slug']);
                                ?>

                                <li class="plasma-sidebar-item">

                                    <a
                                        href="<?= plasmaEscape($serviceUrl) ?>"
                                        class="plasma-sidebar-link<?= $active ? ' is-active' : '' ?>"
                                        <?= $active ? 'aria-current="page"' : '' ?>
                                    >

                                        <span class="plasma-sidebar-image-wrap">
                                            <img
                                                src="<?= plasmaEscape($service['image']) ?>"
                                                alt=""
                                                loading="lazy"
                                            >
                                        </span>

                                        <span class="plasma-sidebar-title">
                                            <?= plasmaEscape($service['title']) ?>
                                        </span>

                                        <span class="plasma-sidebar-arrow">
                                            <svg viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                aria-hidden="true">
                                                <path d="M5 12h14M13 6l6 6-6 6"/>
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

<!-- SHARED FOOTER -->

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<!-- HERO ENTRANCE ANIMATION -->

<script>
(function () {
    var hero = document.getElementById('aboutHero');

    if (!hero) {
        return;
    }

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
