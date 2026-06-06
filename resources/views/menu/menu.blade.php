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
    <title>BonBon Cafe - Menyu</title>
    <style>
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
            --line: rgba(181, 87, 24, 0.18);
            --line-strong: rgba(181, 87, 24, 0.32);
            --carrot: #e85b05;
            --carrot-2: #c8460c;
            --ink: #2a130b;
            --brown: #642b13;
            --muted: #765b4e;
            --shadow: 0 24px 64px rgba(92, 43, 13, 0.16);
            --soft-shadow: 0 14px 34px rgba(92, 43, 13, 0.1);
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            background:
                radial-gradient(circle at 8% 4%, rgba(232, 91, 5, 0.13), transparent 28%),
                radial-gradient(circle at 90% 2%, rgba(217, 154, 61, 0.13), transparent 27%),
                linear-gradient(180deg, #fff9ef 0%, #fff1df 100%);
            color: var(--ink);
            font-family: "DM Sans", Arial, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .menu-page {
            width: min(1680px, calc(100% - 40px));
            min-height: calc(100vh - 40px);
            margin: 20px auto;
            overflow: hidden;
            border: 1px solid rgba(116, 66, 34, 0.1);
            border-radius: 25px;
            background:
                linear-gradient(rgba(255, 250, 242, 0.94), rgba(255, 250, 242, 0.94)),
                url("{{ asset('images/paper-texture.svg') }}");
            box-shadow: var(--shadow);
        }

        .inner {
            width: min(1480px, calc(100% - 72px));
            margin: 0 auto;
        }

        .menu-header {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 24px;
            min-height: 104px;
            border-bottom: 1px solid var(--line);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            justify-self: start;
            min-width: 0;
        }

        .brand-logo {
            display: grid;
            place-items: center;
            flex: 0 0 auto;
            width: 58px;
            height: 58px;
            padding: 6px;
            overflow: hidden;
            border: 1px solid rgba(232, 91, 5, 0.12);
            border-radius: 50%;
            background: #fffaf2;
            box-shadow: 0 9px 22px rgba(139, 67, 18, 0.14);
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: contain;
        }

        .brand-name {
            display: block;
            color: var(--carrot-2);
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: 34px;
            font-weight: 700;
            line-height: 0.9;
        }

        .brand-sub {
            display: block;
            margin-top: 7px;
            color: var(--carrot);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 4px;
        }

        .page-title {
            justify-self: center;
            color: #4a2011;
            font-family: "Cormorant Garamond", Georgia, serif;
            font-size: clamp(34px, 3.6vw, 56px);
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
        }

        .top-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
        }

        .icon-btn,
        .back-btn,
        .nav-btn,
        .lang-btn,
        .page-chip {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: rgba(255, 250, 242, 0.84);
            color: var(--brown);
            font-weight: 700;
            cursor: pointer;
            transition: transform 160ms ease, border-color 160ms ease, background 160ms ease;
        }

        .icon-btn:hover,
        .back-btn:hover,
        .nav-btn:hover,
        .lang-btn:hover,
        .page-chip:hover {
            transform: translateY(-1px);
            border-color: var(--line-strong);
        }

        .back-btn {
            min-height: 46px;
            padding: 0 16px;
            gap: 8px;
            font-size: 14px;
        }

        .icon-btn {
            width: 46px;
            height: 46px;
        }

        .svg-icon {
            width: 21px;
            height: 21px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .viewer-shell {
            padding: 30px 0 34px;
        }

        .viewer-toolbar {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 18px;
            margin-bottom: 18px;
        }

        .lang-group {
            display: inline-grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
            padding: 5px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: rgba(255, 250, 242, 0.86);
            box-shadow: var(--soft-shadow);
        }

        .lang-btn {
            min-width: 82px;
            min-height: 38px;
            border: 0;
            background: transparent;
            color: var(--muted);
            font-size: 14px;
        }

        .lang-btn.active,
        .page-chip.active {
            background: linear-gradient(135deg, #f06a0b, #c94308);
            color: #fff8ef;
            box-shadow: 0 10px 22px rgba(199, 69, 8, 0.22);
        }

        .page-tabs {
            display: flex;
            justify-content: center;
            gap: 8px;
            min-width: 0;
            overflow-x: auto;
            padding: 4px 2px 8px;
            scrollbar-width: thin;
        }

        .page-chip {
            flex: 0 0 auto;
            min-height: 38px;
            padding: 0 14px;
            font-size: 13px;
            white-space: nowrap;
        }

        .viewer-meta {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
            color: var(--muted);
            font-size: 14px;
            font-weight: 700;
            white-space: nowrap;
        }

        .viewer-stage {
            position: relative;
            display: grid;
            grid-template-columns: 68px minmax(0, 1fr) 68px;
            align-items: center;
            gap: 18px;
        }

        .nav-btn {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: #fffaf2;
            color: var(--carrot-2);
            box-shadow: var(--soft-shadow);
        }

        .nav-btn:disabled {
            cursor: not-allowed;
            opacity: 0.38;
            transform: none;
        }

        .image-card {
            position: relative;
            display: grid;
            grid-template-rows: auto 1fr;
            min-height: min(74vh, 880px);
            overflow: hidden;
            border: 1px solid rgba(177, 85, 26, 0.16);
            border-radius: 22px;
            background:
                radial-gradient(circle at 50% 12%, rgba(255, 255, 255, 0.75), transparent 34%),
                linear-gradient(135deg, rgba(255, 246, 232, 0.98), rgba(255, 236, 209, 0.9));
            box-shadow: var(--shadow);
        }

        .image-card::before {
            content: "";
            position: absolute;
            inset: 18px;
            pointer-events: none;
            border: 1px solid rgba(197, 91, 22, 0.12);
            border-radius: 16px;
        }

        .viewer-head {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            min-height: 64px;
            padding: 14px 20px;
            border-bottom: 1px solid var(--line);
            background: rgba(255, 250, 242, 0.7);
        }

        .viewer-title {
            color: #4a2011;
            font-size: 16px;
            font-weight: 700;
        }

        .zoom-tools {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .zoom-label {
            min-width: 56px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
            text-align: center;
        }

        .image-viewport {
            position: relative;
            z-index: 1;
            display: grid;
            place-items: center;
            min-height: calc(min(74vh, 880px) - 64px);
            overflow: auto;
            padding: clamp(16px, 2vw, 28px);
        }

        .menu-image {
            width: auto;
            max-width: 100%;
            max-height: calc(min(74vh, 880px) - 120px);
            border-radius: 8px;
            object-fit: contain;
            background: #fffaf2;
            box-shadow: 0 14px 34px rgba(70, 34, 15, 0.12);
            cursor: zoom-in;
            transform: scale(var(--zoom, 1));
            transform-origin: center center;
            transition: transform 180ms ease, opacity 180ms ease;
            user-select: none;
        }

        .menu-image.zoomed {
            max-width: none;
            max-height: none;
            cursor: zoom-out;
        }

        .menu-image.changing {
            opacity: 0.35;
            transform: translateY(8px) scale(var(--zoom, 1));
        }

        .progress-row {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 18px;
            margin: 20px auto 0;
            width: min(960px, 100%);
        }

        .progress-track {
            height: 8px;
            overflow: hidden;
            border-radius: 999px;
            background: rgba(199, 69, 8, 0.13);
        }

        .progress-fill {
            width: 0;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, #f06a0b, #c94308);
            transition: width 220ms ease;
        }

        .page-count {
            min-width: 90px;
            color: var(--brown);
            font-size: 14px;
            font-weight: 700;
            text-align: right;
        }

        .fullscreen-active .menu-page {
            width: 100%;
            min-height: 100vh;
            margin: 0;
            border-radius: 0;
        }

        .fullscreen-active .image-card {
            min-height: calc(100vh - 230px);
        }

        .fullscreen-active .image-viewport {
            min-height: calc(100vh - 294px);
        }

        @media (max-width: 1100px) {
            .menu-page {
                width: calc(100% - 20px);
                margin: 10px auto;
                border-radius: 18px;
            }

            .inner {
                width: calc(100% - 32px);
            }

            .menu-header {
                grid-template-columns: 1fr auto;
                min-height: 88px;
            }

            .page-title {
                display: none;
            }

            .viewer-toolbar {
                grid-template-columns: 1fr;
            }

            .lang-group {
                width: min(360px, 100%);
                justify-self: center;
            }

            .viewer-meta {
                justify-content: center;
            }

            .viewer-stage {
                grid-template-columns: 52px minmax(0, 1fr) 52px;
                gap: 10px;
            }

            .nav-btn {
                width: 50px;
                height: 50px;
            }
        }

        @media (max-width: 760px) {
            .menu-header {
                grid-template-columns: 1fr;
                gap: 14px;
                padding: 16px 0;
            }

            .brand {
                justify-self: center;
            }

            .top-actions {
                justify-content: center;
                flex-wrap: wrap;
            }

            .viewer-shell {
                padding-top: 20px;
            }

            .viewer-stage {
                grid-template-columns: 1fr;
            }

            .nav-btn {
                position: absolute;
                z-index: 4;
                top: 50%;
                width: 44px;
                height: 44px;
                transform: translateY(-50%);
                background: rgba(255, 250, 242, 0.9);
            }

            .nav-btn:hover {
                transform: translateY(-50%);
            }

            .nav-btn.prev {
                left: 8px;
            }

            .nav-btn.next {
                right: 8px;
            }

            .image-card {
                min-height: 74vh;
                border-radius: 16px;
            }

            .viewer-head {
                align-items: flex-start;
                flex-direction: column;
                min-height: 0;
                padding: 12px 14px;
            }

            .zoom-tools {
                width: 100%;
                justify-content: space-between;
            }

            .image-viewport {
                min-height: calc(74vh - 112px);
                padding: 12px;
            }

            .menu-image {
                max-height: calc(74vh - 150px);
            }

            .progress-row {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .page-count {
                min-width: 0;
                text-align: center;
            }
        }

        @media (max-width: 460px) {
            .brand-logo {
                width: 50px;
                height: 50px;
                padding: 5px;
            }

            .brand-logo img {
                width: 100%;
                height: 100%;
            }

            .brand-name {
                font-size: 29px;
            }

            .brand-sub {
                font-size: 11px;
                letter-spacing: 3px;
            }

            .back-btn {
                width: 100%;
            }

            .top-actions .icon-btn {
                flex: 1;
            }
        }
    </style>
</head>
<body>
@php
    $menuBase = asset('menyu');
@endphp

<div class="menu-page">
    <header class="inner menu-header">
        <a class="brand" href="{{ route('index') }}" aria-label="BonBon bosh sahifa">
            <span class="brand-logo"><img src="{{ asset('images/logo_main.png') }}" alt=""></span>
            <span>
                <span class="brand-name">BonBon</span>
                <span class="brand-sub">CAFE</span>
            </span>
        </a>

        <div class="page-title">Menyu</div>

        <div class="top-actions">
            <a class="back-btn" href="{{ route('index') }}">
                <svg class="svg-icon" viewBox="0 0 24 24"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
                Bosh sahifa
            </a>
            <button class="icon-btn" type="button" id="fullscreenBtn" title="Full screen" aria-label="Full screen">
                <svg class="svg-icon" viewBox="0 0 24 24"><path d="M8 3H5a2 2 0 0 0-2 2v3"/><path d="M21 8V5a2 2 0 0 0-2-2h-3"/><path d="M3 16v3a2 2 0 0 0 2 2h3"/><path d="M16 21h3a2 2 0 0 0 2-2v-3"/></svg>
            </button>
        </div>
    </header>

    <main class="inner viewer-shell">
        <div class="viewer-toolbar">
            <div class="lang-group" role="tablist" aria-label="Menyu tili">
                <button class="lang-btn active" type="button" data-lang="uz">UZ</button>
                <button class="lang-btn" type="button" data-lang="ru">RU</button>
                <button class="lang-btn" type="button" data-lang="en">EN</button>
            </div>
            <div class="page-tabs" id="pageTabs" aria-label="Menyu sahifalari"></div>
            <div class="viewer-meta"><span id="pageLabel">1 / 4</span></div>
        </div>

        <section class="viewer-stage" aria-label="BonBon menu viewer">
            <button class="nav-btn prev" type="button" id="prevBtn" aria-label="Oldingi sahifa">
                <svg class="svg-icon" viewBox="0 0 24 24"><path d="m15 18-6-6 6-6"/></svg>
            </button>

            <article class="image-card">
                <div class="viewer-head">
                    <div class="viewer-title" id="viewerTitle">Umumiy menyu - 1-sahifa</div>
                    <div class="zoom-tools">
                        <button class="icon-btn" type="button" id="zoomOut" aria-label="Kichraytirish">
                            <svg class="svg-icon" viewBox="0 0 24 24"><path d="M5 12h14"/></svg>
                        </button>
                        <span class="zoom-label" id="zoomLabel">100%</span>
                        <button class="icon-btn" type="button" id="zoomIn" aria-label="Kattalashtirish">
                            <svg class="svg-icon" viewBox="0 0 24 24"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
                        </button>
                        <button class="icon-btn" type="button" id="zoomReset" aria-label="Moslashtirish">
                            <svg class="svg-icon" viewBox="0 0 24 24"><path d="M8 3H5a2 2 0 0 0-2 2v3"/><path d="M21 8V5a2 2 0 0 0-2-2h-3"/><path d="M3 16v3a2 2 0 0 0 2 2h3"/><path d="M16 21h3a2 2 0 0 0 2-2v-3"/></svg>
                        </button>
                    </div>
                </div>
                <div class="image-viewport" id="imageViewport">
                    <img class="menu-image" id="menuImage" src="" alt="BonBon menu page" draggable="false">
                </div>
            </article>

            <button class="nav-btn next" type="button" id="nextBtn" aria-label="Keyingi sahifa">
                <svg class="svg-icon" viewBox="0 0 24 24"><path d="m9 18 6-6-6-6"/></svg>
            </button>
        </section>

        <div class="progress-row">
            <div class="progress-track" aria-hidden="true"><div class="progress-fill" id="progressFill"></div></div>
            <div class="page-count" id="pageCount">1 / 4</div>
        </div>
    </main>
</div>

<script>
    const menuBase = @json($menuBase);
    const commonPages = [
        { file: "menyu_g_1.jpg", label: "Umumiy", title: "Umumiy menyu - 1-sahifa" },
        { file: "menyu_g_2.jpg", label: "Umumiy", title: "Umumiy menyu - 2-sahifa" }
    ];
    const langPages = {
        uz: [
            { file: "uzb_1.jpg", label: "O'zbekcha", title: "O'zbekcha menyu - 1-sahifa" },
            { file: "uzb_2.jpg", label: "O'zbekcha", title: "O'zbekcha menyu - 2-sahifa" }
        ],
        ru: [
            { file: "rus_1.jpg", label: "Русский", title: "Русское меню - 1-сахифа" },
            { file: "rus_2.jpg", label: "Русский", title: "Русское меню - 2-сахифа" }
        ],
        en: [
            { file: "eng_1.jpg", label: "English", title: "English menu - page 1" },
            { file: "eng_2.jpg", label: "English", title: "English menu - page 2" }
        ]
    };

    const pageTabs = document.getElementById("pageTabs");
    const pageLabel = document.getElementById("pageLabel");
    const pageCount = document.getElementById("pageCount");
    const progressFill = document.getElementById("progressFill");
    const viewerTitle = document.getElementById("viewerTitle");
    const imageViewport = document.getElementById("imageViewport");
    const menuImage = document.getElementById("menuImage");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const fullscreenBtn = document.getElementById("fullscreenBtn");
    const zoomIn = document.getElementById("zoomIn");
    const zoomOut = document.getElementById("zoomOut");
    const zoomReset = document.getElementById("zoomReset");
    const zoomLabel = document.getElementById("zoomLabel");

    let activeLang = "uz";
    let pageIndex = 0;
    let pages = [];
    let zoom = 1;
    let touchStartX = 0;

    function buildPages(lang) {
        return [...commonPages, ...langPages[lang]].map((page, index) => ({
            ...page,
            src: `${menuBase}/${page.file}`,
            number: index + 1
        }));
    }

    function clamp(index) {
        return Math.min(Math.max(index, 0), pages.length - 1);
    }

    function setZoom(value) {
        zoom = Math.min(Math.max(value, 1), 2.6);
        menuImage.style.setProperty("--zoom", zoom);
        menuImage.classList.toggle("zoomed", zoom > 1);
        zoomLabel.textContent = `${Math.round(zoom * 100)}%`;
        if (zoom === 1) {
            imageViewport.scrollTo({ left: 0, top: 0, behavior: "smooth" });
        }
    }

    function renderTabs() {
        pageTabs.innerHTML = "";
        pages.forEach((page, index) => {
            const btn = document.createElement("button");
            btn.type = "button";
            btn.className = `page-chip${index === pageIndex ? " active" : ""}`;
            btn.textContent = `${index + 1}-bet`;
            btn.addEventListener("click", () => {
                pageIndex = index;
                render();
            });
            pageTabs.appendChild(btn);
        });
    }

    function render() {
        pageIndex = clamp(pageIndex);
        const page = pages[pageIndex];
        menuImage.classList.add("changing");
        window.setTimeout(() => {
            menuImage.src = page.src;
            menuImage.alt = page.title;
            viewerTitle.textContent = page.title;
            pageLabel.textContent = `${pageIndex + 1} / ${pages.length}`;
            pageCount.textContent = `${pageIndex + 1} / ${pages.length}`;
            progressFill.style.width = `${((pageIndex + 1) / pages.length) * 100}%`;
            prevBtn.disabled = pageIndex === 0;
            nextBtn.disabled = pageIndex === pages.length - 1;
            setZoom(1);
            renderTabs();
            menuImage.classList.remove("changing");
        }, 100);
    }

    function setLanguage(lang) {
        activeLang = lang;
        pages = buildPages(lang);
        pageIndex = 0;
        document.querySelectorAll(".lang-btn").forEach((btn) => {
            btn.classList.toggle("active", btn.dataset.lang === lang);
        });
        render();
    }

    function goNext() {
        if (pageIndex >= pages.length - 1) return;
        pageIndex += 1;
        render();
    }

    function goPrev() {
        if (pageIndex <= 0) return;
        pageIndex -= 1;
        render();
    }

    document.querySelectorAll(".lang-btn").forEach((btn) => {
        btn.addEventListener("click", () => setLanguage(btn.dataset.lang));
    });

    prevBtn.addEventListener("click", goPrev);
    nextBtn.addEventListener("click", goNext);

    zoomIn.addEventListener("click", () => setZoom(zoom + 0.25));
    zoomOut.addEventListener("click", () => setZoom(zoom - 0.25));
    zoomReset.addEventListener("click", () => setZoom(1));
    menuImage.addEventListener("click", () => setZoom(zoom === 1 ? 1.65 : 1));

    fullscreenBtn.addEventListener("click", async () => {
        const root = document.documentElement;
        try {
            if (!document.fullscreenElement) {
                await root.requestFullscreen();
            } else {
                await document.exitFullscreen();
            }
        } catch (error) {
            document.body.classList.toggle("fullscreen-active");
        }
    });

    document.addEventListener("fullscreenchange", () => {
        document.body.classList.toggle("fullscreen-active", Boolean(document.fullscreenElement));
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "ArrowRight") goNext();
        if (event.key === "ArrowLeft") goPrev();
        if (event.key === "+" || event.key === "=") setZoom(zoom + 0.25);
        if (event.key === "-") setZoom(zoom - 0.25);
        if (event.key === "0") setZoom(1);
    });

    imageViewport.addEventListener("touchstart", (event) => {
        touchStartX = event.touches[0].clientX;
    }, { passive: true });

    imageViewport.addEventListener("touchend", (event) => {
        if (zoom > 1) return;
        const diff = event.changedTouches[0].clientX - touchStartX;
        if (Math.abs(diff) < 45) return;
        if (diff < 0) goNext();
        if (diff > 0) goPrev();
    }, { passive: true });

    setLanguage("uz");
</script>
</body>
</html>
