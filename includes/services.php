<?php
/**
 * Patil Brothers Services Section
 * Converted from Services.tsx to PHP/HTML.
 * Place this file at: includes/services.php
 */
$services = [
    [
        'title' => 'CNC Laser Cutting',
        'desc' => 'High-precision CNC laser cutting for complex profiles and clean edges.',
        'image' => '/assets/images/services/laser.webp',
        'icon' => 'zap',
        'href' => '/services/LaserCuttingFacility',
    ],
    [
        'title' => 'Plasma Cutting',
        'desc' => 'Efficient plasma cutting for thicker materials and custom shapes.',
        'image' => '/assets/images/services/plasma.webp',
        'icon' => 'flame',
        'href' => '/services/PlasmaCuttingFacility',
    ],
    [
        'title' => 'Sheet Metal Bending',
        'desc' => 'Accurate and consistent bending for high-quality components.',
        'image' => '/assets/images/services/bending.webp',
        'icon' => 'layers',
        'href' => '/services/BendingFacility',
    ],
    [
        'title' => 'Welding & Assembly',
        'desc' => 'Strong and durable welding with complete fabrication and assembly.',
        'image' => '/assets/images/services/welding.webp',
        'icon' => 'wrench',
        'href' => '/services/WeldingFacility',
    ],
    [
        'title' => 'Custom Fabrication',
        'desc' => 'Tailored sheet metal solutions to meet your specific requirements.',
        'image' => '/assets/images/services/fabrication.webp',
        'icon' => 'box',
        'href' => '/services/Fabrication&Assembly',
    ],
    [
        'title' => 'Machined Components',
        'desc' => 'Precision components with high quality and tight tolerances.',
        'image' => '/assets/images/services/machined.webp',
        'icon' => 'settings',
        'href' => '/services/WellEquippedInfrastructure',
    ],
];

function servicesIcon(string $icon): string
{
    $icons = [
        'zap' => '<path d="M13 2 3 14h7l-1 8 12-14h-7l-1-6Z"/>',
        'flame' => '<path d="M8.5 14.5c0-2.2 1.5-3.5 3.5-6.5 2 2.2 4 4.5 4 7a4 4 0 1 1-8 0c0-.2 0-.3.5-.5Z"/><path d="M12 22a7 7 0 0 0 7-7c0-4-3-7-6-11-1 4-7 7-7 12a6 6 0 0 0 6 6Z"/>',
        'layers' => '<path d="m12 2 9 5-9 5-9-5 9-5Z"/><path d="m3 12 9 5 9-5"/><path d="m3 17 9 5 9-5"/>',
        'wrench' => '<path d="M14.7 6.3a5 5 0 0 0-6.4 6.4L3 18l3 3 5.3-5.3a5 5 0 0 0 6.4-6.4L14 13l-3-3 3.7-3.7Z"/>',
        'box' => '<path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="M3 8v10l9 5 9-5V8"/><path d="M12 13v10"/>',
        'settings' => '<circle cx="12" cy="12" r="3"/><path d="m19.4 15 .1.1 1.4 1.1-1.4 2.4-1.7-.6a8 8 0 0 1-1.5.9l-.3 1.8h-2.8l-.3-1.8a8 8 0 0 1-1.5-.9l-1.7.6-1.4-2.4 1.4-1.1a7 7 0 0 1 0-1.8l-1.4-1.1 1.4-2.4 1.7.6a8 8 0 0 1 1.5-.9l.3-1.8h2.8l.3 1.8a8 8 0 0 1 1.5.9l1.7-.6 1.4 2.4-1.4 1.1a7 7 0 0 1 0 1.7Z"/>',
    ];
    return $icons[$icon] ?? '';
}
?>

<section id="services" class="services-section relative overflow-hidden bg-[#fafafa] py-14 sm:py-16 lg:py-20">
  <!-- Top-left red slash -->
  <div aria-hidden="true" class="pointer-events-none absolute left-0 top-0 hidden h-[220px] w-[160px] sm:block">
    <div class="absolute inset-0 bg-gradient-to-b from-red-600 to-red-500" style="clip-path: polygon(48% 20%, 92% 20%, 12% 78%, 0 78%)"></div>
    <div class="absolute inset-0 bg-red-600/20" style="clip-path: polygon(40% 0, 52% 0, 0 38%, 0 36%)"></div>
  </div>

  <!-- Dotted pattern -->
  <div aria-hidden="true" class="pointer-events-none absolute right-[5%] top-12 hidden h-[100px] w-[130px] lg:block"
    style="background-image: radial-gradient(circle, rgba(220,38,38,.55) 1.2px, transparent 1.5px); background-size: 16px 16px;">
  </div>

  <div class="services-content relative mx-auto max-w-[1360px] px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <header class="services-heading mx-auto max-w-3xl text-center">
      <div class="flex items-center justify-center gap-3">
        <span class="h-[3px] w-11 bg-red-600"></span>
        <span class="text-sm font-semibold uppercase tracking-wide text-red-600">Services</span>
      </div>

      <h2 class="mt-2 text-5xl font-extrabold leading-tight tracking-tight text-[#0b0d10] sm:text-6xl">
        What We <span class="text-red-600">Do</span>
      </h2>

      <p class="mx-auto mt-3 max-w-[780px] text-base leading-relaxed text-gray-600 sm:text-lg">
        We provide end-to-end sheet metal fabrication solutions with
        precision, speed and reliability, catering to diverse industrial
        needs.
      </p>
    </header>

    <!-- Services grid -->
    <div class="services-grid mt-10 grid gap-6 sm:grid-cols-2 lg:mt-12 lg:grid-cols-3 lg:gap-7">
      <?php foreach ($services as $index => $service): ?>
        <article class="services-card group relative overflow-hidden rounded-md bg-white shadow-[0_6px_24px_-8px_rgba(0,0,0,0.15)] ring-1 ring-black/[0.03]">
          <!-- Image -->
          <div class="relative aspect-[16/7.6] w-full overflow-hidden bg-neutral-900">
            <img
              src="<?php echo htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>"
              loading="lazy"
              class="services-photo absolute inset-0 h-full w-full object-cover">
            <!-- Red wedge -->
            <div aria-hidden="true" class="services-wedge absolute inset-0 bg-red-600/85" style="clip-path: polygon(0 0, 28% 0, 0 78%)"></div>
          </div>

          <!-- Card body -->
          <div class="relative px-5 pb-6 pt-0 sm:px-6">
            <!-- Icon tile -->
            <span class="services-icon absolute -top-5 left-5 flex h-14 w-14 items-center justify-center rounded-lg border-[3px] border-white bg-red-600 text-white shadow-md sm:left-6">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                <?php echo servicesIcon($service['icon']); ?>
              </svg>
            </span>

            <!-- Card number -->
            <span aria-hidden="true" class="pointer-events-none absolute right-5 top-3 select-none text-[52px] font-bold leading-none tracking-tight text-gray-200/80 sm:right-6">
              <?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?>
            </span>

            <h3 class="pt-5 pl-[4.75rem] text-xl font-bold leading-tight text-[#0b0d10] sm:text-[22px]">
              <?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>
            </h3>

            <p class="mt-3 max-w-[300px] text-[15px] leading-relaxed text-gray-500 sm:mt-5 sm:text-base">
              <?php echo htmlspecialchars($service['desc'], ENT_QUOTES, 'UTF-8'); ?>
            </p>

            <a href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>"
              class="services-link mt-5 inline-flex items-center gap-3 text-base font-semibold text-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600 focus-visible:ring-offset-2">
              Learn More
              <span class="services-arrow flex h-9 w-11 items-center justify-center rounded-md bg-red-50 transition-colors group-hover:bg-red-600 group-hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 transition-transform" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .services-heading {
    opacity: 0;
    transform: translateY(22px);
    transition: opacity 700ms ease, transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
  }
  .services-card {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 700ms ease, transform 700ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 350ms ease;
  }
  .services-section.is-visible .services-heading,
  .services-section.is-visible .services-card {
    opacity: 1;
    transform: translateY(0);
  }
  .services-section.is-visible .services-card:nth-child(1) { transition-delay: 100ms; }
  .services-section.is-visible .services-card:nth-child(2) { transition-delay: 190ms; }
  .services-section.is-visible .services-card:nth-child(3) { transition-delay: 280ms; }
  .services-section.is-visible .services-card:nth-child(4) { transition-delay: 370ms; }
  .services-section.is-visible .services-card:nth-child(5) { transition-delay: 460ms; }
  .services-section.is-visible .services-card:nth-child(6) { transition-delay: 550ms; }
  .services-photo {
    transform: scale(1.015);
    transition: transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
  }
  .services-card:hover .services-photo { transform: scale(1.07); }
  .services-card:hover { box-shadow: 0 22px 42px -24px rgba(0, 0, 0, 0.35); }
  .services-icon { transition: transform 350ms ease, box-shadow 350ms ease; }
  .services-card:hover .services-icon {
    transform: translateY(-3px) rotate(-3deg);
    box-shadow: 0 10px 22px -8px rgba(220, 38, 38, 0.55);
  }
  .services-wedge { transition: opacity 350ms ease; }
  .services-card:hover .services-wedge { opacity: 0.7; }
  .services-arrow { transition: background-color 250ms ease, color 250ms ease; }
  .services-link:hover .services-arrow svg { transform: translateX(3px); }
  @media (prefers-reduced-motion: reduce) {
    .services-heading, .services-card, .services-photo, .services-icon,
    .services-wedge, .services-arrow, .services-arrow svg {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }
  }
</style>

<script>
(function () {
  const section = document.querySelector('#services.services-section');
  if (!section) return;

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    section.classList.add('is-visible');
    return;
  }

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          section.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -35px 0px' });
    observer.observe(section);
  } else {
    section.classList.add('is-visible');
  }
})();
</script>
