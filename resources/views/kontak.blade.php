<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan & Lokasi — Explore Wonosari</title>

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

        .contact-container {
            width: min(1180px, calc(100% - 48px));
            margin-inline: auto;
        }

        .contact-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 18px;
            color: var(--moss);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .contact-eyebrow::before {
            width: 31px;
            height: 1px;
            background: var(--gold);
            content: "";
        }

        .contact-eyebrow--light {
            color: rgba(255, 255, 255, 0.82);
        }

        .contact-eyebrow--light::before {
            background: #e6d0a4;
        }

        .contact-title {
            margin: 0;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.55rem, 5.1vw, 5rem);
            font-weight: 600;
            line-height: 1.02;
            letter-spacing: -0.05em;
        }

        .contact-section-title {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.1rem, 3.9vw, 3.45rem);
            line-height: 1.08;
            letter-spacing: -0.04em;
        }

        .contact-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 51px;
            padding: 0 22px;
            border: 1px solid transparent;
            border-radius: 999px;
            color: #ffffff;
            background: var(--forest);
            font-size: 0.88rem;
            font-weight: 700;
            transition: transform 180ms ease, background 180ms ease;
        }

        .contact-button:hover {
            background: var(--deep);
            transform: translateY(-3px);
        }

        /* ==================================================
           HERO — SAMA PERSIS PROPORSI BERANDA
           ================================================== */
        .contact-hero {
            position: relative;
            min-height: 805px;
            overflow: hidden;
            color: #ffffff;
            background:
                linear-gradient(90deg, rgba(7, 35, 25, 0.82) 0%, rgba(7, 35, 25, 0.42) 49%, rgba(7, 35, 25, 0.05) 100%),
                linear-gradient(0deg, rgba(7, 35, 25, 0.44), transparent 56%),
                url("{{ asset('image/hero.jpg') }}") center/cover no-repeat;
        }

        .contact-hero::before {
            position: absolute;
            top: -130px;
            right: -86px;
            width: 390px;
            height: 390px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

        .contact-hero-inner {
            position: relative;
            z-index: 1;
            padding-top: 95px;
        }

        .contact-hero .contact-title {
            max-width: 760px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.55rem, 7vw, 7.1rem);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.055em;
        }

        .contact-hero .contact-title em {
            color: #ead4a5;
            font-style: italic;
        }

        .contact-hero-copy {
            max-width: 525px;
            margin: 28px 0 35px;
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.04rem;
        }

        .contact-hero-note {
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

        .contact-hero-note::before {
            width: 35px;
            height: 1px;
            background: #e8d0a3;
            content: "";
        }

        /* MAIN JOURNEY */
        .contact-main {
            position: relative;
            overflow: hidden;
            padding: 92px 0 115px;
            background:
                radial-gradient(circle at 7% 16%, rgba(145, 181, 124, 0.36), transparent 21%),
                radial-gradient(circle at 93% 79%, rgba(210, 165, 91, 0.19), transparent 20%),
                linear-gradient(135deg, #e8f0e2 0%, #fbfaf6 50%, #efe4d0 100%);
        }

        .contact-main::before {
            position: absolute;
            top: 230px;
            left: -120px;
            width: 250px;
            height: 250px;
            border: 1px solid rgba(22, 60, 45, 0.11);
            border-radius: 50%;
            content: "";
        }

        .contact-main::after {
            position: absolute;
            right: -95px;
            bottom: 100px;
            width: 245px;
            height: 245px;
            border: 1px solid rgba(207, 164, 91, 0.30);
            border-radius: 50%;
            content: "";
        }

        .contact-main > * {
            position: relative;
            z-index: 1;
        }

        .contact-intro {
            display: grid;
            grid-template-columns: 1.05fr 0.75fr;
            gap: 78px;
            align-items: end;
            margin-bottom: 48px;
        }

        .contact-intro p {
            max-width: 415px;
            margin: 0 0 5px;
            color: var(--muted);
        }

        /* INFO CARDS */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .info-card {
            min-height: 215px;
            padding: 26px;
            border: 1px solid rgba(22, 60, 45, 0.13);
            border-radius: 19px;
            background: rgba(255, 255, 255, 0.76);
            box-shadow: 0 11px 28px rgba(20, 54, 40, 0.05);
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        .info-card:hover {
            box-shadow: var(--shadow);
            transform: translateY(-6px);
        }

        .info-icon {
            display: grid;
            width: 38px;
            height: 38px;
            margin-bottom: 19px;
            place-items: center;
            border-radius: 50%;
            color: var(--forest);
            background: #e4eedc;
            font-size: 1rem;
        }

        .info-card h3 {
            margin: 0 0 9px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.28rem;
        }

        .info-card p {
            margin: 0;
            color: var(--muted);
            font-size: 0.84rem;
            line-height: 1.65;
        }

        .info-card a {
            display: inline-flex;
            gap: 7px;
            align-items: center;
            margin-top: 15px;
            color: var(--forest);
            font-size: 0.82rem;
            font-weight: 700;
        }

        .info-card a:hover {
            color: var(--moss);
        }

        /* MAP + CONTACT FORM */
        .contact-layout {
            display: grid;
            grid-template-columns: 1.12fr 0.88fr;
            gap: 26px;
            margin-top: 72px;
        }

        .map-panel {
            overflow: hidden;
            border: 1px solid rgba(22, 60, 45, 0.12);
            border-radius: 28px;
            background: #e2ecd9;
            box-shadow: var(--shadow);
        }

        .map-panel-top {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 26px;
            padding: 39px 42px 30px;
            background:
                radial-gradient(circle at 92% 2%, rgba(207, 164, 91, 0.16), transparent 25%),
                #e2ecd9;
        }

        .map-panel-top h3 {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2rem, 3.2vw, 2.95rem);
            line-height: 1.08;
            letter-spacing: -0.04em;
        }

        .map-panel-top p {
            max-width: 315px;
            margin: 0;
            color: #506259;
            font-size: 0.86rem;
        }

        .map-frame-contact {
            position: relative;
            height: 465px;
        }

        .map-frame-contact::after {
            position: absolute;
            right: 19px;
            bottom: 18px;
            padding: 8px 11px;
            border-radius: 999px;
            color: #ffffff;
            background: rgba(11, 40, 29, 0.84);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            content: "Kebun Teh Wonosari";
            font-size: 0.67rem;
            font-weight: 700;
        }

        .map-frame-contact iframe {
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .message-panel {
            position: relative;
            overflow: hidden;
            padding: 42px;
            border-radius: 28px;
            color: #ffffff;
            background:
                radial-gradient(circle at 93% 9%, rgba(183, 205, 168, 0.20), transparent 24%),
                radial-gradient(circle at 3% 96%, rgba(210, 165, 91, 0.15), transparent 22%),
                linear-gradient(135deg, #123b2b, #1d4b38);
            box-shadow: var(--shadow);
        }

        .message-panel::after {
            position: absolute;
            right: -52px;
            bottom: -58px;
            width: 205px;
            height: 205px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            content: "";
        }

        .message-panel > * {
            position: relative;
            z-index: 1;
        }

        .message-panel h2 {
            max-width: 420px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.1rem, 3.7vw, 3.25rem);
            line-height: 1.08;
            letter-spacing: -0.04em;
        }

        .message-panel > p {
            margin: 16px 0 28px;
            color: rgba(255, 255, 255, 0.74);
            font-size: 0.9rem;
        }

        .contact-form {
            display: grid;
            gap: 16px;
        }

        .field-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 13px;
        }

        .form-group {
            display: grid;
            gap: 7px;
        }

        .form-group label {
            color: rgba(255, 255, 255, 0.87);
            font-size: 0.77rem;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.32);
            border-radius: 12px;
            outline: 0;
            color: var(--ink);
            background: rgba(255, 255, 255, 0.95);
            font: inherit;
            font-size: 0.87rem;
            transition: border-color 160ms ease, box-shadow 160ms ease;
        }

        .form-group input {
            height: 48px;
            padding: 0 14px;
        }

        .form-group textarea {
            min-height: 119px;
            padding: 13px 14px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #e7d1a4;
            box-shadow: 0 0 0 3px rgba(231, 209, 164, 0.22);
        }

        .form-submit {
            min-height: 51px;
            margin-top: 3px;
            border: 1px solid #f1dfba;
            border-radius: 999px;
            color: var(--deep);
            background: #f1dfba;
            font: inherit;
            font-size: 0.88rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 180ms ease, background 180ms ease;
        }

        .form-submit:hover {
            background: #ffffff;
            transform: translateY(-3px);
        }

        .form-note {
            margin: 2px 0 0;
            color: rgba(255, 255, 255, 0.56);
            font-size: 0.72rem;
            text-align: center;
        }

        /* FAQ */
        .contact-faq {
            display: grid;
            grid-template-columns: 0.75fr 1.25fr;
            gap: 76px;
            align-items: start;
            margin-top: 112px;
        }

        .contact-faq p {
            color: var(--muted);
        }

        .faq-list {
            display: grid;
            gap: 10px;
        }

        .faq-item {
            padding: 18px 20px;
            border: 1px solid rgba(22, 60, 45, 0.12);
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.68);
        }

        .faq-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--forest);
            font-size: 0.9rem;
        }

        .faq-item span {
            color: var(--muted);
            font-size: 0.83rem;
        }

        @media (max-width: 980px) {
            .contact-intro,
            .contact-faq {
                grid-template-columns: 1fr;
                gap: 26px;
            }

            .info-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .contact-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 760px) {
            .contact-container {
                width: min(100% - 36px, 1180px);
            }

            .contact-hero {
                min-height: 650px;
                background-position: 58% center;
            }

            .contact-hero-inner {
                padding-top: 86px;
            }

            .contact-hero .contact-title {
                font-size: clamp(3.2rem, 15vw, 4.7rem);
            }

            .contact-hero-note {
                display: none;
            }

            .contact-main {
                padding: 76px 0;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .map-panel-top {
                align-items: flex-start;
                flex-direction: column;
                padding: 35px 27px 26px;
            }

            .map-frame-contact {
                height: 345px;
            }

            .message-panel {
                padding: 38px 27px;
            }

            .field-row {
                grid-template-columns: 1fr;
            }

            .contact-faq {
                margin-top: 75px;
            }

            .contact-main::before,
            .contact-main::after {
                display: none;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <!-- HERO -->
        <header class="contact-hero">
            <div class="contact-container contact-hero-inner">
                <p class="contact-eyebrow contact-eyebrow--light">
                    Pusat bantuan & lokasi
                </p>

                <h1 class="contact-title">
                    Mari rencanakan<br>
                    perjalananmu <em>bersama.</em>
                </h1>

                <p class="contact-hero-copy">
                    Temukan lokasi Kebun Teh Wonosari, jam kunjungan, dan cara terbaik
                    untuk menghubungi kami sebelum memulai perjalanan.
                </p>
            </div>

            <div class="contact-hero-note">Scroll untuk menjelajah</div>
        </header>

        <section class="contact-main">
            <div class="contact-container">
                <div class="contact-intro">
                    <div>
                        <p class="contact-eyebrow">Informasi kunjungan</p>
                        <h2 class="contact-section-title">
                            Segala yang perlu kamu tahu sebelum datang.
                        </h2>
                    </div>

                    <p>
                        Siapkan perjalananmu bersama keluarga, teman, sekolah, maupun komunitas.
                        Kami siap membantu informasi kunjungan dan reservasi.
                    </p>
                </div>

                <div class="info-grid">
                    <article class="info-card">
                        <span class="info-icon">⌖</span>
                        <h3>Lokasi</h3>
                        <p>
                            Wisata Agro Kebun Teh Wonosari, Toyomarto, Kecamatan Singosari,
                            Kabupaten Malang, Jawa Timur 65153.
                        </p>
                        <a href="https://maps.google.com/?q=Kebun+Teh+Wonosari" target="_blank" rel="noopener">
                            Buka peta <span>↗</span>
                        </a>
                    </article>

                    <article class="info-card">
                        <span class="info-icon">◷</span>
                        <h3>Jam kunjungan</h3>
                        <p>
                            Senin — Jumat<br>
                            08.00 — 17.00 WIB
                        </p>
                        <p style="margin-top: 10px;">
                            Sabtu — Minggu<br>
                            07.00 — 18.00 WIB
                        </p>
                    </article>

                    <article class="info-card">
                        <span class="info-icon">◉</span>
                        <h3>WhatsApp</h3>
                        <p>
                            Butuh jawaban cepat? Hubungi kami melalui WhatsApp untuk
                            tanya informasi kunjungan.
                        </p>
                        <a href="#" target="_blank" rel="noopener">
                            Chat via WhatsApp <span>↗</span>
                        </a>
                    </article>

                    <article class="info-card">
                        <span class="info-icon">✉</span>
                        <h3>Email</h3>
                        <p>
                            Untuk pertanyaan, kerja sama, atau kebutuhan informasi lebih lanjut.
                        </p>
                        <a href="mailto:explorewonosari@gmail.com">
                            explorewonosari@gmail.com <span>↗</span>
                        </a>
                    </article>
                </div>

                <div class="contact-layout">
                    <section class="map-panel">
                        <div class="map-panel-top">
                            <div>
                                <p class="contact-eyebrow">Temukan kami</p>
                                <h3>Mulai perjalanan dari lereng Gunung Arjuno.</h3>
                            </div>

                            <p>
                                Nikmati perjalanan menuju kawasan kebun teh yang sejuk di Singosari, Malang.
                            </p>
                        </div>

                        <div class="map-frame-contact">
                            <iframe
                                title="Lokasi Kebun Teh Wonosari"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.021853075386!2d112.52327077206638!3d-7.82449237668602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b2bd79f413%3A0x9f9e56ee2fd46b6c!2sKebun%20Teh%20Wonosari!5e0!3m2!1sid!2sid!4v1700000000000"
                                loading="lazy"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </section>

                    <section class="message-panel">
                        <p class="contact-eyebrow contact-eyebrow--light">Kirim pesan</p>
                        <h2>Butuh bantuan untuk merencanakan kunjungan?</h2>
                        <p>
                            Kirim pertanyaan atau kebutuhan reservasi kamu. Tim kami akan merespons
                            pada hari kerja.
                        </p>

                        <form class="contact-form">
                            <div class="form-group">
                                <label for="nama">Nama lengkap</label>
                                <input id="nama" name="nama" type="text" placeholder="Masukkan nama kamu">
                            </div>

                            <div class="field-row">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" placeholder="email@contoh.com">
                                </div>

                                <div class="form-group">
                                    <label for="whatsapp">WhatsApp</label>
                                    <input id="whatsapp" name="whatsapp" type="text" placeholder="08xxxxxxxxxx">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea id="pesan" name="pesan" placeholder="Ceritakan kebutuhan kunjungan atau pertanyaanmu"></textarea>
                            </div>

                            <button type="button" class="form-submit">
                                Kirim pesan <span>↗</span>
                            </button>

                            <p class="form-note">
                                Form ini digunakan untuk permintaan informasi dan reservasi.
                            </p>
                        </form>
                    </section>
                </div>

                <section class="contact-faq">
                    <div>
                        <p class="contact-eyebrow">Bantuan singkat</p>
                        <h2 class="contact-section-title">Sebelum berkunjung.</h2>
                        <p>
                            Beberapa jawaban singkat untuk membantu mempersiapkan perjalanan
                            ke Kebun Teh Wonosari.
                        </p>
                    </div>

                    <div class="faq-list">
                        <article class="faq-item">
                            <strong>Apakah perlu reservasi sebelum datang?</strong>
                            <span>
                                Untuk kunjungan rombongan, outbound, atau paket tertentu,
                                sebaiknya hubungi kami lebih dahulu.
                            </span>
                        </article>

                        <article class="faq-item">
                            <strong>Apakah cocok untuk keluarga dan anak-anak?</strong>
                            <span>
                                Ya, Wonosari menyediakan suasana wisata alam, edukasi, serta aktivitas
                                yang dapat dinikmati bersama keluarga.
                            </span>
                        </article>

                        <article class="faq-item">
                            <strong>Apa waktu terbaik untuk berkunjung?</strong>
                            <span>
                                Pagi hingga siang hari ideal untuk menikmati udara sejuk
                                dan pemandangan kebun teh yang lebih jelas.
                            </span>
                        </article>
                    </div>
                </section>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
