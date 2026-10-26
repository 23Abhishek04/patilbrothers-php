<?php
/**
 * Patil Brothers Contact Section
 * Converted from Contact.tsx to PHP/HTML with Tailwind CSS and vanilla JavaScript.
 * Place this file at: includes/contact.php
 */
$contact_bg_image = '/assets/images/contact-bg.png';
$contact_whatsapp_number = '919595880764';
?>

<section id="contact" class="contact-section relative overflow-hidden bg-white">
  <!-- ===== desktop background: diagonal photo + red wedge ===== -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-y-0 right-0 hidden w-[66%] lg:block">
    <div
      class="absolute inset-0 bg-neutral-900 bg-cover bg-center"
      style="clip-path: polygon(23% 0, 100% 0, 100% 100%, 0 100%); background-image: linear-gradient(90deg, rgba(0,0,0,.45), rgba(0,0,0,.1) 50%, rgba(0,0,0,.35)), url('<?php echo htmlspecialchars($contact_bg_image, ENT_QUOTES, 'UTF-8'); ?>');">
    </div>
    <div class="absolute inset-0 bg-gradient-to-tr from-red-700/90 to-transparent"
      style="clip-path: polygon(0 100%, 28% 100%, 40% 88%, 14% 88%);"></div>
  </div>

  <!-- faint grid lines on the white side -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-0 hidden lg:block"
    style="background: linear-gradient(115deg, transparent 38%, rgba(220,38,38,.08) 38.1%, transparent 38.3%), linear-gradient(115deg, transparent 31%, rgba(0,0,0,.05) 31.1%, transparent 31.3%);">
  </div>

  <div class="relative mx-auto grid max-w-[1400px] gap-10 px-4 pt-14 sm:px-6 lg:grid-cols-[minmax(0,1.25fr)_minmax(0,0.9fr)] lg:gap-14 lg:px-10 lg:pb-16 lg:pt-16 xl:gap-24">
    <!-- ===== LEFT ===== -->
    <div class="contact-left min-w-0 pb-4 lg:pb-0">
      <div class="flex items-center gap-3">
        <span class="h-[3px] w-9 bg-red-600"></span>
        <span class="text-sm font-semibold uppercase tracking-wide text-red-600">Contact Us</span>
      </div>

      <h2 class="mt-3 text-5xl font-extrabold leading-[1.05] tracking-tight text-[#0b0d10] sm:text-6xl lg:text-[76px]">
        Get In <span class="text-red-600">Touch</span>
      </h2>

      <p class="mt-4 max-w-[640px] text-lg leading-snug text-gray-600 sm:text-xl">
        Let’s discuss your project requirements. Our team is ready to provide the right
        manufacturing solution for your needs.
      </p>

      <!-- contact info -->
      <div class="contact-info mt-8 grid gap-5 sm:grid-cols-2 xl:flex xl:items-center xl:gap-0">
        <div class="xl:pr-6">
          <div class="flex items-center gap-3">
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path d="M2.25 6.75A4.5 4.5 0 0 1 6.75 2.25h.386c.8 0 1.5.545 1.69 1.322l.57 2.33a1.75 1.75 0 0 1-.49 1.69L7.48 9.02a12.05 12.05 0 0 0 7.5 7.5l1.428-1.426a1.75 1.75 0 0 1 1.69-.49l2.33.57a1.75 1.75 0 0 1 1.322 1.69v.386a4.5 4.5 0 0 1-4.5 4.5h-.75C8.215 21.75 2.25 15.785 2.25 8.25v-1.5Z"/>
              </svg>
            </span>
            <div class="min-w-0">
              <p class="text-sm text-gray-500">Call Us</p>
              <div class="text-[15px] font-semibold leading-snug text-gray-900">
                <a href="tel:+919595880764" class="hover:text-red-600">+91 959-588-0764</a>
              </div>
            </div>
          </div>
        </div>

        <div class="xl:border-l xl:border-gray-200 xl:px-6">
          <div class="flex items-center gap-3">
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="h-5 w-5">
                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                <path d="m3 7 9 6 9-6"></path>
              </svg>
            </span>
            <div class="min-w-0">
              <p class="text-sm text-gray-500">Email Us</p>
              <div class="text-[15px] font-semibold leading-snug text-gray-900">
                <a href="mailto:patilbrothers30@gmail.com" class="break-all hover:text-red-600">patilbrothers30@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="sm:col-span-2 xl:col-span-1 xl:border-l xl:border-gray-200 xl:pl-6">
          <div class="flex items-center gap-3">
            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd" d="M12 2.25a7.5 7.5 0 0 0-7.5 7.5c0 5.44 7.5 12 7.5 12s7.5-6.56 7.5-12a7.5 7.5 0 0 0-7.5-7.5Zm0 10.125a2.625 2.625 0 1 0 0-5.25 2.625 2.625 0 0 0 0 5.25Z" clip-rule="evenodd"/>
              </svg>
            </span>
            <div class="min-w-0">
              <p class="text-sm text-gray-500">Our Location</p>
              <div class="text-[15px] font-semibold leading-snug text-gray-900">
                Sr. No. 230/7, S-Block, MIDC,<br>
                Bhosari, Pune – 411026
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- map -->
      <div class="contact-map mt-8">
        <div class="contact-map-card relative h-[280px] overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-[0_20px_40px_-12px_rgba(0,0,0,0.18)] sm:h-[300px] lg:h-[295px]">
          <iframe
            src="https://www.google.com/maps?q=Sr.%20No.%20230%2F7%2C%20S-Block%2C%20MIDC%2C%20Bhosari%20411026&output=embed"
            title="Patil Brothers location on Google Maps"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen
            class="h-full w-full border-0">
          </iframe>
        </div>
      </div>
    </div>

    <!-- ===== RIGHT (form) ===== -->
    <div class="contact-form-panel relative -mx-4 bg-neutral-900 bg-cover bg-center px-4 py-10 sm:-mx-6 sm:px-6 lg:mx-0 lg:bg-none lg:bg-transparent lg:p-0 lg:pt-0"
      style="background-image: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)), url('<?php echo htmlspecialchars($contact_bg_image, ENT_QUOTES, 'UTF-8'); ?>');">
      <div class="mx-auto max-w-[680px] rounded-md bg-white p-6 shadow-2xl sm:p-8 lg:mx-0 lg:mt-0 lg:px-11 lg:py-9">
        <div class="flex items-center gap-3">
          <span class="h-[3px] w-9 bg-red-600"></span>
          <span class="text-sm font-semibold uppercase tracking-wide text-red-600">Send Us A Message</span>
        </div>
        <h3 class="mt-2 text-3xl font-extrabold tracking-tight text-[#0b0d10] sm:text-4xl">Request a Quote</h3>
        <p class="mt-1 text-[15px] text-gray-500">Fill out the form and our team will get back to you shortly.</p>

        <form id="contact-whatsapp-form" class="mt-6 space-y-4">
          <div class="grid gap-4 sm:grid-cols-2">
            <div class="relative">
              <input id="contact-name" name="name" type="text" required placeholder=" " class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 h-[58px]">
              <label for="contact-name" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-1/2 -translate-y-1/2">Your Name <span class="ml-1 text-red-600">*</span></label>
            </div>
            <div class="relative">
              <input id="contact-company" name="company" type="text" placeholder=" " class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 h-[58px]">
              <label for="contact-company" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-1/2 -translate-y-1/2">Company Name</label>
            </div>
          </div>

          <div class="relative">
            <input id="contact-email" name="email" type="email" required placeholder=" " class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 h-[58px]">
            <label for="contact-email" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-1/2 -translate-y-1/2">Email Address <span class="ml-1 text-red-600">*</span></label>
          </div>

          <div class="grid gap-4 sm:grid-cols-2">
            <div class="relative">
              <input id="contact-phone" name="phone" type="tel" placeholder=" " class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 h-[58px]">
              <label for="contact-phone" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-1/2 -translate-y-1/2">Phone Number</label>
            </div>
            <div class="relative">
              <input id="contact-subject" name="subject" type="text" placeholder=" " class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 h-[58px]">
              <label for="contact-subject" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-1/2 -translate-y-1/2">Subject</label>
            </div>
          </div>

          <div class="relative">
            <textarea id="contact-message" name="message" required placeholder=" " rows="5" class="peer w-full rounded-[4px] border border-gray-200 bg-[#f4f5f6] px-4 text-[15px] text-gray-900 outline-none transition focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-500/20 min-h-[140px] resize-y pb-3 pt-5"></textarea>
            <label for="contact-message" class="pointer-events-none absolute left-4 text-[15px] text-gray-500 peer-focus:hidden peer-[:not(:placeholder-shown)]:hidden top-5">Your Message <span class="ml-1 text-red-600">*</span></label>
          </div>

          <button type="submit" class="group flex h-[58px] w-full items-center justify-center gap-3 rounded-[4px] bg-gradient-to-b from-red-600 to-red-700 text-[17px] font-semibold text-white shadow-md transition hover:from-red-500 hover:to-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600 focus-visible:ring-offset-2 disabled:opacity-70">
            Send Message
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5 transition-transform group-hover:translate-x-1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>

          <p id="contact-form-status" role="status" aria-live="polite" class="min-h-[1.25rem] text-sm"></p>
        </form>
      </div>

      <!-- tagline (desktop only) -->
      <div class="absolute -bottom-3 right-0 hidden translate-y-full items-start gap-5 lg:flex">
        <span class="mt-2 h-[4px] w-12 bg-red-600"></span>
        <p class="w-[130px] text-[13px] font-medium uppercase leading-tight tracking-[0.12em] text-white/60">
          Precision Components Stronger Industries
        </p>
      </div>
    </div>
  </div>

  <!-- bottom spacing so the tagline clears on desktop -->
  <div class="hidden h-10 lg:block"></div>
</section>

<style>
  .contact-left,
  .contact-form-panel {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 800ms ease, transform 800ms cubic-bezier(0.22, 1, 0.36, 1);
  }
  .contact-section.is-visible .contact-left,
  .contact-section.is-visible .contact-form-panel {
    opacity: 1;
    transform: translateY(0);
  }
  .contact-section.is-visible .contact-form-panel { transition-delay: 180ms; }
  .contact-info,
  .contact-map {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 650ms ease, transform 650ms cubic-bezier(0.22, 1, 0.36, 1);
  }
  .contact-section.is-visible .contact-info {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 220ms;
  }
  .contact-section.is-visible .contact-map {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 340ms;
  }
  .contact-map-card {
    transition: box-shadow 350ms ease, border-color 350ms ease;
  }
  .contact-map:hover .contact-map-card {
    border-color: rgba(220, 38, 38, 0.35);
    box-shadow: 0 24px 45px -18px rgba(0, 0, 0, 0.38);
  }
  @media (prefers-reduced-motion: reduce) {
    .contact-left, .contact-form-panel, .contact-info, .contact-map, .contact-map-card {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }
  }
</style>

<script>
(function () {
  const section = document.querySelector('#contact.contact-section');
  if (section) {
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
  }

  const form = document.getElementById('contact-whatsapp-form');
  const status = document.getElementById('contact-form-status');
  if (!form || !status) return;

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const data = new FormData(form);
    const name = String(data.get('name') || '').trim();
    const company = String(data.get('company') || '').trim();
    const email = String(data.get('email') || '').trim();
    const phone = String(data.get('phone') || '').trim();
    const subject = String(data.get('subject') || '').trim();
    const message = String(data.get('message') || '').trim();

    const whatsappMessage = [
      'New Enquiry - Patil Brothers',
      '',
      'Name: ' + name,
      'Company: ' + (company || 'Not provided'),
      'Email: ' + email,
      'Phone: ' + (phone || 'Not provided'),
      'Subject: ' + (subject || 'General enquiry'),
      '',
      'Message:',
      message
    ].join('\n');

    const whatsappUrl = 'https://wa.me/<?php echo htmlspecialchars($contact_whatsapp_number, ENT_QUOTES, 'UTF-8'); ?>?text=' + encodeURIComponent(whatsappMessage);
    const whatsappWindow = window.open(whatsappUrl, '_blank', 'noopener,noreferrer');

    status.className = 'min-h-[1.25rem] text-sm text-green-600';
    status.textContent = 'WhatsApp has opened with your enquiry. Press Send in WhatsApp to deliver it.';

    if (!whatsappWindow) {
      status.className = 'min-h-[1.25rem] text-sm text-red-600';
      status.textContent = 'Your browser blocked the WhatsApp window. Please allow pop-ups and try again.';
    } else {
      form.reset();
    }
  });
})();
</script>
