@php
    $siteUrl = $siteUrl ?? 'https://bonbon.uz';
    $botUrl = $botUrl ?? 'https://t.me/your_bot_username';
    $qrValue = $qrValue ?? route('qr');
@endphp

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E8650A">
    <title>BonBon Cafe QR</title>

    <style>
        @font-face {
            font-family: 'Cormorant Garamond';
            src: url("{{ asset('fonts/font-local-04.woff2') }}") format('woff2'),
                 url("{{ asset('fonts/cormorant-garamond-700.ttf') }}") format('truetype');
            font-weight: 500 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'DM Sans';
            src: url("{{ asset('fonts/font-local-06.woff2') }}") format('woff2'),
                 url("{{ asset('fonts/dm-sans-400.ttf') }}") format('truetype');
            font-weight: 400 700;
            font-style: normal;
            font-display: swap;
        }

        :root {
            --orange: #E8650A;
            --orange-light: #FF6F1E;
            --orange-deep: #B94B08;
            --cream: #F5EDD8;
            --cream-soft: #FFF6E5;
            --caramel: #C8863A;
            --mocha: #6B3D2E;
            --gold: #D4A853;
            --white-card: #FFF9EC;
            --shadow: rgba(77, 44, 25, .18);
        }

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
            overflow-x: hidden;
            background:
                linear-gradient(180deg, rgba(255,250,238,.86), rgba(255,245,222,.92)),
                url("{{ asset('images/paper-texture.svg') }}");
            background-size: cover, 260px 260px;
        }

        body {
            margin: 0;
            min-height: 100vh;
            overflow-x: hidden;
            font-family: 'DM Sans', Arial, sans-serif;
            color: var(--mocha);
            background:
                linear-gradient(180deg, rgba(255, 248, 235, .8), rgba(244, 222, 184, .92)),
                url("{{ asset('images/paper-texture.svg') }}"),
                radial-gradient(circle at 50% 44%, #fff4dc 0 8%, #ead0a6 72%);
            background-size: cover, 280px 280px, cover;
            display: grid;
            place-items: center;
            padding: 12px;
        }

        .device {
            width: min(96vw, 704px);
            aspect-ratio: 704 / 1364;
            min-height: 0;
            min-width: 0;
            position: relative;
            border-radius: 72px;
            padding: 19px;
            background:
                linear-gradient(135deg, #3a3b3c, #050505 19%, #1d1d1e 52%, #56585a);
            box-shadow:
                0 38px 90px rgba(52, 29, 13, .34),
                0 8px 18px rgba(0, 0, 0, .25),
                inset 0 0 0 2px rgba(255,255,255,.18);
        }

        .device::before,
        .device::after {
            content: "";
            position: absolute;
            width: 4px;
            border-radius: 5px;
            background: linear-gradient(180deg, #222, #777, #1b1b1b);
            box-shadow: inset 1px 0 rgba(255,255,255,.18);
        }

        .device::before {
            left: -4px;
            top: 216px;
            height: 154px;
        }

        .device::after {
            right: -4px;
            top: 335px;
            height: 146px;
        }

        .phone {
            position: relative;
            width: 100%;
            height: 100%;
            min-width: 0;
            min-height: 724px;
            overflow: hidden;
            border-radius: 56px;
            background:
                linear-gradient(180deg, rgba(255,250,238,.86), rgba(255,245,222,.92)),
                url("{{ asset('images/paper-texture.svg') }}");
            background-size: cover, 260px 260px;
            box-shadow:
                inset 0 0 0 2px rgba(255,255,255,.12),
                inset 0 0 0 7px #050505;
        }

        .phone::before {
            content: "";
            position: absolute;
            inset: 7px;
            border-radius: 49px;
            pointer-events: none;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,.08);
            z-index: 30;
        }

        .island {
            position: absolute;
            z-index: 40;
            top: 18px;
            left: 50%;
            width: 126px;
            height: 38px;
            transform: translateX(-50%);
            border-radius: 24px;
            background: #020202;
            box-shadow: inset 0 1px 2px rgba(255,255,255,.08);
        }

        .island::after {
            content: "";
            position: absolute;
            right: 18px;
            top: 11px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background:
                radial-gradient(circle at 35% 35%, rgba(45,98,141,.9) 0 13%, transparent 18%),
                radial-gradient(circle, #112034 0 35%, #05070a 72%);
        }

        .status {
            position: absolute;
            z-index: 35;
            top: 31px;
            left: 69px;
            right: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #fff8ed;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .01em;
            text-shadow: 0 1px 4px rgba(91, 33, 8, .35);
        }

        .status-icons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .signal {
            display: flex;
            align-items: end;
            gap: 3px;
            height: 16px;
        }

        .signal span {
            display: block;
            width: 4px;
            border-radius: 4px;
            background: #fff8ed;
        }

        .signal span:nth-child(1) { height: 6px; opacity: .68; }
        .signal span:nth-child(2) { height: 9px; opacity: .82; }
        .signal span:nth-child(3) { height: 12px; }
        .signal span:nth-child(4) { height: 15px; }

        .wifi {
            width: 18px;
            height: 14px;
            position: relative;
        }

        .wifi::before,
        .wifi::after {
            content: "";
            position: absolute;
            left: 50%;
            border: 2px solid #fff8ed;
            border-bottom: 0;
            border-left-color: transparent;
            border-right-color: transparent;
            transform: translateX(-50%);
        }

        .wifi::before {
            width: 18px;
            height: 10px;
            top: 0;
            border-radius: 18px 18px 0 0;
        }

        .wifi::after {
            width: 10px;
            height: 6px;
            top: 6px;
            border-radius: 10px 10px 0 0;
        }

        .battery {
            width: 27px;
            height: 14px;
            border: 2px solid #fff8ed;
            border-radius: 4px;
            position: relative;
        }

        .battery::before {
            content: "";
            position: absolute;
            right: -5px;
            top: 3px;
            width: 2px;
            height: 6px;
            border-radius: 0 2px 2px 0;
            background: #fff8ed;
        }

        .battery::after {
            content: "";
            position: absolute;
            inset: 2px;
            border-radius: 2px;
            background: #fff8ed;
        }

        .header {
            position: relative;
            z-index: 2;
            height: 270px;
            padding: 88px 42px 0;
            text-align: center;
            color: #fff8e8;
            background:
                radial-gradient(circle at 56% 6%, rgba(255,184,89,.28), transparent 35%),
                radial-gradient(circle at 16% 72%, rgba(112,31,0,.18), transparent 38%),
                linear-gradient(142deg, #B84404 0%, var(--orange) 43%, var(--orange-light) 100%);
            border-bottom-left-radius: 53% 39%;
            border-bottom-right-radius: 53% 39%;
            box-shadow:
                0 15px 23px rgba(166, 78, 23, .18),
                inset 0 -1px 0 rgba(255, 236, 186, .5);
        }

        .header::after {
            content: "";
            position: absolute;
            inset: 0;
            background: url("{{ asset('images/paper-texture.svg') }}");
            background-size: 240px;
            mix-blend-mode: multiply;
            opacity: .14;
            pointer-events: none;
        }

        .brand-mark {
            position: relative;
            z-index: 2;
            width: 66px;
            height: 66px;
            margin: -10px auto 6px;
            display: block;
            filter: drop-shadow(0 6px 10px rgba(72, 26, 8, .24));
        }

        .brand {
            position: relative;
            z-index: 2;
            margin: 0;
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(58px, 5.9vw, 70px);
            line-height: .9;
            font-weight: 600;
            letter-spacing: -.045em;
            white-space: nowrap;
            text-shadow:
                0 3px 0 rgba(114, 49, 18, .18),
                0 7px 18px rgba(74, 25, 4, .28);
        }

        .tagline {
            position: relative;
            z-index: 2;
            margin-top: 17px;
            color: rgba(255, 250, 225, .93);
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .34em;
        }

        .screen {
            position: relative;
            z-index: 4;
            min-width: 0;
            min-height: calc(100% - 270px);
            padding: 31px 45px 22px;
        }

        .ornament-line {
            position: absolute;
            inset: 282px 18px auto;
            height: 460px;
            pointer-events: none;
            z-index: 1;
        }

        .ornament-line::before,
        .ornament-line::after {
            content: "";
            position: absolute;
            width: 108px;
            height: 260px;
            border: 1px solid rgba(212, 168, 83, .27);
            border-color: rgba(212, 168, 83, .27) transparent transparent rgba(212, 168, 83, .27);
            border-radius: 56% 44% 60% 42%;
        }

        .ornament-line::before {
            left: 0;
            top: 8px;
            transform: rotate(-29deg);
        }

        .ornament-line::after {
            right: -11px;
            top: 12px;
            transform: rotate(24deg) scaleX(-1);
        }

        .leaf {
            position: absolute;
            width: 66px;
            opacity: .58;
            pointer-events: none;
        }

        .leaf-right-top {
            top: 292px;
            right: 62px;
            transform: rotate(32deg);
        }

        .leaf-right-mid {
            top: 455px;
            right: 138px;
            width: 60px;
            transform: rotate(15deg);
        }

        .hero {
            position: relative;
            height: 322px;
            margin-top: -3px;
        }

        .glow-ring {
            position: absolute;
            left: 50%;
            top: 0;
            width: 330px;
            height: 330px;
            transform: translateX(-50%);
            border-radius: 50%;
            background:
                radial-gradient(circle, transparent 47%, rgba(255,255,255,.78) 48%, transparent 50%),
                radial-gradient(circle, transparent 55%, rgba(212,168,83,.55) 56%, transparent 57%),
                radial-gradient(circle, rgba(255,218,108,.17), transparent 66%);
            filter: drop-shadow(0 0 10px rgba(255, 195, 75, .45));
        }

        .sparkles {
            position: absolute;
            left: 50%;
            top: 28px;
            width: 386px;
            height: 244px;
            transform: translateX(-50%);
            pointer-events: none;
        }

        .sparkles span {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: var(--gold);
            box-shadow: 0 0 12px rgba(255, 194, 70, .9);
        }

        .sparkles span:nth-child(1) { left: 24px; top: 41px; }
        .sparkles span:nth-child(2) { right: 33px; top: 37px; }
        .sparkles span:nth-child(3) { left: 61px; bottom: 22px; }
        .sparkles span:nth-child(4) { right: 69px; bottom: 31px; }
        .sparkles span:nth-child(5) { left: 50%; top: 8px; width: 3px; height: 3px; }

        .vase-img {
            position: absolute;
            z-index: 3;
            left: 21px;
            bottom: 86px;
            width: 112px;
            filter: drop-shadow(0 18px 13px rgba(71, 41, 20, .2));
        }

        .croissant-img {
            position: absolute;
            z-index: 6;
            left: 20px;
            bottom: 18px;
            width: 225px;
            transform: rotate(-2deg);
            filter: drop-shadow(0 15px 12px rgba(83, 44, 19, .25));
        }

        .coffee-img {
            position: absolute;
            z-index: 5;
            right: 19px;
            bottom: 30px;
            width: 178px;
            filter: drop-shadow(0 15px 12px rgba(83, 44, 19, .2));
        }

        .plate-img {
            position: absolute;
            z-index: 4;
            left: 50%;
            bottom: 24px;
            width: 258px;
            transform: translateX(-50%);
            filter: drop-shadow(0 14px 11px rgba(83, 44, 19, .18));
        }

        .qr-tile {
            position: absolute;
            z-index: 8;
            left: 50%;
            bottom: 78px;
            width: 178px;
            height: 178px;
            transform: translateX(-50%);
            border-radius: 29px;
            background:
                linear-gradient(145deg, rgba(255,255,255,.92), rgba(250,235,204,.96));
            display: grid;
            place-items: center;
            box-shadow:
                0 18px 27px rgba(80, 45, 18, .23),
                inset 0 1px 2px rgba(255,255,255,.95),
                inset 0 0 0 1px rgba(196, 126, 52, .18);
        }

        .qr-code {
            position: relative;
            width: 140px;
            height: 140px;
            display: grid;
            place-items: center;
        }

        .qr-code svg {
            width: 140px;
            height: 140px;
            display: block;
        }

        .qr-logo {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 43px;
            height: 43px;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: #fff6df;
            border: 2px solid #c8863a;
            color: var(--caramel);
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-style: italic;
            font-weight: 700;
            font-size: 30px;
            line-height: 1;
            box-shadow: 0 2px 6px rgba(94, 47, 15, .18);
        }

        .welcome {
            text-align: center;
            margin-top: 16px;
        }

        .welcome h1 {
            margin: 0;
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(60px, 6.4vw, 76px);
            line-height: .94;
            font-weight: 700;
            letter-spacing: -.04em;
            color: #5b2c26;
            text-shadow: 0 2px 0 rgba(255,255,255,.75);
            white-space: nowrap;
        }

        .welcome p {
            margin: 12px 0 0;
            color: rgba(83, 49, 41, .84);
            font-size: 21px;
            line-height: 1.38;
            font-weight: 500;
        }

        .divider {
            width: 330px;
            height: 1px;
            margin: 27px auto 24px;
            background: linear-gradient(90deg, transparent, rgba(212, 168, 83, .75), transparent);
            position: relative;
        }

        .divider::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 24px;
            height: 18px;
            transform: translate(-50%, -50%);
            background:
                linear-gradient(#fff5df, #fff5df) center / 100% 100% no-repeat;
            clip-path: polygon(50% 0, 60% 35%, 100% 35%, 68% 55%, 78% 100%, 50% 67%, 22% 100%, 32% 55%, 0 35%, 40% 35%);
            filter: drop-shadow(0 0 0 var(--gold));
        }

        .divider::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 19px;
            height: 14px;
            transform: translate(-50%, -50%);
            background: var(--gold);
            clip-path: polygon(50% 0, 60% 35%, 100% 35%, 68% 55%, 78% 100%, 50% 67%, 22% 100%, 32% 55%, 0 35%, 40% 35%);
            z-index: 1;
        }

        .actions {
            display: grid;
            width: 545px;
            max-width: 100%;
            gap: 25px;
            margin-top: 0;
        }

        .action-card {
            min-height: 136px;
            display: grid;
            grid-template-columns: 105px 1fr 50px;
            align-items: center;
            gap: 27px;
            padding: 17px 26px 17px 28px;
            border-radius: 29px;
            color: var(--mocha);
            text-decoration: none;
            background:
                linear-gradient(145deg, rgba(255,255,255,.78), rgba(255,249,236,.89));
            border: 1px solid rgba(204, 151, 76, .22);
            box-shadow:
                0 14px 25px rgba(104, 62, 28, .13),
                inset 0 1px 1px rgba(255,255,255,.92);
            transition: transform .18s ease, box-shadow .18s ease;
        }

        .action-card:active {
            transform: translateY(1px) scale(.99);
            box-shadow:
                0 10px 18px rgba(104, 62, 28, .12),
                inset 0 1px 1px rgba(255,255,255,.92);
        }

        .action-icon {
            width: 82px;
            height: 82px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #fff5df;
            background:
                radial-gradient(circle at 32% 22%, #ffb25a 0 20%, transparent 43%),
                linear-gradient(145deg, var(--orange-light), #d75a0d 58%, #b94705);
            border: 2px solid rgba(255, 239, 202, .62);
            box-shadow:
                0 10px 18px rgba(211, 86, 10, .3),
                inset 0 0 0 3px rgba(255,255,255,.12);
        }

        .action-icon svg {
            width: 45px;
            height: 45px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .action-icon .telegram-fill {
            fill: currentColor;
            stroke: none;
        }

        .action-copy {
            min-width: 0;
            text-align: left;
        }

        .action-title {
            display: block;
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(38px, 3.9vw, 45px);
            line-height: .98;
            font-weight: 700;
            letter-spacing: -.03em;
            color: #5b2c26;
            white-space: nowrap;
        }

        .action-subtitle {
            display: block;
            margin-top: 9px;
            font-size: 20px;
            line-height: 1.1;
            color: rgba(91, 58, 47, .72);
        }

        .action-arrow {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid rgba(212, 168, 83, .45);
            color: var(--orange);
            background: rgba(255, 247, 232, .72);
            box-shadow:
                0 8px 12px rgba(104, 62, 28, .08),
                inset 0 1px 1px rgba(255,255,255,.9);
        }

        .action-arrow svg {
            width: 24px;
            height: 24px;
            stroke: currentColor;
            stroke-width: 2.2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }

        .footer-arc {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 178px;
            z-index: 2;
            background:
                linear-gradient(180deg, rgba(255,246,226,.35), rgba(229, 187, 111, .23));
            border-top-left-radius: 50% 36%;
            border-top-right-radius: 50% 36%;
            border-top: 1px solid rgba(212,168,83,.45);
            pointer-events: none;
        }

        .footer {
            position: relative;
            z-index: 5;
            margin-top: 33px;
            text-align: center;
            padding-bottom: 4px;
        }

        .footer-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 34px;
            height: 80px;
        }

        .footer-leaf {
            width: 70px;
            opacity: .78;
        }

        .footer-leaf.left {
            transform: rotate(-8deg);
        }

        .footer-leaf.right {
            transform: rotate(188deg) scaleX(-1);
        }

        .footer-badge {
            width: 74px;
            height: 74px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at 42% 35%, rgba(255,255,255,.9), rgba(255,249,236,.87) 55%, rgba(239,208,151,.88));
            border: 1px solid rgba(212,168,83,.67);
            box-shadow:
                0 12px 18px rgba(94, 56, 22, .14),
                inset 0 0 0 6px rgba(255,255,255,.48);
        }

        .footer-badge img {
            width: 52px;
            transform: rotate(4deg);
        }

        .footer-text {
            margin-top: 9px;
            color: rgba(91, 58, 47, .76);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .13em;
        }

        .footer-heart {
            margin-top: 12px;
            color: var(--gold);
            font-size: 18px;
            line-height: 1;
        }

        @media (max-width: 520px) {
            body {
                padding: 0;
                background:
                    linear-gradient(180deg, rgba(255,250,238,.86), rgba(255,245,222,.92)),
                    url("{{ asset('images/paper-texture.svg') }}");
                background-size: cover, 260px 260px;
            }

            .device {
                width: 100vw;
                max-width: 100vw;
                min-width: 0;
                min-height: 100vh;
                aspect-ratio: auto;
                border-radius: 0;
                padding: 0;
                background:
                    linear-gradient(180deg, rgba(255,250,238,.86), rgba(255,245,222,.92)),
                    url("{{ asset('images/paper-texture.svg') }}");
                background-size: cover, 260px 260px;
                box-shadow: none;
            }

            .device::before,
            .device::after {
                display: none;
            }

            .phone {
                width: 100%;
                min-width: 0;
                min-height: 100vh;
                border-radius: 0;
                box-shadow: none;
            }

            .phone::before {
                display: none;
            }

            .screen {
                padding-left: 27px;
                padding-right: 27px;
            }

            .status {
                left: 68px;
                right: 24px;
                font-size: 16px;
            }

            .status-icons {
                gap: 6px;
                transform: scale(.9);
                transform-origin: right center;
            }

            .header {
                height: 190px;
                padding-top: 70px;
                border-bottom-left-radius: 52% 19%;
                border-bottom-right-radius: 52% 19%;
            }

            .brand-mark {
                width: 52px;
                height: 52px;
                margin-top: -8px;
            }

            .brand {
                font-size: 44px;
            }

            .tagline {
                margin-top: 12px;
                font-size: 11px;
                letter-spacing: .32em;
            }

            .screen {
                min-height: calc(100% - 190px);
                padding-top: 12px;
                padding-bottom: 16px;
            }

            .ornament-line {
                inset: 194px 8px auto;
            }

            .leaf-right-top {
                top: 205px;
            }

            .leaf-right-mid {
                top: 307px;
                right: 48px;
            }

            .hero {
                height: 226px;
                margin-top: -6px;
            }

            .glow-ring {
                width: 218px;
                height: 218px;
            }

            .sparkles {
                width: 236px;
                height: 165px;
            }

            .vase-img {
                left: -18px;
                bottom: 49px;
                width: 88px;
            }

            .croissant-img {
                left: -28px;
                bottom: 22px;
                width: 146px;
            }

            .coffee-img {
                right: -32px;
                bottom: 31px;
                width: 132px;
            }

            .plate-img {
                bottom: 26px;
                width: 178px;
            }

            .qr-tile {
                bottom: 58px;
                width: 132px;
                height: 132px;
                border-radius: 24px;
            }

            .qr-code,
            .qr-code svg {
                width: 104px;
                height: 104px;
            }

            .qr-logo {
                width: 32px;
                height: 32px;
                font-size: 22px;
            }

            .welcome {
                margin-top: -8px;
            }

            .welcome h1 {
                font-size: 42px;
                letter-spacing: -.045em;
            }

            .welcome p {
                margin-top: 8px;
                font-size: 15px;
                line-height: 1.38;
            }

            .divider {
                margin: 17px auto 16px;
                width: 205px;
            }

            .actions {
                width: 100%;
                max-width: none;
                gap: 13px;
            }

            .action-card {
                min-height: 86px;
                grid-template-columns: 60px minmax(0, 1fr) 36px;
                gap: 10px;
                padding: 12px 15px 12px 13px;
                border-radius: 22px;
            }

            .action-icon {
                width: 58px;
                height: 58px;
            }

            .action-icon svg {
                width: 32px;
                height: 32px;
            }

            .action-title {
                font-size: 29px;
                letter-spacing: -.04em;
            }

            .action-subtitle {
                margin-top: 5px;
                font-size: 15px;
            }

            .action-arrow {
                width: 35px;
                height: 35px;
            }

            .footer {
                margin-top: 18px;
            }

            .footer-arc {
                height: 118px;
            }

            .footer-row {
                height: 54px;
                gap: 18px;
            }

            .footer-leaf {
                width: 52px;
            }

            .footer-badge {
                width: 54px;
                height: 54px;
            }

            .footer-badge img {
                width: 38px;
            }

            .footer-text {
                margin-top: 4px;
                font-size: 10px;
                letter-spacing: .09em;
            }

            .footer-heart {
                margin-top: 7px;
                font-size: 15px;
            }
        }

        @media (max-width: 390px) {
            .screen {
                padding-left: 22px;
                padding-right: 22px;
            }

            .action-card {
                grid-template-columns: 57px minmax(0, 1fr) 34px;
                gap: 9px;
                padding-left: 12px;
                padding-right: 13px;
            }

            .action-icon {
                width: 55px;
                height: 55px;
            }

            .action-title {
                font-size: 27px;
            }

            .action-subtitle {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <main class="device" aria-label="BonBon Cafe QR preview">
        <section class="phone">
            <div class="island" aria-hidden="true"></div>

            <div class="status" aria-hidden="true">
                <span>9:41</span>
                <span class="status-icons">
                    <span class="signal"><span></span><span></span><span></span><span></span></span>
                    <span class="wifi"></span>
                    <span class="battery"></span>
                </span>
            </div>

            <header class="header">
                <img class="brand-mark" src="{{ asset('images/logo-bonbon.svg') }}" alt="">
                <h1 class="brand">BonBon Cafe</h1>
                <div class="tagline">&bull; PATISSERIE &amp; COFFEE &bull;</div>
            </header>

            <div class="ornament-line" aria-hidden="true"></div>
            <img class="leaf leaf-right-top" src="{{ asset('images/leaf.svg') }}" alt="">
            <img class="leaf leaf-right-mid" src="{{ asset('images/leaf.svg') }}" alt="">

            <div class="footer-arc" aria-hidden="true"></div>

            <section class="screen">
                <div class="hero">
                    <div class="glow-ring" aria-hidden="true"></div>
                    <div class="sparkles" aria-hidden="true">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>

                    <img class="vase-img" src="{{ asset('images/vase-leaves.svg') }}" alt="">
                    <img class="croissant-img" src="{{ asset('images/croissant.svg') }}" alt="">
                    <img class="plate-img" src="{{ asset('images/wood-plate.svg') }}" alt="">

                    <div class="qr-tile">
                        <div class="qr-code" aria-label="QR code">
                            {!! QrCode::size(140)->margin(1)->errorCorrection('H')->style('square')->eye('square')->color(184, 96, 24)->backgroundColor(255, 249, 236)->generate($qrValue) !!}
                            <span class="qr-logo">B</span>
                        </div>
                    </div>

                    <img class="coffee-img" src="{{ asset('images/coffee-cup.svg') }}" alt="">
                </div>

                <div class="welcome">
                    <h1>Xush kelibsiz</h1>
                    <p>QR orqali kirdingiz<br>Kerakli bo'limni tanlang</p>
                </div>

                <div class="divider" aria-hidden="true"></div>

                <nav class="actions" aria-label="BonBon Cafe actions">
                    <a href="{{ $siteUrl }}" class="action-card">
                        <span class="action-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M3.7 9h16.6M3.7 15h16.6"></path>
                                <path d="M12 3c2.25 2.35 3.55 5.45 3.55 9S14.25 18.65 12 21"></path>
                                <path d="M12 3C9.75 5.35 8.45 8.45 8.45 12S9.75 18.65 12 21"></path>
                            </svg>
                        </span>
                        <span class="action-copy">
                            <span class="action-title">Saytga kirish</span>
                            <span class="action-subtitle">Rasmiy sahifa</span>
                        </span>
                        <span class="action-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h13"></path>
                                <path d="m13 6 6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>

                    <a href="{{ $botUrl }}" class="action-card">
                        <span class="action-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path class="telegram-fill" d="M21.64 4.32c.31-.98-.63-1.77-1.51-1.35L2.98 11.08c-1 .47-.88 1.93.17 2.22l4.45 1.24 1.7 5.16c.36 1.08 1.75 1.36 2.49.5l2.48-2.9 4.55 3.29c.88.63 2.12.14 2.31-.93l2.51-15.34Z"></path>
                                <path d="m8.05 14.36 8.88-6.26"></path>
                            </svg>
                        </span>
                        <span class="action-copy">
                            <span class="action-title">Telegram bot</span>
                            <span class="action-subtitle">Tezkor buyurtma</span>
                        </span>
                        <span class="action-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M5 12h13"></path>
                                <path d="m13 6 6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </nav>

                <footer class="footer">
                    <div class="footer-row">
                        <img class="footer-leaf left" src="{{ asset('images/leaf.svg') }}" alt="">
                        <span class="footer-badge">
                            <img src="{{ asset('images/croissant.svg') }}" alt="">
                        </span>
                        <img class="footer-leaf right" src="{{ asset('images/leaf.svg') }}" alt="">
                    </div>
                    <div class="footer-text">YAXSHI KUN - YAXSHI QAHVA - YAXSHI MOOD</div>
                    <div class="footer-heart" aria-hidden="true">&hearts;</div>
                </footer>
            </section>
        </section>
    </main>
</body>
</html>
