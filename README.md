# Patil Brothers — PHP + Tailwind CSS

This is a PHP conversion package with shared includes, clean URL rules, the source image assets, responsive navigation, service pages, gallery, and WhatsApp-only enquiries.

## Requirements
- PHP 8.0+
- Apache with `mod_rewrite` enabled for clean URLs (Hostinger usually supports this)
- Internet access for the included Tailwind CDN fallback; alternatively build local Tailwind CSS using Node.js/npm

## Run locally
From this directory run:

```bash
php -S localhost:8000
```

Open http://localhost:8000. PHP's built-in server will resolve directory `index.php` files, but does not process `.htaccess`; for production clean URL rules use Apache/XAMPP or Hostinger.

## Tailwind CSS build
Node.js and npm are only needed to compile the CSS, not to run the PHP website. Run:

```bash
npm install
npm run build:css
```

This generates `assets/css/tailwind.generated.css`. The pages currently include the Tailwind Play CDN as a fallback, plus `assets/css/style.css` for custom styles. For a production build without CDN dependency, add a link to `assets/css/tailwind.generated.css` in `includes/header.php` and remove the CDN script after verifying the generated CSS covers the used utilities.

## WhatsApp enquiries
The forms validate required fields in the browser and open WhatsApp at `https://wa.me/919595880764` with a prefilled message. The visitor must press Send in WhatsApp to deliver it. No email is sent or stored by the website.

## Conversion fidelity note
The source uses Next.js 16, React client components, Next Image, and Tailwind CSS v4. This PHP conversion retains the provided images, main route set, principal content areas, responsive styling intent, and WhatsApp enquiry flow. React-specific component markup and several component animations have been recreated in PHP/vanilla JavaScript rather than mechanically translated, so this package should be compared against the original in a browser before claiming pixel-perfect equivalence.
