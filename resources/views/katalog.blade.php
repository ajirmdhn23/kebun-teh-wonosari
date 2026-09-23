<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Java Coffee Jampit — Explore Wonosari</title>

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
            line-height: 1.68;
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
            font-size: clamp(2.5rem, 4.4vw, 4.6rem);
            font-weight: 600;
            line-height: 1.06;
            letter-spacing: -0.05em;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 51px;
            padding: 0 22px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: 700;
            transition: transform 180ms ease, background 180ms ease;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .button--forest {
            color: #ffffff;
            background: var(--forest);
        }

        .button--forest:hover {
            background: var(--forest-deep);
        }

        /* ==================================================
           HERO KATALOG — FOTO, UKURAN, DAN POSISI SAMA BERANDA
           ================================================== */
        .catalog-hero {
            position: relative;
            display: flex;
            min-height: 805px;
            align-items: center;
            overflow: hidden;
            padding-top: 82px;
            padding-bottom: 68px;
            color: #ffffff;
            background:
                linear-gradient(90deg, rgba(7, 35, 25, 0.82) 0%, rgba(7, 35, 25, 0.42) 49%, rgba(7, 35, 25, 0.05) 100%),
                linear-gradient(0deg, rgba(7, 35, 25, 0.44), transparent 56%),
                url("{{ asset('image/hero.jpg') }}") center/cover no-repeat;
        }

        .catalog-hero::before {
            position: absolute;
            top: -130px;
            right: -86px;
            width: 390px;
            height: 390px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

        .catalog-hero-content {
            position: relative;
            z-index: 1;
            max-width: 760px;
            padding-top: 38px;
        }

        .catalog-title {
            max-width: 760px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.55rem, 7vw, 7.1rem);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.055em;
        }

        .catalog-title em {
            color: #ead4a5;
            font-style: italic;
        }

        .catalog-intro {
            max-width: 525px;
            margin: 28px 0 0;
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.04rem;
        }

        .catalog-hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px 28px;
            margin-top: 31px;
        }

        .catalog-hero-meta span {
            color: #dce9d1;
            font-size: 0.70rem;
            font-weight: 700;
            letter-spacing: 0.08em;
        }

        .catalog-hero-meta span + span {
            padding-left: 28px;
            border-left: 1px solid rgba(255, 255, 255, 0.26);
        }

        .catalog-hero-note {
            position: absolute;
            z-index: 1;
            right: 5vw;
            bottom: 31px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.74);
            font-size: 0.70rem;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
        }

        .catalog-hero-note::before {
            width: 35px;
            height: 1px;
            background: #e8d0a3;
            content: "";
        }

        /* ==================================================
           INTRO PRODUK
           ================================================== */
        .product-intro-section {
            position: relative;
            overflow: hidden;
            padding: 118px 0 104px;
            background:
                radial-gradient(circle at 8% 12%, rgba(192, 216, 178, 0.46), transparent 22%),
                linear-gradient(135deg, #edf4e9 0%, #f9f5ec 58%, #ebdbbb 100%);
        }

        .product-intro-section::after {
            position: absolute;
            right: -100px;
            bottom: -105px;
            width: 285px;
            height: 285px;
            border: 1px solid rgba(211, 173, 113, 0.34);
            border-radius: 50%;
            content: "";
        }

        .product-intro-section .page-container {
            position: relative;
            z-index: 1;
        }

        .product-intro-grid {
            display: grid;
            grid-template-columns: minmax(0, 0.95fr) minmax(340px, 1.05fr);
            gap: 86px;
            align-items: center;
        }

        .product-intro-copy > p:not(.eyebrow) {
            max-width: 535px;
            margin: 25px 0 0;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .product-intro-copy .button {
            margin-top: 31px;
        }

        .product-intro-image {
            position: relative;
            min-height: 430px;
            overflow: hidden;
            background: #e8efdf;
        }

        .product-intro-image::before {
            position: absolute;
            z-index: 1;
            top: 21px;
            left: 21px;
            width: 55px;
            height: 55px;
            border: 1px solid rgba(18, 59, 43, 0.25);
            border-radius: 50%;
            content: "";
        }

        .product-intro-image::after {
            position: absolute;
            z-index: 1;
            right: 21px;
            bottom: 18px;
            padding: 7px 11px;
            color: #ffffff;
            background: rgba(18, 59, 43, 0.82);
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            content: "Estate coffee · Jampit";
        }

        .product-intro-image img {
            width: 100%;
            height: 430px;
            object-fit: cover;
        }

        .product-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 58px;
            border-top: 1px solid var(--line);
            border-left: 1px solid var(--line);
        }

        .product-stat {
            padding: 22px 24px;
            border-right: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            background: rgba(255, 253, 248, 0.48);
        }

        .product-stat span {
            display: block;
            color: var(--leaf);
            font-size: 0.63rem;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .product-stat strong {
            display: block;
            margin-top: 6px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.23rem;
            font-weight: 600;
            line-height: 1.2;
        }

        /* ==================================================
           DETAIL PRODUK
           ================================================== */
        .product-detail-section {
            padding: 116px 0 123px;
            background: var(--ivory);
        }

        .detail-heading {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(260px, 390px);
            gap: 65px;
            align-items: end;
            margin-bottom: 54px;
        }

        .detail-heading > p {
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .detail-story {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, 0.9fr);
            gap: 70px;
            align-items: center;
        }

        .detail-text p {
            margin: 0 0 19px;
            color: #53665b;
            font-size: 0.94rem;
        }

        .detail-text p strong {
            color: var(--forest);
        }

        .detail-image {
            overflow: hidden;
            background: var(--sage);
        }

        .detail-image img {
            width: 100%;
            min-height: 370px;
            object-fit: cover;
            transition: transform 400ms ease;
        }

        .detail-image:hover img {
            transform: scale(1.05);
        }

        .flavor-section {
            display: grid;
            grid-template-columns: minmax(280px, 0.65fr) minmax(0, 1.35fr);
            gap: 68px;
            align-items: center;
            margin-top: 108px;
            padding: 64px 0;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .flavor-title {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.1rem, 3.5vw, 3.5rem);
            font-weight: 600;
            line-height: 1.07;
            letter-spacing: -0.04em;
        }

        .flavor-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0;
            border-top: 1px solid var(--line);
            border-left: 1px solid var(--line);
        }

        .flavor-item {
            min-height: 122px;
            padding: 22px;
            border-right: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            background: var(--paper);
        }

        .flavor-item span {
            display: block;
            color: var(--leaf);
            font-size: 0.63rem;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .flavor-item strong {
            display: block;
            margin-top: 9px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.18rem;
            font-weight: 600;
            line-height: 1.2;
        }

        /* ==================================================
           KEUNGGULAN + PANEL PESAN
           ================================================== */
        .benefit-section {
            position: relative;
            overflow: hidden;
            padding: 112px 0 120px;
            background:
                radial-gradient(circle at 90% 18%, rgba(213, 174, 108, 0.24), transparent 25%),
                linear-gradient(135deg, #dfead5, #f7f4e9 64%);
        }

        .benefit-section::before {
            position: absolute;
            top: -132px;
            left: -80px;
            width: 285px;
            height: 285px;
            border: 1px solid rgba(18, 59, 43, 0.12);
            border-radius: 50%;
            content: "";
        }

        .benefit-section .page-container {
            position: relative;
            z-index: 1;
        }

        .benefit-heading {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(260px, 390px);
            gap: 65px;
            align-items: end;
            margin-bottom: 53px;
        }

        .benefit-heading > p {
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            border-top: 1px solid var(--line);
            border-left: 1px solid var(--line);
        }

        .benefit-card {
            min-height: 205px;
            padding: 24px 21px;
            border-right: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            background: rgba(255, 253, 248, 0.62);
            transition: background 180ms ease, transform 180ms ease;
        }

        .benefit-card:hover {
            background: #ffffff;
            transform: translateY(-4px);
        }

        .benefit-number {
            color: var(--gold);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.65rem;
            font-style: italic;
            font-weight: 600;
        }

        .benefit-card h3 {
            margin: 17px 0 8px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.12rem;
            font-weight: 600;
            line-height: 1.15;
        }

        .benefit-card p {
            margin: 0;
            color: var(--muted);
            font-size: 0.75rem;
            line-height: 1.6;
        }

        .buy-panel {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 35px;
            margin-top: 68px;
            padding: 35px 38px;
            border: 1px solid rgba(18, 59, 43, 0.22);
            background: rgba(255, 253, 248, 0.48);
        }

        .buy-title {
            max-width: 710px;
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 3.4vw, 3.5rem);
            font-weight: 600;
            line-height: 1.08;
            letter-spacing: -0.045em;
        }

        .buy-copy {
            max-width: 610px;
            margin: 13px 0 0;
            color: var(--muted);
            font-size: 0.91rem;
        }

        .buy-panel .button {
            flex-shrink: 0;
        }

        /* ==================================================
           RESPONSIVE
           ================================================== */
        @media (max-width: 1000px) {
            .product-intro-grid,
            .detail-story,
            .flavor-section,
            .detail-heading,
            .benefit-heading {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .benefit-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .buy-panel {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (max-width: 700px) {
            .page-container {
                width: min(100% - 36px, 1200px);
            }

            .catalog-hero {
                min-height: 650px;
                align-items: center;
                padding-top: 78px;
                padding-bottom: 35px;
                background-position: 58% center;
            }

            .catalog-hero-content {
                padding-top: 22px;
            }

            .catalog-title {
                font-size: clamp(3.2rem, 15vw, 4.7rem);
            }

            .catalog-hero-note {
                display: none;
            }

            .catalog-hero-meta span + span {
                padding-left: 0;
                border-left: 0;
            }

            .product-intro-section,
            .product-detail-section,
            .benefit-section {
                padding: 76px 0;
            }

            .product-intro-image,
            .product-intro-image img {
                min-height: 290px;
                height: 290px;
            }

            .product-stats {
                grid-template-columns: 1fr;
                margin-top: 38px;
            }

            .detail-image img {
                min-height: 270px;
            }

            .flavor-section {
                margin-top: 70px;
                padding: 48px 0;
            }

            .flavor-list {
                grid-template-columns: 1fr;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
            }

            .benefit-card {
                min-height: 0;
            }

            .buy-panel {
                align-items: flex-start;
                flex-direction: column;
                margin-top: 45px;
                padding: 28px 24px;
            }

            .buy-panel .button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <!-- HERO -->
        <header class="catalog-hero">
            <div class="page-container catalog-hero-content">
                <p class="eyebrow eyebrow--light">Estate market · Wonosari</p>

                <h1 class="catalog-title">
                    Rasa yang<br>
                    tumbuh dari<br>
                    <em>ketinggian.</em>
                </h1>

                <p class="catalog-intro">
                    Java Coffee Jampit adalah Arabika pilihan dari dataran tinggi Jawa Timur,
                    diproses dengan teliti untuk menghadirkan aroma yang bersih dan rasa yang berkarakter.
                </p>

                <div class="catalog-hero-meta">
                    <span>100% Arabika</span>
                    <span>Jampit, Bondowoso</span>
                    <span>± 1.600 mdpl</span>
                </div>
            </div>

            <div class="catalog-hero-note">Scroll untuk menjelajah</div>
        </header>

        <!-- INTRO PRODUK -->
        <section class="product-intro-section">
            <div class="page-container">
                <div class="product-intro-grid">
                    <div class="product-intro-copy">
                        <p class="eyebrow">Java Coffee Jampit</p>

                        <h2 class="section-title">
                            Sebuah seduhan,<br>
                            cerita dari pegunungan.
                        </h2>

                        <p>
                            Java Coffee Jampit merupakan kopi Arabika terbaik dari Perkebunan Jampit,
                            Bondowoso—salah satu kawasan kopi legendaris di dataran tinggi Jawa Timur.
                            Berada di sekitar 1.600 meter di atas permukaan laut, perkebunan ini
                            memiliki suhu sejuk, tanah vulkanik subur, dan kondisi alami yang ideal
                            bagi pertumbuhan Arabika berkualitas.
                        </p>

                        <a href="#detail-produk" class="button button--forest">
                            Kenali karakter kopi <span>↓</span>
                        </a>
                    </div>

                    <figure class="product-intro-image">
                        <img src="{{ asset('image/katalog1.jpg') }}" alt="Java Coffee Jampit">
                    </figure>
                </div>

                <div class="product-stats">
                    <div class="product-stat">
                        <span>Asal</span>
                        <strong>Jampit, Bondowoso</strong>
                    </div>

                    <div class="product-stat">
                        <span>Ketinggian</span>
                        <strong>± 1.600 mdpl</strong>
                    </div>

                    <div class="product-stat">
                        <span>Varietas</span>
                        <strong>100% Arabika</strong>
                    </div>
                </div>
            </div>
        </section>

        <!-- DETAIL PRODUK -->
        <section id="detail-produk" class="product-detail-section">
            <div class="page-container">
                <div class="detail-heading">
                    <div>
                        <p class="eyebrow">Tentang seduhan</p>

                        <h2 class="section-title">
                            Dipilih teliti,<br>
                            diproses sepenuh rasa.
                        </h2>
                    </div>

                    <p>
                        Biji kopi dipetik secara selektif pada tingkat kematangan optimal,
                        lalu diproses untuk menjaga keseimbangan aroma, rasa, dan aftertaste.
                    </p>
                </div>

                <div class="detail-story">
                    <div class="detail-text">
                        <p>
                            Kopi ini diproduksi dari biji Arabika pilihan yang dipetik secara selektif,
                            hanya ketika mencapai tingkat kematangan optimal. Tahap pascapanen dilakukan
                            dengan teliti, mulai dari <strong>wet process</strong>, pengeringan alami,
                            hingga sangrai <strong>medium roast</strong>.
                        </p>

                        <p>
                            Hasilnya adalah secangkir kopi dengan aroma wangi yang kuat, rasa lembut dan
                            seimbang, serta aftertaste manis yang mengingatkan pada cokelat dan karamel.
                            Sentuhan buah serta acidity lembut membuatnya segar dinikmati kapan saja.
                        </p>

                        <p>
                            Java Coffee Jampit cocok menemani pagi untuk memulai aktivitas maupun sore
                            untuk menikmati waktu santai dengan seduhan yang lebih bermakna.
                        </p>
                    </div>

                    <figure class="detail-image">
                        <img src="{{ asset('image/katalog2.jpg') }}" alt="Proses dan seduhan Java Coffee Jampit">
                    </figure>
                </div>

                <!-- PROFIL RASA -->
                <div class="flavor-section">
                    <div>
                        <p class="eyebrow">Flavor notes</p>

                        <h2 class="flavor-title">
                            Karakter yang<br>
                            terasa di setiap tegukan.
                        </h2>
                    </div>

                    <div class="flavor-list">
                        <div class="flavor-item">
                            <span>Aroma</span>
                            <strong>Cokelat & floral</strong>
                        </div>

                        <div class="flavor-item">
                            <span>Rasa utama</span>
                            <strong>Karamel, cokelat, citrus</strong>
                        </div>

                        <div class="flavor-item">
                            <span>Body</span>
                            <strong>Medium, lembut & penuh</strong>
                        </div>

                        <div class="flavor-item">
                            <span>Acidity</span>
                            <strong>Bright & seimbang</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEUNGGULAN + PESAN -->
        <section class="benefit-section">
            <div class="page-container">
                <div class="benefit-heading">
                    <div>
                        <p class="eyebrow">Mengapa Jampit</p>

                        <h2 class="section-title">
                            Dibuat untuk pecinta<br>
                            rasa yang otentik.
                        </h2>
                    </div>

                    <p>
                        Lebih dari sekadar kopi, Java Coffee Jampit membawa karakter
                        perkebunan Indonesia ke dalam setiap cangkir.
                    </p>
                </div>

                <div class="benefit-grid">
                    <article class="benefit-card">
                        <span class="benefit-number">01</span>
                        <h3>Arabika murni</h3>
                        <p>100% biji Arabika pilihan dari Perkebunan Jampit, Bondowoso.</p>
                    </article>

                    <article class="benefit-card">
                        <span class="benefit-number">02</span>
                        <h3>Dataran tinggi</h3>
                        <p>Ditanam lebih dari 1.500 mdpl untuk karakter rasa khas pegunungan.</p>
                    </article>

                    <article class="benefit-card">
                        <span class="benefit-number">03</span>
                        <h3>Medium roast</h3>
                        <p>Sangrai seimbang yang menjaga aroma, sweetness, dan body kopi.</p>
                    </article>

                    <article class="benefit-card">
                        <span class="benefit-number">04</span>
                        <h3>Segar lebih lama</h3>
                        <p>Kemasan kedap udara membantu menjaga aroma dan kualitas biji kopi.</p>
                    </article>

                    <article class="benefit-card">
                        <span class="benefit-number">05</span>
                        <h3>Fleksibel diseduh</h3>
                        <p>Nikmat untuk V60, French Press, Syphon, hingga espresso machine.</p>
                    </article>
                </div>

                <div class="buy-panel">
                    <div>
                        <p class="eyebrow">Java Coffee Jampit</p>

                        <h2 class="buy-title">
                            Bawa pulang rasa dari perkebunan.
                        </h2>

                        <p class="buy-copy">
                            Nikmati karakter Arabika dataran tinggi Jawa Timur
                            dalam setiap seduhan di rumah.
                        </p>
                    </div>

                    <a href="{{ url('/pemesanan') }}" class="button button--forest">
                        Pesan sekarang <span>↗</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
