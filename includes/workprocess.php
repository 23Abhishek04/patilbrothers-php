<?php
/**
 * Work Process section converted from the original Next.js Workprocess component.
 * Place this file at: includes/workprocess.php
 * Required images: assets/images/process-1.png through process-4.png
 */
?>

<section id="process" class="workprocess-section relative isolate overflow-hidden bg-gradient-to-b from-white to-neutral-100 py-16 sm:py-20 lg:py-24">
  <!-- Decorative background -->
  <div class="pointer-events-none absolute -left-20 top-0 -z-10 h-56 w-40 -skew-x-[22deg] bg-gradient-to-b from-red-600 to-red-300/20 sm:w-56"></div>
  <div class="pointer-events-none absolute -right-24 bottom-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-t from-red-600 to-transparent lg:block"></div>

  <svg viewBox="0 0 24 24" fill="currentColor" class="pointer-events-none absolute -right-10 top-10 -z-10 hidden h-80 w-80 text-neutral-200/50 md:block" aria-hidden="true">
    <path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"></path>
  </svg>

  <div class="pointer-events-none absolute bottom-6 left-3 -z-10 hidden h-28 w-36 opacity-60 sm:block" style="background-image: radial-gradient(#ff1620 1.5px, transparent 1.5px); background-size: 18px 18px;"></div>

  <div class="workprocess-content mx-auto max-w-[1440px] px-5 sm:px-8 lg:px-12">
    <!-- Heading -->
    <div class="workprocess-heading mx-auto max-w-3xl text-center">
      <div class="flex items-center justify-center gap-3">
        <span class="h-0.5 w-10 bg-[#ff1620] sm:w-14"></span>
        <span class="text-sm font-semibold uppercase tracking-wide text-[#ff1620] sm:text-base">Work Process</span>
      </div>
      <h2 class="mt-3 text-4xl font-black tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl">
        How We <span class="text-[#ff1620]">Work</span>
      </h2>
      <p class="mt-5 text-base leading-relaxed text-neutral-600 sm:text-lg">
        A simple and transparent process to turn your ideas into high-quality metal
        components, from design to delivery.
      </p>
    </div>

    <!-- Steps -->
    <ol class="workprocess-steps mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:mt-16 sm:grid-cols-2 sm:gap-y-14 lg:grid-cols-4 lg:gap-x-8">
      <!-- Step 1 -->
      <li class="workprocess-step group relative">
        <div class="workprocess-image relative h-48 sm:h-52 lg:h-48 xl:h-56">
          <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-800" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)"></div>
          <div class="absolute inset-0 ml-3 overflow-hidden bg-neutral-900 sm:ml-4" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)">
            <img src="/assets/images/process-1.png" alt="Share Your Requirements" class="workprocess-photo h-full w-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          </div>
        </div>
        <div class="workprocess-card relative -mt-px rounded-b-3xl rounded-tr-[2.5rem] bg-white px-5 pb-7 pt-12 shadow-xl shadow-neutral-300/50 sm:px-6">
          <div class="absolute left-[36%] top-0 -translate-x-1/2 -translate-y-1/2">
            <span class="flex h-[72px] w-[72px] items-center justify-center rounded-full bg-white p-1.5 shadow-lg sm:h-20 sm:w-20">
              <span class="flex h-full w-full items-center justify-center rounded-full bg-[#ff1620] text-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 sm:h-9 sm:w-9" aria-hidden="true">
                  <path d="M14 3H6a1.5 1.5 0 0 0-1.5 1.5v15A1.5 1.5 0 0 0 6 21h5"></path>
                  <path d="M14 3l5 5v2"></path><path d="M14 3v5h5"></path><path d="M8 12h6M8 15.5h3"></path>
                  <path d="M18.5 13l2.5 2.5-5.5 5.5H13v-2.5l5.5-5.5z"></path>
                </svg>
              </span>
            </span>
          </div>
          <div class="pointer-events-none absolute right-0 top-0 hidden -translate-y-1/2 items-center lg:flex" style="left: calc(36% + 2.75rem)" aria-hidden="true">
            <span class="h-px flex-1 bg-[#ff1620]"></span>
            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#ff1620] text-white shadow-md shadow-red-500/30">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
            </span>
          </div>
          <div class="flex items-start gap-4">
            <span class="select-none text-5xl font-black leading-none text-neutral-200 xl:text-6xl">01</span>
            <div class="pt-1">
              <h3 class="text-lg font-bold leading-tight text-neutral-950 xl:text-xl">Share Your Requirements</h3>
              <p class="mt-2 text-sm leading-relaxed text-neutral-500 xl:text-[15px]">Send us your drawings, sample parts or idea.</p>
            </div>
          </div>
        </div>
      </li>

      <!-- Step 2 -->
      <li class="workprocess-step group relative">
        <div class="workprocess-image relative h-48 sm:h-52 lg:h-48 xl:h-56">
          <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-800" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)"></div>
          <div class="absolute inset-0 ml-3 overflow-hidden bg-neutral-900 sm:ml-4" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)">
            <img src="/assets/images/process-2.png" alt="Get a Quote" class="workprocess-photo h-full w-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          </div>
        </div>
        <div class="workprocess-card relative -mt-px rounded-b-3xl rounded-tr-[2.5rem] bg-white px-5 pb-7 pt-12 shadow-xl shadow-neutral-300/50 sm:px-6">
          <div class="absolute left-[36%] top-0 -translate-x-1/2 -translate-y-1/2">
            <span class="flex h-[72px] w-[72px] items-center justify-center rounded-full bg-white p-1.5 shadow-lg sm:h-20 sm:w-20">
              <span class="flex h-full w-full items-center justify-center rounded-full bg-[#ff1620] text-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 sm:h-9 sm:w-9" aria-hidden="true">
                  <path d="M14 3H6.5A1.5 1.5 0 0 0 5 4.5v15A1.5 1.5 0 0 0 6.5 21h11a1.5 1.5 0 0 0 1.5-1.5V8l-5-5z"></path>
                  <path d="M14 3v5h5"></path><path d="M9 11.5h5.5M9 14h5.5M11 11.5c2.6 0 2.6 4 0 4h-1.5l3 2.5"></path>
                </svg>
              </span>
            </span>
          </div>
          <div class="pointer-events-none absolute right-0 top-0 hidden -translate-y-1/2 items-center lg:flex" style="left: calc(36% + 2.75rem)" aria-hidden="true">
            <span class="h-px flex-1 bg-[#ff1620]"></span>
            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#ff1620] text-white shadow-md shadow-red-500/30">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
            </span>
          </div>
          <div class="flex items-start gap-4">
            <span class="select-none text-5xl font-black leading-none text-neutral-200 xl:text-6xl">02</span>
            <div class="pt-1">
              <h3 class="text-lg font-bold leading-tight text-neutral-950 xl:text-xl">Get a Quote</h3>
              <p class="mt-2 text-sm leading-relaxed text-neutral-500 xl:text-[15px]">We review your requirements and provide a competitive quote.</p>
            </div>
          </div>
        </div>
      </li>

      <!-- Step 3 -->
      <li class="workprocess-step group relative">
        <div class="workprocess-image relative h-48 sm:h-52 lg:h-48 xl:h-56">
          <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-800" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)"></div>
          <div class="absolute inset-0 ml-3 overflow-hidden bg-neutral-900 sm:ml-4" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)">
            <img src="/assets/images/process-3.png" alt="Production" class="workprocess-photo h-full w-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          </div>
        </div>
        <div class="workprocess-card relative -mt-px rounded-b-3xl rounded-tr-[2.5rem] bg-white px-5 pb-7 pt-12 shadow-xl shadow-neutral-300/50 sm:px-6">
          <div class="absolute left-[36%] top-0 -translate-x-1/2 -translate-y-1/2">
            <span class="flex h-[72px] w-[72px] items-center justify-center rounded-full bg-white p-1.5 shadow-lg sm:h-20 sm:w-20">
              <span class="flex h-full w-full items-center justify-center rounded-full bg-[#ff1620] text-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 sm:h-9 sm:w-9" aria-hidden="true">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l-.1-.1a2 2 0 1 1 2.8 2.8l.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"></path>
                </svg>
              </span>
            </span>
          </div>
          <div class="pointer-events-none absolute right-0 top-0 hidden -translate-y-1/2 items-center lg:flex" style="left: calc(36% + 2.75rem)" aria-hidden="true">
            <span class="h-px flex-1 bg-[#ff1620]"></span>
            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#ff1620] text-white shadow-md shadow-red-500/30">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
            </span>
          </div>
          <div class="flex items-start gap-4">
            <span class="select-none text-5xl font-black leading-none text-neutral-200 xl:text-6xl">03</span>
            <div class="pt-1">
              <h3 class="text-lg font-bold leading-tight text-neutral-950 xl:text-xl">Production</h3>
              <p class="mt-2 text-sm leading-relaxed text-neutral-500 xl:text-[15px]">Your parts are manufactured with precision and quality control.</p>
            </div>
          </div>
        </div>
      </li>

      <!-- Step 4 -->
      <li class="workprocess-step group relative">
        <div class="workprocess-image relative h-48 sm:h-52 lg:h-48 xl:h-56">
          <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-800" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)"></div>
          <div class="absolute inset-0 ml-3 overflow-hidden bg-neutral-900 sm:ml-4" style="clip-path: polygon(12% 0, 100% 0, 88% 100%, 0 100%)">
            <img src="/assets/images/process-4.png" alt="Delivery" class="workprocess-photo h-full w-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
          </div>
        </div>
        <div class="workprocess-card relative -mt-px rounded-b-3xl rounded-tr-[2.5rem] bg-white px-5 pb-7 pt-12 shadow-xl shadow-neutral-300/50 sm:px-6">
          <div class="absolute left-[36%] top-0 -translate-x-1/2 -translate-y-1/2">
            <span class="flex h-[72px] w-[72px] items-center justify-center rounded-full bg-white p-1.5 shadow-lg sm:h-20 sm:w-20">
              <span class="flex h-full w-full items-center justify-center rounded-full bg-[#ff1620] text-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 sm:h-9 sm:w-9" aria-hidden="true">
                  <path d="M2 6h11v10H2zM13 9h4l4 4v3h-8z"></path>
                  <circle cx="7" cy="18" r="1.8"></circle><circle cx="17" cy="18" r="1.8"></circle>
                </svg>
              </span>
            </span>
          </div>
          <div class="flex items-start gap-4">
            <span class="select-none text-5xl font-black leading-none text-neutral-200 xl:text-6xl">04</span>
            <div class="pt-1">
              <h3 class="text-lg font-bold leading-tight text-neutral-950 xl:text-xl">Delivery</h3>
              <p class="mt-2 text-sm leading-relaxed text-neutral-500 xl:text-[15px]">On-time delivery to your location.</p>
            </div>
          </div>
        </div>
      </li>
    </ol>
  </div>
</section>

<style>
  .workprocess-heading,
  .workprocess-step {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 750ms ease, transform 750ms cubic-bezier(0.22, 1, 0.36, 1);
  }

  .workprocess-section.is-visible .workprocess-heading,
  .workprocess-section.is-visible .workprocess-step {
    opacity: 1;
    transform: translateY(0);
  }

  .workprocess-section.is-visible .workprocess-step:nth-child(1) { transition-delay: 100ms; }
  .workprocess-section.is-visible .workprocess-step:nth-child(2) { transition-delay: 220ms; }
  .workprocess-section.is-visible .workprocess-step:nth-child(3) { transition-delay: 340ms; }
  .workprocess-section.is-visible .workprocess-step:nth-child(4) { transition-delay: 460ms; }

  .workprocess-image { overflow: hidden; }

  .workprocess-photo {
    display: block;
    transition: transform 700ms cubic-bezier(0.22, 1, 0.36, 1);
  }

  .workprocess-step:hover .workprocess-photo { transform: scale(1.06); }

  .workprocess-card { transition: box-shadow 350ms ease, transform 350ms ease; }

  .workprocess-step:hover .workprocess-card {
    transform: translateY(-5px);
    box-shadow: 0 24px 45px -24px rgba(38, 38, 38, 0.35);
  }

  .workprocess-step .workprocess-image > div:first-child { transition: filter 350ms ease; }
  .workprocess-step:hover .workprocess-image > div:first-child { filter: brightness(1.12); }

  @media (prefers-reduced-motion: reduce) {
    .workprocess-heading,
    .workprocess-step,
    .workprocess-photo,
    .workprocess-card,
    .workprocess-step .workprocess-image > div:first-child {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      filter: none !important;
    }
  }
</style>

<script>
  (() => {
    const section = document.querySelector(".workprocess-section");
    if (!section) return;

    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (reduceMotion || !("IntersectionObserver" in window)) {
      section.classList.add("is-visible");
      return;
    }

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          section.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );

    observer.observe(section);
  })();
</script>
