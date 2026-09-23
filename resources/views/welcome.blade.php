<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonosari — Explore Wonosari</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --forest: #163c2d;
            --deep: #0b281e;
            --moss: #668c5b;
            --sage: #b9cda9;
            --mist: #e8f0e2;
            --sand: #efe5d2;
            --paper: #fbfaf6;
            --ink: #1d2a23;
            --muted: #65736b;
            --gold: #cfa45b;
            --line: rgba(22, 60, 45, 0.14);
            --shadow: 0 24px 60px rgba(20, 54, 40, 0.14);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            color: var(--ink);
            background: var(--paper);
            font-family: "DM Sans", Arial, sans-serif;
            line-height: 1.65;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .page-container {
            width: min(1180px, calc(100% - 48px));
            margin-inline: auto;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 17px;
            color: var(--moss);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 31px;
            height: 1px;
            background: var(--gold);
            content: "";
        }

        .eyebrow--light {
            color: rgba(255, 255, 255, 0.82);
        }

        .eyebrow--light::before {
            background: #e6d0a4;
        }

        .section-title {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.4rem, 4.5vw, 4.2rem);
            font-weight: 600;
            line-height: 1.06;
            letter-spacing: -0.045em;
        }

        .section-copy {
            margin: 18px 0 0;
            color: var(--muted);
            font-size: 1rem;
        }

        .pill-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 52px;
            padding: 0 24px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 700;
            transition: transform 180ms ease, background 180ms ease, border-color 180ms ease;
        }

        .pill-button:hover {
            transform: translateY(-3px);
        }

        .pill-button--sand {
            color: var(--deep);
            background: #f0dfb8;
        }

        .pill-button--sand:hover {
            background: #ffffff;
        }

        .pill-button--line {
            border-color: rgba(255, 255, 255, 0.55);
            color: #ffffff;
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(8px);
        }

        .pill-button--line:hover {
            border-color: #ffffff;
            background: rgba(255, 255, 255, 0.16);
        }

        .pill-button--forest {
            color: #ffffff;
            background: var(--forest);
        }

        .pill-button--forest:hover {
            background: var(--deep);
        }

        /* =====================================================
           HERO
           ===================================================== */

        .journal-hero {
            position: relative;
            display: grid;
            min-height: min(805px, 97vh);
            align-items: center;
            overflow: hidden;
            color: #ffffff;
            background:
                linear-gradient(90deg, rgba(8, 32, 23, 0.93) 0%, rgba(8, 32, 23, 0.69) 45%, rgba(8, 32, 23, 0.15) 100%),
                linear-gradient(0deg, rgba(8, 32, 23, 0.46), transparent 53%),
                url("{{ asset('image/hero.jpg') }}") center/cover no-repeat;
        }

        .journal-hero::before {
            position: absolute;
            top: -160px;
            right: -120px;
            width: 520px;
            height: 520px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

        .journal-hero::after {
            position: absolute;
            right: 8%;
            bottom: 35px;
            width: 88px;
            height: 88px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            content: "";
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            padding-top: 95px;
        }

        .hero-title {
            max-width: 760px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.55rem, 7vw, 7.1rem);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.055em;
        }

        .hero-title em {
            color: #ead4a5;
            font-style: italic;
        }

        .hero-copy {
            max-width: 525px;
            margin: 28px 0 35px;
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.04rem;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .hero-note {
            position: absolute;
            z-index: 1;
            right: 5vw;
            bottom: 31px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.74);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
        }

        .hero-note::before {
            width: 35px;
            height: 1px;
            background: #e8d0a3;
            content: "";
        }

        /* =====================================================
           JOURNEY: INTRO + STORY + PROFILE
           One continuous visual background
           ===================================================== */

        .journey {
            position: relative;
            overflow: hidden;
            padding: 0 0 120px;
            background:
                radial-gradient(circle at 8% 15%, rgba(145, 181, 124, 0.34), transparent 20%),
                radial-gradient(circle at 92% 50%, rgba(210, 165, 91, 0.19), transparent 20%),
                linear-gradient(135deg, #e7efe1 0%, #f9f7f0 44%, #efe4d1 100%);
        }

        .journey::before {
            position: absolute;
            top: 280px;
            left: -160px;
            width: 330px;
            height: 330px;
            border: 1px solid rgba(22, 60, 45, 0.10);
            border-radius: 50%;
            content: "";
        }

        .journey::after {
            position: absolute;
            top: 770px;
            right: -130px;
            width: 280px;
            height: 280px;
            border: 1px dashed rgba(207, 164, 91, 0.35);
            border-radius: 50%;
            content: "";
        }

        .journey > * {
            position: relative;
            z-index: 1;
        }

        .quick-facts {
            width: min(1100px, calc(100% - 48px));
            margin: 0 auto;
            padding: 30px 38px;
            border: 1px solid rgba(255, 255, 255, 0.82);
            border-radius: 0 0 22px 22px;
            background: rgba(255, 255, 255, 0.88);
            box-shadow: 0 18px 46px rgba(21, 54, 40, 0.12);
        }

        .quick-facts-grid {
            display: grid;
            grid-template-columns: 1.35fr repeat(3, 1fr);
            gap: 24px;
            align-items: center;
        }

        .quick-intro {
            padding-right: 30px;
            border-right: 1px solid var(--line);
        }

        .quick-intro strong {
            display: block;
            margin-bottom: 3px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.45rem;
        }

        .quick-intro p {
            margin: 0;
            color: var(--muted);
            font-size: 0.84rem;
        }

        .quick-item span {
            display: block;
            margin-bottom: 4px;
            color: var(--moss);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .quick-item strong {
            color: var(--forest);
            font-size: 0.95rem;
        }

        .story-journal {
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 82px;
            align-items: center;
            padding-top: 112px;
        }

        .story-journal-copy {
            max-width: 520px;
        }

        .story-journal-copy .section-copy {
            max-width: 530px;
        }

        .journal-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 29px;
            color: var(--forest);
            font-size: 0.9rem;
            font-weight: 700;
        }

        .journal-link span {
            transition: transform 180ms ease;
        }

        .journal-link:hover span {
            transform: translateX(6px);
        }

        .story-visual {
            display: grid;
            grid-template-columns: 1.08fr 0.92fr;
            grid-template-rows: 215px 215px;
            gap: 15px;
        }

        .story-visual img {
            width: 100%;
            height: 100%;
            border-radius: 18px;
            object-fit: cover;
            box-shadow: 0 16px 35px rgba(20, 54, 40, 0.12);
        }

        .story-visual img:first-child {
            grid-row: span 2;
        }

        .profile-journal {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr;
            gap: 58px;
            align-items: center;
            margin-top: 105px;
            padding: 64px;
            overflow: hidden;
            border-radius: 28px;
            color: #ffffff;
            background:
                radial-gradient(circle at 10% 18%, rgba(183, 205, 168, 0.22), transparent 26%),
                radial-gradient(circle at 92% 84%, rgba(210, 165, 91, 0.13), transparent 22%),
                linear-gradient(135deg, #123b2b, #1b4a37);
            box-shadow: var(--shadow);
        }

        .profile-number {
            color: rgba(240, 223, 184, 0.86);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(5rem, 10vw, 9rem);
            font-style: italic;
            line-height: 0.7;
            letter-spacing: -0.08em;
        }

        .profile-number span {
            display: block;
            margin-top: 18px;
            color: rgba(255, 255, 255, 0.68);
            font-family: "DM Sans", Arial, sans-serif;
            font-size: 0.73rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .profile-title {
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.2rem, 3.9vw, 3.55rem);
            line-height: 1.07;
            letter-spacing: -0.04em;
        }

        .profile-copy {
            max-width: 650px;
            margin: 17px 0 31px;
            color: rgba(255, 255, 255, 0.78);
        }

        .profile-details {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.15);
        }

        .profile-detail {
            padding: 20px 14px;
            background: rgba(8, 31, 23, 0.22);
            text-align: center;
        }

        .profile-detail span {
            display: block;
            margin-bottom: 5px;
            color: #d8e9c9;
            font-size: 0.67rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .profile-detail strong {
            font-size: 0.91rem;
        }

        /* =====================================================
           HERITAGE PTPN
           ===================================================== */

        .heritage {
            position: relative;
            overflow: hidden;
            padding: 120px 0;
            background:
                radial-gradient(circle at 6% 20%, rgba(150, 184, 129, 0.32), transparent 25%),
                radial-gradient(circle at 94% 85%, rgba(210, 165, 91, 0.18), transparent 22%),
                linear-gradient(135deg, #e9f0e3, #f8f5ee 50%, #eee3d1);
        }

        .heritage::before {
            position: absolute;
            top: 64px;
            right: -95px;
            width: 265px;
            height: 265px;
            border: 1px solid rgba(22, 60, 45, 0.11);
            border-radius: 50%;
            content: "";
        }

        .heritage-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 78px;
            align-items: center;
        }

        .heritage-card {
            position: relative;
            display: flex;
            min-height: 360px;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 26px;
            background:
                radial-gradient(circle at 87% 11%, rgba(207, 164, 91, 0.22), transparent 23%),
                #e1ecd9;
            box-shadow: 0 18px 45px rgba(20, 54, 40, 0.11);
        }

        .heritage-card::before {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 7px 11px;
            border: 1px solid rgba(22, 60, 45, 0.18);
            border-radius: 999px;
            color: var(--forest);
            background: rgba(255, 255, 255, 0.75);
            content: "HERITAGE";
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.11em;
        }

        .heritage-card::after {
            position: absolute;
            right: 21px;
            bottom: 20px;
            color: #5d7565;
            content: "PERKEBUNAN NUSANTARA";
            font-size: 0.66rem;
            font-weight: 700;
            letter-spacing: 0.08em;
        }

        .heritage-card img {
            width: min(235px, 70%);
            max-height: 180px;
            object-fit: contain;
        }

        .heritage-photo-note {
    position: absolute;
    right: 22px;
    bottom: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.heritage-photo-note span {
    color: #5d7565;
    font-size: 0.66rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
}

.heritage-photo-note strong {
    margin-top: 3px;
    color: var(--forest);
    font-family: "Playfair Display", Georgia, serif;
    font-size: 1rem;
}

.heritage-facts {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    margin-top: 28px;
    overflow: hidden;
    border: 1px solid rgba(22, 60, 45, 0.12);
    border-radius: 14px;
    background: rgba(22, 60, 45, 0.12);
}

.heritage-fact {
    padding: 15px 13px;
    background: rgba(255, 255, 255, 0.70);
}

.heritage-fact span {
    display: block;
    margin-bottom: 5px;
    color: var(--moss);
    font-size: 0.64rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.heritage-fact strong {
    display: block;
    color: var(--forest);
    font-size: 0.79rem;
    line-height: 1.35;
}

.heritage-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 26px;
    padding-bottom: 4px;
    border-bottom: 1px solid rgba(22, 60, 45, 0.40);
    color: var(--forest);
    font-size: 0.87rem;
    font-weight: 700;
}

.heritage-link span {
    transition: transform 180ms ease;
}

.heritage-link:hover span {
    transform: translateX(6px);
}

        .heritage-copy .section-copy {
            max-width: 600px;
        }

        .heritage-points {
            display: grid;
            gap: 12px;
            margin-top: 30px;
        }

        .heritage-point {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 16px;
            border: 1px solid rgba(22, 60, 45, 0.12);
            border-radius: 13px;
            background: rgba(255, 255, 255, 0.68);
            transition: transform 180ms ease, background 180ms ease, box-shadow 180ms ease;
        }

        .heritage-point:hover {
            background: #ffffff;
            box-shadow: 0 10px 22px rgba(20, 54, 40, 0.08);
            transform: translateX(7px);
        }

        .heritage-point > span {
            display: grid;
            width: 29px;
            height: 29px;
            flex: 0 0 29px;
            place-items: center;
            border-radius: 50%;
            color: #ffffff;
            background: var(--forest);
            font-size: 0.66rem;
            font-weight: 700;
        }

        .heritage-point strong {
            display: block;
            margin-bottom: 2px;
            color: var(--forest);
            font-size: 0.88rem;
        }

        .heritage-point p {
            margin: 0;
            color: var(--muted);
            font-size: 0.79rem;
            line-height: 1.45;
        }

        /* =====================================================
           SHARED RESPONSIVE — PART 1
           ===================================================== */

        @media (max-width: 980px) {
            .quick-facts-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .quick-intro {
                grid-column: 1 / -1;
                padding: 0 0 18px;
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .story-journal,
            .profile-journal,
            .heritage-grid {
                grid-template-columns: 1fr;
                gap: 44px;
            }

            .profile-journal {
                padding: 52px;
            }
        }

        @media (max-width: 760px) {
            .page-container {
                width: min(100% - 36px, 1180px);
            }
                .heritage-facts {
        grid-template-columns: repeat(2, 1fr);
    }

            .journal-hero {
                min-height: 700px;
                background-position: 62% center;
            }

            .hero-inner {
                padding-top: 86px;
            }

            .hero-title {
                font-size: clamp(3.2rem, 15vw, 4.7rem);
            }

            .hero-note {
                display: none;
            }

            .quick-facts {
                width: min(100% - 36px, 1100px);
                padding: 24px;
            }

            .quick-facts-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .quick-intro {
                grid-column: auto;
            }

            .journey {
                padding-bottom: 76px;
            }

            .story-journal {
                padding-top: 75px;
            }

            .story-visual {
                grid-template-rows: 190px 190px;
            }

            .profile-journal {
                margin-top: 74px;
                padding: 48px 25px;
                border-radius: 22px;
            }

            .profile-details {
                grid-template-columns: repeat(2, 1fr);
            }

            .heritage {
                padding: 76px 0;
            }

            .heritage-card {
                min-height: 300px;
            }

            .heritage::before,
            .journey::before,
            .journey::after {
                display: none;
            }

            .heritage-point:hover {
                transform: none;
            }
        }

        @media (max-width: 460px) {
            .hero-actions {
                flex-direction: column;
                align-items: stretch;
            }
                .heritage-facts {
        grid-template-columns: 1fr;
    }

            .pill-button {
                width: 100%;
            }

            .story-visual {
                grid-template-columns: 1fr;
                grid-template-rows: 250px 160px 160px;
            }

            .story-visual img:first-child {
                grid-row: auto;
            }

            .profile-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <!-- HERO -->
        <header class="journal-hero">
            <div class="page-container hero-inner">
                <p class="eyebrow eyebrow--light">Agrowisata · Wonosari, Malang</p>

                <h1 class="hero-title">
                    Menemukan <em>tenang</em><br>
                    di antara hamparan teh.
                </h1>

                <p class="hero-copy">
                    Sejuknya udara pegunungan, lanskap kebun teh, dan pengalaman wisata
                    edukatif menanti Anda di lereng Gunung Arjuno.
                </p>

                <div class="hero-actions">
                    <a href="#experience" class="pill-button pill-button--sand">Jelajahi pengalaman <span>↓</span></a>
                    <a href="/pemesanan" class="pill-button pill-button--line">Reservasi sekarang <span>↗</span></a>
                </div>
            </div>

            <div class="hero-note">Scroll untuk menjelajah</div>
        </header>

        <!-- CONTINUOUS JOURNEY SECTION -->
        <section class="journey">
            <div class="quick-facts">
                <div class="quick-facts-grid">
                    <div class="quick-intro">
                        <strong>Explore Wonosari</strong>
                        <p>Ruang untuk beristirahat, belajar, dan menikmati alam.</p>
                    </div>

                    <div class="quick-item">
                        <span>Lokasi</span>
                        <strong>Singosari, Malang</strong>
                    </div>

                    <div class="quick-item">
                        <span>Jam buka</span>
                        <strong>07.00 — 17.00 WIB</strong>
                    </div>

                    <div class="quick-item">
                        <span>Luas kebun</span>
                        <strong>± 1.144 hektare</strong>
                    </div>
                </div>
            </div>

            <div class="page-container story-journal">
                <div class="story-journal-copy">
                    <p class="eyebrow">Cerita dari Wonosari</p>
                    <h2 class="section-title">Tradisi teh, alam, dan pengalaman yang bermakna.</h2>
                    <p class="section-copy">
                        Kebun Teh Wonosari berdiri sejak masa kolonial Belanda dan menjadi salah satu
                        kebun teh pertama di Jawa Timur yang dibuka untuk wisata. Berada di lereng
                        Gunung Arjuno, Wonosari menghadirkan sejarah, panorama hijau, dan rekreasi
                        keluarga dalam satu perjalanan.
                    </p>

                    <a href="{{ url('/sejarah') }}" class="journal-link">
                        Baca cerita Wonosari <span>→</span>
                    </a>
                </div>

                <div class="story-visual">
                    <img src="{{ asset('image/sejarah1.jpg') }}" alt="Kebun teh Wonosari">
                    <img src="{{ asset('image/sejarah2.jpg') }}" alt="Aktivitas di Kebun Teh Wonosari">
                    <img src="{{ asset('image/sejarah3.jpg') }}" alt="Pemandangan Kebun Teh Wonosari">
                </div>
            </div>

            <div class="page-container profile-journal">
                <div class="profile-number">
                    01
                    <span>Alam · edukasi · rekreasi</span>
                </div>

                <div>
                    <p class="eyebrow eyebrow--light">Kenali Wonosari</p>
                    <h2 class="profile-title">Satu perjalanan untuk kembali terhubung dengan alam.</h2>

                    <p class="profile-copy">
                        Dari wisata edukasi, outbound, family trip, hingga penginapan, Wonosari
                        menghadirkan ruang untuk menikmati pegunungan dengan cara yang lebih bermakna.
                    </p>

                    <div class="profile-details">
                        <div class="profile-detail">
                            <span>Lokasi</span>
                            <strong>Singosari, Malang</strong>
                        </div>

                        <div class="profile-detail">
                            <span>Operasional</span>
                            <strong>Setiap hari</strong>
                        </div>

                        <div class="profile-detail">
                            <span>Tiket mulai</span>
                            <strong>Rp15.000 / orang</strong>
                        </div>

                        <div class="profile-detail">
                            <span>Aktivitas</span>
                            <strong>Wisata & edukasi</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <!-- HERITAGE / PTPN -->
<section class="heritage">
    <div class="page-container heritage-grid">
        <div class="heritage-card">
            <img src="{{ asset('image/profil-kebun1.jpg') }}" alt="Logo Perkebunan Nusantara">

            <div class="heritage-photo-note">
                <span>Wonosari</span>
                <strong>Malang, Jawa Timur</strong>
            </div>
        </div>

        <div class="heritage-copy">
            <p class="eyebrow">Pengelola Wonosari</p>
            <h2 class="section-title">Sekilas PT Perkebunan Nusantara XII</h2>

            <p class="section-copy">
                Kebun Teh Wonosari Malang dikelola oleh PT Perkebunan Nusantara XII (PTPN XII).
                Dari warisan perkebunan, Wonosari tumbuh menjadi agrowisata yang menyatukan
                kebun teh, pembelajaran, rekreasi, dan udara pegunungan.
            </p>

            <div class="heritage-facts">
                <div class="heritage-fact">
                    <span>Lokasi</span>
                    <strong>Singosari, Malang</strong>
                </div>
                <div class="heritage-fact">
                    <span>Luas kebun</span>
                    <strong>± 1.144 hektare</strong>
                </div>
                <div class="heritage-fact">
                    <span>Jenis wisata</span>
                    <strong>Alam & edukasi</strong>
                </div>
                <div class="heritage-fact">
                    <span>Jam kunjungan</span>
                    <strong>07.00 — 17.00 WIB</strong>
                </div>
            </div>

            <div class="heritage-points">
                <article class="heritage-point">
                    <span>01</span>
                    <div>
                        <strong>Warisan alam</strong>
                        <p>Panorama perkebunan teh yang dirawat dan dinikmati lintas generasi.</p>
                    </div>
                </article>

                <article class="heritage-point">
                    <span>02</span>
                    <div>
                        <strong>Wisata edukatif</strong>
                        <p>Mengenal perjalanan teh dari kebun, pemetikan, hingga pengolahan.</p>
                    </div>
                </article>

                <article class="heritage-point">
                    <span>03</span>
                    <div>
                        <strong>Ruang rekreasi</strong>
                        <p>Aktivitas keluarga, komunitas, dan pelajar di udara pegunungan yang sejuk.</p>
                    </div>
                </article>
            </div>

            <a href="{{ url('/sejarah') }}" class="heritage-link">
                Pelajari sejarah Wonosari <span>→</span>
            </a>
        </div>
    </div>
</section>

        <!-- PLAN YOUR VISIT: MAP + PRODUCTS IN ONE SECTION -->
        <section class="visit-section">
            <div class="page-container">
                <div class="visit-intro">
                    <div>
                        <p class="eyebrow">Rencanakan perjalananmu</p>
                        <h2 class="section-title">Datang untuk menikmati alam, pulang membawa cerita.</h2>
                    </div>

                    <p>
                        Wonosari berada di Singosari, Malang—tempat udara pegunungan,
                        hamparan teh, dan pengalaman wisata bertemu dalam satu perjalanan.
                    </p>
                </div>

                <div class="visit-map-card">
                    <div class="visit-map-copy">
                        <span class="visit-index">02 / VISIT</span>
                        <h3>Mulai perjalananmu dari lereng Gunung Arjuno.</h3>
                        <p>
                            Siapkan perjalanan bersama keluarga, teman, sekolah, atau komunitas.
                            Temukan lokasi Kebun Teh Wonosari dan nikmati pengalaman alam yang lebih dekat.
                        </p>

                        <a href="https://maps.google.com/?q=Kebun+Teh+Wonosari" target="_blank" rel="noopener" class="pill-button pill-button--forest">
                            Buka di Google Maps <span>↗</span>
                        </a>
                    </div>

                    <div class="visit-map">
                        <iframe
                            title="Lokasi Kebun Teh Wonosari"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.021853075386!2d112.52327077206638!3d-7.82449237668602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b2bd79f413%3A0x9f9e56ee2fd46b6c!2sKebun%20Teh%20Wonosari!5e0!3m2!1sid!2sid!4v1700000000000"
                            loading="lazy"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="product-intro">
                    <div>
                        <p class="eyebrow">Oleh-oleh pilihan</p>
                        <h2 class="section-title">Rasa Wonosari untuk dibawa pulang.</h2>
                    </div>

                    <p>
                        Bawa pulang pilihan produk perkebunan sebagai kenangan dari perjalanan
                        yang sejuk di Wonosari.
                    </p>
                </div>

                <div class="journal-products">
                    <article class="journal-product">
                        <span>01</span>
                        <img src="{{ asset('image/produk1.jpg') }}" alt="Produk Wonosari satu">
                        <h3>Produk Pilihan Wonosari</h3>
                    </article>

                    <article class="journal-product">
                        <span>02</span>
                        <img src="{{ asset('image/produk2.jpg') }}" alt="Produk Wonosari dua">
                        <h3>Produk Pilihan Wonosari</h3>
                    </article>

                    <article class="journal-product">
                        <span>03</span>
                        <img src="{{ asset('image/produk3.jpg') }}" alt="Produk Wonosari tiga">
                        <h3>Produk Pilihan Wonosari</h3>
                    </article>

                    <article class="journal-product">
                        <span>04</span>
                        <img src="{{ asset('image/produk4.jpg') }}" alt="Produk Wonosari empat">
                        <h3>Produk Pilihan Wonosari</h3>
                    </article>
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section id="galeri" class="journal-gallery">
            <div class="page-container gallery-head">
                <div>
                    <p class="eyebrow eyebrow--light">Momen di Wonosari</p>
                    <h2>Hijau yang selalu<br>ingin dikenang.</h2>
                </div>

                <p>
                    Potongan perjalanan, cerita pengunjung, dan lanskap yang tumbuh
                    di antara sejuknya Kebun Teh Wonosari.
                </p>
            </div>

            <div class="gallery-ribbon">
                <a href="#"><img src="{{ asset('image/14.jpg') }}" alt="Galeri Kebun Teh Wonosari 1"></a>
                <a href="#"><img src="{{ asset('image/15.jpg') }}" alt="Galeri Kebun Teh Wonosari 2"></a>
                <a href="#"><img src="{{ asset('image/16.jpg') }}" alt="Galeri Kebun Teh Wonosari 3"></a>
                <a href="#"><img src="{{ asset('image/17.jpg') }}" alt="Galeri Kebun Teh Wonosari 4"></a>
                <a href="#"><img src="{{ asset('image/18.jpg') }}" alt="Galeri Kebun Teh Wonosari 5"></a>
                <a href="#"><img src="{{ asset('image/19.jpg') }}" alt="Galeri Kebun Teh Wonosari 6"></a>
                <a href="#"><img src="{{ asset('image/20.jpg') }}" alt="Galeri Kebun Teh Wonosari 7"></a>
                <a href="#"><img src="{{ asset('image/22.jpg') }}" alt="Galeri Kebun Teh Wonosari 8"></a>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="journal-testimonials">
            <div class="page-container">
                <p class="eyebrow">Dari para pengunjung</p>
                <h2 class="section-title">Mereka pulang membawa cerita baik.</h2>

                <div class="testimonial-journal-grid">
                    <article class="testimonial-journal">
                        <span class="quote">“</span>
                        <p>
                            Udara sejuk, pemandangan hijau sejauh mata memandang, dan aroma teh
                            yang menenangkan. Tempat terbaik untuk melepas penat dari hiruk pikuk kota.
                        </p>
                        <strong>— Rina</strong>
                    </article>

                    <article class="testimonial-journal">
                        <span class="quote">“</span>
                        <p>
                            Anak-anak jadi tahu proses pembuatan teh dari pemetikan sampai pengemasan.
                            Pemandu ramah dan fasilitasnya bersih, cocok untuk wisata keluarga.
                        </p>
                        <strong>— Bagas</strong>
                    </article>

                    <article class="testimonial-journal">
                        <span class="quote">“</span>
                        <p>
                            Begitu sampai langsung disambut pemandangan hijau yang luas. Udara bersih
                            dan tenang, sangat cocok untuk healing bersama teman maupun keluarga.
                        </p>
                        <strong>— Siska</strong>
                    </article>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>

<style>
    /* =====================================================
       EXPERIENCE — FULL WIDTH CARDS
       ===================================================== */

    .experience-section {
        position: relative;
        overflow: hidden;
        padding: 120px 0 0;
        background:
            radial-gradient(circle at 7% 12%, rgba(147, 181, 126, 0.32), transparent 21%),
            radial-gradient(circle at 93% 86%, rgba(210, 165, 91, 0.19), transparent 22%),
            linear-gradient(135deg, #eef4e9 0%, #faf9f4 50%, #efe3d0 100%);
    }

    .experience-section::before {
        position: absolute;
        top: 50px;
        right: 9%;
        width: 135px;
        height: 135px;
        border: 1px dashed rgba(22, 60, 45, 0.18);
        border-radius: 50%;
        content: "";
    }

    .experience-head {
        display: grid;
        grid-template-columns: 1.1fr 0.75fr;
        gap: 70px;
        align-items: end;
        padding-bottom: 52px;
    }

    .experience-head > p {
        max-width: 410px;
        margin: 0 0 5px;
        color: var(--muted);
    }

    .experience-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        min-height: 540px;
    }

    .experience-card {
        position: relative;
        min-height: 540px;
        overflow: hidden;
        color: #ffffff;
        background: var(--deep);
    }

    .experience-card::after {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        height: 75%;
        background: linear-gradient(0deg, rgba(8, 30, 22, 0.96) 0%, rgba(8, 30, 22, 0.46) 56%, transparent 100%);
        content: "";
    }

    .experience-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 700ms ease;
    }

    .experience-card:hover img {
        transform: scale(1.08);
    }

    .experience-overlay {
        position: absolute;
        z-index: 1;
        right: 30px;
        bottom: 30px;
        left: 30px;
    }

    .experience-no {
        display: grid;
        width: 34px;
        height: 34px;
        margin-bottom: 106px;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, 0.38);
        border-radius: 50%;
        color: #ffffff;
        background: rgba(9, 34, 24, 0.36);
        font-size: 0.7rem;
        font-weight: 700;
        backdrop-filter: blur(6px);
    }

    .experience-label {
        display: block;
        margin-bottom: 9px;
        color: #dfeccc;
        font-size: 0.67rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
    }

    .experience-overlay h3 {
        margin: 0;
        color: #ffffff;
        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(1.75rem, 2.3vw, 2.4rem);
        line-height: 1.02;
        letter-spacing: -0.04em;
    }

    .experience-overlay p {
        max-width: 270px;
        margin: 12px 0 17px;
        color: rgba(255, 255, 255, 0.78);
        font-size: 0.84rem;
        line-height: 1.55;
    }

    .experience-overlay a {
        display: inline-flex;
        gap: 8px;
        align-items: center;
        padding-bottom: 3px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.56);
        color: #ffffff;
        font-size: 0.82rem;
        font-weight: 700;
    }

    /* =====================================================
       VISIT + PRODUCTS
       ===================================================== */

    .visit-section {
        position: relative;
        overflow: hidden;
        padding: 120px 0;
        background:
            radial-gradient(circle at 8% 16%, rgba(136, 174, 117, 0.36), transparent 23%),
            radial-gradient(circle at 93% 78%, rgba(210, 165, 91, 0.22), transparent 23%),
            linear-gradient(135deg, #e7f0e1 0%, #f9f7f0 52%, #f1e4d0 100%);
    }

    .visit-section::before {
        position: absolute;
        top: 160px;
        left: -105px;
        width: 265px;
        height: 265px;
        border: 1px solid rgba(22, 60, 45, 0.11);
        border-radius: 50%;
        content: "";
    }

    .visit-section::after {
        position: absolute;
        right: -86px;
        bottom: 50px;
        width: 225px;
        height: 225px;
        border: 1px solid rgba(207, 164, 91, 0.32);
        border-radius: 50%;
        content: "";
    }

    .visit-section .page-container {
        position: relative;
        z-index: 1;
    }

    .visit-intro,
    .product-intro {
        display: grid;
        grid-template-columns: 1.05fr 0.75fr;
        gap: 78px;
        align-items: end;
    }

    .visit-intro > p,
    .product-intro > p {
        max-width: 405px;
        margin: 0 0 5px;
        color: var(--muted);
    }

    .visit-map-card {
        display: grid;
        grid-template-columns: 0.88fr 1.12fr;
        min-height: 465px;
        margin-top: 54px;
        overflow: hidden;
        border: 1px solid rgba(22, 60, 45, 0.10);
        border-radius: 28px;
        background: #dfead7;
        box-shadow: var(--shadow);
    }

    .visit-map-copy {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        padding: 55px 50px;
        background:
            radial-gradient(circle at 87% 90%, rgba(207, 164, 91, 0.17), transparent 24%),
            linear-gradient(135deg, rgba(255, 255, 255, 0.35), transparent 58%),
            #e1ecd9;
    }

    .visit-map-copy::after {
        position: absolute;
        right: -45px;
        bottom: -50px;
        width: 190px;
        height: 190px;
        border: 1px solid rgba(22, 60, 45, 0.14);
        border-radius: 50%;
        content: "";
    }

    .visit-map-copy > * {
        position: relative;
        z-index: 1;
    }

    .visit-index {
        margin-bottom: 18px;
        color: var(--moss);
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.12em;
    }

    .visit-map-copy h3 {
        max-width: 430px;
        margin: 0;
        color: var(--forest);
        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(2.2rem, 3.8vw, 3.5rem);
        line-height: 1.06;
        letter-spacing: -0.045em;
    }

    .visit-map-copy p {
        max-width: 420px;
        margin: 19px 0 28px;
        color: #52645a;
    }

    .visit-map {
        position: relative;
        min-height: 465px;
    }

    .visit-map::after {
        position: absolute;
        right: 18px;
        bottom: 17px;
        padding: 8px 11px;
        border-radius: 999px;
        color: #ffffff;
        background: rgba(11, 40, 29, 0.82);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        content: "Kebun Teh Wonosari";
        font-size: 0.67rem;
        font-weight: 700;
    }

    .visit-map iframe {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 465px;
        border: 0;
    }

    .product-intro {
        margin-top: 112px;
    }

    .journal-products {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        margin-top: 48px;
        overflow: hidden;
        border: 1px solid rgba(22, 60, 45, 0.13);
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.54);
        box-shadow: 0 14px 35px rgba(20, 54, 40, 0.07);
    }

    .journal-product {
        position: relative;
        display: flex;
        min-height: 300px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 35px 24px 24px;
        border-right: 1px solid rgba(22, 60, 45, 0.12);
        transition: background 200ms ease, transform 200ms ease;
    }

    .journal-product:last-child {
        border-right: 0;
    }

    .journal-product:hover {
        z-index: 1;
        background: rgba(255, 255, 255, 0.88);
        transform: translateY(-7px);
    }

    .journal-product > span {
        position: absolute;
        top: 17px;
        left: 19px;
        color: var(--moss);
        font-size: 0.69rem;
        font-weight: 700;
        letter-spacing: 0.08em;
    }

    .journal-product img {
        width: 100%;
        height: 183px;
        object-fit: contain;
    }

    .journal-product h3 {
        margin: 19px 0 0;
        color: var(--forest);
        font-size: 0.88rem;
        text-align: center;
    }

    /* =====================================================
       GALLERY
       ===================================================== */

    .journal-gallery {
        position: relative;
        overflow: hidden;
        padding: 112px 0 0;
        color: #ffffff;
        background:
            radial-gradient(circle at 8% 12%, rgba(183, 205, 168, 0.16), transparent 24%),
            radial-gradient(circle at 92% 84%, rgba(210, 165, 91, 0.14), transparent 20%),
            linear-gradient(135deg, #123d2d, #0d291f);
    }

    .journal-gallery::before {
        position: absolute;
        top: -120px;
        right: -80px;
        width: 310px;
        height: 310px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 50%;
        content: "";
    }

    .gallery-head {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1fr 0.66fr;
        gap: 76px;
        align-items: end;
        padding-bottom: 52px;
    }

    .gallery-head h2 {
        margin: 0;
        color: #ffffff;
        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(2.5rem, 4.7vw, 4.4rem);
        line-height: 1.03;
        letter-spacing: -0.05em;
    }

    .gallery-head > p {
        max-width: 410px;
        margin: 0 0 7px;
        color: rgba(255, 255, 255, 0.72);
    }

    .gallery-ribbon {
        display: grid;
        grid-template-columns: repeat(8, minmax(230px, 1fr));
        min-width: 1840px;
        overflow: hidden;
    }

    .gallery-ribbon a {
        height: 295px;
        overflow: hidden;
    }

    .gallery-ribbon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.91;
        transition: transform 500ms ease, opacity 300ms ease;
    }

    .gallery-ribbon a:hover img {
        opacity: 1;
        transform: scale(1.08);
    }

    /* =====================================================
       TESTIMONIAL
       ===================================================== */

    .journal-testimonials {
        position: relative;
        overflow: hidden;
        padding: 112px 0;
        background:
            radial-gradient(circle at 10% 84%, rgba(183, 205, 168, 0.30), transparent 24%),
            radial-gradient(circle at 92% 16%, rgba(210, 165, 91, 0.17), transparent 21%),
            linear-gradient(135deg, #f5f4ed, #faf9f5 50%, #eee5d7);
    }

    .journal-testimonials::after {
        position: absolute;
        top: 45px;
        right: -85px;
        width: 235px;
        height: 235px;
        border: 1px solid rgba(22, 60, 45, 0.09);
        border-radius: 50%;
        content: "";
    }

    .journal-testimonials .page-container {
        position: relative;
        z-index: 1;
    }

    .testimonial-journal-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 50px;
    }

    .testimonial-journal {
        padding: 31px;
        border: 1px solid rgba(22, 60, 45, 0.13);
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.76);
        box-shadow: 0 10px 28px rgba(20, 54, 40, 0.05);
    }

    .testimonial-journal .quote {
        display: block;
        margin-bottom: -17px;
        color: var(--gold);
        font-family: Georgia, serif;
        font-size: 4.4rem;
        line-height: 1;
    }

    .testimonial-journal p {
        margin: 0;
        color: #4c5d53;
        font-size: 0.92rem;
        font-style: italic;
    }

    .testimonial-journal strong {
        display: block;
        margin-top: 22px;
        color: var(--forest);
        font-size: 0.9rem;
    }

    /* =====================================================
       RESPONSIVE — PART 2
       ===================================================== */

    @media (max-width: 980px) {
        .experience-head,
        .visit-intro,
        .product-intro,
        .gallery-head {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .experience-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .experience-card {
            min-height: 460px;
        }

        .visit-map-card {
            grid-template-columns: 1fr;
        }

        .visit-map,
        .visit-map iframe {
            min-height: 385px;
        }

        .journal-products {
            grid-template-columns: repeat(2, 1fr);
        }

        .journal-product:nth-child(2) {
            border-right: 0;
        }

        .journal-product:nth-child(-n + 2) {
            border-bottom: 1px solid rgba(22, 60, 45, 0.12);
        }
    }

    @media (max-width: 760px) {
        .experience-section,
        .visit-section,
        .journal-gallery,
        .journal-testimonials {
            padding-top: 76px;
        }

        .experience-head,
        .gallery-head {
            padding-bottom: 35px;
        }

        .experience-grid {
            grid-template-columns: 1fr;
        }

        .experience-card {
            min-height: 440px;
        }

        .experience-overlay {
            right: 24px;
            bottom: 25px;
            left: 24px;
        }

        .experience-no {
            margin-bottom: 76px;
        }

        .visit-map-copy {
            padding: 48px 27px;
        }

        .visit-map,
        .visit-map iframe {
            min-height: 325px;
        }

        .product-intro {
            margin-top: 78px;
        }

        .journal-products {
            grid-template-columns: 1fr;
        }

        .journal-product,
        .journal-product:nth-child(2) {
            border-right: 0;
            border-bottom: 1px solid rgba(22, 60, 45, 0.12);
        }

        .journal-product:last-child {
            border-bottom: 0;
        }

        .gallery-ribbon {
            grid-template-columns: repeat(8, 210px);
            min-width: 1680px;
        }

        .gallery-ribbon a {
            height: 245px;
        }

        .testimonial-journal-grid {
            grid-template-columns: 1fr;
        }

        .visit-section::before,
        .visit-section::after,
        .journal-gallery::before,
        .journal-testimonials::after {
            display: none;
        }
    }
</style>
