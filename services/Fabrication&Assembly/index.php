<?php
$pageTitle = 'Fabrication & Assembly | Patil Brothers';
$pageDescription = 'Comprehensive metal fabrication and assembly services, including cutting, bending, machining, welding, and custom component assembly.';
$CURRENT_SLUG = 'Fabrication&Assembly';
$contact_url = '/contact/';
$hero_image = '/assets/images/Fabrication-hero.png';

$sidebarServices = [
    ['slug' => 'LaserCuttingFacility', 'title' => 'Laser Cutting Facility', 'image' => '/assets/images/services/laser.webp'],
    ['slug' => 'PlasmaCuttingFacility', 'title' => 'Plasma Cutting Facility', 'image' => '/assets/images/services/plasma.webp'],
    ['slug' => 'BendingFacility', 'title' => 'Bending Facility', 'image' => '/assets/images/services/bending.webp'],
    ['slug' => 'WeldingFacility', 'title' => 'Welding Facility', 'image' => '/assets/images/services/welding.webp'],
    ['slug' => 'Fabrication&Assembly', 'title' => 'Fabrication & Assembly', 'image' => '/assets/images/services/fabrication.webp'],
    ['slug' => 'WellEquippedInfrastructure', 'title' => 'Well Equipped Infrastructure with Design Centre', 'image' => '/assets/images/services/machined.webp'],
];

// ---------- Fabrication services ----------

$fabricationServices = [

    [

        'number' => '01',

        'title' => 'Metal Fabrication',

        'text' => 'Integrated metalworking processes to produce components and structures according to project drawings and specifications.',

    ],

    [

        'number' => '02',

        'title' => 'Custom Metalwork',

        'text' => 'Fabrication solutions tailored to specific requirements, from individual custom components to production-ready parts.',

    ],

    [

        'number' => '03',

        'title' => 'Laser & Plasma Cutting',

        'text' => 'Cutting processes for producing component profiles and shapes based on material, thickness, and design requirements.',

    ],

    [

        'number' => '04',

        'title' => 'CNC Machining',

        'text' => 'Computer-controlled machining processes for components that require defined dimensions and detailed features.',

    ],

    [

        'number' => '05',

        'title' => 'Sheet Metal Fabrication',

        'text' => 'Fabrication of sheet metal parts, panels, covers, and other components for a range of industrial applications.',

    ],

    [

        'number' => '06',

        'title' => 'Welding & Assembly',

        'text' => 'Joining and assembly of fabricated parts to create components and structures according to project requirements.',

    ],

];



// ---------- Why choose us ----------

$whyChoose = [

    [

        'number' => '01',

        'title' => 'Integrated Services',

        'text' => 'Multiple fabrication processes can be coordinated to support your project from component preparation through assembly.',

    ],

    [

        'number' => '02',

        'title' => 'Specification-Focused Work',

        'text' => 'Fabrication activities are planned around the drawings, dimensions, material requirements, and intended use of each component.',

    ],

    [

        'number' => '03',

        'title' => 'Flexible Requirements',

        'text' => 'Solutions can be discussed for custom components, project-specific fabrication, and different production requirements.',

    ],

    [

        'number' => '04',

        'title' => 'Coordinated Workflow',

        'text' => 'Connecting cutting, forming, machining, welding, and assembly helps keep related manufacturing activities organised.',

    ],

    [

        'number' => '05',

        'title' => 'Project-Based Approach',

        'text' => 'The scope of work can be planned around your technical requirements, project drawings, and delivery expectations.',

    ],

];



if (!function_exists('fabricationEscape')) {
    function fabricationEscape($value): string { return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); }
}
if (!function_exists('fabricationServiceUrl')) {
    function fabricationServiceUrl($slug): string { return '/services/' . rawurlencode($slug) . '/'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= fabricationEscape($pageTitle) ?></title>
    <meta name="description" content="<?= fabricationEscape($pageDescription) ?>">
    <link rel="stylesheet" href="/assets/css/tailwind.generated.css">
    <style>

        .about-hero-image { transform: scale(1.045); opacity: .65; transition: transform 1600ms cubic-bezier(.22,1,.36,1), opacity 1000ms ease; }
        .about-hero-entered .about-hero-image { transform: scale(1); opacity: 1; }
        .about-hero-copy > * { opacity: 0; transform: translateY(22px); transition: opacity 700ms ease, transform 750ms cubic-bezier(.22,1,.36,1); }
        .about-hero-entered .about-hero-breadcrumb { opacity: 1; transform: translateY(0); transition-delay: 100ms; }
        .about-hero-entered .about-hero-eyebrow { opacity: 1; transform: translateY(0); transition-delay: 220ms; }
        .about-hero-entered .about-hero-title { opacity: 1; transform: translateY(0); transition-delay: 320ms; }
        .about-hero-entered .about-hero-rule { opacity: 1; transform: translateY(0); transition-delay: 430ms; }
        .about-hero-entered .about-hero-description { opacity: 1; transform: translateY(0); transition-delay: 520ms; }
        .about-hero-entered .about-hero-cta { opacity: 1; transform: translateY(0); transition-delay: 650ms; }
        .about-hero-cta a { transition: background-color 250ms ease, transform 250ms ease, box-shadow 250ms ease; }
        .about-hero-cta a:hover { transform: translateY(-2px); box-shadow: 0 14px 28px -12px rgba(220,38,38,.65); }
        @media (max-width:480px) { .about-hero-copy { width:100%; } .about-hero-title { font-size:clamp(2.75rem,12vw,3.5rem); overflow-wrap:break-word; } .about-hero-breadcrumb ol { max-width:100%; } }
        @media (prefers-reduced-motion:reduce) { .about-hero-image,.about-hero-copy > *, .about-hero-cta a { opacity:1!important; transform:none!important; transition:none!important; } }


/* =========================================================

   FABRICATION & ASSEMBLY — PAGE STYLES

   Header and footer are loaded from shared PHP components.

\========================================================= */



.fabrication-hero,

.fabrication-hero * {

    box-sizing: border-box;

}



.fabrication-hero {

    position: relative;

    isolation: isolate;

    display: flex;

    align-items: center;

    width: 100%;

    min-height: 560px;

    overflow: hidden;

    background: #17191d;

}



.fabrication-hero-image {

    position: absolute;

    inset: 0;

    z-index: -3;

    width: 100%;

    height: 100%;

    object-fit: cover;

    object-position: 62% center;

    opacity: .7;

    transform: scale(1.045);

    transition: transform 1.5s cubic-bezier(.22, 1, .36, 1),

                opacity 1s ease;

}



.fabrication-hero.is-entered .fabrication-hero-image {

    opacity: 1;

    transform: scale(1);

}



.fabrication-hero-overlay,

.fabrication-hero-bottom-overlay {

    position: absolute;

    inset: 0;

    z-index: -2;

    pointer-events: none;

}



.fabrication-hero-overlay {

    background: linear-gradient(

        90deg,

        rgba(23, 25, 29, .96) 0%,

        rgba(23, 25, 29, .82) 48%,

        rgba(23, 25, 29, .35) 100%

    );

}



.fabrication-hero-bottom-overlay {

    background: linear-gradient(

        0deg,

        rgba(23, 25, 29, .75),

        transparent 58%,

        rgba(23, 25, 29, .15)

    );

}



.fabrication-hero-accent {

    position: absolute;

    top: 0;

    z-index: -1;

    width: 145px;

    height: 48%;

    transform: skewX(-22deg);

    background: linear-gradient(180deg, rgba(185, 28, 28, .45), transparent);

    pointer-events: none;

}



.fabrication-hero-accent-left {

    left: -70px;

}



.fabrication-hero-accent-right {

    right: -110px;

    width: 225px;

    height: 68%;

    opacity: .7;

}



.fabrication-hero-bottom-line {

    position: absolute;

    bottom: 0;

    left: 0;

    width: 100%;

    height: 1px;

    background: linear-gradient(90deg, #e31e2f, rgba(255,255,255,.2), transparent);

}



.fabrication-hero-content {

    width: 100%;

    max-width: 1440px;

    margin: 0 auto;

    padding: 144px 24px 72px;

}



.fabrication-hero-copy {

    max-width: 900px;

}



.fabrication-hero-copy > * {

    opacity: 0;

    transform: translateY(20px);

    transition: opacity .7s ease, transform .75s cubic-bezier(.22, 1, .36, 1);

}



.fabrication-hero.is-entered .fabrication-breadcrumb {

    opacity: 1;

    transform: none;

    transition-delay: .1s;

}



.fabrication-hero.is-entered .fabrication-eyebrow {

    opacity: 1;

    transform: none;

    transition-delay: .2s;

}



.fabrication-hero.is-entered .fabrication-hero-title {

    opacity: 1;

    transform: none;

    transition-delay: .3s;

}



.fabrication-hero.is-entered .fabrication-hero-rule {

    opacity: 1;

    transform: none;

    transition-delay: .4s;

}



.fabrication-hero.is-entered .fabrication-hero-description {

    opacity: 1;

    transform: none;

    transition-delay: .5s;

}



.fabrication-hero.is-entered .fabrication-hero-actions {

    opacity: 1;

    transform: none;

    transition-delay: .6s;

}



/* Breadcrumb */



.fabrication-breadcrumb {

    margin-bottom: 28px;

}



.fabrication-breadcrumb ol {

    display: inline-flex;

    flex-wrap: wrap;

    align-items: center;

    gap: 12px;

    margin: 0;

    padding: 12px 20px;

    list-style: none;

    border: 1px solid rgba(255,255,255,.2);

    border-radius: 999px;

    background: rgba(23,25,29,.55);

    color: rgba(255,255,255,.75);

    backdrop-filter: blur(12px);

    font-size: 12px;

    font-weight: 500;

    letter-spacing: .13em;

    text-transform: uppercase;

}



.fabrication-breadcrumb a {

    color: inherit;

    text-decoration: none;

    transition: color .2s ease;

}



.fabrication-breadcrumb a:hover {

    color: #fff;

}



.fabrication-breadcrumb li[aria-hidden="true"] {

    color: rgba(255,255,255,.4);

}



.fabrication-breadcrumb li[aria-current="page"] {

    color: #ff303b;

}



/* Hero typography and button */



.fabrication-eyebrow {

    display: flex;

    align-items: center;

    gap: 12px;

    margin: 0 0 16px;

    color: rgba(255,255,255,.8);

    font-size: 13px;

    font-weight: 600;

    letter-spacing: .22em;

    text-transform: uppercase;

}



.fabrication-eyebrow span {

    display: inline-block;

    width: 40px;

    height: 2px;

    background: #e31e2f;

}



.fabrication-hero-title {

    max-width: 100%;

    margin: 0;

    color: #fff;

    font-size: clamp(40px, 7vw, 100px);

    font-weight: 900;

    line-height: .98;

    letter-spacing: -.045em;

    text-transform: uppercase;

    overflow-wrap: anywhere;

}



.fabrication-hero-title span {

    color: #ff303b;

}



.fabrication-hero-rule {

    width: 80px;

    height: 4px;

    margin-top: 24px;

    border-radius: 999px;

    background: #e31e2f;

}



.fabrication-hero-description {

    max-width: 700px;

    margin: 24px 0 0;

    color: #d4d7db;

    font-size: clamp(16px, 1.6vw, 20px);

    line-height: 1.75;

}



.fabrication-hero-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 14px;

    margin-top: 32px;

}



.fabrication-quote-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    min-height: 50px;

    padding: 14px 24px;

    border: 1px solid #e31e2f;

    border-radius: 7px;

    background: #e31e2f;

    color: #fff;

    text-decoration: none;

    font-size: 14px;

    font-weight: 700;

    box-shadow: 0 12px 24px rgba(69,10,10,.25);

    transition: background-color .25s ease, transform .25s ease, box-shadow .25s ease;

}



.fabrication-quote-button svg {

    width: 20px;

    height: 20px;

    flex-shrink: 0;

    transition: transform .25s ease;

}



.fabrication-quote-button:hover {

    transform: translateY(-2px);

    background: #b91c1c;

    box-shadow: 0 14px 28px -12px rgba(220,38,38,.65);

}



.fabrication-quote-button:hover svg {

    transform: translateX(4px);

}



/* =========================================================

   MAIN CONTENT LAYOUT

\========================================================= */



.fabrication-main {

    position: relative;

    overflow: hidden;

    padding: 64px 0 96px;

    background: #fff;

}



.fabrication-background-accent {

    position: absolute;

    top: 90px;

    left: -100px;

    z-index: 0;

    width: 160px;

    height: 260px;

    transform: skewX(-22deg);

    background: linear-gradient(180deg, #fee2e2, transparent);

    pointer-events: none;

}



.fabrication-layout {

    position: relative;

    z-index: 1;

    display: grid;

    grid-template-columns: minmax(0, 1fr);

    align-items: start;

    gap: 44px;

    width: 100%;

    max-width: 1440px;

    margin: 0 auto;

    padding: 0 24px;

}



.fabrication-article {

    min-width: 0;

}



.fabrication-section-label {

    display: flex;

    align-items: center;

    gap: 12px;

}



.fabrication-section-label > span:first-child {

    flex: 0 0 32px;

    width: 32px;

    height: 2px;

    background: #e31e2f;

}



.fabrication-section-label > span:last-child {

    color: #525252;

    font-size: 12px;

    font-weight: 600;

    letter-spacing: .24em;

    text-transform: uppercase;

}



.fabrication-overview-title {

    margin: 14px 0 0;

    color: #111;

    font-size: clamp(34px, 4.5vw, 60px);

    font-weight: 900;

    line-height: 1.1;

    letter-spacing: -.04em;

    overflow-wrap: anywhere;

}



.fabrication-overview-title span,

.fabrication-subheading span {

    color: #e31e2f;

}



.fabrication-divider {

    width: 100%;

    height: 1px;

    margin-top: 22px;

    background: linear-gradient(90deg, #d4d4d4, transparent);

}



.fabrication-paragraph {

    max-width: 900px;

    margin: 22px 0 0;

    color: #525252;

    font-size: 16px;

    line-height: 1.85;

}



/* Capabilities cards */



.fabrication-services-section,

.fabrication-process-section,

.fabrication-why-section {

    margin-top: 54px;

}



.fabrication-subheading {

    margin: 14px 0 0;

    color: #111;

    font-size: clamp(27px, 3.5vw, 42px);

    font-weight: 850;

    line-height: 1.15;

    letter-spacing: -.035em;

    overflow-wrap: anywhere;

}



.fabrication-service-grid {

    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 18px;

    margin-top: 28px;

}



.fabrication-service-card {

    position: relative;

    min-width: 0;

    overflow: hidden;

    padding: 24px 22px 28px;

    border: 1px solid #e8e8e8;

    border-radius: 10px;

    background: #fff;

    box-shadow: 0 8px 24px rgba(0,0,0,.035);

    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;

}



.fabrication-service-card:hover {

    transform: translateY(-4px);

    border-color: #f1b4b8;

    box-shadow: 0 14px 30px rgba(0,0,0,.08);

}



.fabrication-card-number {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    width: 42px;

    height: 42px;

    border-radius: 8px;

    background: #fff1f2;

    color: #d7192d;

    font-size: 13px;

    font-weight: 800;

}



.fabrication-service-card h3 {

    margin: 18px 0 0;

    color: #171717;

    font-size: 18px;

    font-weight: 800;

    line-height: 1.4;

    overflow-wrap: anywhere;

}



.fabrication-service-card p {

    margin: 10px 0 0;

    color: #626262;

    font-size: 14px;

    line-height: 1.8;

}



.fabrication-card-bottom-line {

    position: absolute;

    bottom: 0;

    left: 0;

    width: 0;

    height: 3px;

    background: #e31e2f;

    transition: width .3s ease;

}



.fabrication-service-card:hover .fabrication-card-bottom-line {

    width: 100%;

}



/* Process section */



.fabrication-process-list {

    display: grid;

    gap: 0;

    margin-top: 28px;

}



.fabrication-process-item {

    display: grid;

    grid-template-columns: 52px minmax(0, 1fr);

    gap: 18px;

    padding: 22px 0;

    border-bottom: 1px solid #e8e8e8;

}



.fabrication-process-item:first-child {

    padding-top: 0;

}



.fabrication-process-number {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 48px;

    height: 48px;

    border: 1px solid #f0b9bd;

    border-radius: 50%;

    color: #d7192d;

    font-size: 13px;

    font-weight: 800;

}



.fabrication-process-item h3 {

    margin: 0;

    color: #171717;

    font-size: 18px;

    font-weight: 800;

    line-height: 1.45;

}



.fabrication-process-item p {

    margin: 8px 0 0;

    color: #626262;

    font-size: 14px;

    line-height: 1.8;

}



/* Why choose us */



.fabrication-why-grid {

    display: grid;

    gap: 0;

    margin-top: 24px;

}



.fabrication-why-card {

    display: grid;

    grid-template-columns: 46px minmax(0, 1fr);

    gap: 16px;

    padding: 20px 0;

    border-bottom: 1px solid #e8e8e8;

}



.fabrication-why-card:first-child {

    padding-top: 0;

}



.fabrication-why-number {

    color: #e31e2f;

    font-size: 14px;

    font-weight: 900;

    letter-spacing: .04em;

}



.fabrication-why-card h3 {

    margin: 0;

    color: #171717;

    font-size: 17px;

    font-weight: 800;

    line-height: 1.45;

}



.fabrication-why-card p {

    margin: 7px 0 0;

    color: #626262;

    font-size: 14px;

    line-height: 1.8;

}



/* Bottom contact CTA */



.fabrication-contact-cta {

    position: relative;

    overflow: hidden;

    margin-top: 54px;

    padding: 34px;

    border-radius: 12px;

    background: #17191d;

    color: #fff;

}



.fabrication-contact-cta::after {

    position: absolute;

    top: -70px;

    right: -45px;

    width: 150px;

    height: 240px;

    content: "";

    transform: skewX(-22deg);

    background: linear-gradient(180deg, rgba(227,30,47,.35), transparent);

    pointer-events: none;

}



.fabrication-contact-cta-content {

    position: relative;

    z-index: 1;

}



.fabrication-cta-eyebrow {

    margin: 0;

    color: #ff646d;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: .2em;

    text-transform: uppercase;

}



.fabrication-contact-cta h2 {

    margin: 12px 0 0;

    color: #fff;

    font-size: clamp(25px, 3vw, 38px);

    font-weight: 900;

    line-height: 1.2;

    letter-spacing: -.025em;

}



.fabrication-contact-cta h2 span {

    color: #ff303b;

}



.fabrication-contact-cta-content > p:not(.fabrication-cta-eyebrow) {

    max-width: 620px;

    margin: 14px 0 0;

    color: #d4d7db;

    font-size: 15px;

    line-height: 1.8;

}



.fabrication-contact-cta .fabrication-quote-button {

    margin-top: 24px;

}



/* =========================================================

   SERVICES SIDEBAR

\========================================================= */



.fabrication-sidebar {

    min-width: 0;

    align-self: start;

}



.fabrication-sidebar-card {

    overflow: hidden;

    border: 1px solid #f0f0f0;

    border-radius: 14px;

    background: #fff;

    box-shadow: 0 18px 45px rgba(23,23,23,.1);

}



.fabrication-sidebar-heading {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    padding: 18px 20px;

    background: #e31e2f;

    color: #fff;

}



.fabrication-sidebar-heading h2 {

    margin: 0;

    color: #fff;

    font-size: 18px;

    font-weight: 800;

}



.fabrication-sidebar-heading svg {

    flex: 0 0 20px;

    width: 20px;

    height: 20px;

}



.fabrication-sidebar-list {

    display: grid;

    grid-template-columns: 1fr;

    margin: 0;

    padding: 0;

    list-style: none;

}



.fabrication-sidebar-item {

    min-width: 0;

    border-bottom: 1px solid #f0f0f0;

}



.fabrication-sidebar-item:last-child {

    border-bottom: 0;

}



.fabrication-sidebar-link {

    display: flex;

    align-items: center;

    gap: 12px;

    min-width: 0;

    padding: 13px 14px;

    color: #171717;

    text-decoration: none;

    transition: background-color .2s ease;

}



.fabrication-sidebar-link:hover {

    background: #fafafa;

}



.fabrication-sidebar-link.is-active {

    background: #fff1f2;

}



.fabrication-sidebar-image-wrap {

    display: block;

    flex: 0 0 68px;

    width: 68px;

    height: 54px;

    overflow: hidden;

    border-radius: 6px;

    background: #e5e5e5;

}



.fabrication-sidebar-image-wrap img {

    display: block;

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: transform .3s ease;

}



.fabrication-sidebar-link:hover .fabrication-sidebar-image-wrap img {

    transform: scale(1.08);

}



.fabrication-sidebar-title {

    flex: 1;

    min-width: 0;

    color: #222;

    font-size: 13px;

    font-weight: 750;

    line-height: 1.5;

    overflow-wrap: anywhere;

}



.fabrication-sidebar-arrow {

    display: flex;

    flex: 0 0 30px;

    align-items: center;

    justify-content: center;

    width: 30px;

    height: 30px;

    border: 1px solid #ddd;

    border-radius: 50%;

    color: #333;

    transition: color .2s ease, background-color .2s ease, border-color .2s ease;

}



.fabrication-sidebar-arrow svg {

    width: 13px;

    height: 13px;

}



.fabrication-sidebar-link.is-active .fabrication-sidebar-arrow,

.fabrication-sidebar-link:hover .fabrication-sidebar-arrow {

    border-color: #e31e2f;

    background: #e31e2f;

    color: #fff;

}



.fabrication-sidebar-contact {

    padding: 20px;

    border-top: 1px solid #eee;

    background: #fafafa;

}



.fabrication-sidebar-contact p {

    margin: 0;

    color: #525252;

    font-size: 13px;

    line-height: 1.7;

}



.fabrication-sidebar-contact a {

    display: inline-flex;

    align-items: center;

    gap: 10px;

    margin-top: 12px;

    color: #d7192d;

    font-size: 13px;

    font-weight: 800;

    text-decoration: none;

}



.fabrication-sidebar-contact a span {

    transition: transform .2s ease;

}



.fabrication-sidebar-contact a:hover span {

    transform: translateX(4px);

}



/* =========================================================

   RESPONSIVE DESIGN

\========================================================= */



@media (min-width: 640px) {

    .fabrication-hero {

        min-height: 620px;

    }



    .fabrication-hero-content {

        padding: 160px 32px 80px;

    }



    .fabrication-breadcrumb ol {

        font-size: 13px;

    }



    .fabrication-layout {

        padding: 0 32px;

    }



    .fabrication-sidebar-list {

        grid-template-columns: repeat(2, minmax(0, 1fr));

    }



    .fabrication-sidebar-item:nth-child(odd) {

        border-right: 1px solid #f0f0f0;

    }



    .fabrication-sidebar-link {

        align-items: flex-start;

        gap: 10px;

        padding: 12px;

    }



    .fabrication-sidebar-image-wrap {

        flex-basis: 58px;

        width: 58px;

        height: 48px;

    }



    .fabrication-sidebar-arrow {

        flex-basis: 26px;

        width: 26px;

        height: 26px;

    }

}



@media (min-width: 1024px) {

    .fabrication-hero {

        min-height: 700px;

    }



    .fabrication-hero-content {

        padding: 176px 48px 96px;

    }



    .fabrication-layout {

        grid-template-columns: minmax(0, 1fr) 330px;

        gap: 48px;

        padding: 0 48px;

    }



    .fabrication-sidebar {

        position: sticky;

        top: 112px;

    }



    .fabrication-sidebar-list {

        grid-template-columns: 1fr;

    }



    .fabrication-sidebar-item:nth-child(odd) {

        border-right: 0;

    }



    .fabrication-sidebar-link {

        align-items: center;

        gap: 12px;

        padding: 12px 14px;

    }



    .fabrication-sidebar-image-wrap {

        flex-basis: 64px;

        width: 64px;

        height: 52px;

    }



    .fabrication-sidebar-arrow {

        flex-basis: 30px;

        width: 30px;

        height: 30px;

    }

}



@media (min-width: 1280px) {

    .fabrication-layout {

        grid-template-columns: minmax(0, 1fr) 360px;

        gap: 56px;

    }



    .fabrication-service-grid {

        gap: 20px;

    }



    .fabrication-service-card {

        padding: 26px 24px 30px;

    }

}



@media (max-width: 767px) {

    .fabrication-hero {

        min-height: 570px;

    }



    .fabrication-hero-image {

        object-position: 60% center;

    }



    .fabrication-hero-overlay {

        background: linear-gradient(

            90deg,

            rgba(23,25,29,.94),

            rgba(23,25,29,.82)

        );

    }



    .fabrication-hero-accent-right {

        display: none;

    }



    .fabrication-hero-content {

        padding: 132px 22px 58px;

    }



    .fabrication-breadcrumb {

        margin-bottom: 24px;

    }



    .fabrication-breadcrumb ol {

        gap: 8px;

        padding: 10px 13px;

        font-size: 10px;

        letter-spacing: .08em;

    }



    .fabrication-eyebrow {

        gap: 9px;

        font-size: 11px;

        letter-spacing: .15em;

    }



    .fabrication-eyebrow span {

        width: 28px;

    }



    .fabrication-hero-title {

        font-size: clamp(38px, 10vw, 64px);

        line-height: 1.02;

    }



    .fabrication-hero-rule {

        margin-top: 20px;

    }



    .fabrication-hero-description {

        margin-top: 20px;

        font-size: 15px;

        line-height: 1.75;

    }



    .fabrication-hero-actions {

        margin-top: 26px;

    }



    .fabrication-quote-button {

        min-height: 48px;

        padding: 13px 19px;

        font-size: 13px;

    }



    .fabrication-main {

        padding: 46px 0 64px;

    }



    .fabrication-layout {

        grid-template-columns: minmax(0, 1fr);

        gap: 38px;

        padding: 0 22px;

    }



    .fabrication-overview-title {

        font-size: clamp(33px, 8vw, 48px);

    }



    .fabrication-paragraph {

        font-size: 15px;

        line-height: 1.8;

    }



    .fabrication-services-section,

    .fabrication-process-section,

    .fabrication-why-section {

        margin-top: 42px;

    }



    .fabrication-subheading {

        font-size: clamp(27px, 6.5vw, 36px);

        line-height: 1.2;

    }



    .fabrication-service-grid {

        grid-template-columns: minmax(0, 1fr);

        gap: 14px;

        margin-top: 22px;

    }



    .fabrication-service-card {

        padding: 21px;

    }



    .fabrication-service-card h3 {

        margin-top: 14px;

        font-size: 17px;

    }



    .fabrication-process-item {

        grid-template-columns: 42px minmax(0, 1fr);

        gap: 13px;

        padding: 19px 0;

    }



    .fabrication-process-number {

        width: 40px;

        height: 40px;

        font-size: 12px;

    }



    .fabrication-process-item h3 {

        font-size: 16px;

    }



    .fabrication-contact-cta {

        margin-top: 42px;

        padding: 26px 22px;

    }



    .fabrication-contact-cta h2 {

        font-size: clamp(25px, 6.5vw, 32px);

    }



    .fabrication-sidebar-heading {

        padding: 16px 18px;

    }



    .fabrication-sidebar-list {

        grid-template-columns: 1fr;

    }



    .fabrication-sidebar-item:nth-child(odd) {

        border-right: 0;

    }



    .fabrication-sidebar-link {

        align-items: center;

        gap: 12px;

        padding: 12px 14px;

    }



    .fabrication-sidebar-image-wrap {

        flex-basis: 68px;

        width: 68px;

        height: 52px;

    }



    .fabrication-sidebar-title {

        font-size: 13px;

    }



    .fabrication-sidebar-arrow {

        flex-basis: 30px;

        width: 30px;

        height: 30px;

    }

}



@media (max-width: 380px) {

    .fabrication-hero-content {

        padding-right: 16px;

        padding-left: 16px;

    }



    .fabrication-layout {

        padding-right: 16px;

        padding-left: 16px;

    }



    .fabrication-breadcrumb ol {

        gap: 6px;

        font-size: 9px;

    }



    .fabrication-hero-title {

        font-size: 36px;

    }



    .fabrication-why-card {

        grid-template-columns: 34px minmax(0, 1fr);

        gap: 10px;

    }



    .fabrication-contact-cta {

        padding: 23px 18px;

    }

}



@media (prefers-reduced-motion: reduce) {

    .fabrication-hero-image,

    .fabrication-hero-copy > *,

    .fabrication-quote-button,

    .fabrication-quote-button svg,

    .fabrication-service-card,

    .fabrication-card-bottom-line,

    .fabrication-sidebar-image-wrap img,

    .fabrication-sidebar-arrow,

    .fabrication-sidebar-contact a span {

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

    <!-- ==================== HERO ==================== -->

    <!-- Shared hero design from the About Us / Laser Cutting reference -->
<section id="aboutHero" class="about-hero relative isolate flex min-h-[560px] w-full items-center overflow-hidden bg-[#17191d] sm:min-h-[620px] lg:min-h-[700px]">
    <img src="<?= htmlspecialchars($hero_image, ENT_QUOTES, 'UTF-8') ?>" alt="Metal fabrication and assembly work at Patil Brothers" fetchpriority="high" class="about-hero-image absolute inset-0 -z-30 h-full w-full object-cover object-[62%_center]">
    <div class="absolute inset-0 -z-20 bg-gradient-to-r from-[#17191d]/95 via-[#17191d]/75 to-[#17191d]/20 max-md:from-[#17191d]/90 max-md:via-[#17191d]/75 max-md:to-[#17191d]/55"></div>
    <div class="absolute inset-0 -z-20 bg-gradient-to-t from-[#17191d]/70 via-transparent to-[#17191d]/30"></div>
    <div class="pointer-events-none absolute -left-16 top-0 -z-10 h-[48%] w-36 -skew-x-[22deg] bg-gradient-to-b from-red-700/50 to-transparent sm:w-52"></div>
    <div class="pointer-events-none absolute -right-24 top-0 -z-10 hidden h-[70%] w-56 -skew-x-[22deg] bg-gradient-to-b from-red-700/30 to-transparent lg:block"></div>
    <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-px w-full bg-gradient-to-r from-red-600/70 via-white/10 to-transparent"></div>
    <div class="mx-auto w-full max-w-[1440px] px-5 pb-16 pt-36 sm:px-8 sm:pb-20 sm:pt-40 lg:px-12 lg:pb-24 lg:pt-44">
        <div class="about-hero-copy max-w-3xl">
            <nav aria-label="Breadcrumb" class="about-hero-breadcrumb mb-7">
                <ol class="inline-flex flex-wrap items-center gap-3 rounded-full border border-white/20 bg-[#17191d]/55 px-5 py-3 text-xs font-medium uppercase tracking-[0.16em] text-white/75 backdrop-blur-md sm:text-sm">
                    <li><a href="/" class="transition hover:text-white">Home</a></li><li aria-hidden="true" class="text-white/40">/</li><li><a href="/services/" class="transition hover:text-white">Services</a></li><li aria-hidden="true" class="text-white/40">/</li><li aria-current="page" class="text-[#ff303b]">Fabrication &amp; Assembly</li>
                </ol>
            </nav>
            <p class="about-hero-eyebrow mb-4 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.25em] text-white/75 sm:text-sm"><span class="h-0.5 w-10 shrink-0 bg-[#e31e2f]"></span>Precision Manufacturing</p>
            <h1 class="about-hero-title text-5xl font-black uppercase leading-[0.95] tracking-tight text-white sm:text-7xl lg:text-8xl">Fabrication <span class="text-[#ff303b]">&amp; Assembly</span></h1>
            <div class="about-hero-rule mt-6 h-1 w-20 rounded-full bg-[#e31e2f]"></div>
            <p class="about-hero-description mt-6 max-w-2xl text-base leading-relaxed text-[#d4d7db] sm:text-lg lg:text-xl">Complete fabrication and assembly solutions, from material preparation and precision cutting to welding, machining, and finished components built around your specifications.</p>
            <div class="about-hero-cta mt-8 flex flex-wrap items-center gap-4"><a href="<?= htmlspecialchars($contact_url, ENT_QUOTES, 'UTF-8') ?>" class="group inline-flex items-center gap-3 rounded-lg bg-[#e31e2f] px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-red-950/25 hover:bg-red-700 sm:px-7">Request a Quote<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 transition-transform group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a></div>
        </div>
    </div>
</section>



    <!-- ==================== MAIN CONTENT ==================== -->

    <section class="fabrication-main">

        <div class="fabrication-background-accent"></div>



        <div class="fabrication-layout">



            <!-- Main article -->

            <article class="fabrication-article">



                <div class="fabrication-section-label">

                    <span></span>

                    <span>Overview</span>

                </div>



                <h2 class="fabrication-overview-title">

                    Fabrication <span>&amp; Assembly</span>

                </h2>



                <div class="fabrication-divider"></div>



                <p class="fabrication-paragraph">

                    At Patil Brothers, fabrication and assembly bring together key manufacturing processes to create components suited to individual project requirements. From material preparation and cutting to forming, machining, welding, and assembly, each stage contributes to the production of functional metal components and structures.

                </p>



                <p class="fabrication-paragraph">

                    Our fabrication approach is based on your drawings, material specifications, dimensions, and intended application. Whether your project requires individual components, custom metalwork, sheet metal parts, or assembled fabrications, the scope can be planned around your technical requirements.

                </p>



                <!-- Fabrication services -->

                <section class="fabrication-services-section">

                    <div class="fabrication-section-label">

                        <span></span>

                        <span>What We Do</span>

                    </div>



                    <h2 class="fabrication-subheading">

                        Our Fabrication <span>Capabilities</span>

                    </h2>



                    <p class="fabrication-paragraph">

                        Explore the fabrication and manufacturing processes available to support your project.

                    </p>



                    <div class="fabrication-service-grid">

                        <?php foreach ($fabricationServices as $service): ?>

                            <div class="fabrication-service-card">

                                <span class="fabrication-card-number">

                                    <?= fabricationEscape($service['number']) ?>

                                </span>



                                <h3><?= fabricationEscape($service['title']) ?></h3>



                                <p><?= fabricationEscape($service['text']) ?></p>



                                <span class="fabrication-card-bottom-line"></span>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>



                <!-- Workflow -->

                <section class="fabrication-process-section">

                    <div class="fabrication-section-label">

                        <span></span>

                        <span>Our Approach</span>

                    </div>



                    <h2 class="fabrication-subheading">

                        From Design <span>to Assembly</span>

                    </h2>



                    <div class="fabrication-process-list">

                        <div class="fabrication-process-item">

                            <span class="fabrication-process-number">01</span>

                            <div>

                                <h3>Understand Requirements</h3>

                                <p>Review the project scope, technical drawings, materials, dimensions, and intended application.</p>

                            </div>

                        </div>



                        <div class="fabrication-process-item">

                            <span class="fabrication-process-number">02</span>

                            <div>

                                <h3>Prepare &amp; Fabricate</h3>

                                <p>Plan the required manufacturing operations, which may include cutting, bending, machining, and welding.</p>

                            </div>

                        </div>



                        <div class="fabrication-process-item">

                            <span class="fabrication-process-number">03</span>

                            <div>

                                <h3>Assemble Components</h3>

                                <p>Bring the relevant fabricated parts together according to the specified design and assembly requirements.</p>

                            </div>

                        </div>

                    </div>

                </section>



                <!-- Why choose us -->

                <section class="fabrication-why-section">

                    <div class="fabrication-section-label">

                        <span></span>

                        <span>Why Patil Brothers</span>

                    </div>



                    <h2 class="fabrication-subheading">

                        Why Choose Our <span>Fabrication Services?</span>

                    </h2>



                    <div class="fabrication-divider"></div>



                    <div class="fabrication-why-grid">

                        <?php foreach ($whyChoose as $item): ?>

                            <div class="fabrication-why-card">

                                <span class="fabrication-why-number">

                                    <?= fabricationEscape($item['number']) ?>

                                </span>



                                <div>

                                    <h3><?= fabricationEscape($item['title']) ?></h3>

                                    <p><?= fabricationEscape($item['text']) ?></p>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>



       


            </article>



            <!-- Services sidebar -->

            <aside class="fabrication-sidebar">

                <div class="fabrication-sidebar-card">



                    <div class="fabrication-sidebar-heading">

                        <h2>Our Services</h2>



                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"

                            stroke-width="2" stroke-linecap="round"

                            aria-hidden="true">

                            <path d="M4 6h.01M4 12h.01M4 18h.01M9 6h11M9 12h11M9 18h11"></path>

                        </svg>

                    </div>



                    <nav aria-label="Our services">

                        <ul class="fabrication-sidebar-list">

                            <?php foreach ($sidebarServices as $service): ?>

                                <?php

                                    $active = $service['slug'] === $CURRENT_SLUG;

                                    $serviceUrl = fabricationServiceUrl($service['slug']);

                                ?>



                                <li class="fabrication-sidebar-item">

                                    <a

                                        href="<?= fabricationEscape($serviceUrl) ?>"

                                        class="fabrication-sidebar-link<?= $active ? ' is-active' : '' ?>"

                                        <?= $active ? 'aria-current="page"' : '' ?>

                                    >

                                        <span class="fabrication-sidebar-image-wrap">

                                            <img

                                                src="<?= fabricationEscape($service['image']) ?>"

                                                alt=""

                                                loading="lazy"

                                            >

                                        </span>



                                        <span class="fabrication-sidebar-title">

                                            <?= fabricationEscape($service['title']) ?>

                                        </span>



                                        <span class="fabrication-sidebar-arrow">

                                            <svg viewBox="0 0 24 24" fill="none"

                                                stroke="currentColor" stroke-width="2.5"

                                                stroke-linecap="round"

                                                stroke-linejoin="round"

                                                aria-hidden="true">

                                                <path d="M5 12h14M13 6l6 6-6 6"></path>

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
<script>
(function () {
    var hero = document.getElementById('aboutHero');
    if (!hero) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        hero.classList.add('about-hero-entered');
        return;
    }
    window.requestAnimationFrame(function () { hero.classList.add('about-hero-entered'); });
})();
</script>
<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
</body>
</html>
