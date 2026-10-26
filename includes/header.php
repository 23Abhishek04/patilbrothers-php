
<?php

$nav_links = [
    [
        'label' => 'Home',
        'href' => '/',
        'children' => [],
    ],
    [
        'label' => 'About Us',
        'href' => '/about',
        'children' => [],
    ],
    [
        'label' => 'Services',
        'href' => '/services',
        'children' => [
            [
                'label' => 'Laser Cutting Facility',
                'href' => '/services/LaserCuttingFacility',
            ],
            [
                'label' => 'Plasma Cutting Facility',
                'href' => '/services/PlasmaCuttingFacility',
            ],
            [
                'label' => 'Bending Facility',
                'href' => '/services/BendingFacility',
            ],
            [
                'label' => 'Welding Facility',
                'href' => '/services/WeldingFacility',
            ],
            [
                'label' => 'Fabrication & Assembly',
                'href' => '/services/Fabrication&Assembly',
            ],
            [
                'label' => 'Well Equipped Infrastructure with Design Centre',
                'href' => '/services/WellEquippedInfrastructure',
            ],
        ],
    ],
    [
        'label' => 'Gallery',
        'href' => '/gallery',
        'children' => [],
    ],
    [
        'label' => 'Contact Us',
        'href' => '/contact',
        'children' => [],
    ],
];

$phone_display = '+91 959-588-0764';
$phone_href = 'tel:+919595880764';

$current_path = parse_url(
    $_SERVER['REQUEST_URI'] ?? '/',
    PHP_URL_PATH
) ?: '/';

$current_path = rtrim($current_path, '/') ?: '/';

$nav_escape = static function ($value) {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
};

$nav_is_active = static function ($href) use ($current_path) {
    $href = rtrim($href, '/') ?: '/';

    if ($href === '/') {
        return $current_path === '/';
    }

    return $current_path === $href
        || strpos($current_path, $href . '/') === 0;
};

?>

<!-- Shared stylesheet: include this file from the page's <head> -->
<link rel="stylesheet" href="/assets/css/tailwind.generated.css">

<header class="navbar-entry fixed inset-x-0 top-0 z-50 px-3 pt-3 transition-all duration-300 sm:px-6 sm:pt-5">

    <div class="navbar-shell mx-auto max-w-[1440px] rounded-xl border border-white/15 shadow-lg shadow-black/10 backdrop-blur-xl transition-all duration-300">

        <nav
            class="flex items-center justify-between gap-4 px-4 py-3 transition-all duration-300 sm:px-6 sm:py-3.5 lg:px-8"
            aria-label="Main navigation"
        >

            <!-- Logo -->
            <a href="/" class="navbar-logo flex items-center gap-3" aria-label="Patil Brothers home">
                <span class="flex h-[68px] w-[150px] shrink-0 items-center justify-start sm:h-[76px] sm:w-[170px]">
                    <img
                        src="/assets/images/logo.png"
                        alt="Patil Brothers Logo"
                        width="340"
                        height="150"
                        fetchpriority="high"
                        class="h-full w-full object-contain object-left"
                    >
                </span>
            </a>

            <!-- Desktop Navigation -->
            <ul class="navbar-links hidden items-center gap-6 lg:flex xl:gap-10">

                <?php foreach ($nav_links as $index => $link): ?>
                    <?php
                    $active = $nav_is_active($link['href']);
                    $has_children = !empty($link['children']);
                    ?>

                    <li
                        class="navbar-link-item group relative"
                        style="--nav-delay: <?php echo (int) $index * 70; ?>ms"
                    >
                        <a
                            href="<?php echo $nav_escape($link['href']); ?>"
                            <?php if ($active): ?>aria-current="page"<?php endif; ?>
                            <?php if ($has_children): ?>aria-haspopup="true"<?php endif; ?>
                            class="relative inline-flex items-center gap-2 py-2 text-[15px] font-medium transition-colors hover:text-[#ff303b] <?php echo $active ? 'text-white after:absolute after:inset-x-0 after:-bottom-1 after:h-0.5 after:bg-[#e31e2f]' : 'text-white/90'; ?>"
                        >
                            <?php echo $nav_escape($link['label']); ?>

                            <?php if ($has_children): ?>
                                <svg
                                    class="h-3.5 w-3.5 transition-transform duration-200 group-hover:rotate-180 group-focus-within:rotate-180"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.09 1.03l-4.25 4.5a.75.75 0 01-1.09 0l-4.25-4.5a.75.75 0 01.02-1.05z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            <?php endif; ?>
                        </a>

                        <!-- Services Dropdown -->
                        <?php if ($has_children): ?>
                            <ul class="invisible absolute left-0 top-full z-50 mt-2 w-[290px] translate-y-2 rounded-xl border border-white/15 bg-[#17191d]/95 p-2 opacity-0 shadow-2xl shadow-black/30 backdrop-blur-xl transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">

                                <?php foreach ($link['children'] as $child): ?>
                                    <li>
                                        <a
                                            href="<?php echo $nav_escape($child['href']); ?>"
                                            <?php if ($nav_is_active($child['href'])): ?>aria-current="page"<?php endif; ?>
                                            class="block rounded-lg px-3 py-3 text-sm leading-snug text-white/85 transition-colors hover:bg-white/10 hover:text-[#ff303b] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#e31e2f]"
                                        >
                                            <?php echo $nav_escape($child['label']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        <?php endif; ?>
                    </li>

                <?php endforeach; ?>

            </ul>

            <!-- Right Side Actions -->
            <div class="navbar-actions flex items-center gap-3">

                <a
                    href="<?php echo $nav_escape($phone_href); ?>"
                    class="hidden items-center gap-2 rounded-xl border border-white/20 bg-[#17191d]/45 px-4 py-3 text-sm font-medium text-white transition hover:border-[#e31e2f] xl:flex"
                >
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                        <path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z"/>
                    </svg>
                    <?php echo $nav_escape($phone_display); ?>
                </a>

                <a
                    href="/contact"
                    class="navbar-quote hidden items-center gap-2 rounded-xl bg-[#e31e2f] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-red-950/25 transition hover:bg-red-700 md:flex"
                >
                    Get a Quote
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-4 w-4">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </a>

                <!-- Mobile Menu Button -->
                <button
                    id="navbar-menu-toggle"
                    type="button"
                    aria-label="Open menu"
                    aria-expanded="false"
                    aria-controls="mobile-navigation"
                    class="flex h-11 w-11 items-center justify-center rounded-lg border border-white/20 bg-[#17191d]/35 text-white transition hover:border-[#e31e2f] lg:hidden"
                >
                    <span class="relative block h-4 w-5">
                        <span class="navbar-hamburger-top absolute left-0 top-0 h-0.5 w-full bg-current transition-all duration-300"></span>
                        <span class="navbar-hamburger-middle absolute left-0 top-1.5 h-0.5 w-full bg-current transition-opacity duration-300"></span>
                        <span class="navbar-hamburger-bottom absolute left-0 top-3 h-0.5 w-full bg-current transition-all duration-300"></span>
                    </span>
                </button>

            </div>
        </nav>

        <!-- Mobile Navigation -->
        <div
            id="mobile-navigation"
            class="navbar-mobile grid grid-rows-[0fr] overflow-hidden transition-all duration-300 lg:hidden"
            aria-hidden="true"
            inert
        >
            <div class="min-h-0 overflow-hidden">

                <ul class="flex flex-col px-4 py-3 sm:px-6">

                    <?php foreach ($nav_links as $index => $link): ?>
                        <?php
                        $active = $nav_is_active($link['href']);
                        $has_children = !empty($link['children']);
                        $submenu_id = 'mobile-submenu-' . $index;
                        ?>

                        <li
                            class="navbar-mobile-item"
                            style="--nav-delay: <?php echo (int) $index * 45; ?>ms"
                        >
                            <div class="flex items-center justify-between border-b border-white/10">

                                <a
                                    href="<?php echo $nav_escape($link['href']); ?>"
                                    <?php if ($active): ?>aria-current="page"<?php endif; ?>
                                    tabindex="-1"
                                    class="flex flex-1 items-center justify-between py-3.5 text-base font-medium transition-colors hover:text-[#ff303b] <?php echo $active ? 'text-[#ff303b]' : 'text-white/90'; ?>"
                                >
                                    <?php echo $nav_escape($link['label']); ?>

                                    <?php if (!$has_children): ?>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-4 w-4 opacity-60">
                                            <path d="M5 12h14M13 6l6 6-6 6"/>
                                        </svg>
                                    <?php endif; ?>
                                </a>

                                <?php if ($has_children): ?>
                                    <button
                                        type="button"
                                        class="navbar-submenu-toggle ml-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-white/80 hover:bg-white/10 hover:text-white"
                                        aria-label="<?php echo $nav_escape($link['label']); ?> submenu"
                                        aria-expanded="false"
                                        aria-controls="<?php echo $submenu_id; ?>"
                                        tabindex="-1"
                                    >
                                        <svg class="navbar-submenu-chevron h-4 w-4 transition-transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.09 1.03l-4.25 4.5a.75.75 0 01-1.09 0l-4.25-4.5a.75.75 0 01.02-1.05z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                <?php endif; ?>

                            </div>

                            <?php if ($has_children): ?>
                                <ul
                                    id="<?php echo $submenu_id; ?>"
                                    class="navbar-submenu hidden border-b border-white/10 py-1 pl-3"
                                    inert
                                >
                                    <?php foreach ($link['children'] as $child): ?>
                                        <li>
                                            <a
                                                href="<?php echo $nav_escape($child['href']); ?>"
                                                tabindex="-1"
                                                <?php if ($nav_is_active($child['href'])): ?>aria-current="page"<?php endif; ?>
                                                class="block rounded-lg px-3 py-3 text-sm leading-snug text-white/75 transition-colors hover:bg-white/5 hover:text-[#ff303b]"
                                            >
                                                <?php echo $nav_escape($child['label']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>

                </ul>

                <div class="navbar-mobile-actions flex flex-col gap-3 px-4 pb-5 pt-2 sm:flex-row sm:px-6">

                    <a
                        href="<?php echo $nav_escape($phone_href); ?>"
                        tabindex="-1"
                        class="flex flex-1 items-center justify-center gap-2 rounded-xl border border-white/20 bg-[#17191d]/40 px-4 py-3 text-sm font-medium text-white"
                    >
                        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57a1 1 0 0 1-.25 1z"/>
                        </svg>
                        <?php echo $nav_escape($phone_display); ?>
                    </a>

                    <a
                        href="/contact"
                        tabindex="-1"
                        class="flex flex-1 items-center justify-center gap-2 rounded-xl bg-[#e31e2f] px-4 py-3 text-sm font-semibold text-white transition hover:bg-red-700"
                    >
                        Get a Quote
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-4 w-4">
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </a>

                </div>
            </div>
        </div>

    </div>
</header>

<style>
    .navbar-entry {
        opacity: 0;
        transform: translateY(-18px);
        transition: opacity 650ms ease, transform 750ms cubic-bezier(0.22, 1, 0.36, 1);
    }

    .navbar-entry.navbar-entered {
        opacity: 1;
        transform: translateY(0);
    }

    .navbar-logo,
    .navbar-actions {
        transition: transform 350ms ease, opacity 350ms ease;
    }

    .navbar-entry.navbar-entered .navbar-link-item {
        animation: navbarLinkIn 500ms cubic-bezier(0.22, 1, 0.36, 1) both;
        animation-delay: var(--nav-delay, 0ms);
    }

    .navbar-quote {
        transition: background-color 250ms ease, transform 250ms ease, box-shadow 250ms ease;
    }

    .navbar-quote:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px -10px rgba(220, 38, 38, 0.6);
    }

    .navbar-mobile-item {
        opacity: 0;
        transform: translateY(8px);
    }

    .navbar-mobile:not([aria-hidden="true"]) .navbar-mobile-item {
        animation: navbarLinkIn 350ms ease both;
        animation-delay: var(--nav-delay, 0ms);
    }

    @keyframes navbarLinkIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .navbar-entry,
        .navbar-logo,
        .navbar-actions,
        .navbar-quote,
        .navbar-mobile-item,
        .navbar-entry.navbar-entered .navbar-link-item {
            opacity: 1 !important;
            transform: none !important;
            animation: none !important;
            transition: none !important;
        }
    }
</style>

<script>
(function () {
    const header = document.querySelector('.navbar-entry');

    if (!header) return;

    const toggle = document.getElementById('navbar-menu-toggle');
    const mobileNav = document.getElementById('mobile-navigation');

    if (!toggle || !mobileNav) return;

    const shell = header.querySelector('.navbar-shell');
    const nav = header.querySelector('nav');

    function setMenuOpen(open) {
        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');

        mobileNav.setAttribute('aria-hidden', String(!open));
        mobileNav.inert = !open;

        mobileNav.classList.toggle('grid-rows-[1fr]', open);
        mobileNav.classList.toggle('grid-rows-[0fr]', !open);
        mobileNav.classList.toggle('border-t', open);
        mobileNav.classList.toggle('border-white/15', open);

        const top = toggle.querySelector('.navbar-hamburger-top');
        const middle = toggle.querySelector('.navbar-hamburger-middle');
        const bottom = toggle.querySelector('.navbar-hamburger-bottom');

        top.classList.toggle('top-1.5', open);
        top.classList.toggle('rotate-45', open);
        top.classList.toggle('top-0', !open);

        middle.classList.toggle('opacity-0', open);
        middle.classList.toggle('opacity-100', !open);

        bottom.classList.toggle('top-1.5', open);
        bottom.classList.toggle('-rotate-45', open);
        bottom.classList.toggle('top-3', !open);

        mobileNav.querySelectorAll('a, button').forEach(function (element) {
            element.tabIndex = open ? 0 : -1;
        });

        document.body.style.overflow = open ? 'hidden' : '';
    }

    function closeAllSubmenus() {
        mobileNav.querySelectorAll('.navbar-submenu-toggle').forEach(function (button) {
            button.setAttribute('aria-expanded', 'false');

            const submenuId = button.getAttribute('aria-controls');
            const submenu = document.getElementById(submenuId);

            if (submenu) {
                submenu.classList.add('hidden');
                submenu.inert = true;

                submenu.querySelectorAll('a').forEach(function (link) {
                    link.tabIndex = -1;
                });
            }

            const chevron = button.querySelector('.navbar-submenu-chevron');

            if (chevron) {
                chevron.classList.remove('rotate-180');
            }
        });
    }

    toggle.addEventListener('click', function () {
        const isOpen = toggle.getAttribute('aria-expanded') === 'true';
        setMenuOpen(!isOpen);
    });

    mobileNav.querySelectorAll('.navbar-submenu-toggle').forEach(function (button) {
        button.addEventListener('click', function () {
            const isOpen = button.getAttribute('aria-expanded') === 'true';
            const submenuId = button.getAttribute('aria-controls');
            const submenu = document.getElementById(submenuId);

            if (!submenu) return;

            button.setAttribute('aria-expanded', String(!isOpen));
            submenu.classList.toggle('hidden', isOpen);
            submenu.inert = isOpen;

            submenu.querySelectorAll('a').forEach(function (link) {
                link.tabIndex = isOpen ? -1 : 0;
            });

            const chevron = button.querySelector('.navbar-submenu-chevron');

            if (chevron) {
                chevron.classList.toggle('rotate-180', !isOpen);
            }
        });
    });

    const onScroll = function () {
        const scrolled = window.scrollY > 20;

        header.classList.toggle('px-0', scrolled);
        header.classList.toggle('pt-0', scrolled);
        header.classList.toggle('px-3', !scrolled);
        header.classList.toggle('pt-3', !scrolled);
        header.classList.toggle('sm:px-6', !scrolled);
        header.classList.toggle('sm:pt-5', !scrolled);

        if (shell) {
            shell.classList.toggle('rounded-b-xl', scrolled);
            shell.classList.toggle('rounded-xl', !scrolled);
            shell.classList.toggle('border-x-0', scrolled);
            shell.classList.toggle('border-t-0', scrolled);
            shell.classList.toggle('shadow-black/25', scrolled);
            shell.classList.toggle('shadow-black/10', !scrolled);
            shell.classList.toggle('bg-[#000000]/40', scrolled);
        }

        if (nav) {
            nav.classList.toggle('py-2.5', scrolled);
            nav.classList.toggle('py-3', !scrolled);
            nav.classList.toggle('sm:py-3.5', !scrolled);
        }
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    requestAnimationFrame(function () {
        header.classList.add('navbar-entered');
    });

    mobileNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            setMenuOpen(false);
            closeAllSubmenus();
        });
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            setMenuOpen(false);
            closeAllSubmenus();
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            setMenuOpen(false);
            closeAllSubmenus();
        }
    });
})();
</script>
