<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event & Cerita — Explore Wonosari</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --forest: #123b2b;
            --forest-deep: #0a2b1e;
            --leaf: #6f9160;
            --sage: #dfe9d6;
            --sage-pale: #edf3e8;
            --ivory: #f8f5ee;
            --paper: #fffdf9;
            --gold: #d3ad71;
            --ink: #193126;
            --muted: #68756c;
            --line: rgba(18, 59, 43, 0.14);
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
            background: var(--ivory);
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
            width: min(1200px, calc(100% - 64px));
            margin-inline: auto;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 16px;
            color: var(--leaf);
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 31px;
            height: 1px;
            background: var(--gold);
            content: "";
        }

        .eyebrow--light {
            color: rgba(255, 255, 255, 0.86);
        }

        .eyebrow--light::before {
            background: #ead19d;
        }

        .section-title {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.55rem, 4.5vw, 4.65rem);
            font-weight: 600;
            line-height: 1.06;
            letter-spacing: -0.05em;
        }

        /* ==================================================
           HERO EVENT — FOTO SAMA DENGAN BERANDA
           ================================================== */
        .event-hero {
            position: relative;
            display: flex;
            min-height: 650px;
            align-items: flex-end;
            overflow: hidden;
            padding: 150px 0 76px;
            color: #ffffff;
            background:
                linear-gradient(90deg, rgba(6, 30, 20, 0.88) 0%, rgba(6, 30, 20, 0.57) 47%, rgba(6, 30, 20, 0.16) 100%),
                linear-gradient(0deg, rgba(6, 30, 20, 0.45), transparent 58%),
                url("{{ asset('image/hero.jpg') }}") center/cover no-repeat;
        }

        .event-hero::before {
            position: absolute;
            top: -120px;
            right: -70px;
            width: 340px;
            height: 340px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

        .event-hero::after {
            position: absolute;
            right: 8%;
            bottom: 43px;
            width: 82px;
            height: 82px;
            border: 1px solid rgba(232, 207, 158, 0.44);
            border-radius: 50%;
            content: "";
        }

        .event-hero-content {
            position: relative;
            z-index: 1;
            max-width: 780px;
        }

        .event-title {
            max-width: 750px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.8rem, 7vw, 7rem);
            font-weight: 600;
            line-height: 0.92;
            letter-spacing: -0.065em;
        }

        .event-title em {
            color: #ebce98;
            font-style: italic;
        }

        .event-intro {
            max-width: 550px;
            margin: 25px 0 0;
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.96rem;
        }

        .event-hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px 28px;
            margin-top: 31px;
        }

        .event-hero-meta span {
            color: #dce9d1;
            font-size: 0.70rem;
            font-weight: 700;
            letter-spacing: 0.08em;
        }

        .event-hero-meta span + span {
            padding-left: 28px;
            border-left: 1px solid rgba(255, 255, 255, 0.26);
        }

        /* ==================================================
           CERITA WONOSARI + TESTIMONI
           SATU BACKGROUND GRADIENT UTUH
           ================================================== */
        .stories-section {
            position: relative;
            overflow: hidden;
            padding: 118px 0 126px;
            background:
                radial-gradient(circle at 7% 8%, rgba(255, 255, 255, 0.60), transparent 19%),
                radial-gradient(circle at 92% 17%, rgba(213, 174, 108, 0.30), transparent 24%),
                radial-gradient(circle at 15% 88%, rgba(118, 158, 91, 0.28), transparent 26%),
                linear-gradient(135deg, #eaf2e4 0%, #f8f4e9 48%, #e5d4ad 100%);
        }

        .stories-section::before {
            position: absolute;
            top: 92px;
            right: -120px;
            width: 360px;
            height: 360px;
            border: 1px solid rgba(18, 59, 43, 0.11);
            border-radius: 50%;
            content: "";
        }

        .stories-section::after {
            position: absolute;
            bottom: -140px;
            left: -75px;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(210, 171, 112, 0.34);
            border-radius: 50%;
            content: "";
        }

        .stories-section .page-container {
            position: relative;
            z-index: 1;
        }

        .stories-head {
            display: grid;
            grid-template-columns: 160px minmax(0, 1fr) minmax(250px, 360px);
            gap: 42px;
            align-items: end;
            margin-bottom: 58px;
        }

        .stories-count {
            color: var(--leaf);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(4.6rem, 7vw, 6.8rem);
            font-style: italic;
            line-height: 0.72;
            letter-spacing: -0.09em;
        }

        .stories-count span {
            display: block;
            margin-top: 25px;
            color: var(--leaf);
            font-family: "DM Sans", Arial, sans-serif;
            font-size: 0.66rem;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .stories-head > p {
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        /* KARTU CERITA / EVENT */
        .event-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .event-card {
            display: flex;
            min-height: 260px;
            overflow: hidden;
            border: 1px solid rgba(18, 59, 43, 0.13);
            border-radius: 13px;
            background: rgba(255, 253, 248, 0.82);
            box-shadow: 0 13px 30px rgba(18, 59, 43, 0.07);
            transition: transform 220ms ease, box-shadow 220ms ease;
        }

        .event-card:hover {
            box-shadow: 0 21px 43px rgba(18, 59, 43, 0.13);
            transform: translateY(-6px);
        }

        .event-card:first-child {
            grid-column: span 2;
            min-height: 340px;
        }

        .event-card-image {
            width: 43%;
            min-width: 220px;
            overflow: hidden;
            background: var(--forest);
        }

        .event-card:first-child .event-card-image {
            width: 51%;
        }

        .event-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 500ms ease;
        }

        .event-card:hover .event-card-image img {
            transform: scale(1.07);
        }

        .event-card-body {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 27px 29px;
        }

        .event-card-number {
            color: var(--leaf);
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.13em;
        }

        .event-card h3 {
            margin: 13px 0 10px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.52rem;
            font-weight: 600;
            line-height: 1.13;
            letter-spacing: -0.03em;
        }

        .event-card:first-child h3 {
            max-width: 440px;
            font-size: clamp(2rem, 3vw, 3rem);
        }

        .event-card p {
            margin: 0;
            color: var(--muted);
            font-size: 0.79rem;
            line-height: 1.62;
        }

        .event-card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: auto;
            padding-top: 18px;
            color: var(--forest);
            font-size: 0.76rem;
            font-weight: 700;
        }

        .event-card-link:hover {
            color: var(--leaf);
        }

        /* PEMISAH EVENT DAN TESTIMONI */
        .stories-divider {
            display: flex;
            align-items: center;
            gap: 17px;
            margin: 104px 0 57px;
        }

        .stories-divider span {
            flex: 1;
            height: 1px;
            background: rgba(18, 59, 43, 0.17);
        }

        .stories-divider strong {
            color: var(--leaf);
            font-size: 0.66rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        /* TESTIMONI */
        .testimonial-head {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(255px, 370px);
            gap: 60px;
            align-items: end;
            margin-bottom: 45px;
        }

        .testimonial-head > p {
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .testimonial-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.18fr) minmax(310px, 0.82fr);
            gap: 21px;
            align-items: stretch;
        }

        .testimonial-main {
            display: grid;
            min-height: 390px;
            grid-template-columns: 0.88fr 1.12fr;
            overflow: hidden;
            border: 1px solid rgba(18, 59, 43, 0.14);
            border-radius: 15px;
            background: #fffdf8;
            box-shadow: 0 16px 37px rgba(18, 59, 43, 0.09);
        }

        .testimonial-main-image {
            position: relative;
            overflow: hidden;
        }

        .testimonial-main-image::after {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(7, 38, 26, 0.42), transparent 60%);
            content: "";
        }

        .testimonial-main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-main-content {
            display: flex;
            flex-direction: column;
            padding: 37px 35px;
        }

        .quote-symbol {
            color: var(--gold);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 4.8rem;
            font-weight: 600;
            line-height: 0.5;
        }

        .testimonial-main blockquote {
            margin: 21px 0 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(1.25rem, 1.8vw, 1.65rem);
            font-style: italic;
            font-weight: 600;
            line-height: 1.43;
            letter-spacing: -0.02em;
        }

        .testimonial-person {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: auto;
            padding-top: 24px;
            border-top: 1px solid var(--line);
        }

        .testimonial-person img {
            width: 44px;
            height: 44px;
            border: 2px solid var(--sage);
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-person strong {
            display: block;
            color: var(--forest);
            font-size: 0.84rem;
        }

        .testimonial-person span {
            display: block;
            margin-top: 2px;
            color: var(--leaf);
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
        }

        .testimonial-stars {
            margin-left: auto;
            color: var(--gold) !important;
            font-size: 0.70rem !important;
            letter-spacing: 0.04em;
            white-space: nowrap;
        }

        /* KARTU TESTIMONI SAMPING */
        .testimonial-side {
            display: grid;
            gap: 21px;
        }

        .testimonial-mini {
            display: flex;
            min-height: 184px;
            overflow: hidden;
            border: 1px solid rgba(18, 59, 43, 0.13);
            border-radius: 15px;
            background: rgba(255, 253, 248, 0.88);
            box-shadow: 0 12px 28px rgba(18, 59, 43, 0.06);
        }

        .testimonial-mini-photo {
            width: 35%;
            min-width: 115px;
            overflow: hidden;
        }

        .testimonial-mini-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-mini-content {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 22px 21px;
        }

        .testimonial-mini blockquote {
            margin: 0;
            color: #40584d;
            font-size: 0.81rem;
            font-style: italic;
            line-height: 1.65;
        }

        .testimonial-mini .testimonial-person {
            margin-top: auto;
            padding-top: 15px;
        }

        .testimonial-mini .testimonial-person img {
            display: none;
        }

        .testimonial-mini .testimonial-person strong {
            font-size: 0.77rem;
        }

        .testimonial-mini .testimonial-person span {
            font-size: 0.57rem;
        }

        /* RESPONSIVE */
        @media (max-width: 950px) {
            .stories-head {
                grid-template-columns: 130px 1fr;
                gap: 30px;
            }

            .stories-head > p {
                grid-column: 2;
            }

            .testimonial-layout {
                grid-template-columns: 1fr;
            }

            .testimonial-side {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .page-container {
                width: min(100% - 36px, 1200px);
            }

            .event-hero {
                min-height: 600px;
                padding: 135px 0 65px;
                background-position: 58% center;
            }

            .event-title {
                font-size: clamp(3.1rem, 14vw, 4.9rem);
            }

            .event-hero-meta span + span {
                padding-left: 0;
                border-left: 0;
            }

            .stories-section {
                padding: 76px 0;
            }

            .stories-section::before,
            .stories-section::after {
                display: none;
            }

            .stories-head {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .stories-head > p {
                grid-column: auto;
            }

            .stories-count {
                font-size: 4.5rem;
            }

            .event-grid {
                grid-template-columns: 1fr;
            }

            .event-card,
            .event-card:first-child {
                display: block;
                min-height: 0;
                grid-column: auto;
            }

            .event-card-image,
            .event-card:first-child .event-card-image {
                width: 100%;
                height: 225px;
            }

            .event-card-body {
                min-height: 240px;
                padding: 24px;
            }

            .event-card:first-child h3 {
                font-size: 2rem;
            }

            .stories-divider {
                margin: 74px 0 42px;
            }

            .testimonial-head {
                grid-template-columns: 1fr;
                gap: 23px;
            }

            .testimonial-main {
                grid-template-columns: 1fr;
            }

            .testimonial-main-image {
                height: 230px;
            }

            .testimonial-main-content {
                min-height: 320px;
                padding: 29px 25px;
            }

            .testimonial-side {
                grid-template-columns: 1fr;
            }

            .testimonial-mini {
                min-height: 175px;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <!-- HERO EVENT -->
        <header class="event-hero">
            <div class="page-container event-hero-content">
                <p class="eyebrow eyebrow--light">Cerita & kegiatan Wonosari</p>

                <h1 class="event-title">
                    Momen yang<br>
                    tumbuh bersama<br>
                    <em>alam.</em>
                </h1>

                <p class="event-intro">
                    Temukan cerita, aktivitas, dan kegiatan dari Wisata Agro Wonosari:
                    tempat pertemuan, pembelajaran, serta pengalaman baru di kebun teh.
                </p>

                <div class="event-hero-meta">
                    <span>Wisata Agro Wonosari</span>
                    <span>Singosari, Malang</span>
                    <span>Event & artikel</span>
                </div>
            </div>
        </header>

        <!-- CERITA WONOSARI + TESTIMONI -->
        <section class="stories-section">
            <div class="page-container">
                <!-- JUDUL CERITA -->
                <div class="stories-head">
                    <div class="stories-count">
                        01
                        <span>Journal Wonosari</span>
                    </div>

                    <div>
                        <p class="eyebrow">Berita & artikel</p>
                        <h2 class="section-title">
                            Cerita yang tumbuh<br>
                            di Wonosari.
                        </h2>
                    </div>

                    <p>
                        Aktivitas edukatif, perjalanan alam, dan berbagai momen
                        yang menjadikan setiap kunjungan lebih dari sekadar liburan.
                    </p>
                </div>

                <!-- EVENT UTAMA + DAFTAR EVENT -->
                <div class="event-grid">
                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event1.jpg') }}" alt="One Day Trip Wisata Agro Wonosari">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">01 · EVENT UTAMA</span>

                            <h3>One Day Trip di tengah kebun teh.</h3>

                            <p>
                                Perjalanan santai yang mengajak peserta menikmati kebun teh,
                                tur pengolahan, jeep adventure, serta piknik sore yang hangat.
                            </p>

                            <a href="#testimoni" class="event-card-link">
                                Baca cerita <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event2.jpg') }}" alt="Wahana Game Kebun Teh Lawang">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">02 · AKTIVITAS</span>
                            <h3>Wahana game di kebun teh.</h3>
                            <p>Aktivitas luar ruang yang aktif, seru, dan menyenangkan untuk setiap kelompok pengunjung.</p>
                            <a href="/pemesanan" class="event-card-link">Rencanakan kunjungan <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event3.jpg') }}" alt="Wisata Edukatif Kebun Teh Wonosari">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">03 · EDUKASI</span>
                            <h3>Liburan yang ikut mengajarkan.</h3>
                            <p>Kenali dunia perkebunan teh melalui pengalaman belajar yang dekat dengan alam.</p>
                            <a href="/paket" class="event-card-link">Lihat paket edukasi <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event4.jpg') }}" alt="Workshop Pengolahan Teh">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">04 · WORKSHOP</span>
                            <h3>Belajar proses di balik teh.</h3>
                            <p>Dari pemetikan hingga pengemasan, kenali perjalanan daun teh hingga menjadi produk siap seduh.</p>
                            <a href="/paket" class="event-card-link">Lihat paket edukasi <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event5.jpg') }}" alt="Wisata Keluarga Wonosari">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">05 · WISATA</span>
                            <h3>Waktu berkualitas di perkebunan.</h3>
                            <p>Ruang untuk keluarga menikmati lanskap hijau, udara sejuk, dan kebersamaan yang lebih bermakna.</p>
                            <a href="/pemesanan" class="event-card-link">Reservasi kunjungan <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event6.jpg') }}" alt="Lomba Fotografi Alam Wonosari">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">06 · KOMUNITAS</span>
                            <h3>Merekam pesona teh Wonosari.</h3>
                            <p>Kegiatan fotografi alam yang mengajak komunitas mengabadikan sisi terbaik perkebunan teh.</p>
                            <a href="/pemesanan" class="event-card-link">Ikut kegiatan <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/16.jpg') }}" alt="Trekking Bukit Kuneer">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">07 · TREKKING</span>
                            <h3>Jalur hijau menuju Bukit Kuneer.</h3>
                            <p>Nikmati perjalanan di tengah hamparan kebun teh dengan pemandangan alam terbuka.</p>
                            <a href="/paket" class="event-card-link">Lihat paket trekking <span>→</span></a>
                        </div>
                    </article>

                    <article class="event-card">
                        <div class="event-card-image">
                            <img src="{{ asset('image/event8.jpg') }}" alt="Program Petik Teh Sendiri">
                        </div>

                        <div class="event-card-body">
                            <span class="event-card-number">08 · EDUKASI</span>
                            <h3>Petik teh sendiri.</h3>
                            <p>Rasakan proses awal produksi teh sambil menikmati kebun yang sejuk dan hijau.</p>
                            <a href="/paket" class="event-card-link">Lihat paket edukasi <span>→</span></a>
                        </div>
                    </article>
                </div>

                <!-- PEMISAH -->
                <div class="stories-divider">
                    <span></span>
                    <strong>Pengalaman pengunjung</strong>
                    <span></span>
                </div>

                <!-- JUDUL TESTIMONI -->
                <div id="testimoni" class="testimonial-head">
                    <div>
                        <p class="eyebrow">Cerita pengunjung</p>
                        <h2 class="section-title">
                            Yang mereka bawa pulang<br>
                            dari Wonosari.
                        </h2>
                    </div>

                    <p>
                        Udara yang lebih tenang, kebun yang hijau, dan pengalaman
                        sederhana yang bertahan lebih lama dalam ingatan.
                    </p>
                </div>

                <!-- TESTIMONI UTAMA + TESTIMONI MINI -->
                <div class="testimonial-layout">
                    <article class="testimonial-main">
                        <div class="testimonial-main-image">
                            <img src="{{ asset('image/testimoni1.jpg') }}" alt="Kunjungan Aditya Aza Annuzuli di Wonosari">
                        </div>

                        <div class="testimonial-main-content">
                            <span class="quote-symbol">“</span>

                            <blockquote>
                                Udara sejuk, pemandangan hijau sejauh mata memandang,
                                dan aroma teh yang menenangkan. Tempat terbaik untuk
                                melepas penat dari hiruk pikuk kota.
                            </blockquote>

                            <div class="testimonial-person">
                                <img src="{{ asset('image/customer1.jpg') }}" alt="Aditya Aza Annuzuli">

                                <div>
                                    <strong>Aditya Aza Annuzuli</strong>
                                    <span>Pengunjung Wonosari</span>
                                </div>

                                <span class="testimonial-stars">★★★★★</span>
                            </div>
                        </div>
                    </article>

                    <div class="testimonial-side">
                        <article class="testimonial-mini">
                            <div class="testimonial-mini-photo">
                                <img src="{{ asset('image/testimoni2.jpg') }}" alt="Kunjungan Gadang Aji Ramadhan di Wonosari">
                            </div>

                            <div class="testimonial-mini-content">
                                <blockquote>
                                    Tempatnya sangat nyaman untuk wisata keluarga.
                                    Anak-anak bisa belajar banyak tentang kebun teh,
                                    sementara orang tua menikmati suasana alam yang tenang.
                                </blockquote>

                                <div class="testimonial-person">
                                    <div>
                                        <strong>Gadang Aji Ramadhan</strong>
                                        <span>Pengunjung Wonosari</span>
                                    </div>

                                    <span class="testimonial-stars">★★★★★</span>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-mini">
                            <div class="testimonial-mini-photo">
                                <img src="{{ asset('image/event5.jpg') }}" alt="Suasana wisata keluarga di Wonosari">
                            </div>

                            <div class="testimonial-mini-content">
                                <blockquote>
                                    Kebunnya luas, bersih, dan udaranya benar-benar segar.
                                    Cocok untuk berhenti sejenak dari suasana kota.
                                </blockquote>

                                <div class="testimonial-person">
                                    <div>
                                        <strong>Rani Putri</strong>
                                        <span>Pengunjung keluarga</span>
                                    </div>

                                    <span class="testimonial-stars">★★★★★</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
