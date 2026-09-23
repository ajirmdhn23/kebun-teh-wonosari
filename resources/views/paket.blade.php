<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata & Produk — Explore Wonosari</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --pine: #12382d;
            --pine-deep: #09261e;
            --moss: #6f8d62;
            --mint: #dce9d5;
            --cream: #f7f3ea;
            --paper: #fffdf8;
            --clay: #c48758;
            --line: rgba(18, 56, 45, 0.14);
            --text: #21352c;
            --muted: #6c7971;
            --shadow: 0 18px 55px rgba(18, 56, 45, 0.10);
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
            color: var(--text);
            background: var(--cream);
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
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 18px;
            color: var(--moss);
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 32px;
            height: 1px;
            background: var(--clay);
            content: "";
        }

        .eyebrow--light {
            color: rgba(255, 255, 255, 0.84);
        }

        .eyebrow--light::before {
            background: #edc795;
        }

        .display-title {
            margin: 0;
            color: var(--pine);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.7rem, 5.5vw, 5.2rem);
            font-weight: 500;
            line-height: 0.99;
            letter-spacing: -0.055em;
        }

        .display-title em {
            color: var(--clay);
            font-style: italic;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 51px;
            padding: 0 23px;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: 700;
            transition: 0.2s ease;
        }

        .button:hover {
            transform: translateY(-3px);
        }

        .button--light {
            color: var(--pine);
            background: #fffdf7;
        }

        .button--outline {
            border: 1px solid rgba(255, 255, 255, 0.38);
            color: #ffffff;
        }

        .button--outline:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .button--pine {
            color: #ffffff;
            background: var(--pine);
        }

        .button--pine:hover {
            background: var(--pine-deep);
        }

        /* ==================================================
           HERO PAKET
           FOTO + UKURAN SAMA DENGAN BERANDA.
           KONTEN DITENGAHKAN AGAR ADA JARAK DARI NAVBAR
           DAN SCROLL NOTE.
           ================================================== */
        .package-hero {
            position: relative;
            display: flex;
            min-height: 805px;
            align-items: center;
            overflow: hidden;
            color: #ffffff;
            background:
                linear-gradient(90deg, rgba(7, 35, 25, 0.82) 0%, rgba(7, 35, 25, 0.42) 49%, rgba(7, 35, 25, 0.05) 100%),
                linear-gradient(0deg, rgba(7, 35, 25, 0.44), transparent 56%),
                url("{{ asset('image/hero.jpg') }}") center/cover no-repeat;
        }

        .package-hero::before {
            position: absolute;
            top: -130px;
            right: -86px;
            width: 390px;
            height: 390px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

.package-hero-inner {
    position: relative;
    z-index: 1;
    padding-top: 82px;
    padding-bottom: 55px;
}

        .package-hero-title {
            max-width: 760px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.55rem, 7vw, 7.1rem);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.055em;
        }

        .package-hero-title em {
            color: #ead4a5;
            font-style: italic;
        }

        .package-hero-copy {
            max-width: 525px;
            margin: 28px 0 35px;
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.04rem;
        }

        .package-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .package-hero-note {
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

        .package-hero-note::before {
            width: 35px;
            height: 1px;
            background: #e8d0a3;
            content: "";
        }

        /* ==================================================
           PAKET WISATA
           ================================================== */
        .content {
            position: relative;
            padding: 108px 0 0;
            background:
                radial-gradient(circle at 5% 8%, rgba(192, 218, 181, 0.50), transparent 27%),
                linear-gradient(135deg, #edf4e8, #fffdf7 52%, #f2e3d1);
        }

        .intro {
            display: grid;
            grid-template-columns: 1.1fr 0.75fr;
            gap: 90px;
            align-items: end;
            margin-bottom: 62px;
        }

        .intro-copy {
            max-width: 400px;
            margin: 0 0 5px;
            color: var(--muted);
        }

        .package-list {
            display: grid;
            gap: 22px;
        }

        .package {
            display: grid;
            grid-template-columns: 56% 44%;
            min-height: 330px;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 28px;
            background: rgba(255, 253, 248, 0.80);
            box-shadow: var(--shadow);
            transition: transform 220ms ease, box-shadow 220ms ease;
        }

        .package:hover {
            box-shadow: 0 25px 65px rgba(18, 56, 45, 0.15);
            transform: translateY(-7px);
        }

        .package:nth-child(even) .package-image {
            order: 2;
        }

        .package-image {
            position: relative;
            min-height: 330px;
            overflow: hidden;
        }

        .package-image::after {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent 50%, rgba(10, 39, 29, 0.20));
            content: "";
        }

        .package-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 600ms ease;
        }

        .package:hover .package-image img {
            transform: scale(1.06);
        }

        .package-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }

        .package-number {
            color: var(--clay);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1rem;
            font-style: italic;
        }

        .package-body h3 {
            margin: 13px 0;
            color: var(--pine);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 3vw, 3rem);
            font-weight: 500;
            line-height: 1;
            letter-spacing: -0.05em;
        }

        .package-body p {
            margin: 0;
            color: var(--muted);
            font-size: 0.87rem;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin: 23px 0 26px;
        }

        .tags span {
            padding: 6px 10px;
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--moss);
            background: var(--mint);
            font-size: 0.68rem;
            font-weight: 700;
        }

        .text-link {
            display: inline-flex;
            gap: 8px;
            color: var(--pine);
            font-size: 0.78rem;
            font-weight: 700;
        }

        .text-link:hover {
            color: var(--clay);
        }

        /* ==================================================
           PRODUK PERKEBUNAN
           ================================================== */
        .market {
            margin-top: 125px;
            padding: 91px 0 116px;
            border-top: 1px solid var(--line);
            background: rgba(255, 253, 248, 0.30);
        }

        .market-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 40px;
            margin-bottom: 48px;
        }

        .market-heading p {
            max-width: 440px;
            margin: 0;
            color: var(--muted);
            font-size: 0.90rem;
        }

        .market-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .product {
            padding: 17px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: rgba(255, 253, 248, 0.86);
            transition: transform 220ms ease, box-shadow 220ms ease;
        }

        .product:hover {
            box-shadow: var(--shadow);
            transform: translateY(-6px);
        }

        .product-image {
            position: relative;
            height: 205px;
            overflow: hidden;
            border-radius: 14px;
            background: #edf0e6;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 300ms ease;
        }

        .product:hover img {
            transform: scale(1.08);
        }

        .product-no {
            position: absolute;
            z-index: 1;
            top: 12px;
            left: 13px;
            color: var(--moss);
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.12em;
        }

        .product h3 {
            margin: 18px 2px 7px;
            color: var(--pine);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.27rem;
            font-weight: 500;
            line-height: 1.1;
        }

        .product p {
            min-height: 50px;
            margin: 0 2px;
            color: var(--muted);
            font-size: 0.76rem;
            line-height: 1.55;
        }

        .product .text-link {
            margin: 18px 2px 3px;
        }

        /* CTA MENYATU */
        .cta-panel {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            margin-top: 65px;
            padding: 35px 38px;
            border: 1px solid rgba(18, 56, 45, 0.22);
            background: rgba(255, 253, 248, 0.48);
        }

        .cta-panel strong {
            display: block;
            color: var(--pine);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.8rem;
            font-weight: 500;
        }

        .cta-panel p {
            max-width: 570px;
            margin: 7px 0 0;
            color: var(--muted);
            font-size: 0.85rem;
        }

        @media (max-width: 900px) {
            .intro {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .market-heading {
                align-items: start;
                flex-direction: column;
            }

            .market-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 680px) {
            .page-container {
                width: min(100% - 36px, 1180px);
            }

            .package-hero {
                min-height: 650px;
                background-position: 58% center;
            }

            .package-hero-inner {
                padding-top: 86px;
                padding-bottom: 25px;
            }

            .package-hero-title {
                font-size: clamp(3.2rem, 15vw, 4.7rem);
            }

            .package-hero-note {
                display: none;
            }

            .package-hero-actions {
                flex-direction: column;
            }

            .package-hero-actions .button {
                width: 100%;
            }

            .content {
                padding-top: 78px;
            }

            .package {
                display: flex;
                flex-direction: column;
            }

            .package:nth-child(even) .package-image {
                order: 0;
            }

            .package-image {
                min-height: 240px;
            }

            .package-body {
                padding: 28px 24px 32px;
            }

            .market {
                margin-top: 78px;
                padding: 70px 0 80px;
            }

            .market-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 220px;
            }

            .cta-panel {
                align-items: start;
                flex-direction: column;
                padding: 30px 25px;
            }

            .cta-panel .button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <header class="package-hero">
            <div class="page-container package-hero-inner">
                <p class="eyebrow eyebrow--light">
                    Explore Wonosari · Singosari, Malang
                </p>

                <h1 class="package-hero-title">
                    Temukan sisi<br>
                    <em>hijau</em> Wonosari.
                </h1>

                <p class="package-hero-copy">
                    Rasakan udara pegunungan, dengarkan cerita dari kebun,
                    dan pilih pengalaman yang tumbuh di lereng Gunung Arjuno.
                </p>

                <div class="package-hero-actions">
                    <a href="#paket" class="button button--light">
                        Jelajahi paket <span>↓</span>
                    </a>

                    <a href="/pemesanan" class="button button--outline">
                        Buat rencana kunjungan <span>↗</span>
                    </a>
                </div>
            </div>

            <div class="package-hero-note">Scroll untuk menjelajah</div>
        </header>

        <section class="content">
            <div class="page-container">
                <div id="paket" class="intro">
                    <div>
                        <p class="eyebrow">Paket wisata</p>

                        <h2 class="display-title">
                            Satu tempat,<br>
                            banyak cara untuk <em>menikmati.</em>
                        </h2>
                    </div>

                    <p class="intro-copy">
                        Dari belajar tentang teh hingga bermalam di tengah kebun,
                        pilih pengalaman yang paling sesuai dengan ritme perjalananmu.
                    </p>
                </div>

                <div class="package-list">
                    <article class="package">
                        <div class="package-image">
                            <img src="{{ asset('image/paket edukasi.jpg') }}" alt="Paket Edukasi">
                        </div>

                        <div class="package-body">
                            <span class="package-number">01 / Belajar dari kebun</span>
                            <h3>Paket Edukasi</h3>
                            <p>Kenali perjalanan teh dari daun segar hingga menjadi produk siap saji bersama pemandu lokal.</p>

                            <div class="tags">
                                <span>Pemandu</span>
                                <span>Kunjungan pabrik</span>
                                <span>Welcome drink</span>
                            </div>

                            <a href="/pemesanan" class="text-link">
                                Rencanakan kunjungan <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="package">
                        <div class="package-image">
                            <img src="{{ asset('image/wisata2.jpg') }}" alt="Paket Outbound">
                        </div>

                        <div class="package-body">
                            <span class="package-number">02 / Bermain bersama</span>
                            <h3>Paket Outbound</h3>
                            <p>Aktivitas kelompok yang seru untuk mempererat kebersamaan di tengah suasana kebun yang terbuka.</p>

                            <div class="tags">
                                <span>Instruktur</span>
                                <span>Permainan kelompok</span>
                                <span>Spot foto</span>
                            </div>

                            <a href="/pemesanan" class="text-link">
                                Rencanakan kunjungan <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="package">
                        <div class="package-image">
                            <img src="{{ asset('image/tracking.jpg') }}" alt="Trekking Kebun Teh">
                        </div>

                        <div class="package-body">
                            <span class="package-number">03 / Jelajah lanskap</span>
                            <h3>Trekking Kebun Teh</h3>
                            <p>Susuri jalur hijau perkebunan dengan pemandangan Gunung Arjuno dan udara pegunungan yang sejuk.</p>

                            <div class="tags">
                                <span>Guide lokal</span>
                                <span>Air mineral</span>
                                <span>Dokumentasi</span>
                            </div>

                            <a href="/pemesanan" class="text-link">
                                Rencanakan kunjungan <span>→</span>
                            </a>
                        </div>
                    </article>

                    <article class="package">
                        <div class="package-image">
                            <img src="{{ asset('image/wisata4.jpg') }}" alt="Paket Camping">
                        </div>

                        <div class="package-body">
                            <span class="package-number">04 / Tinggal lebih lama</span>
                            <h3>Paket Camping</h3>
                            <p>Nikmati malam dan pagi pegunungan dengan lebih dekat di area tenda atau glamping.</p>

                            <div class="tags">
                                <span>Area camping</span>
                                <span>Api unggun</span>
                                <span>Sarapan</span>
                            </div>

                            <a href="/pemesanan" class="text-link">
                                Rencanakan kunjungan <span>→</span>
                            </a>
                        </div>
                    </article>
                </div>

                <section id="produk" class="market">
                    <div class="market-heading">
                        <div>
                            <p class="eyebrow">Produk perkebunan</p>

                            <h2 class="display-title">
                                Rasa yang bisa<br>
                                <em>dibawa pulang.</em>
                            </h2>
                        </div>

                        <p>
                            Pilihan kopi, teh, dan produk perkebunan untuk membawa karakter Wonosari
                            ke setiap seduhan serta momen santai di rumah.
                        </p>
                    </div>

                    <div class="market-grid">
                        <article class="product">
                            <div class="product-image"><span class="product-no">01</span><img src="{{ asset('image/produk1.jpg') }}" alt="Java Coffee Jampit"></div>
                            <h3>Java Coffee Jampit</h3>
                            <p>Kopi Arabika dengan rasa seimbang, acidity ringan, dan aftertaste floral.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">02</span><img src="{{ asset('image/produk2.jpg') }}" alt="Java Coffee Typica"></div>
                            <h3>Java Coffee Typica</h3>
                            <p>Varietas arabika klasik dengan aroma floral dan acidity yang cerah.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">03</span><img src="{{ asset('image/produk3.jpg') }}" alt="Java Coffee Maragogype"></div>
                            <h3>Java Coffee Maragogype</h3>
                            <p>Arabika berbiji besar dengan rasa lembut dan aroma ringan.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">04</span><img src="{{ asset('image/produk4.jpg') }}" alt="Rollaas White Tea"></div>
                            <h3>Rollaas White Tea</h3>
                            <p>Teh pucuk daun muda dengan rasa floral dan manis alami.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">05</span><img src="{{ asset('image/produk5.jpg') }}" alt="Teh Seduh Premium Rolas"></div>
                            <h3>Teh Seduh Premium Rolas</h3>
                            <p>Teh seduh dengan warna pekat dan aroma klasik teh hitam Indonesia.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">06</span><img src="{{ asset('image/produk6.jpg') }}" alt="Rolas Teh Seduh Kentea"></div>
                            <h3>Rolas Teh Seduh Kentea</h3>
                            <p>Teh artisan dengan aroma khas dan aftertaste yang ringan.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">07</span><img src="{{ asset('image/produk7.jpg') }}" alt="Cerutu Golden Djawa"></div>
                            <h3>Cerutu Golden Djawa</h3>
                            <p>Cerutu handmade premium dari tembakau otentik Besuki Na-Oogst.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">08</span><img src="{{ asset('image/produk8.jpg') }}" alt="Fanning Tea"></div>
                            <h3>Fanning Tea</h3>
                            <p>Teh hitam berpartikel halus dengan seduhan cepat dan rasa tegas.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>

                        <article class="product">
                            <div class="product-image"><span class="product-no">09</span><img src="{{ asset('image/produk9.jpg') }}" alt="Kopi Gunung Ijen PLB"></div>
                            <h3>Kopi Gunung Ijen PLB</h3>
                            <p>Robusta premium dengan body kuat, aroma earthy, dan rasa bersih.</p>
                            <a href="/katalog" class="text-link">Lihat detail <span>→</span></a>
                        </article>
                    </div>

                    <div class="cta-panel">
                        <div>
                            <strong>Siap merencanakan perjalanan?</strong>
                            <p>
                                Pilih paket wisata atau tanyakan kebutuhan rombongan untuk pengalaman
                                Wonosari yang paling sesuai.
                            </p>
                        </div>

                        <a href="/pemesanan" class="button button--pine">
                            Reservasi sekarang <span>↗</span>
                        </a>
                    </div>
                </section>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
