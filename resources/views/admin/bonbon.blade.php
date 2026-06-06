<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff7ec">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#e85b05">
    <meta property="og:image" content="{{ asset('android-chrome-512x512.png') }}">
    <title>BonBon Cafe - Bukhara</title>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CafeOrCoffeeShop",
            "name": "BonBon Cafe",
            "url": @json(route('index')),
            "logo": @json(asset('android-chrome-512x512.png')),
            "image": @json(asset('images/bonbon/hero-coffee-dessert.png')),
            "telephone": "+998973004568",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Islom Karimov ko'chasi, 2",
                "addressLocality": "Bukhara",
                "addressCountry": "UZ"
            }
        }
    </script>
    <style>
        @font-face {
            font-family: "Cormorant Garamond";
            src: url("{{ asset('fonts/cormorant-garamond-500.ttf') }}") format("truetype");
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Cormorant Garamond";
            src: url("{{ asset('fonts/cormorant-garamond-700.ttf') }}") format("truetype");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "DM Sans";
            src: url("{{ asset('fonts/dm-sans-400.ttf') }}") format("truetype");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "DM Sans";
            src: url("{{ asset('fonts/dm-sans-700.ttf') }}") format("truetype");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        :root {
            --bg: #fff7ec;
            --paper: #fffaf2;
            --cream: #fff1df;
            --line: rgba(176, 83, 23, 0.17);
            --line-strong: rgba(176, 83, 23, 0.28);
            --carrot: #e85b05;
            --carrot-2: #c8460c;
            --gold: #d99a3d;
            --ink: #2a130b;
            --brown: #612a13;
            --muted: #755b4d;
            --shadow: 0 22px 55px rgba(92, 43, 13, 0.14);
            --soft-shadow: 0 14px 32px rgba(92, 43, 13, 0.08);
            --radius: 18px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-width: 320px;
            background:
                radial-gradient(circle at 8% 2%, rgba(234, 115, 21, 0.12), transparent 26%),
                radial-gradient(circle at 95% 10%, rgba(217, 154, 61, 0.11), transparent 30%),
                var(--bg);
            color: var(--ink);
            font-family: "DM Sans", Arial, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        button {
            font: inherit;
        }

        .page-shell {
            width: min(1860px, calc(100% - 46px));
            margin: 22px auto;
            overflow: hidden;
            border: 1px solid rgba(116, 66, 34, 0.1);
            border-radius: 25px;
            background:
                linear-gradient(rgba(255, 250, 242, 0.9), rgba(255, 250, 242, 0.9)),
                url("{{ asset('images/paper-texture.svg') }}");
            box-shadow: var(--shadow);
        }

        .inner {
            width: min(1550px, calc(100% - 80px));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 248, 236, 0.92);
            border-bottom: 1px solid var(--line);
            backdrop-filter: blur(18px);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 116px;
            gap: 28px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 16px;
            min-width: 235px;
        }

        .brand-logo {
            display: grid;
            place-items: center;
            flex: 0 0 auto;
            width: 64px;
            height: 64px;
            padding: 7px;
            overflow: hidden;
            border: 1px solid rgba(232, 91, 5, 0.12);
            border-radius: 50%;
            background: #fffaf2;
            box-shadow: 0 9px 22px rgba(139, 67, 18, 0.14);
        }

        .brand-mark {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: contain;
        }

        .brand-text {
            line-height: 0.92;
        }

        .brand-name {
            display: block;
            color: var(--carrot-2);
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 36px;
            font-weight: 700;
        }

        .brand-cafe {
            display: block;
            margin-top: 7px;
            color: var(--carrot);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 4px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(20px, 3.1vw, 58px);
            flex: 1;
        }

        .nav-link {
            position: relative;
            padding: 14px 0;
            color: #31170d;
            font-size: 17px;
            font-weight: 700;
            white-space: nowrap;
        }

        .nav-link.active,
        .nav-link:hover {
            color: var(--carrot);
        }

        .nav-link.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -24px;
            height: 3px;
            border-radius: 9px;
            background: var(--carrot);
        }

        .order-btn,
        .primary-btn,
        .secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 11px;
            min-height: 56px;
            border: 0;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        .order-btn,
        .primary-btn {
            background: linear-gradient(135deg, #f06a0b, #c94308);
            color: #fff8ef;
            box-shadow: 0 16px 30px rgba(199, 69, 8, 0.25);
        }

        .order-btn {
            padding: 0 30px;
            font-size: 16px;
            white-space: nowrap;
        }

        .secondary-btn {
            border: 1px solid var(--line-strong);
            background: rgba(255, 250, 242, 0.84);
            color: var(--brown);
            box-shadow: var(--soft-shadow);
        }

        .menu-toggle {
            display: none;
            width: 48px;
            height: 48px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: var(--paper);
            color: var(--carrot-2);
        }

        .mobile-menu {
            display: none;
            padding: 0 24px 24px;
            border-top: 1px solid var(--line);
            background: rgba(255, 248, 236, 0.98);
        }

        .mobile-menu.open {
            display: grid;
            gap: 12px;
        }

        .mobile-menu a {
            padding: 13px 2px;
            color: var(--brown);
            font-weight: 700;
        }

        .hero {
            position: relative;
            min-height: 610px;
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(255, 248, 236, 0.98) 0%, rgba(255, 248, 236, 0.95) 35%, rgba(255, 248, 236, 0.2) 58%, rgba(255, 248, 236, 0.02) 100%),
                url("{{ asset('images/bonbon/hero-coffee-dessert.png') }}") center right / cover no-repeat;
        }

        .hero::before,
        .section-card::before,
        .reviews-contact::before {
            content: "";
            position: absolute;
            pointer-events: none;
            background: url("{{ asset('images/vase-leaves.svg') }}") center / contain no-repeat;
            opacity: 0.62;
        }

        .hero::before {
            left: 0;
            bottom: -18px;
            width: 260px;
            height: 390px;
            transform: rotate(-11deg);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 720px;
            padding: 90px 0 170px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 11px;
            margin-bottom: 28px;
            color: var(--carrot);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .leaf-mini {
            width: 28px;
            height: 18px;
            background: url("{{ asset('images/leaf.svg') }}") center / contain no-repeat;
        }

        h1,
        h2,
        .serif {
            margin: 0;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 0.96;
        }

        h1 {
            max-width: 760px;
            color: #3a1b10;
            font-size: clamp(64px, 6.7vw, 122px);
        }

        .accent-word {
            color: var(--carrot-2);
            font-style: italic;
        }

        .hero-copy {
            max-width: 640px;
            margin: 34px 0 48px;
            color: #4f3427;
            font-size: 21px;
            line-height: 1.55;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .hero-actions .primary-btn,
        .hero-actions .secondary-btn {
            min-width: 285px;
            padding: 0 32px;
            font-size: 19px;
        }

        .quick-panel {
            position: relative;
            z-index: 4;
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 0;
            width: min(1485px, calc(100% - 160px));
            margin: -72px auto 0;
            padding: 32px 44px;
            border: 1px solid rgba(177, 85, 26, 0.12);
            border-radius: 16px;
            background: rgba(255, 250, 242, 0.93);
            box-shadow: var(--shadow);
            backdrop-filter: blur(12px);
        }

        .quick-item {
            display: flex;
            align-items: center;
            gap: 18px;
            min-width: 0;
            padding: 0 26px;
            border-right: 1px solid rgba(124, 68, 37, 0.24);
        }

        .quick-item:first-child {
            padding-left: 0;
        }

        .quick-item:last-child {
            padding-right: 0;
            border-right: 0;
        }

        .icon-circle {
            display: inline-flex;
            flex: 0 0 auto;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ef6a0a, #bf3f08);
            color: #fffaf2;
            box-shadow: 0 12px 24px rgba(203, 72, 10, 0.23);
        }

        .icon-circle.soft {
            background: #fff0dc;
            color: var(--carrot-2);
            box-shadow: none;
        }

        .quick-title,
        .contact-title {
            display: block;
            color: #2c160d;
            font-size: 17px;
            font-weight: 700;
            white-space: nowrap;
        }

        .quick-text,
        .contact-text,
        .small-muted {
            display: block;
            margin-top: 6px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.35;
        }

        .stats-strip {
            position: relative;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            align-items: center;
            gap: 18px;
            width: min(1550px, calc(100% - 160px));
            min-height: 168px;
            margin: 18px auto 0;
            padding: 34px 210px 34px 70px;
            overflow: hidden;
            border-radius: 16px;
            background:
                linear-gradient(135deg, rgba(241, 111, 7, 0.98), rgba(186, 57, 6, 0.98)),
                url("{{ asset('images/paper-texture.svg') }}");
            color: #fff8ef;
            box-shadow: 0 18px 42px rgba(184, 65, 8, 0.2);
        }

        .stat {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 22px;
            min-width: 0;
        }

        .stat:not(:last-child) {
            border-right: 1px solid rgba(255, 244, 229, 0.48);
        }

        .stat-value {
            display: block;
            color: #fff8ef;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 48px;
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
        }

        .stat-label {
            display: block;
            margin-top: 8px;
            color: #fff6e7;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }

        .city-line {
            position: absolute;
            right: 32px;
            bottom: 22px;
            width: 170px;
            height: 105px;
            opacity: 0.25;
            background:
                linear-gradient(to top, rgba(255, 237, 200, 0.72), transparent 52%),
                url("{{ asset('images/wood-plate.svg') }}") bottom right / 170px auto no-repeat;
        }

        .section-card,
        .reviews-contact {
            position: relative;
            margin-top: 22px;
            padding: 70px 0;
            overflow: hidden;
            border-top: 1px solid rgba(176, 83, 23, 0.08);
        }

        .section-card::before {
            right: -42px;
            top: 24px;
            width: 210px;
            height: 260px;
            transform: rotate(13deg);
        }

        .about-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, 0.96fr) minmax(520px, 1fr);
            gap: 26px;
            align-items: start;
        }

        .section-kicker {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
            color: var(--carrot);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 2.8px;
            text-transform: uppercase;
        }

        h2 {
            color: #4a2011;
            font-size: clamp(46px, 4.6vw, 74px);
        }

        .about-cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 28px;
        }

        .info-card,
        .branch-card,
        .review-card,
        .contact-panel,
        .contact-tile {
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 250, 242, 0.85);
            box-shadow: var(--soft-shadow);
        }

        .info-card {
            min-height: 250px;
            padding: 28px 22px;
        }

        .info-card h3 {
            margin: 22px 0 20px;
            color: #522211;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.2px;
            text-transform: uppercase;
        }

        .info-card .tiny-line {
            width: 24px;
            height: 2px;
            margin-bottom: 18px;
            border-radius: 4px;
            background: var(--carrot);
        }

        .info-card p {
            margin: 0;
            color: #684235;
            font-size: 14px;
            line-height: 1.62;
        }

        .quote-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
            margin-top: 22px;
            padding: 22px 30px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 250, 242, 0.9);
            color: #74412d;
            box-shadow: var(--soft-shadow);
        }

        .quote-mark {
            color: var(--carrot);
            font-family: Georgia, serif;
            font-size: 48px;
            line-height: 0.7;
        }

        .gallery {
            display: grid;
            grid-template-columns: 1.18fr 0.82fr;
            grid-template-rows: 250px 250px;
            gap: 16px;
        }

        .gallery img {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            object-fit: cover;
            box-shadow: var(--soft-shadow);
        }

        .gallery .large {
            grid-row: 1 / span 2;
        }

        .locations-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 530px;
            gap: 34px;
            align-items: stretch;
            margin-top: 60px;
        }

        .branch-list {
            display: grid;
            gap: 18px;
        }

        .branch-card {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 28px;
            min-height: 240px;
            padding: 14px;
        }

        .branch-card img {
            width: 100%;
            height: 100%;
            min-height: 210px;
            border-radius: 8px;
            object-fit: cover;
        }

        .branch-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0;
            padding: 0 6px 0 0;
        }

        .branch-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .branch-card h3 {
            margin: 0 0 18px;
            color: #54230f;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 31px;
            line-height: 1.05;
        }

        .branch-meta {
            display: grid;
            gap: 12px;
            color: #744333;
            font-size: 16px;
        }

        .branch-links {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid var(--line);
        }

        .map-chip {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 35px;
            padding: 0 13px;
            border: 1px solid var(--line);
            border-radius: 7px;
            background: rgba(255, 255, 255, 0.46);
            color: #54230f;
            font-size: 12px;
            font-weight: 700;
        }

        .delivery-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 18px;
            padding: 22px 28px;
            border-radius: 8px;
            background: linear-gradient(135deg, #f06a0b, #c94308);
            color: #fff9ef;
            box-shadow: 0 18px 32px rgba(194, 63, 8, 0.18);
        }

        .delivery-bar strong {
            display: block;
            margin-bottom: 5px;
        }

        .delivery-bar a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 180px;
            min-height: 46px;
            border: 1px solid rgba(255, 249, 239, 0.72);
            border-radius: 7px;
            font-size: 14px;
            font-weight: 700;
        }

        .map-panel {
            position: relative;
            min-height: 520px;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 18px;
            background:
                linear-gradient(rgba(255, 239, 218, 0.78), rgba(255, 239, 218, 0.84)),
                repeating-linear-gradient(28deg, rgba(197, 115, 53, 0.14) 0 2px, transparent 2px 42px),
                repeating-linear-gradient(118deg, rgba(197, 115, 53, 0.13) 0 2px, transparent 2px 50px);
            box-shadow: var(--soft-shadow);
        }

        .map-panel::before,
        .map-panel::after,
        .map-landmark {
            content: "";
            position: absolute;
            width: 210px;
            height: 145px;
            opacity: 0.2;
            background: url("{{ asset('images/logo-bonbon.svg') }}") center / contain no-repeat;
        }

        .map-panel::before {
            top: 35px;
            left: 38px;
        }

        .map-panel::after {
            right: 40px;
            bottom: 48px;
        }

        .map-landmark {
            display: block;
            opacity: 0.22;
            filter: sepia(1) saturate(0.8);
        }

        .map-landmark.ark {
            top: 58px;
            left: 54px;
            width: 165px;
            height: 112px;
        }

        .map-landmark.lyabi {
            top: 116px;
            right: 48px;
            width: 172px;
            height: 118px;
        }

        .map-landmark.kalyan {
            right: 58px;
            bottom: 72px;
            width: 205px;
            height: 138px;
        }

        .map-place {
            position: absolute;
            display: grid;
            gap: 5px;
            color: rgba(91, 38, 18, 0.62);
            font-size: 15px;
            font-weight: 700;
            line-height: 1.15;
            text-align: center;
            z-index: 1;
        }

        .map-place::before {
            content: "";
            justify-self: center;
            width: 54px;
            height: 8px;
            border-radius: 50%;
            background: rgba(218, 149, 72, 0.18);
        }

        .map-place.ark {
            top: 142px;
            left: 72px;
        }

        .map-place.lyabi {
            top: 204px;
            right: 72px;
        }

        .map-place.kalyan {
            right: 88px;
            bottom: 64px;
        }

        .pin {
            position: absolute;
            display: grid;
            justify-items: center;
            gap: 8px;
            color: #5b2612;
            font-size: 15px;
            font-weight: 700;
            text-align: center;
        }

        .pin.one {
            top: 32%;
            left: 50%;
        }

        .pin.two {
            top: 60%;
            left: 38%;
        }

        .pin-marker {
            display: grid;
            place-items: center;
            width: 50px;
            height: 62px;
            color: #fff8ef;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 27px;
            font-weight: 700;
            background: var(--carrot);
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            box-shadow: 0 12px 24px rgba(194, 68, 9, 0.25);
        }

        .pin-marker span {
            transform: rotate(45deg);
        }

        .reviews-contact {
            padding: 42px 0 0;
        }

        .reviews-contact::before {
            left: -36px;
            top: 80px;
            width: 230px;
            height: 320px;
            transform: rotate(-17deg);
        }

        .reviews-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 0.72fr repeat(3, 1fr);
            gap: 14px;
            align-items: stretch;
        }

        .rating-summary {
            display: grid;
            place-items: center;
            min-height: 270px;
            text-align: center;
        }

        .rating-value {
            color: var(--carrot-2);
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 88px;
            font-weight: 500;
            line-height: 1;
        }

        .stars {
            color: var(--gold);
            font-size: 27px;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        .rating-summary .label {
            margin-top: 18px;
            color: #2f170e;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .review-card {
            min-height: 270px;
            padding: 30px 26px;
        }

        .review-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 28px;
        }

        .review-brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .review-logo {
            display: grid;
            place-items: center;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            color: #fff;
            font-size: 27px;
            font-weight: 700;
        }

        .review-logo.trip {
            background: #ff7f33;
            color: #111;
        }

        .review-logo.google {
            background: #fff;
            border: 1px solid var(--line);
            color: #4285f4;
        }

        .review-logo.yandex {
            background: #ef3d1b;
        }

        .review-title {
            color: #24140e;
            font-size: 17px;
            font-weight: 700;
        }

        .review-score {
            color: var(--carrot-2);
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 48px;
            line-height: 1;
        }

        .review-score small {
            color: var(--carrot-2);
            font-family: "DM Sans", Arial, sans-serif;
            font-size: 17px;
        }

        .review-meta {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 26px;
        }

        .review-card p {
            margin: 0;
            color: #332018;
            font-size: 17px;
            line-height: 1.55;
        }

        .contacts-block {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 28px;
            align-items: stretch;
            margin-top: 42px;
            padding: 24px 0 8px;
        }

        .contact-intro {
            display: grid;
            align-content: center;
            min-height: 245px;
            padding-left: 32px;
            background:
                linear-gradient(90deg, rgba(255, 250, 242, 0.86), rgba(255, 250, 242, 0.4)),
                url("{{ asset('images/bonbon/branch-front.png') }}") left bottom / 360px auto no-repeat;
        }

        .contact-intro h2 {
            margin-bottom: 12px;
        }

        .contact-intro p {
            margin: 0;
            color: #4f3427;
            font-size: 18px;
        }

        .contact-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            padding: 24px;
        }

        .call-card {
            grid-row: span 2;
            display: grid;
            align-content: center;
            gap: 22px;
            min-height: 210px;
            padding: 22px 26px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 250, 242, 0.8);
        }

        .phone-row {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .phone-number {
            color: #2e160e;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 34px;
            font-weight: 700;
            white-space: nowrap;
        }

        .call-card .primary-btn {
            min-height: 62px;
            font-size: 18px;
        }

        .contact-tile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            min-height: 98px;
            padding: 18px 22px;
        }

        .contact-tile-main {
            display: flex;
            align-items: center;
            gap: 16px;
            min-width: 0;
        }

        .site-footer {
            position: relative;
            z-index: 3;
            margin-top: 28px;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
            background:
                linear-gradient(135deg, rgba(191, 63, 8, 0.98), rgba(226, 88, 5, 0.98)),
                url("{{ asset('images/paper-texture.svg') }}");
            color: #fff7ec;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.05fr 0.75fr 1.45fr 1.65fr;
            gap: 42px;
            padding: 34px 0 22px;
        }

        .footer-brand {
            display: flex;
            gap: 18px;
            align-items: flex-start;
        }

        .footer-badge {
            display: grid;
            flex: 0 0 auto;
            place-items: center;
            width: 72px;
            height: 72px;
            border: 1px solid rgba(255, 244, 229, 0.62);
            border-radius: 50%;
            color: #fff3d5;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 42px;
            font-weight: 700;
        }

        .footer-logo {
            color: #fff4dd;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 42px;
            line-height: 0.95;
        }

        .footer-kicker {
            margin-top: 13px;
            color: #ffe0ae;
            font-size: 13px;
            letter-spacing: 5px;
        }

        .footer-desc {
            max-width: 300px;
            margin: 22px 0 18px;
            color: #fff3df;
            font-size: 16px;
            line-height: 1.55;
        }

        .socials {
            display: flex;
            gap: 12px;
        }

        .socials a {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border: 1px solid rgba(255, 244, 229, 0.6);
            border-radius: 50%;
        }

        .footer-col {
            padding-left: 42px;
            border-left: 1px solid rgba(255, 244, 229, 0.35);
        }

        .footer-col h3 {
            margin: 10px 0 20px;
            color: #ffe0ae;
            font-size: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .footer-links {
            display: grid;
            gap: 12px;
        }

        .footer-links a,
        .footer-links span {
            color: #fff6e8;
            font-size: 17px;
        }

        .branch-footer {
            display: grid;
            gap: 22px;
        }

        .branch-footer-row {
            display: grid;
            grid-template-columns: 58px 1fr auto;
            align-items: center;
            gap: 20px;
            padding-bottom: 22px;
            border-bottom: 1px solid rgba(255, 244, 229, 0.35);
        }

        .branch-footer-row:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .footer-pin {
            display: grid;
            place-items: center;
            width: 56px;
            height: 56px;
            border: 1px solid rgba(255, 244, 229, 0.6);
            border-radius: 50%;
        }

        .qr-promo {
            display: grid;
            grid-template-columns: 135px 1fr;
            gap: 24px;
            align-items: center;
            padding: 20px;
            border: 1px solid rgba(255, 244, 229, 0.55);
            border-radius: 18px;
            background:
                linear-gradient(90deg, rgba(168, 50, 5, 0.05), rgba(255, 205, 132, 0.12)),
                url("{{ asset('images/bonbon/footer-cup.png') }}") right bottom / 260px auto no-repeat;
            min-height: 190px;
        }

        .qr-box {
            display: grid;
            place-items: center;
            width: 126px;
            height: 126px;
            border-radius: 6px;
            background: #fffaf2;
            padding: 8px;
        }

        .qr-box svg {
            width: 100%;
            height: 100%;
        }

        .promo-text {
            max-width: 300px;
            color: #ffe4b5;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 31px;
            font-weight: 700;
            line-height: 1.05;
            text-transform: uppercase;
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding: 18px 0;
            border-top: 1px solid rgba(255, 244, 229, 0.25);
            color: #fff3df;
            font-size: 16px;
        }

        .heart {
            color: #ffd38f;
            font-size: 19px;
        }

        .svg-icon {
            width: 24px;
            height: 24px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .svg-icon.small {
            width: 18px;
            height: 18px;
        }

        .arrow {
            color: var(--carrot-2);
            font-size: 25px;
            line-height: 1;
        }

        @media (max-width: 1320px) {
            .inner {
                width: min(1180px, calc(100% - 44px));
            }

            .nav-links {
                gap: 22px;
            }

            .quick-panel,
            .stats-strip {
                width: calc(100% - 44px);
            }

            .quick-panel {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                padding: 28px 24px;
            }

            .quick-item {
                padding: 16px 14px;
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .quick-item:nth-child(n + 4) {
                border-bottom: 0;
            }

            .stats-strip {
                padding: 30px;
            }

            .city-line {
                display: none;
            }

            .about-grid,
            .locations-grid,
            .contacts-block {
                grid-template-columns: 1fr;
            }

            .map-panel {
                min-height: 420px;
            }

            .map-place {
                font-size: 13px;
            }

            .map-place.ark {
                top: 98px;
                left: 40px;
            }

            .map-place.lyabi {
                top: 142px;
                right: 38px;
            }

            .map-place.kalyan {
                right: 46px;
                bottom: 48px;
            }

            .footer-main {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 1120px) {
            .stat {
                gap: 14px;
            }

            .stat-value {
                font-size: 42px;
            }

            .stat-label {
                font-size: 12px;
            }
        }

        @media (max-width: 1020px) {
            .page-shell {
                width: calc(100% - 20px);
                margin: 10px auto;
                border-radius: 18px;
            }

            .nav {
                min-height: 86px;
            }

            .nav-links,
            .order-btn {
                display: none;
            }

            .menu-toggle {
                display: inline-flex;
            }

            .brand-logo {
                width: 56px;
                height: 56px;
                padding: 6px;
            }

            .brand-mark {
                width: 100%;
                height: 100%;
            }

            .brand-name {
                font-size: 31px;
            }

            .hero {
                min-height: auto;
                background:
                    linear-gradient(180deg, rgba(255, 248, 236, 0.96) 0%, rgba(255, 248, 236, 0.86) 55%, rgba(255, 248, 236, 0.16) 100%),
                    url("{{ asset('images/bonbon/hero-coffee-dessert.png') }}") center bottom / cover no-repeat;
            }

            .hero-content {
                padding: 58px 0 360px;
            }

            .hero::before {
                width: 180px;
                height: 280px;
                opacity: 0.46;
            }

            .quick-panel {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                margin-top: 18px;
                border-radius: 14px;
            }

            .quick-item {
                padding: 14px 10px;
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .quick-item:nth-child(n + 4) {
                border-bottom: 1px solid var(--line);
            }

            .quick-item:last-child {
                border-bottom: 0;
            }

            .stats-strip {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                padding: 30px;
            }

            .stat:not(:last-child) {
                border-right: 0;
            }

            .city-line {
                display: none;
            }

            .about-cards,
            .reviews-grid,
            .contact-panel {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: 1fr;
                grid-template-rows: 260px 220px 220px;
            }

            .gallery .large {
                grid-row: auto;
            }
        }

        @media (max-width: 760px) {
            .inner {
                width: calc(100% - 30px);
            }

            .brand {
                min-width: 0;
                gap: 11px;
            }

            .brand-cafe {
                letter-spacing: 3px;
            }

            .brand-logo {
                width: 48px;
                height: 48px;
                padding: 5px;
            }

            .brand-mark {
                width: 100%;
                height: 100%;
            }

            .brand-name {
                font-size: 27px;
            }

            .brand-cafe {
                margin-top: 5px;
                font-size: 11px;
            }

            h1 {
                font-size: clamp(50px, 18vw, 74px);
            }

            h2 {
                font-size: clamp(40px, 13vw, 54px);
            }

            .eyebrow,
            .section-kicker {
                font-size: 12px;
                letter-spacing: 2px;
            }

            .hero-content {
                padding: 45px 0 300px;
            }

            .hero-copy {
                margin: 26px 0 34px;
                font-size: 17px;
            }

            .hero-actions .primary-btn,
            .hero-actions .secondary-btn {
                width: 100%;
                min-width: 0;
            }

            .quick-panel,
            .stats-strip {
                width: calc(100% - 30px);
            }

            .quick-panel {
                grid-template-columns: 1fr;
                padding: 14px;
            }

            .quick-item {
                padding: 14px 4px;
                border-bottom: 1px solid var(--line);
            }

            .stats-strip {
                grid-template-columns: 1fr;
                gap: 24px;
                margin-top: 14px;
                padding: 28px 24px;
            }

            .stat {
                justify-content: flex-start;
            }

            .section-card,
            .reviews-contact {
                padding: 48px 0;
            }

            .about-cards {
                grid-template-columns: 1fr;
            }

            .branch-card {
                grid-template-columns: 1fr;
            }

            .branch-card img {
                min-height: 230px;
            }

            .locations-grid {
                margin-top: 44px;
            }

            .map-panel {
                min-height: 360px;
            }

            .map-landmark {
                opacity: 0.14;
                transform: scale(0.75);
                transform-origin: center;
            }

            .pin.one {
                top: 31%;
                left: 48%;
            }

            .pin.two {
                top: 58%;
                left: 34%;
            }

            .map-place.ark {
                top: 64px;
                left: 22px;
            }

            .map-place.lyabi {
                top: 104px;
                right: 18px;
            }

            .map-place.kalyan {
                right: 24px;
                bottom: 34px;
            }

            .delivery-bar,
            .footer-bottom {
                align-items: flex-start;
                flex-direction: column;
            }

            .contact-intro {
                min-height: 220px;
                padding-left: 0;
                background-size: 300px auto;
            }

            .phone-row,
            .contact-tile-main {
                align-items: flex-start;
            }

            .phone-number {
                font-size: 29px;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .footer-col {
                padding-left: 0;
                border-left: 0;
            }

            .branch-footer-row {
                grid-template-columns: 48px 1fr;
            }

            .branch-footer-row .small-muted {
                grid-column: 2;
            }

            .qr-promo {
                grid-template-columns: 1fr;
                background-size: 210px auto;
            }
        }
    </style>
</head>
<body>
@php
    $phoneDisplay = '+998 97 300 45 68';
    $phoneRaw = '+998973004568';
    $secondPhone = '+998 93 383 11 33';
    $mapsUrl = 'https://2gis.uz/bukhara/firm/70000001083516500';
    $telegramBot = 'https://t.me/bonbon_uz_bot';
    $telegramChannel = 'https://t.me/bonbon_cafe';
    $instagram = 'https://www.instagram.com/bistro_by_bonbon/';
    $whatsapp = 'https://wa.me/998973004568';
@endphp

<div class="page-shell">
    <header class="site-header">
        <div class="inner nav">
            <a class="brand" href="{{ url('/') }}" aria-label="BonBon Cafe bosh sahifa">
                <span class="brand-logo">
                    <img class="brand-mark" src="{{ asset('images/logo_main.png') }}" alt="">
                </span>
                <span class="brand-text">
                    <span class="brand-name">BonBon</span>
                    <span class="brand-cafe">CAFE</span>
                </span>
            </a>

            <nav class="nav-links" aria-label="Asosiy navigatsiya">
                <a class="nav-link active" href="#home">Bosh sahifa</a>
                <a class="nav-link" href="#about">Biz haqimizda</a>
                <a class="nav-link" href="{{ route('menu') }}">Menyu</a>
                <a class="nav-link" href="#branches">Filiallar</a>
                <a class="nav-link" href="#reviews">Sharhlar</a>
                <a class="nav-link" href="#contact">Kontakt</a>
            </nav>

            <a class="order-btn" href="{{ $telegramBot }}" target="_blank" rel="noopener">
                <svg class="svg-icon small" viewBox="0 0 24 24"><path d="M6 8h12l1 12H5L6 8Z"/><path d="M9 8a3 3 0 0 1 6 0"/><path d="M5 12h14"/></svg>
                Buyurtma berish
            </a>

            <button class="menu-toggle" type="button" aria-label="Menyuni ochish" aria-expanded="false" aria-controls="mobileMenu">
                <svg class="svg-icon" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
            </button>
        </div>

        <nav class="mobile-menu" id="mobileMenu" aria-label="Mobil navigatsiya">
            <a href="#home">Bosh sahifa</a>
            <a href="#about">Biz haqimizda</a>
            <a href="{{ route('menu') }}">Menyu</a>
            <a href="#branches">Filiallar</a>
            <a href="#reviews">Sharhlar</a>
            <a href="#contact">Kontakt</a>
            <a href="{{ $telegramBot }}" target="_blank" rel="noopener">Buyurtma berish</a>
        </nav>
    </header>

    <main id="home">
        <section class="hero">
            <div class="inner">
                <div class="hero-content">
                    <span class="eyebrow"><span class="leaf-mini"></span>Buxoro - Yevropa uslubida</span>
                    <h1>Xush kelibsiz BonBon <span class="accent-word">Cafe</span></h1>
                    <p class="hero-copy">Buxoroda Yevropa uslubidagi zamonaviy kafe va patisserie. Ajoyib ta'm, chinakam mehmondo'stlik va iliq muhit siz uchun.</p>

                    <div class="hero-actions">
                        <a class="primary-btn" href="{{ route('menu') }}">
                            <svg class="svg-icon" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5V4.5Z"/><path d="M8 6h8M8 10h8"/></svg>
                            Menyuni ko'rish
                        </a>
                        <a class="secondary-btn" href="{{ $mapsUrl }}" target="_blank" rel="noopener">
                            <svg class="svg-icon" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            Bizni topish
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="quick-panel" aria-label="Tezkor amallar">
            <a class="quick-item" href="{{ route('menu') }}">
                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5V4.5Z"/></svg></span>
                <span><span class="quick-title">Menyu</span><span class="quick-text">Taomlar va ichimliklar</span></span>
            </a>
            <a class="quick-item" href="tel:{{ $phoneRaw }}">
                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.91.33 1.8.63 2.65a2 2 0 0 1-.45 2.11L8 9.76a16 16 0 0 0 6.24 6.24l1.28-1.28a2 2 0 0 1 2.11-.45c.85.3 1.74.51 2.65.63A2 2 0 0 1 22 16.92Z"/></svg></span>
                <span><span class="quick-title">Qo'ng'iroq</span><span class="quick-text">{{ $phoneDisplay }}</span></span>
            </a>
            <a class="quick-item" href="{{ $whatsapp }}" target="_blank" rel="noopener">
                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M20.5 11.8a8.5 8.5 0 0 1-12.6 7.5L3 21l1.7-4.7a8.5 8.5 0 1 1 15.8-4.5Z"/><path d="M9 8.7c.2 3 2.4 5.2 5.3 6l1.2-1.2c.3-.3.3-.8-.1-1l-1.7-.8c-.3-.2-.7-.1-1 .2l-.4.4c-1-.5-1.8-1.3-2.3-2.3l.4-.4c.3-.3.4-.7.2-1l-.8-1.7c-.2-.4-.7-.4-1-.1L9 8.7Z"/></svg></span>
                <span><span class="quick-title">WhatsApp</span><span class="quick-text">Tez bog'laning</span></span>
            </a>
            <a class="quick-item" href="{{ $telegramBot }}" target="_blank" rel="noopener">
                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg></span>
                <span><span class="quick-title">Telegram Bot</span><span class="quick-text">Buyurtma va info</span></span>
            </a>
            <a class="quick-item" href="{{ $mapsUrl }}" target="_blank" rel="noopener">
                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
                <span><span class="quick-title">Manzil</span><span class="quick-text">Buxoro, O'zbekiston</span></span>
            </a>
        </section>

        <section class="stats-strip" aria-label="BonBon statistikasi">
            <div class="stat">
                <span class="icon-circle soft"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 4h10v5a5 5 0 0 1-10 0V4Z"/><path d="M5 6H3a4 4 0 0 0 4 4"/><path d="M19 6h2a4 4 0 0 1-4 4"/></svg></span>
                <span><span class="stat-value">2019</span><span class="stat-label">Yil asos solingan</span></span>
            </div>
            <div class="stat">
                <span class="icon-circle soft"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-3"/><path d="M9 9v.01M9 13v.01M9 17v.01"/></svg></span>
                <span><span class="stat-value">2</span><span class="stat-label">Filial</span></span>
            </div>
            <div class="stat">
                <span class="icon-circle soft"><svg class="svg-icon" viewBox="0 0 24 24"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/></svg></span>
                <span><span class="stat-value">4.8</span><span class="stat-label">Reyting</span></span>
            </div>
            <div class="stat">
                <span class="icon-circle soft"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                <span><span class="stat-value">50k+</span><span class="stat-label">Mehmon</span></span>
            </div>
            <div class="city-line" aria-hidden="true"></div>
        </section>

        <section class="section-card" id="about">
            <div class="inner">
                <div class="about-grid">
                    <div>
                        <div class="section-kicker"><span class="leaf-mini"></span>Biz haqimizda</div>
                        <h2>BonBon - ta'm, muhit va mehmondo'stlik <span class="accent-word">san'ati</span></h2>

                        <div class="about-cards">
                            <article class="info-card">
                                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M17 8h1a4 4 0 0 1 0 8h-1"/><path d="M3 8h14v5a6 6 0 0 1-12 0V8Z"/><path d="M6 2v2M10 2v2M14 2v2"/></svg></span>
                                <h3>Kim biz?</h3>
                                <div class="tiny-line"></div>
                                <p>BonBon Cafe - Buxoroda mehmondo'stlik va kafe madaniyatini zamonaviy yevropacha uslubda uyg'unlashtirgan patisserie va kafe.</p>
                            </article>
                            <article class="info-card">
                                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="M9 12l2 2 4-4"/></svg></span>
                                <h3>Bizning falsafamiz</h3>
                                <div class="tiny-line"></div>
                                <p>Biz sifatli mahsulotlar, chiroyli muhit va iliq ruh orqali sizga kundalik hayotdan zavq olish lahzalarini taqdim etamiz.</p>
                            </article>
                            <article class="info-card">
                                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"/></svg></span>
                                <h3>Mehmonlar ishonchi</h3>
                                <div class="tiny-line"></div>
                                <p>Mehmonlarimiz bizni Buxorodagi eng yoqimli kafe sifatida tanlashadi. Iliq fikrlar bizni yanada yaxshilashga ilhomlantiradi.</p>
                            </article>
                        </div>

                        <div class="quote-bar">
                            <span class="quote-mark">"</span>
                            <span>Har bir detalda mehr, har bir ta'mda BonBon.</span>
                            <span class="leaf-mini"></span>
                        </div>
                    </div>

                    <div class="gallery" aria-label="BonBon Cafe galereyasi">
                        <img class="large" src="{{ asset('images/bonbon/dessert-close.png') }}" alt="BonBon deserti" loading="lazy">
                        <img src="{{ asset('images/bonbon/interior.png') }}" alt="BonBon interyeri" loading="lazy">
                        <img src="{{ asset('images/bonbon/coffee-close.png') }}" alt="BonBon qahvasi" loading="lazy">
                    </div>
                </div>

                <div class="locations-grid" id="branches">
                    <div>
                        <div class="section-kicker"><span class="leaf-mini"></span>Bizni qayerdan topasiz</div>
                        <h2>Sizga yaqin BonBon</h2>

                        <div class="branch-list">
                            <article class="branch-card">
                                <img src="{{ asset('images/bonbon/branch-front.png') }}" alt="BonBon Islom Karimov filiali" loading="lazy">
                                <div class="branch-content">
                                    <div class="branch-head">
                                        <h3>BonBon Islom Karimov</h3>
                                        <span class="leaf-mini"></span>
                                    </div>
                                    <div class="branch-meta">
                                        <span>Islom Karimov ko'chasi, 2, Buxoro</span>
                                        <span>08:00 - 23:00</span>
                                        <span>{{ $phoneDisplay }}</span>
                                    </div>
                                    <div class="branch-links">
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">Google</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">Yandex</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">2GIS</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">TripAdvisor</a>
                                    </div>
                                </div>
                            </article>

                            <article class="branch-card">
                                <img src="{{ asset('images/bonbon/branch-sign.png') }}" alt="BonBon Buxoro filiali" loading="lazy">
                                <div class="branch-content">
                                    <div class="branch-head">
                                        <h3>BonBon Buxoro filiallari</h3>
                                        <span class="leaf-mini"></span>
                                    </div>
                                    <div class="branch-meta">
                                        <span>Buxoro bo'ylab bir nechta qulay lokatsiyalarda sizning xizmatingizdamiz.</span>
                                        <span>{{ $secondPhone }}</span>
                                    </div>
                                    <div class="branch-links">
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">Google</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">Yandex</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">2GIS</a>
                                        <a class="map-chip" href="{{ $mapsUrl }}" target="_blank" rel="noopener">TripAdvisor</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="delivery-bar">
                            <div>
                                <strong>Sevgan ta'mingizni uyingizga yetkazamiz!</strong>
                                <span>Yetkazib berish xizmati mavjud</span>
                            </div>
                            <a href="{{ $telegramBot }}" target="_blank" rel="noopener">Buyurtma berish</a>
                        </div>
                    </div>

                    <a class="map-panel" href="{{ $mapsUrl }}" target="_blank" rel="noopener" aria-label="BonBon xaritasini ochish">
                        <span class="map-landmark ark" aria-hidden="true"></span>
                        <span class="map-landmark lyabi" aria-hidden="true"></span>
                        <span class="map-landmark kalyan" aria-hidden="true"></span>
                        <span class="map-place ark">Ark qal'a</span>
                        <span class="map-place lyabi">Lyabi Hauz</span>
                        <span class="map-place kalyan">Poi Kalyan</span>
                        <span class="pin one">
                            <span class="pin-marker"><span>B</span></span>
                            <span>BonBon<br>Islom Karimov</span>
                        </span>
                        <span class="pin two">
                            <span class="pin-marker"><span>B</span></span>
                            <span>BonBon<br>filiallari</span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section class="reviews-contact" id="reviews">
            <div class="inner">
                <div class="reviews-grid">
                    <div class="rating-summary">
                        <div>
                            <div class="rating-value">4.8</div>
                            <div class="stars">★★★★★</div>
                            <div class="label">Jami reyting</div>
                            <span class="small-muted">50k+ mehmon</span>
                        </div>
                    </div>

                    <article class="review-card">
                        <div class="review-top">
                            <div class="review-brand">
                                <span class="review-logo trip">◎</span>
                                <div><span class="review-title">TripAdvisor</span><span class="quick-text">BonBon Cafe</span></div>
                            </div>
                            <span class="review-score">4.8<small>/5</small></span>
                        </div>
                        <div class="review-meta"><span class="stars">★★★★★</span><span>768 ta sharh</span></div>
                        <p>"Ajoyib muhit, mazali desertlar va juda samimiy xizmat. Buxorodagi sevimli joyimiz!"</p>
                    </article>

                    <article class="review-card">
                        <div class="review-top">
                            <div class="review-brand">
                                <span class="review-logo google">G</span>
                                <div><span class="review-title">Google Maps</span><span class="quick-text">BonBon Cafe</span></div>
                            </div>
                            <span class="review-score">4.8<small>/5</small></span>
                        </div>
                        <div class="review-meta"><span class="stars">★★★★★</span><span>1246 ta sharh</span></div>
                        <p>"Yumshoqgina pirojniylar, zo'r qahva va juda chiroyli atmosfera. Tavsiya qilaman!"</p>
                    </article>

                    <article class="review-card">
                        <div class="review-top">
                            <div class="review-brand">
                                <span class="review-logo yandex">Y</span>
                                <div><span class="review-title">Yandex Maps</span><span class="quick-text">BonBon Cafe</span></div>
                            </div>
                            <span class="review-score">4.7<small>/5</small></span>
                        </div>
                        <div class="review-meta"><span class="stars">★★★★☆</span><span>512 ta sharh</span></div>
                        <p>"Prekrasnoe mesto v tsentre Bukhary. Vkusno, uyutno i atmosferno."</p>
                    </article>
                </div>

                <div class="contacts-block" id="contact">
                    <div class="contact-intro">
                        <div class="section-kicker"><span class="leaf-mini"></span>Kontaktlar</div>
                        <h2>Buyurtma va savollar uchun</h2>
                        <p>Sizning ishonchingiz - bizning eng katta mukofotimiz.</p>
                    </div>

                    <div class="contact-panel">
                        <div class="call-card">
                            <div class="phone-row">
                                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.91.33 1.8.63 2.65a2 2 0 0 1-.45 2.11L8 9.76a16 16 0 0 0 6.24 6.24l1.28-1.28a2 2 0 0 1 2.11-.45c.85.3 1.74.51 2.65.63A2 2 0 0 1 22 16.92Z"/></svg></span>
                                <span><span class="quick-text">Asosiy telefon</span><span class="phone-number">{{ $phoneDisplay }}</span></span>
                            </div>
                            <a class="primary-btn" href="tel:{{ $phoneRaw }}">
                                <svg class="svg-icon small" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"/></svg>
                                Qo'ng'iroq qilish
                            </a>
                        </div>

                        <a class="contact-tile" href="tel:+998933831133">
                            <span class="contact-tile-main">
                                <span class="icon-circle soft"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.2"/></svg></span>
                                <span><span class="contact-text">Qo'shimcha telefon</span><span class="contact-title">{{ $secondPhone }}</span></span>
                            </span>
                        </a>

                        <a class="contact-tile" href="{{ $whatsapp }}" target="_blank" rel="noopener">
                            <span class="contact-tile-main"><span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="M20.5 11.8a8.5 8.5 0 0 1-12.6 7.5L3 21l1.7-4.7a8.5 8.5 0 1 1 15.8-4.5Z"/><path d="M9 8.7c.2 3 2.4 5.2 5.3 6"/></svg></span><span><span class="contact-title">WhatsApp</span><span class="contact-text">Tez bog'laning</span></span></span>
                            <span class="arrow">→</span>
                        </a>

                        <div class="contact-tile">
                            <span class="contact-tile-main">
                                <span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
                                <span><span class="contact-text">Ish vaqti</span><span class="contact-title">Har kuni 08:00 - 23:00</span></span>
                            </span>
                        </div>

                        <a class="contact-tile" href="{{ $telegramBot }}" target="_blank" rel="noopener">
                            <span class="contact-tile-main"><span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg></span><span><span class="contact-title">Telegram Bot</span><span class="contact-text">Buyurtma va info</span></span></span>
                            <span class="arrow">→</span>
                        </a>

                        <a class="contact-tile" href="{{ $telegramChannel }}" target="_blank" rel="noopener">
                            <span class="contact-tile-main"><span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg></span><span><span class="contact-title">Telegram kanal</span><span class="contact-text">Yangiliklar va aksiya</span></span></span>
                            <span class="arrow">→</span>
                        </a>

                        <a class="contact-tile" href="{{ $instagram }}" target="_blank" rel="noopener">
                            <span class="contact-tile-main"><span class="icon-circle"><svg class="svg-icon" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/></svg></span><span><span class="contact-title">Instagram</span><span class="contact-text">@bonbon.cafe</span></span></span>
                            <span class="arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="inner footer-main">
            <div>
                <div class="footer-brand">
                    <span class="footer-badge">B</span>
                    <div>
                        <div class="footer-logo">BonBon<br><span style="font-size:18px;letter-spacing:4px;font-family:'DM Sans',Arial,sans-serif;">CAFE</span></div>
                        <div class="footer-kicker">PATISSERIE & COFFEE</div>
                    </div>
                </div>
                <p class="footer-desc">Bu yerda Buxoroda Yevropa klassikasi va sharqona mehmondo'stlik.</p>
                <div class="socials">
                    <a href="{{ $instagram }}" target="_blank" rel="noopener" aria-label="Instagram"><svg class="svg-icon small" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/></svg></a>
                    <a href="{{ $telegramChannel }}" target="_blank" rel="noopener" aria-label="Telegram"><svg class="svg-icon small" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg></a>
                    <a href="{{ $whatsapp }}" target="_blank" rel="noopener" aria-label="WhatsApp"><svg class="svg-icon small" viewBox="0 0 24 24"><path d="M20.5 11.8a8.5 8.5 0 0 1-12.6 7.5L3 21l1.7-4.7a8.5 8.5 0 1 1 15.8-4.5Z"/><path d="M9 8.7c.2 3 2.4 5.2 5.3 6"/></svg></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Navigatsiya</h3>
                <div class="footer-links">
                    <a href="#home">Bosh sahifa</a>
                    <a href="{{ route('menu') }}">Menyu</a>
                    <a href="#about">Biz haqimizda</a>
                    <a href="#reviews">Yangiliklar</a>
                    <a href="#contact">Kontakt</a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Bizning filiallarimiz</h3>
                <div class="branch-footer">
                    <div class="branch-footer-row">
                        <span class="footer-pin"><svg class="svg-icon small" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
                        <span>BonBon Central<br><span class="small-muted" style="color:#ffe4c2;">M. Ashrafiy ko'chasi, 3</span></span>
                        <span>08:00 - 23:00</span>
                    </div>
                    <div class="branch-footer-row">
                        <span class="footer-pin"><svg class="svg-icon small" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
                        <span>BonBon Ark<br><span class="small-muted" style="color:#ffe4c2;">Poyi Kalon, 10</span></span>
                        <span>08:00 - 22:00</span>
                    </div>
                </div>
            </div>

            <a class="qr-promo" href="{{ route('qr') }}" aria-label="QR sahifani ochish">
                <span class="qr-box">
                    {!! QrCode::size(118)->margin(1)->errorCorrection('H')->style('square')->eye('square')->color(46, 19, 11)->backgroundColor(255, 250, 242)->generate(route('qr')) !!}
                </span>
                <span class="promo-text">Yaxshi kun - yaxshi qahva - yaxshi mood</span>
            </a>
        </div>

        <div class="inner footer-bottom">
            <span>© 2019-2025 BonBon Cafe. Barcha huquqlar himoyalangan.</span>
            <span>Designed with <span class="heart">♥</span> in Bukhara</span>
        </div>
    </footer>
</div>

<script>
    const toggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (toggle && mobileMenu) {
        toggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(isOpen));
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
</script>
</body>
</html>
