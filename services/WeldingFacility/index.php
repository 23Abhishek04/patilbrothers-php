<?php
$pageTitle = 'Welding Facility | Patil Brothers';
$pageDescription = 'Professional welding services for industrial applications, including MIG, TIG, stick, and flux-cored arc welding, with reliable and high-quality results.';

$contact_url = '/contact';
$hero_image  = '/assets/images/Welding-Hero.png';
$hero_alt    = 'Professional industrial welding and metal fabrication at Patil Brothers';
$eyebrow     = 'Precision Metal Fabrication';
$description = 'Reliable, high-quality welding solutions for industrial components and custom fabrication, delivered with precision, strength, and skilled workmanship.';
$cta_text    = 'Request a Quote';
$CURRENT_SLUG = 'WeldingFacility';

$sidebarServices = [
    ['slug' => 'LaserCuttingFacility', 'title' => 'Laser Cutting Facility', 'image' => '/assets/images/services/laser.webp'],
    ['slug' => 'PlasmaCuttingFacility', 'title' => 'Plasma Cutting Facility', 'image' => '/assets/images/services/plasma.webp'],
    ['slug' => 'BendingFacility', 'title' => 'Bending Facility', 'image' => '/assets/images/services/bending.webp'],
    ['slug' => 'WeldingFacility', 'title' => 'Welding Facility', 'image' => '/assets/images/services/welding.webp'],
    ['slug' => 'Fabrication&Assembly', 'title' => 'Fabrication & Assembly', 'image' => '/assets/images/services/fabrication.webp'],
    ['slug' => 'WellEquippedInfrastructure', 'title' => 'Well Equipped Infrastructure with Design Centre', 'image' => '/assets/images/services/machined.webp'],
];

$WELDING_SERVICES = [
    ['title' => 'MIG Welding (Metal Inert Gas)', 'text' => 'Ideal for high-speed welding on mild steel, aluminum, and stainless steel. MIG welding is known for its fast and efficient process.'],
    ['title' => 'TIG Welding (Tungsten Inert Gas)', 'text' => 'Provides precise, high-quality welds for metals such as aluminum, stainless steel, and copper. TIG welding is perfect for applications requiring clean, strong welds with minimal spatter.'],
    ['title' => 'Stick Welding (Shielded Metal Arc Welding)', 'text' => 'A versatile and cost-effective welding technique commonly used for heavy-duty applications and outdoor work.'],
    ['title' => 'Flux-Cored Arc Welding (FCAW)', 'text' => 'Similar to MIG welding but uses a flux-cored wire, making it ideal for welding thicker materials and outdoor projects.'],
    ['title' => 'Custom Welding', 'text' => 'Whether you need custom metal fabrication, repairs, or modifications, we can provide tailored welding solutions to your specific needs.'],
];

$WHY_CHOOSE = [
    ['title' => 'Expert Welders', 'text' => 'Our team is made up of skilled and experienced welders, ensuring high standards of quality in every weld.'],
    ['title' => 'Precision & Quality', 'text' => 'We use modern technology and equipment to ensure clean, precise, and strong welds, even for complex projects.'],
    ['title' => 'Versatility', 'text' => 'We can handle a wide variety of materials, from mild steel and stainless steel to aluminum and alloys.'],
    ['title' => 'Durability', 'text' => 'Our welding processes result in durable, high-strength joints designed for demanding environments.'],
    ['title' => 'Cost-Effective', 'text' => 'With a focus on efficiency and quality, we provide cost-effective welding solutions without compromising performance.'],
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

.welding-main { position: relative; min-height: 100vh; overflow: hidden; background: white; padding: 3rem 0 4rem; }
.welding-main-accent { position: absolute; left: -6rem; top: 6rem; z-index: 0; width: 10rem; height: 16rem; transform: skewX(-22deg); background: linear-gradient(180deg,#fee2e2,transparent); pointer-events: none; }
.welding-layout { position: relative; z-index: 1; display: grid; grid-template-columns: minmax(0,1fr); gap: 2.5rem; max-width: 1440px; margin: 0 auto; padding: 0 1.25rem; }
.welding-overview-label { display: flex; align-items: center; gap: .75rem; }
.welding-overview-label span:first-child { width: 2rem; height: 2px; background: #ff1620; }
.welding-overview-label span:last-child { color: #525252; font-size: .75rem; font-weight: 500; text-transform: uppercase; letter-spacing: .3em; }
.welding-overview-title { margin: .75rem 0 0; color: #0a0a0a; font-size: clamp(2.25rem,5vw,3.75rem); font-weight: 900; letter-spacing: -.03em; line-height: 1.1; }
.welding-overview-title span { color: #ff1620; }
.welding-divider { height: 1px; margin-top: 1.25rem; background: linear-gradient(90deg,#d4d4d4,transparent); }
.welding-copy { max-width: 56rem; margin-top: 1.5rem; color: #525252; font-size: 1rem; line-height: 1.8; }
.welding-copy + .welding-copy { margin-top: 1rem; }
.welding-services-list, .welding-why-list { margin: .75rem 0 0; padding-left: 1.25rem; color: #525252; font-size: .875rem; line-height: 1.75; }
.welding-services-list li, .welding-why-list li { padding-left: .15rem; margin-top: .5rem; }
.welding-services-list strong, .welding-why-list strong { color: #171717; font-weight: 700; }
.welding-why-section { margin-top: 2.5rem; }
.welding-why-section h2 { margin: 0; color: #0a0a0a; font-size: 1.35rem; font-weight: 700; }
.welding-why-list { margin-top: 1.25rem; }
.welding-sidebar { align-self: start; }
.welding-sidebar-card { overflow: hidden; border-radius: 1rem; background: white; box-shadow: 0 20px 25px -5px rgba(0,0,0,.1),0 8px 10px -6px rgba(0,0,0,.1); border: 1px solid #f5f5f5; }
.welding-sidebar-heading { display: flex; align-items: center; justify-content: space-between; background: #ff1620; padding: 1rem 1.25rem; color: white; }
.welding-sidebar-heading h2 { margin: 0; font-size: 1.125rem; font-weight: 700; }
.welding-sidebar-heading svg { width: 1.25rem; height: 1.25rem; }
.welding-sidebar-list { display: grid; grid-template-columns: 1fr; list-style: none; margin: 0; padding: 0; }
.welding-sidebar-list li { border-bottom: 1px solid #f5f5f5; }
.welding-sidebar-list li:last-child { border-bottom: 0; }
.welding-sidebar-link { display: flex; align-items: center; gap: 1rem; padding: .75rem 1rem; color: #171717; transition: background-color .2s ease; }
.welding-sidebar-link:hover { background: #fafafa; }
.welding-sidebar-link.is-active { background: #fef2f2; }
.welding-sidebar-thumb { position: relative; flex: 0 0 72px; width: 72px; height: 56px; overflow: hidden; border-radius: .375rem; background: #e5e5e5; }
.welding-sidebar-thumb img { width: 100%; height: 100%; display: block; object-fit: cover; transition: transform .3s ease; }
.welding-sidebar-link:hover .welding-sidebar-thumb img { transform: scale(1.1); }
.welding-sidebar-name { flex: 1; color: #171717; font-size: .875rem; font-weight: 700; line-height: 1.4; }
.welding-sidebar-arrow { display: flex; flex: 0 0 2rem; width: 2rem; height: 2rem; align-items: center; justify-content: center; border: 1px solid #d4d4d4; border-radius: 999px; color: #171717; transition: .2s ease; }
.welding-sidebar-arrow svg { width: .875rem; height: .875rem; }
.welding-sidebar-link:hover .welding-sidebar-arrow { border-color: #ff1620; background: #ff1620; color: white; }
.welding-sidebar-link.is-active .welding-sidebar-arrow { border-color: #ff1620; color: #ff1620; }
@media (min-width: 640px) {
    .welding-hero { min-height: 620px; }
    .welding-hero-content { padding: 10rem 2rem 5rem; }
    .welding-hero-breadcrumb ol { font-size: .875rem; }
    .welding-hero-eyebrow { font-size: .875rem; }
    .welding-hero-description { font-size: 1.125rem; }
    .welding-hero-cta a { padding-left: 1.75rem; padding-right: 1.75rem; }
    .welding-main { padding-top: 4rem; padding-bottom: 5rem; }
    .welding-layout { padding: 0 2rem; }
}
@media (min-width: 1024px) {
    .welding-hero { min-height: 700px; }
    .welding-hero-content { padding: 11rem 3rem 6rem; }
    .welding-hero-overlay { background: linear-gradient(90deg,rgba(23,25,29,.95),rgba(23,25,29,.75) 55%,rgba(23,25,29,.2)); }
    .welding-hero-accent-left { width: 13rem; }
    .welding-hero-accent-right { display: block; position: absolute; right: -6rem; top: 0; z-index: -10; width: 14rem; height: 70%; transform: skewX(-22deg); background: linear-gradient(180deg,rgba(185,28,28,.3),transparent); }
    .welding-layout { grid-template-columns: minmax(0,1fr) 340px; gap: 3rem; padding: 0 3rem; }
    .welding-sidebar { position: sticky; top: 7rem; }
}
@media (min-width: 1280px) {
    .welding-layout { grid-template-columns: minmax(0,1fr) 360px; }
}
@media (max-width: 767px) {
    .welding-hero-overlay { background: linear-gradient(90deg,rgba(23,25,29,.9),rgba(23,25,29,.75) 55%,rgba(23,25,29,.55)); }
}

/* Responsive refinements for the welding content */
.welding-main, .welding-main * { box-sizing: border-box; }
.welding-layout > article, .welding-sidebar { min-width: 0; }
.welding-copy { overflow-wrap: anywhere; }
.welding-services-list, .welding-why-list { padding-left: 1.2rem; }
.welding-sidebar-name { min-width: 0; overflow-wrap: anywhere; }
@media (max-width: 900px) {
    .welding-layout { grid-template-columns: minmax(0, 1fr); }
    .welding-sidebar { position: static; width: 100%; }
    .welding-sidebar-list { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .welding-sidebar-list li:nth-child(odd) { border-right: 1px solid #f5f5f5; }
}
@media (max-width: 767px) {
    .welding-main { min-height: 0; padding: 28px 0 42px; }
    .welding-main-accent { top: 3rem; width: 6rem; height: 10rem; }
    .welding-layout { display: flex; flex-direction: column; gap: 26px; padding: 0 12px; }
    .welding-layout > article, .welding-sidebar { width: 100%; max-width: 100%; }
    .welding-overview-label { gap: 8px; }
    .welding-overview-label span:first-child { width: 18px; flex: 0 0 18px; }
    .welding-overview-label span:last-child { font-size: 8px; letter-spacing: .25em; }
    .welding-overview-title { margin-top: 10px; font-size: clamp(26px, 7.2vw, 34px); line-height: 1.14; overflow-wrap: anywhere; }
    .welding-divider { margin-top: 14px; }
    .welding-copy { margin-top: 14px; font-size: 14px; line-height: 1.8; }
    .welding-copy + .welding-copy { margin-top: 12px; }
    .welding-services-list, .welding-why-list { margin-top: 10px; padding-left: 1.1rem; font-size: 13px; line-height: 1.75; }
    .welding-services-list li, .welding-why-list li { margin-top: 8px; }
    .welding-why-section { margin-top: 24px; }
    .welding-why-section h2 { font-size: 18px; line-height: 1.4; }
    .welding-sidebar { position: static !important; inset: auto !important; }
    .welding-sidebar-card { border-radius: 11px; box-shadow: 0 8px 22px rgba(23,23,23,.09); }
    .welding-sidebar-heading { min-height: 42px; padding: 10px 12px; }
    .welding-sidebar-heading h2 { font-size: 14px; }
    .welding-sidebar-heading svg { width: 16px; height: 16px; }
    .welding-sidebar-list { grid-template-columns: minmax(0, 1fr); }
    .welding-sidebar-list li, .welding-sidebar-list li:nth-child(odd) { border-right: 0; border-bottom: 1px solid #f5f5f5; }
    .welding-sidebar-link { gap: 9px; padding: 9px; }
    .welding-sidebar-thumb { flex-basis: 48px; width: 48px; height: 36px; }
    .welding-sidebar-name { font-size: 12px; line-height: 1.35; }
    .welding-sidebar-arrow { flex-basis: 26px; width: 26px; height: 26px; }
    .welding-sidebar-arrow svg { width: 12px; height: 12px; }
}
@media (max-width: 380px) {
    .welding-layout { padding-right: 10px; padding-left: 10px; }
    .welding-sidebar-link { gap: 7px; padding: 8px; }
    .welding-sidebar-thumb { flex-basis: 40px; width: 40px; height: 32px; }
    .welding-sidebar-name { font-size: 11px; }
}
@media (prefers-reduced-motion: reduce) {
    .welding-sidebar-thumb img { transition: none !important; }
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
                            <li aria-current="page" class="text-[#ff303b]">Welding</li>
                        </ol>
                    </nav>

                    <p class="about-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm">
                        <span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>
                        <?= htmlspecialchars($eyebrow, ENT_QUOTES, 'UTF-8') ?>
                    </p>

                    <h1 class="about-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">
                        Welding <span class="text-[#ff303b]">Facility</span>
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

<section class="welding-main" aria-labelledby="welding-overview-heading">
    <div class="welding-main-accent"></div>
    <div class="welding-layout">
        <article>
            <div class="welding-overview-label">
                <span></span>
                <span>Overview</span>
            </div>

            <h2 class="welding-overview-title" id="welding-overview-heading">Welding <span>Services</span></h2>
            <div class="welding-divider"></div>

            <p class="welding-copy">
                At Patil Brothers, we provide professional welding services for a wide variety of industrial applications. Our skilled welders use modern technology and proven techniques to deliver precise, durable, and strong welds. Whether you need small custom components or large-scale industrial fabrication, our welding services are designed to meet your requirements with dependable workmanship and efficiency.
            </p>

            <p class="welding-copy">We offer a wide range of welding services, including:</p>

            <ul class="welding-services-list">
                <?php foreach ($WELDING_SERVICES as $service): ?>
                    <li>
                        <strong><?= pb_escape($service['title']) ?>:</strong>
                        <?= pb_escape($service['text']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <section class="welding-why-section">
                <h2>Why Choose Our Welding Services?</h2>
                <div class="welding-divider"></div>
                <ol class="welding-why-list">
                    <?php foreach ($WHY_CHOOSE as $index => $item): ?>
                        <li>
                            <strong><?= $index + 1 ?>. <?= pb_escape($item['title']) ?>:</strong>
                            <?= pb_escape($item['text']) ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </section>
        </article>

        <aside class="welding-sidebar">
            <div class="welding-sidebar-card">
                <div class="welding-sidebar-heading">
                    <h2>Our Services</h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h.01M4 12h.01M4 18h.01M9 6h11M9 12h11M9 18h11"/>
                    </svg>
                </div>
                <nav aria-label="Our services">
                    <ul class="welding-sidebar-list">
                        <?php foreach ($sidebarServices as $service): ?>
                            <?php $active = $service['slug'] === $CURRENT_SLUG; ?>
                            <li>
                                <a
                                    href="/services/<?= rawurlencode($service['slug']) ?>/"
                                    class="welding-sidebar-link<?= $active ? ' is-active' : '' ?>"
                                    <?= $active ? 'aria-current="page"' : '' ?>
                                >
                                    <span class="welding-sidebar-thumb">
                                        <img src="<?= pb_escape($service['image']) ?>" alt="" loading="lazy">
                                    </span>
                                    <span class="welding-sidebar-name"><?= pb_escape($service['title']) ?></span>
                                    <span class="welding-sidebar-arrow">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
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
