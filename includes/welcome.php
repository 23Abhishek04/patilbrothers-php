<?php
/**
 * Welcome section converted from the original Next.js Welcome component.
 * Place this file at: includes/welcome.php
 * Keep the images at: assets/images/welcome-1.png, welcome-2.png, welcome-3.png
 */
?>

<section id="about" class="welcome-section relative isolate overflow-hidden bg-white py-16 sm:py-20 lg:py-28">
  <div class="mx-auto grid max-w-[1440px] grid-cols-1 items-center gap-12 px-5 sm:px-8 lg:grid-cols-[1.05fr_1fr] lg:gap-16 lg:px-12 xl:gap-20">

    <!-- Image collage -->
    <div class="welcome-reveal welcome-image relative mx-auto w-full max-w-2xl pl-4 pt-4 sm:pl-8 sm:pt-8 lg:max-w-none">
      <div
        class="pointer-events-none absolute left-0 top-0 h-2/5 w-1/2 border-l-2 border-t-2 border-r-2 border-[#ff1620] sm:h-[45%] sm:w-[45%]"
        aria-hidden="true"
      ></div>

      <div class="welcome-collage relative grid grid-cols-[1.7fr_1fr] gap-1.5 overflow-hidden rounded-xl shadow-2xl shadow-neutral-400/40 sm:gap-2">
        <!-- Large image -->
        <div class="welcome-photo relative row-span-2 min-h-[340px] sm:min-h-[460px] lg:min-h-[500px]">
          <img
            src="/assets/images/welcome-1.png"
            alt="CNC laser cutting machine in operation"
            class="h-full w-full object-cover"
            loading="lazy"
          />
          <div
            class="absolute bottom-0 left-0 w-[62%] bg-gradient-to-br from-red-600 to-red-900 px-4 pb-4 pt-8 sm:px-6 sm:pb-6 sm:pt-12"
            style="clip-path: polygon(0 18%, 100% 0, 100% 100%, 0 100%)"
          >
            <span class="mb-3 block h-0.5 w-8 bg-white"></span>
            <p class="text-[10px] font-medium uppercase leading-5 tracking-[0.15em] text-white sm:text-xs sm:leading-6 lg:text-[13px]">
              Precision<br />
              Components<br />
              Stronger<br />
              Industries
            </p>
          </div>
        </div>

        <!-- Top right image -->
        <div class="welcome-photo welcome-photo-delay-1 relative min-h-[165px] sm:min-h-[225px] lg:min-h-[245px]">
          <img
            src="/assets/images/welcome-2.png"
            alt="Precision bent sheet metal parts"
            class="h-full w-full object-cover"
            loading="lazy"
          />
        </div>

        <!-- Bottom right image -->
        <div class="welcome-photo welcome-photo-delay-2 relative min-h-[165px] sm:min-h-[225px] lg:min-h-[245px]">
          <img
            src="/assets/images/welcome-3.png"
            alt="Welder working on metal fabrication"
            class="h-full w-full object-cover"
            loading="lazy"
          />
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="welcome-reveal welcome-copy">
      <div class="flex items-center gap-3">
        <span class="h-0.5 w-10 bg-[#ff1620] sm:w-12"></span>
        <span class="text-lg font-medium text-[#ff1620] sm:text-xl">Welcome TO</span>
      </div>

      <h2 class="welcome-heading mt-4 text-4xl font-black leading-[1.05] tracking-tight text-neutral-950 sm:text-5xl xl:text-6xl">
        Precision <span class="text-[#ff1620]">Engineering</span>
      </h2>

      <p class="welcome-description mt-6 max-w-2xl text-base leading-relaxed text-neutral-600 sm:text-lg">
        Precision Engineering is your trusted partner for high-precision sheet metal
        manufacturing solutions. With advanced machinery, a skilled team, and a commitment
        to quality, we deliver components that meet the highest standards of accuracy,
        durability, and performance.
      </p>

      <!-- Features -->
      <ul class="welcome-features mt-10 grid grid-cols-1 gap-8 sm:grid-cols-3 sm:gap-0 lg:mt-14">
        <li class="welcome-feature flex flex-row items-start gap-4 sm:flex-col sm:gap-0 sm:pr-5" style="--feature-index: 0">
          <span class="welcome-feature-icon shrink-0 text-[#ff1620]">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="h-10 w-10 sm:h-11 sm:w-11" aria-hidden="true">
              <circle cx="11" cy="13" r="8"></circle>
              <circle cx="11" cy="13" r="4.5"></circle>
              <circle cx="11" cy="13" r="1" fill="currentColor"></circle>
              <path d="M11 13l8-8M16 3.5V8h4.5"></path>
            </svg>
          </span>
          <span class="block sm:mt-3">
            <span class="block text-lg font-bold text-neutral-950">Custom Solutions</span>
            <span class="mt-1 block text-[15px] leading-snug text-neutral-500">Tailored to your requirements</span>
          </span>
        </li>

        <li class="welcome-feature flex flex-row items-start gap-4 sm:flex-col sm:gap-0 sm:border-l sm:border-neutral-200 sm:pl-5 sm:pr-5 xl:pl-8" style="--feature-index: 1">
          <span class="welcome-feature-icon shrink-0 text-[#ff1620]">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="h-10 w-10 sm:h-11 sm:w-11" aria-hidden="true">
              <path d="M12 3l8 3v6c0 4.5-3.2 8-8 9-4.8-1-8-4.5-8-9V6l8-3z"></path>
              <path d="M8.5 12l2.5 2.5 4.5-5"></path>
            </svg>
          </span>
          <span class="block sm:mt-3">
            <span class="block text-lg font-bold text-neutral-950">High Precision</span>
            <span class="mt-1 block text-[15px] leading-snug text-neutral-500">Consistent quality and tight tolerances</span>
          </span>
        </li>

        <li class="welcome-feature flex flex-row items-start gap-4 sm:flex-col sm:gap-0 sm:border-l sm:border-neutral-200 sm:pl-5 xl:pl-8" style="--feature-index: 2">
          <span class="welcome-feature-icon shrink-0 text-[#ff1620]">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="h-10 w-10 sm:h-11 sm:w-11" aria-hidden="true">
              <circle cx="12" cy="12" r="3"></circle>
              <path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3H9a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l.1.1a1.7 1.7 0 0 0-.3 1.8V9a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"></path>
            </svg>
          </span>
          <span class="block sm:mt-3">
            <span class="block text-lg font-bold text-neutral-950">On-Time Delivery</span>
            <span class="mt-1 block text-[15px] leading-snug text-neutral-500">Reliable and efficient production</span>
          </span>
        </li>
      </ul>
    </div>
  </div>
</section>

<style>
  .welcome-reveal {
    opacity: 0;
    transform: translate3d(0, 28px, 0);
    transition: opacity 750ms ease, transform 850ms cubic-bezier(0.22, 1, 0.36, 1);
  }

  .welcome-section.is-visible .welcome-image {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transition-delay: 80ms;
  }

  .welcome-section.is-visible .welcome-copy {
    opacity: 1;
    transform: translate3d(0, 0, 0);
    transition-delay: 220ms;
  }

  .welcome-photo {
    overflow: hidden;
    background: #f5f5f5;
  }

  .welcome-photo img {
    display: block;
    transition: transform 850ms cubic-bezier(0.22, 1, 0.36, 1), filter 500ms ease;
  }

  .welcome-section.is-visible .welcome-photo img {
    animation: welcomePhotoReveal 900ms cubic-bezier(0.22, 1, 0.36, 1) both;
  }

  .welcome-section.is-visible .welcome-photo-delay-1 img { animation-delay: 140ms; }
  .welcome-section.is-visible .welcome-photo-delay-2 img { animation-delay: 260ms; }
  .welcome-collage:hover .welcome-photo img { transform: scale(1.045); }

  .welcome-heading { opacity: 0; transform: translateY(12px); }

  .welcome-section.is-visible .welcome-heading {
    animation: welcomeTextReveal 650ms 300ms ease-out forwards;
  }

  .welcome-description { opacity: 0; transform: translateY(12px); }

  .welcome-section.is-visible .welcome-description {
    animation: welcomeTextReveal 650ms 390ms ease-out forwards;
  }

  .welcome-feature {
    opacity: 0;
    transform: translateY(18px);
    transition: transform 250ms ease;
  }

  .welcome-section.is-visible .welcome-feature {
    animation: welcomeTextReveal 600ms calc(470ms + var(--feature-index) * 120ms) ease-out forwards;
  }

  .welcome-feature-icon { transition: transform 250ms ease; }
  .welcome-feature:hover .welcome-feature-icon { transform: translateY(-4px) scale(1.04); }

  @keyframes welcomePhotoReveal {
    from { opacity: 0.45; transform: scale(1.07); }
    to { opacity: 1; transform: scale(1); }
  }

  @keyframes welcomeTextReveal {
    to { opacity: 1; transform: translateY(0); }
  }

  @media (prefers-reduced-motion: reduce) {
    .welcome-reveal,
    .welcome-heading,
    .welcome-description,
    .welcome-feature,
    .welcome-section.is-visible .welcome-photo img {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }

    .welcome-photo img,
    .welcome-feature-icon { transition: none !important; }
  }

  /* Mobile and tablet responsive fixes */
.welcome-section,
.welcome-section * {
  box-sizing: border-box;
}

.welcome-section {
  width: 100%;
  overflow: hidden;
}

.welcome-section .welcome-collage {
  width: 100%;
}

.welcome-section .welcome-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media (max-width: 639px) {
  .welcome-section {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .welcome-section > div {
    gap: 2rem;
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .welcome-section .welcome-image {
    padding-left: 0.75rem;
    padding-top: 0.75rem;
  }

  .welcome-section .welcome-photo {
    min-height: 0;
    height: 150px;
  }

  .welcome-section .welcome-photo:first-child {
    height: 310px;
  }

  .welcome-section .welcome-heading {
    font-size: clamp(1.8rem, 8vw, 2.4rem);
    line-height: 1.1;
  }

  .welcome-section .welcome-description {
    margin-top: 1rem;
    font-size: 0.9rem;
    line-height: 1.7;
  }

  .welcome-section .welcome-features {
    margin-top: 1.75rem;
    gap: 1.25rem;
  }
}

@media (prefers-reduced-motion: reduce) {
  .welcome-section .welcome-reveal,
  .welcome-section .welcome-heading,
  .welcome-section .welcome-description,
  .welcome-section .welcome-feature {
    opacity: 1 !important;
    transform: none !important;
    animation: none !important;
    transition: none !important;
  }
}
</style>

<script>
  (() => {
    const section = document.querySelector(".welcome-section");
    if (!section) return;

    if (!("IntersectionObserver" in window)) {
      section.classList.add("is-visible");
      return;
    }

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          section.classList.add("is-visible");
          observer.disconnect();
        }
      },
      { threshold: 0.14, rootMargin: "0px 0px -40px 0px" }
    );

    observer.observe(section);
  })();
</script>
