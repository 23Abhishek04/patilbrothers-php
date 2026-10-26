<?php
/**
 * Patil Brothers footer partial converted from the supplied Next.js/TSX component.
 * Include this file in a PHP page after loading the compiled Tailwind CSS.
 */

$QUICK_LINKS = [
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'About Us', 'href' => '/about'],
    ['label' => 'Gallery', 'href' => '/gallery'],
    ['label' => 'Contact Us', 'href' => '/contact'],
];

$SERVICES = [
    ['label' => 'Laser Cutting Facility', 'href' => '/services/LaserCuttingFacility'],
    ['label' => 'Plasma Cutting Facility', 'href' => '/services/PlasmaCuttingFacility'],
    ['label' => 'Bending Facility', 'href' => '/services/BendingFacility'],
    ['label' => 'Welding Facility', 'href' => '/services/WeldingFacility'],
    ['label' => 'Fabrication & Assembly', 'href' => '/services/Fabrication&Assembly'],
    ['label' => 'Well Equipped Infrastructure with Design Centre', 'href' => '/services/WellEquippedInfrastructure'],
];

$SOCIALS = [
    ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/', 'icon' => 'linkedin'],
    ['label' => 'Instagram', 'href' => 'https://www.instagram.com/', 'icon' => 'instagram'],
    ['label' => 'YouTube', 'href' => 'https://www.youtube.com/', 'icon' => 'youtube'],
];

$MAP_SRC = 'https://www.google.com/maps?q=Sr.+No.+230%2F7%2C+S-Block%2C+MIDC%2C+Bhosari+411026&output=embed';

function footerColumnTitle(string $white, string $red): void
{
    echo '<h3 class="mb-6 text-xl font-bold text-white sm:text-2xl">' . htmlspecialchars($white, ENT_QUOTES, 'UTF-8') . ' <span class="text-[#e31e2f]">' . htmlspecialchars($red, ENT_QUOTES, 'UTF-8') . '</span></h3>';
}

function footerChevronIcon(): void
{
    echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0 text-[#e31e2f] transition-transform group-hover:translate-x-1" aria-hidden="true"><path d="M9 5l7 7-7 7" /></svg>';
}

function footerContactRow(string $icon, string $content): void
{
    echo '<li class="flex items-center gap-4"><span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-[#41464d] text-[#ff3945] ring-1 ring-white/15">';
    echo $icon;
    echo '</span><span class="text-[15px] leading-snug text-[#e1e4e8]">' . $content . '</span></li>';
}
?>

<footer class="footer-animated relative isolate overflow-hidden bg-[#292d32] text-white">
    <!-- Background image with a softer charcoal overlay -->
    <div class="absolute inset-x-0 top-0 -z-20 h-64 sm:h-72">
        <img src="/assets/images/footer-bg.png" alt="" class="h-full w-full object-cover object-[80%_top] opacity-55" />
        <div class="absolute inset-0 bg-gradient-to-b from-[#292d32]/45 via-[#292d32]/80 to-[#292d32]"></div>
    </div>

    <!-- Subtle red diagonal accents -->
    <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-24 w-40 -skew-x-[25deg] bg-red-700/55 sm:h-36 sm:w-56"></div>
    <div class="pointer-events-none absolute -right-20 top-0 -z-10 hidden h-72 w-56 -skew-x-[25deg] bg-gradient-to-b from-red-700/35 to-transparent md:block"></div>
    <div class="pointer-events-none absolute -bottom-10 -left-20 -z-10 hidden h-64 w-40 -skew-x-[25deg] bg-gradient-to-t from-red-800/25 to-transparent lg:block"></div>

    <!-- Main footer columns -->
    <div class="footer-content mx-auto max-w-[1440px] px-5 pb-12 pt-28 sm:px-8 sm:pt-32 lg:px-12 lg:pt-40">
        <div class="footer-grid grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-[1.3fr_0.9fr_1fr_1.2fr_1.3fr] lg:gap-0">
            <!-- Brand -->
            <div class="lg:pr-10">
                <a href="/" class="flex items-center" aria-label="Patil Brothers home">
                    <img src="/assets/images/logo.png" alt="Patil Brothers" width="220" height="90" class="h-12 w-auto object-contain sm:h-14 lg:h-16" />
                </a>

                <p class="mt-6 max-w-sm text-[15px] leading-relaxed text-[#d2d6db]">
                    High-precision sheet metal fabrication and custom manufacturing solutions for
                    industries that demand quality, reliability and performance.
                </p>

                <ul class="mt-6 flex items-center gap-3">
                    <?php foreach ($SOCIALS as $s): ?>
                        <li>
                            <a href="<?= htmlspecialchars($s['href'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= htmlspecialchars($s['label'], ENT_QUOTES, 'UTF-8') ?>" class="footer-social flex h-12 w-12 items-center justify-center rounded-full bg-[#41464d] text-white ring-1 ring-white/15 transition-all duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-[#e31e2f] hover:ring-[#e31e2f] hover:shadow-lg hover:shadow-red-900/30">
                                <?php if ($s['icon'] === 'linkedin'): ?>
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5" aria-hidden="true"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9.75h4v11.5H3zM9.5 9.75h3.83v1.57h.05c.53-1 1.84-2.07 3.78-2.07 4.04 0 4.79 2.66 4.79 6.1v5.9h-4v-5.23c0-1.25-.02-2.85-1.74-2.85-1.74 0-2.01 1.36-2.01 2.76v5.32h-4z" /></svg>
                                <?php elseif ($s['icon'] === 'instagram'): ?>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" /><circle cx="12" cy="12" r="4" /><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" /></svg>
                                <?php else: ?>
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5" aria-hidden="true"><path d="M21.6 7.2a2.5 2.5 0 0 0-1.76-1.77C18.27 5 12 5 12 5s-6.27 0-7.84.43A2.5 2.5 0 0 0 2.4 7.2C2 8.78 2 12 2 12s0 3.22.4 4.8a2.5 2.5 0 0 0 1.76 1.77C5.73 19 12 19 12 19s6.27 0 7.84-.43a2.5 2.5 0 0 0 1.76-1.77C22 15.22 22 12 22 12s0-3.22-.4-4.8zM10 15V9l5.2 3L10 15z" /></svg>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="mt-8 flex items-center gap-4">
                    <span class="h-0.5 w-12 shrink-0 bg-[#e31e2f]"></span>
                    <p class="text-[11px] uppercase leading-5 tracking-[0.25em] text-[#c0c5cb]">
                        Precision Today<br />For a Stronger Tomorrow.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <nav aria-label="Quick links" class="lg:border-l lg:border-white/15 lg:px-10">
                <?php footerColumnTitle('Quick', 'Links'); ?>
                <ul class="space-y-3.5">
                    <?php foreach ($QUICK_LINKS as $l): ?>
                        <li><a href="<?= htmlspecialchars($l['href'], ENT_QUOTES, 'UTF-8') ?>" class="footer-link group flex items-center gap-3 text-[15px] text-[#e0e3e7] transition-all duration-300 hover:translate-x-1 hover:text-white"><?php footerChevronIcon(); ?><?= htmlspecialchars($l['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Services -->
            <nav aria-label="Our services" class="lg:border-l lg:border-white/15 lg:px-10">
                <?php footerColumnTitle('Our', 'Services'); ?>
                <ul class="space-y-3.5">
                    <?php foreach ($SERVICES as $l): ?>
                        <li><a href="<?= htmlspecialchars($l['href'], ENT_QUOTES, 'UTF-8') ?>" class="footer-link group flex items-center gap-3 text-[15px] text-[#e0e3e7] transition-all duration-300 hover:translate-x-1 hover:text-white"><?php footerChevronIcon(); ?><?= htmlspecialchars($l['label'], ENT_QUOTES, 'UTF-8') ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Contact -->
            <div class="lg:border-l lg:border-white/15 lg:px-10">
                <?php footerColumnTitle('Contact', 'Details'); ?>
                <ul class="space-y-5">
                    <?php
                    $phoneIcon = '<svg viewBox="0 0 24 24" fill="currentColor" stroke="none" class="h-5 w-5" aria-hidden="true"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z" /></svg>';
                    footerContactRow($phoneIcon, '<a href="tel:+919595880764" class="transition hover:text-[#ff3945]">+91 959-588-0764</a>');
                    $emailIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2" /><path d="M3 7l9 6 9-6" /></svg>';
                    footerContactRow($emailIcon, '<a href="mailto:patilbrothers30@gmail.com" class="break-all transition hover:text-[#ff3945]">patilbrothers30@gmail.com</a>');
                    $locationIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z" /><circle cx="12" cy="9.5" r="2.5" /></svg>';
                    footerContactRow($locationIcon, 'Sr. No. 230/7, S-Block, MIDC,<br />Bhosari, Pune – 411026');
                    $clockIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" aria-hidden="true"><circle cx="12" cy="12" r="9" /><path d="M12 7v5l3 2" /></svg>';
                    footerContactRow($clockIcon, '<span class="text-sm">Mon – Sat : 9:00 AM – 6:00 PM<br />Sunday : Closed</span>');
                    ?>
                </ul>
            </div>

            <!-- Location / Map -->
            <div class="sm:col-span-2 lg:col-span-1 lg:border-l lg:border-white/15 lg:pl-10">
                <?php footerColumnTitle('Our', 'Location'); ?>
                <div class="footer-map relative h-60 overflow-hidden rounded-2xl border border-white/20 bg-white sm:h-64 lg:h-[290px]">
                    <iframe src="<?= htmlspecialchars($MAP_SRC, ENT_QUOTES, 'UTF-8') ?>" title="Patil Brothers location on Google Maps" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen class="h-full w-full border-0 opacity-100 transition duration-500"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="relative border-t border-white/15 bg-[#202328]/90">
        <div class="mx-auto flex max-w-[1440px] flex-col items-center gap-5 px-5 py-6 text-center sm:px-8 md:flex-row md:justify-between md:text-left lg:px-12">
            <p class="text-sm text-[#d2d6db]">Copyright © 2024 All rights reserved</p>

            <!--
            <ul class="flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-sm text-[#d2d6db]">
                <li><a href="/privacy-policy" class="transition hover:text-[#ff3945]">Privacy Policy</a></li>
                <li aria-hidden="true" class="text-white/40">|</li>
                <li><a href="/terms" class="transition hover:text-[#ff3945]">Terms &amp; Conditions</a></li>
                <li aria-hidden="true" class="text-white/40">|</li>
                <li><a href="/sitemap" class="transition hover:text-[#ff3945]">Sitemap</a></li>
            </ul>
            -->

            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 lg:justify-start lg:gap-4">
                <span class="h-0.5 w-6 shrink-0 bg-[#e31e2f] sm:w-10"></span>
                <p class="whitespace-nowrap text-[9px] uppercase leading-5 tracking-[0.12em] text-[#c0c5cb] sm:text-[11px] sm:tracking-[0.2em]">Design &amp; Developed By</p>
                <img src="/assets/images/developer-logo.png" alt="Developer Logo" class="h-6 w-auto max-w-[90px] shrink-0 object-contain sm:h-8 sm:max-w-[120px]" />
            </div>
        </div>
    </div>

    <style>
        .footer-animated { animation: footerFadeIn 700ms ease-out both; }
        .footer-content { animation: footerRiseIn 850ms cubic-bezier(0.22, 1, 0.36, 1) both; }
        .footer-grid > * { animation: footerRiseIn 650ms ease-out both; }
        .footer-grid > *:nth-child(1) { animation-delay: 80ms; }
        .footer-grid > *:nth-child(2) { animation-delay: 160ms; }
        .footer-grid > *:nth-child(3) { animation-delay: 240ms; }
        .footer-grid > *:nth-child(4) { animation-delay: 320ms; }
        .footer-grid > *:nth-child(5) { animation-delay: 400ms; }
        .footer-map { transition: transform 350ms ease, box-shadow 350ms ease; }
        .footer-map:hover { transform: translateY(-3px); box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18); }
        .footer-link:focus-visible, .footer-social:focus-visible { outline: 2px solid #ff3945; outline-offset: 4px; }
        @keyframes footerFadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes footerRiseIn { from { opacity: 0; transform: translateY(18px) scale(0.99); } to { opacity: 1; transform: translateY(0) scale(1); } }
        @media (prefers-reduced-motion: reduce) {
            .footer-animated, .footer-content, .footer-grid > * { animation: none !important; }
            .footer-social, .footer-link, .footer-map { transition: none !important; }
            .footer-map:hover, .footer-social:hover, .footer-link:hover { transform: none !important; }
        }
    </style>
</footer>
