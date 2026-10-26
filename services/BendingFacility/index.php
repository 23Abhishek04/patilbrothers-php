<?php
$pageTitle = 'Bending Facility | Patil Brothers';
$pageDescription = 'Professional metal bending services with precision, accuracy, and high-quality results for sheet metal, tubes, angles, and custom components.';

$contact_url = '/contact';
$hero_image  = '/assets/images/Bending-Hero.png';
$hero_alt    = 'Precision sheet metal bending and fabrication at Patil Brothers';
$eyebrow     = 'Sheet Metal Fabrication';
$description = 'Accurate sheet metal bending for custom angles, profiles, and components, supported by modern equipment and skilled workmanship.';
$cta_text    = 'Request a Quote';
$CURRENT_SLUG = 'BendingFacility';

$sidebarServices = [
    ['slug' => 'LaserCuttingFacility', 'title' => 'Laser Cutting Facility', 'image' => '/assets/images/services/laser.webp'],
    ['slug' => 'PlasmaCuttingFacility', 'title' => 'Plasma Cutting Facility', 'image' => '/assets/images/services/plasma.webp'],
    ['slug' => 'BendingFacility', 'title' => 'Bending Facility', 'image' => '/assets/images/services/bending.webp'],
    ['slug' => 'WeldingFacility', 'title' => 'Welding Facility', 'image' => '/assets/images/services/welding.webp'],
    ['slug' => 'Fabrication&Assembly', 'title' => 'Fabrication & Assembly', 'image' => '/assets/images/services/fabrication.webp'],
    ['slug' => 'WellEquippedInfrastructure', 'title' => 'Well Equipped Infrastructure with Design Centre', 'image' => '/assets/images/services/machined.webp'],
];

$BENDING_SERVICES = [
    ['title' => 'Sheet Metal Bending', 'text' => 'Bending flat metal sheets into specific angles, profiles, or shapes, commonly used for custom enclosures, panels, and architectural elements.'],
    ['title' => 'Tube Bending', 'text' => 'Precision bending of tubes and pipes for applications in automotive, furniture, and industrial design.'],
    ['title' => 'Angle Bending', 'text' => 'Bending metal rods, bars, and angles to fit a wide range of specifications for structural components.'],
    ['title' => 'Roll Bending', 'text' => 'Using roller bending of metal plates or sheets into curved shapes for industrial uses, including pipes, cylinders, and tanks.'],
    ['title' => 'Custom Bending', 'text' => 'Whether you need simple bends or complex, multi-angle forms, we can customize our bending services to suit your specific design requirements.'],
];

$WHY_CHOOSE = [
    ['title' => 'Precision & Accuracy', 'text' => 'Our bending machines are calibrated to provide highly accurate results, ensuring each part meets your exact specifications.'],
    ['title' => 'Versatility', 'text' => 'We can handle various materials, thicknesses, and complex shapes, making us ideal for a wide range of industries.'],
    ['title' => 'Fast Turnaround', 'text' => 'Our advanced equipment and skilled technicians ensure quick and efficient production, helping you meet tight deadlines.'],
    ['title' => 'Custom Solutions', 'text' => 'We can create custom bends, including multi-dimensional or complex angles, to meet the unique requirements of your project.'],
    ['title' => 'Durability', 'text' => 'Our bending processes ensure that parts retain their strength and integrity, even after being shaped, for long-lasting performance.'],
];

if (!function_exists('pb_escape')) {
    function pb_escape($value): string {
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
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">

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

.bending-main { position: relative; min-height: 100vh; overflow: hidden; background: white; padding: 3rem 0 4rem; }
.bending-main-accent { position: absolute; left: -6rem; top: 6rem; z-index: 0; width: 10rem; height: 16rem; transform: skewX(-22deg); background: linear-gradient(180deg,#fee2e2,transparent); pointer-events: none; }
.bending-layout { position: relative; z-index: 1; display: grid; grid-template-columns: minmax(0,1fr); gap: 2.5rem; max-width: 1440px; margin: 0 auto; padding: 0 1.25rem; }
.bending-overview-label { display: flex; align-items: center; gap: .75rem; }
.bending-overview-label span:first-child { width: 2rem; height: 2px; background: #ff1620; }
.bending-overview-label span:last-child { color: #525252; font-size: .75rem; font-weight: 500; text-transform: uppercase; letter-spacing: .3em; }
.bending-overview-title { margin: .75rem 0 0; color: #0a0a0a; font-size: clamp(2.25rem,5vw,3.75rem); font-weight: 900; letter-spacing: -.03em; line-height: 1.1; }
.bending-overview-title span { color: #ff1620; }
.bending-divider { height: 1px; margin-top: 1.25rem; background: linear-gradient(90deg,#d4d4d4,transparent); }
.bending-copy { max-width: 56rem; margin-top: 1.5rem; color: #525252; font-size: 1rem; line-height: 1.8; }
.bending-copy + .bending-copy { margin-top: 1rem; }
.bending-services-list, .bending-why-list { margin: .75rem 0 0; padding-left: 1.25rem; color: #525252; font-size: .875rem; line-height: 1.75; }
.bending-services-list li, .bending-why-list li { padding-left: .15rem; margin-top: .5rem; }
.bending-services-list strong, .bending-why-list strong { color: #171717; font-weight: 700; }
.bending-why-section { margin-top: 2.5rem; }
.bending-why-section h2 { margin: 0; color: #0a0a0a; font-size: 1.35rem; font-weight: 700; }
.bending-why-list { margin-top: 1.25rem; }
.bending-sidebar { align-self: start; }
.bending-sidebar-card { overflow: hidden; border-radius: 1rem; background: white; box-shadow: 0 20px 25px -5px rgba(0,0,0,.1),0 8px 10px -6px rgba(0,0,0,.1); border: 1px solid #f5f5f5; }
.bending-sidebar-heading { display: flex; align-items: center; justify-content: space-between; background: #ff1620; padding: 1rem 1.25rem; color: white; }
.bending-sidebar-heading h2 { margin: 0; font-size: 1.125rem; font-weight: 700; }
.bending-sidebar-heading svg { width: 1.25rem; height: 1.25rem; }
.bending-sidebar-list { display: grid; grid-template-columns: 1fr; list-style: none; margin: 0; padding: 0; }
.bending-sidebar-list li { border-bottom: 1px solid #f5f5f5; }
.bending-sidebar-list li:last-child { border-bottom: 0; }
.bending-sidebar-link { display: flex; align-items: center; gap: 1rem; padding: .75rem 1rem; color: #171717; transition: background-color .2s ease; }
.bending-sidebar-link:hover { background: #fafafa; }
.bending-sidebar-link.is-active { background: #fef2f2; }
.bending-sidebar-thumb { position: relative; flex: 0 0 72px; width: 72px; height: 56px; overflow: hidden; border-radius: .375rem; background: #e5e5e5; }
.bending-sidebar-thumb img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform .3s ease; }
.bending-sidebar-link:hover .bending-sidebar-thumb img { transform: scale(1.1); }
.bending-sidebar-name { flex: 1; color: #171717; font-size: .875rem; font-weight: 700; line-height: 1.4; }
.bending-sidebar-arrow { display: flex; flex: 0 0 2rem; width: 2rem; height: 2rem; align-items: center; justify-content: center; border: 1px solid #d4d4d4; border-radius: 999px; color: #171717; transition: .2s ease; }
.bending-sidebar-arrow svg { width: .875rem; height: .875rem; }
.bending-sidebar-link:hover .bending-sidebar-arrow { border-color: #ff1620; background: #ff1620; color: white; }
.bending-sidebar-link.is-active .bending-sidebar-arrow { border-color: #ff1620; color: #ff1620; }
@media (min-width: 640px) {
    .bending-hero { min-height: 620px; }
    .bending-hero-content { padding: 10rem 2rem 5rem; }
    .bending-hero-breadcrumb ol { font-size: .875rem; }
    .bending-hero-eyebrow { font-size: .875rem; }
    .bending-hero-description { font-size: 1.125rem; }
    .bending-hero-cta a { padding-left: 1.75rem; padding-right: 1.75rem; }
    .bending-main { padding-top: 4rem; padding-bottom: 5rem; }
    .bending-layout { padding: 0 2rem; }
}
@media (min-width: 1024px) {
    .bending-hero { min-height: 700px; }
    .bending-hero-content { padding: 11rem 3rem 6rem; }
    .bending-hero-overlay { background: linear-gradient(90deg,rgba(23,25,29,.95),rgba(23,25,29,.75) 55%,rgba(23,25,29,.2)); }
    .bending-hero-accent-left { width: 13rem; }
    .bending-hero-accent-right { display: block; position: absolute; right: -6rem; top: 0; z-index: -10; width: 14rem; height: 70%; transform: skewX(-22deg); background: linear-gradient(180deg,rgba(185,28,28,.3),transparent); }
    .bending-layout { grid-template-columns: minmax(0,1fr) 340px; gap: 3rem; padding: 0 3rem; }
    .bending-sidebar { position: sticky; top: 7rem; }
}
@media (min-width: 1280px) {
    .bending-layout { grid-template-columns: minmax(0,1fr) 360px; }
}
@media (max-width: 767px) {
    .bending-hero-overlay { background: linear-gradient(90deg,rgba(23,25,29,.9),rgba(23,25,29,.75) 55%,rgba(23,25,29,.55)); }
}

/* Responsive refinements for the bending content */
.bending-main, .bending-main * { box-sizing: border-box; }
.bending-layout > article, .bending-sidebar { min-width: 0; }
.bending-copy { overflow-wrap: anywhere; }
.bending-services-list, .bending-why-list { padding-left: 1.2rem; }
.bending-sidebar-name { min-width: 0; overflow-wrap: anywhere; }
@media (max-width: 900px) {
    .bending-layout { grid-template-columns: minmax(0, 1fr); }
    .bending-sidebar { position: static; width: 100%; }
    .bending-sidebar-list { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .bending-sidebar-list li:nth-child(odd) { border-right: 1px solid #f5f5f5; }
}
@media (max-width: 767px) {
    .bending-main { min-height: 0; padding: 28px 0 42px; }
    .bending-main-accent { top: 3rem; width: 6rem; height: 10rem; }
    .bending-layout { display: flex; flex-direction: column; gap: 26px; padding: 0 12px; }
    .bending-layout > article, .bending-sidebar { width: 100%; max-width: 100%; }
    .bending-overview-label { gap: 8px; }
    .bending-overview-label span:first-child { width: 18px; flex: 0 0 18px; }
    .bending-overview-label span:last-child { font-size: 8px; letter-spacing: .25em; }
    .bending-overview-title { margin-top: 10px; font-size: clamp(26px, 7.2vw, 34px); line-height: 1.14; overflow-wrap: anywhere; }
    .bending-divider { margin-top: 14px; }
    .bending-copy { margin-top: 14px; font-size: 14px; line-height: 1.8; }
    .bending-copy + .bending-copy { margin-top: 12px; }
    .bending-services-list, .bending-why-list { margin-top: 10px; padding-left: 1.1rem; font-size: 13px; line-height: 1.75; }
    .bending-services-list li, .bending-why-list li { margin-top: 8px; }
    .bending-why-section { margin-top: 24px; }
    .bending-why-section h2 { font-size: 18px; line-height: 1.4; }
    .bending-sidebar { position: static !important; inset: auto !important; }
    .bending-sidebar-card { border-radius: 11px; box-shadow: 0 8px 22px rgba(23,23,23,.09); }
    .bending-sidebar-heading { min-height: 42px; padding: 10px 12px; }
    .bending-sidebar-heading h2 { font-size: 14px; }
    .bending-sidebar-heading svg { width: 16px; height: 16px; }
    .bending-sidebar-list { grid-template-columns: minmax(0, 1fr); }
    .bending-sidebar-list li, .bending-sidebar-list li:nth-child(odd) { border-right: 0; border-bottom: 1px solid #f5f5f5; }
    .bending-sidebar-link { gap: 9px; padding: 9px; }
    .bending-sidebar-thumb { flex-basis: 48px; width: 48px; height: 36px; }
    .bending-sidebar-name { font-size: 12px; line-height: 1.35; }
    .bending-sidebar-arrow { flex-basis: 26px; width: 26px; height: 26px; }
    .bending-sidebar-arrow svg { width: 12px; height: 12px; }
}
@media (max-width: 380px) {
    .bending-layout { padding-right: 10px; padding-left: 10px; }
    .bending-sidebar-link { gap: 7px; padding: 8px; }
    .bending-sidebar-thumb { flex-basis: 40px; width: 40px; height: 32px; }
    .bending-sidebar-name { font-size: 11px; }
}
@media (prefers-reduced-motion: reduce) {
    .bending-sidebar-thumb img { transition: none !important; }
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
                            <li aria-current="page" class="text-[#ff303b]">Bending</li>
                        </ol>
                    </nav>

                    <p class="about-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        <?= htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8') ?>
                    </p>

                    <h1 class="about-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Bending <span class="text-[#ff303b]">Facility</span>
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

<section class="bending-main" aria-labelledby="bending-overview-heading">
    <div class="bending-main-accent"></div>
    <div class="bending-layout">
        <article>
            <div class="bending-overview-label">
                <span></span>
                <span>Overview</span>
            </div>

            <h2 class="bending-overview-title" id="bending-overview-heading">Bending <span>Facility</span></h2>
            <div class="bending-divider"></div>

            <p class="bending-copy">
                At Precision Engineering, we provide professional metal bending services that combine advanced technology with precision craftsmanship. Our state-of-the-art bending equipment ensures that your projects are completed with accuracy, speed, and high-quality results. Whether you are working with sheet metal, tubes, or custom parts, our bending services are designed to meet the needs of various industries and applications.
            </p>

            <p class="bending-copy">We offer a wide range of bending services, including:</p>

            <ul class="bending-services-list">
                <?php foreach ($BENDING_SERVICES as $service): ?>
                    <li>
                        <strong><?= pb_escape($service['title']) ?>:</strong>
                        <?= pb_escape($service['text']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <section class="bending-why-section">
                <h2>Why Choose Our Bending Services?</h2>
                <div class="bending-divider"></div>
                <ol class="bending-why-list">
                    <?php foreach ($WHY_CHOOSE as $index => $item): ?>
                        <li>
                            <strong><?= $index + 1 ?>. <?= pb_escape($item['title']) ?>:</strong>
                            <?= pb_escape($item['text']) ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </section>
        </article>

        <aside class="bending-sidebar">
            <div class="bending-sidebar-card">
                <div class="bending-sidebar-heading">
                    <h2>Our Services</h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h.01M4 12h.01M4 18h.01M9 6h11M9 12h11M9 18h11"/>
                    </svg>
                </div>
                
<nav aria-label="Our services">
    <ul class="bending-sidebar-list">
        <?php foreach (($sidebarServices ?? []) as $service): ?>
            <?php
                $slug = $service['slug'] ?? '';
                $title = $service['title'] ?? '';
                $image = $service['image'] ?? '';
                $active = $slug === ($CURRENT_SLUG ?? '');
            ?>
            <li>
                <a
                    href="/services/<?= rawurlencode($slug) ?>/"
                    class="bending-sidebar-link<?= $active ? ' is-active' : '' ?>"
                    <?= $active ? 'aria-current="page"' : '' ?>
                >
                    <span class="bending-sidebar-thumb">
                        <?php if ($image !== ''): ?>
                            <img
                                src="<?= pb_escape($image) ?>"
                                alt=""
                                loading="lazy"
                            >
                        <?php endif; ?>
                    </span>

                    <span class="bending-sidebar-name">
                        <?= pb_escape($title) ?>
                    </span>

                    <span class="bending-sidebar-arrow">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                        >
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
