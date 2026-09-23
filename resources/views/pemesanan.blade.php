<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Kunjungan — Explore Wonosari</title>

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
            --shadow: 0 18px 45px rgba(18, 59, 43, 0.10);
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

        button,
        input {
            font: inherit;
        }

        button {
            cursor: pointer;
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
            font-size: clamp(2.45rem, 4.4vw, 4.6rem);
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

        .button--light {
            color: var(--forest);
            background: #ffffff;
        }

        .button--light:hover {
            background: var(--sage);
        }

        /* ==================================================
           HERO RESERVASI — UKURAN DAN FOTO SAMA BERANDA
           ================================================== */
    .booking-hero {
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

        .booking-hero::before {
            position: absolute;
            top: -130px;
            right: -86px;
            width: 390px;
            height: 390px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            content: "";
        }

        .booking-hero-content {
    position: relative;
    z-index: 1;
    max-width: 760px;
    padding-top: 38px;
}

        .booking-title {
            max-width: 760px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.55rem, 7vw, 7.1rem);
            font-weight: 600;
            line-height: 0.95;
            letter-spacing: -0.055em;
        }

        .booking-title em {
            color: #ead4a5;
            font-style: italic;
        }

        .booking-intro {
            max-width: 525px;
            margin: 28px 0 35px;
            color: rgba(255, 255, 255, 0.84);
            font-size: 1.04rem;
        }

        .booking-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px 28px;
            margin-top: 0;
        }

        .booking-meta span {
            color: #dce9d1;
            font-size: 0.70rem;
            font-weight: 700;
            letter-spacing: 0.08em;
        }

        .booking-meta span + span {
            padding-left: 28px;
            border-left: 1px solid rgba(255, 255, 255, 0.26);
        }

        .booking-hero-note {
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

        .booking-hero-note::before {
            width: 35px;
            height: 1px;
            background: #e8d0a3;
            content: "";
        }

        /* ==================================================
           FORM RESERVASI
           ================================================== */
        .booking-section {
            position: relative;
            overflow: hidden;
            padding: 118px 0 125px;
            background:
                radial-gradient(circle at 8% 10%, rgba(191, 215, 177, 0.48), transparent 22%),
                radial-gradient(circle at 94% 84%, rgba(215, 177, 109, 0.22), transparent 24%),
                linear-gradient(135deg, #edf4e9 0%, #f9f5ec 54%, #eadabc 100%);
        }

        .booking-section::after {
            position: absolute;
            right: -115px;
            bottom: -125px;
            width: 290px;
            height: 290px;
            border: 1px solid rgba(211, 173, 113, 0.34);
            border-radius: 50%;
            content: "";
        }

        .booking-section .page-container {
            position: relative;
            z-index: 1;
        }

        .booking-heading {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(270px, 385px);
            gap: 65px;
            align-items: end;
            margin-bottom: 54px;
        }

        .booking-heading > p {
            margin: 0 0 5px;
            color: var(--muted);
            font-size: 0.93rem;
        }

        .booking-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(310px, 0.45fr);
            gap: 25px;
            align-items: start;
        }

        .booking-form-card {
            padding: 40px;
            border: 1px solid rgba(18, 59, 43, 0.15);
            background: rgba(255, 253, 249, 0.88);
            box-shadow: var(--shadow);
        }

        .form-intro {
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--line);
        }

        .form-intro h3 {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 2rem;
            font-weight: 600;
            line-height: 1.15;
        }

        .form-intro p {
            margin: 9px 0 0;
            color: var(--muted);
            font-size: 0.86rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 21px 20px;
        }

        .form-field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-field--wide {
            grid-column: span 2;
        }

        .form-field label {
            color: var(--forest);
            font-size: 0.76rem;
            font-weight: 700;
        }

        .form-field label span {
            color: var(--leaf);
        }

        .form-field input {
            width: 100%;
            min-height: 52px;
            padding: 0 16px;
            border: 1px solid rgba(18, 59, 43, 0.18);
            border-radius: 0;
            outline: none;
            color: var(--forest);
            background: #ffffff;
            font-size: 0.87rem;
            transition: border-color 180ms ease, box-shadow 180ms ease;
        }

        .form-field input:focus {
            border-color: var(--leaf);
            box-shadow: 0 0 0 4px rgba(111, 145, 96, 0.14);
        }

        .form-field input::placeholder {
            color: #a0aaa3;
        }

        .booking-total {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 29px;
            padding: 20px 21px;
            border: 1px solid rgba(18, 59, 43, 0.17);
            background: var(--sage-pale);
        }

        .booking-total span {
            display: block;
            color: var(--leaf);
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .booking-total strong {
            display: block;
            margin-top: 4px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.78rem;
            font-weight: 600;
            line-height: 1;
        }

        .booking-submit {
            width: 100%;
            margin-top: 19px;
            border: 0;
        }

        /* INFO SAMPING */
        .booking-info {
            overflow: hidden;
            border: 1px solid rgba(18, 59, 43, 0.15);
            background: rgba(255, 253, 249, 0.72);
            box-shadow: 0 12px 30px rgba(18, 59, 43, 0.06);
        }

        .booking-info-image {
            position: relative;
            height: 205px;
            overflow: hidden;
        }

        .booking-info-image::after {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(8, 42, 28, 0.54), transparent 66%);
            content: "";
        }

        .booking-info-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .booking-info-content {
            padding: 29px 28px 30px;
        }

        .booking-info-content h3 {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.75rem;
            font-weight: 600;
            line-height: 1.16;
        }

        .booking-info-content > p {
            margin: 11px 0 0;
            color: var(--muted);
            font-size: 0.82rem;
        }

        .booking-info-list {
            display: grid;
            gap: 0;
            margin: 25px 0 0;
            border-top: 1px solid var(--line);
        }

        .booking-info-list div {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 13px 0;
            border-bottom: 1px solid var(--line);
        }

        .booking-info-list span {
            color: var(--leaf);
            font-size: 0.67rem;
            font-weight: 700;
            letter-spacing: 0.07em;
            text-transform: uppercase;
        }

        .booking-info-list strong {
            color: var(--forest);
            font-size: 0.75rem;
            font-weight: 700;
            text-align: right;
        }

        .booking-note {
            margin-top: 23px;
            padding: 15px 16px;
            border-left: 2px solid var(--gold);
            color: #5e7065;
            background: rgba(223, 233, 214, 0.56);
            font-size: 0.76rem;
            line-height: 1.65;
        }

        /* ==================================================
           MODAL QRIS
           ================================================== */
        .modal-backdrop {
            position: fixed;
            z-index: 99999;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(5, 29, 20, 0.68);
            backdrop-filter: blur(5px);
        }

        .modal-backdrop.is-open {
            display: flex;
        }

        .modal-card {
            width: min(100%, 430px);
            max-height: calc(100vh - 48px);
            overflow-y: auto;
            padding: 31px;
            border: 1px solid rgba(255, 255, 255, 0.22);
            background: var(--paper);
            box-shadow: 0 25px 65px rgba(0, 0, 0, 0.28);
        }

        .modal-card h3 {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 2rem;
            font-weight: 600;
            text-align: center;
        }

        .modal-card > p {
            margin: 9px auto 22px;
            color: var(--muted);
            font-size: 0.80rem;
            text-align: center;
        }

        .qris-image {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--line);
            background: #ffffff;
        }

        .qris-image img {
            width: 100%;
            max-height: 340px;
            object-fit: contain;
        }

        .modal-total {
            margin: 20px 0;
            color: var(--forest);
            font-size: 0.9rem;
            font-weight: 700;
            text-align: center;
        }

        .modal-total strong {
            display: block;
            margin-top: 5px;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.75rem;
            font-weight: 600;
        }

        .modal-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .modal-button {
            min-height: 46px;
            border: 1px solid var(--forest);
            border-radius: 0;
            color: var(--forest);
            background: transparent;
            font-size: 0.78rem;
            font-weight: 700;
            transition: background 180ms ease, color 180ms ease;
        }

        .modal-button:hover {
            color: #ffffff;
            background: var(--forest);
        }

        .modal-button--forest {
            color: #ffffff;
            background: var(--forest);
        }

        .modal-button--forest:hover {
            background: var(--forest-deep);
        }

        /* ==================================================
           INVOICE
           ================================================== */
        .invoice-list {
            margin: 24px 0 0;
            border-top: 1px solid var(--line);
        }

        .invoice-list div {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid var(--line);
            font-size: 0.81rem;
        }

        .invoice-list span:first-child {
            color: var(--leaf);
            font-weight: 700;
        }

        .invoice-list span:last-child {
            max-width: 58%;
            color: var(--forest);
            font-weight: 700;
            text-align: right;
            word-break: break-word;
        }

        .invoice-total {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
            padding: 17px;
            color: var(--forest);
            background: var(--sage-pale);
            font-size: 0.80rem;
            font-weight: 700;
        }

        .invoice-total strong {
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.45rem;
            font-weight: 600;
        }

        .invoice-close {
            width: 100%;
            margin-top: 18px;
        }

        /* ==================================================
           RESPONSIVE
           ================================================== */
        @media (max-width: 980px) {
            .booking-heading,
            .booking-layout {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .booking-info {
                display: grid;
                grid-template-columns: 0.8fr 1.2fr;
            }

            .booking-info-image {
                height: 100%;
                min-height: 320px;
            }
        }

        @media (max-width: 700px) {
            .page-container {
                width: min(100% - 36px, 1200px);
            }

            .booking-hero {
                min-height: 650px;
                background-position: 58% center;
            }

            .booking-hero-content {
                padding-top: 145px;
            }

            .booking-title {
                font-size: clamp(3.2rem, 15vw, 4.7rem);
            }

            .booking-hero-note {
                display: none;
            }

            .booking-meta span + span {
                padding-left: 0;
                border-left: 0;
            }

            .booking-section {
                padding: 76px 0;
            }

            .booking-form-card {
                padding: 27px 23px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-field--wide {
                grid-column: auto;
            }

            .booking-total {
                align-items: flex-start;
                flex-direction: column;
            }

            .booking-info {
                display: block;
            }

            .booking-info-image {
                height: 220px;
                min-height: 0;
            }

            .booking-info-content {
                padding: 25px 23px;
            }

            .modal-card {
                padding: 25px 21px;
            }

            .modal-actions {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <!-- HERO -->
        <header class="booking-hero">
            <div class="page-container booking-hero-content">
                <p class="eyebrow eyebrow--light">Reservasi kunjungan</p>

                <h1 class="booking-title">
                    Waktu terbaik<br>
                    untuk datang<br>
                    <em>lebih dekat.</em>
                </h1>

                <p class="booking-intro">
                    Rencanakan pengalamanmu di Wisata Agro Wonosari. Isi detail
                    kunjunganmu, lalu kami bantu siapkan hari yang tepat di kebun teh.
                </p>

                <div class="booking-meta">
                    <span>Singosari, Malang</span>
                    <span>Setiap hari · 07.00—17.00 WIB</span>
                    <span>Mulai Rp25.000 / orang</span>
                </div>
            </div>

            <div class="booking-hero-note">Scroll untuk menjelajah</div>
        </header>

        <!-- FORM -->
        <section class="booking-section">
            <div class="page-container">
                <div class="booking-heading">
                    <div>
                        <p class="eyebrow">Form reservasi</p>

                        <h2 class="section-title">
                            Ceritakan rencana<br>
                            kunjunganmu.
                        </h2>
                    </div>

                    <p>
                        Lengkapi informasi berikut untuk menghitung estimasi biaya
                        dan melanjutkan pembayaran melalui QRIS.
                    </p>
                </div>

                <div class="booking-layout">
                    <!-- FORM UTAMA -->
                    <section class="booking-form-card">
                        <div class="form-intro">
                            <h3>Detail pengunjung</h3>

                            <p>
                                Pastikan nomor WhatsApp dan email yang kamu masukkan aktif,
                                agar informasi reservasi dapat kami kirimkan.
                            </p>
                        </div>

                        <form id="bookingForm" onsubmit="return false">
                            <div class="form-grid">
                                <div class="form-field form-field--wide">
                                    <label for="nama">Nama lengkap <span>01</span></label>
                                    <input id="nama" type="text" placeholder="Masukkan nama lengkap">
                                </div>

                                <div class="form-field">
                                    <label for="email">Email <span>02</span></label>
                                    <input id="email" type="email" placeholder="nama@email.com">
                                </div>

                                <div class="form-field">
                                    <label for="nomor">Nomor WhatsApp <span>03</span></label>
                                    <input id="nomor" type="tel" placeholder="08xxxxxxxxxx">
                                </div>

                                <div class="form-field">
                                    <label for="tanggal">Tanggal kunjungan <span>04</span></label>
                                    <input id="tanggal" type="date">
                                </div>

                                <div class="form-field">
                                    <label for="jumlahOrang">Jumlah orang <span>05</span></label>
                                    <input id="jumlahOrang" type="number" min="1" value="1">
                                </div>
                            </div>

                            <span id="hargaSatuan" hidden>25000</span>

                            <div class="booking-total">
                                <div>
                                    <span>Estimasi total kunjungan</span>
                                    <strong id="totalHarga">Rp25.000</strong>
                                </div>

                                <span>Harga tiket Rp25.000 / orang</span>
                            </div>

                            <button type="button" onclick="openQRIS()" class="button button--forest booking-submit">
                                Lanjut ke pembayaran <span>↗</span>
                            </button>
                        </form>
                    </section>

                    <!-- INFO SAMPING -->
                    <aside class="booking-info">
                        <div class="booking-info-image">
                            <img src="{{ asset('image/pemesanan.jpg') }}" alt="Suasana Kebun Teh Wonosari">
                        </div>

                        <div class="booking-info-content">
                            <h3>Hal yang perlu kamu tahu.</h3>

                            <p>
                                Siapkan kunjungan yang nyaman dengan mengetahui detail umum
                                sebelum datang ke Wonosari.
                            </p>

                            <div class="booking-info-list">
                                <div>
                                    <span>Lokasi</span>
                                    <strong>Singosari, Malang</strong>
                                </div>

                                <div>
                                    <span>Jam buka</span>
                                    <strong>07.00—17.00 WIB</strong>
                                </div>

                                <div>
                                    <span>Tiket</span>
                                    <strong>Rp25.000 / orang</strong>
                                </div>

                                <div>
                                    <span>Pembayaran</span>
                                    <strong>QRIS</strong>
                                </div>
                            </div>

                            <p class="booking-note">
                                Setelah pembayaran, simpan invoice sebagai bukti reservasi.
                                Untuk kunjungan rombongan, silakan hubungi kami lebih awal.
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <!-- MODAL QRIS -->
    <div id="modalQRIS" class="modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="qrisTitle">
        <div class="modal-card">
            <h3 id="qrisTitle">Pembayaran QRIS</h3>

            <p>
                Scan kode QR berikut sesuai estimasi total pembayaran reservasi kamu.
            </p>

            <div class="qris-image">
                <img src="{{ asset('image/qris.jpg') }}" alt="Kode pembayaran QRIS">
            </div>

            <div class="modal-total">
                Total pembayaran
                <strong id="qrisTotal">Rp25.000</strong>
            </div>

            <div class="modal-actions">
                <button type="button" onclick="closeQRIS()" class="modal-button">
                    Kembali
                </button>

                <button type="button" onclick="showInvoice()" class="modal-button modal-button--forest">
                    Lihat invoice
                </button>
            </div>
        </div>
    </div>

    <!-- MODAL INVOICE -->
    <div id="invoiceSection" class="modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="invoiceTitle">
        <div class="modal-card">
            <h3 id="invoiceTitle">Invoice reservasi</h3>

            <p>
                Simpan informasi berikut sebagai ringkasan pemesanan kunjunganmu.
            </p>

            <div class="invoice-list">
                <div>
                    <span>Nama</span>
                    <span id="invNama">-</span>
                </div>

                <div>
                    <span>WhatsApp</span>
                    <span id="invNomor">-</span>
                </div>

                <div>
                    <span>Email</span>
                    <span id="invEmail">-</span>
                </div>

                <div>
                    <span>Tanggal</span>
                    <span id="invTanggal">-</span>
                </div>

                <div>
                    <span>Jumlah orang</span>
                    <span id="invJumlah">1 orang</span>
                </div>
            </div>

            <div class="invoice-total">
                <span>Total pembayaran</span>
                <strong id="invTotal">Rp25.000</strong>
            </div>

            <button type="button" onclick="closeInvoice()" class="button button--forest invoice-close">
                Tutup invoice
            </button>
        </div>
    </div>

    @include('partials.footer')

    <script>
        const jumlah = document.getElementById('jumlahOrang');
        const harga = Number(document.getElementById('hargaSatuan').innerText);

        const nama = document.getElementById('nama');
        const nomor = document.getElementById('nomor');
        const email = document.getElementById('email');
        const tanggal = document.getElementById('tanggal');

        function formatRupiah(nominal) {
            return 'Rp' + nominal.toLocaleString('id-ID');
        }

        function getTotal() {
            return (Number(jumlah.value) || 0) * harga;
        }

        function updateTotal() {
            document.getElementById('totalHarga').innerText = formatRupiah(getTotal());
        }

        jumlah.addEventListener('input', updateTotal);
        updateTotal();

        function openQRIS() {
            if (!nama.value.trim() || !email.value.trim() || !nomor.value.trim() || !tanggal.value) {
                alert('Mohon lengkapi nama, email, nomor WhatsApp, dan tanggal kunjungan terlebih dahulu.');
                return;
            }

            document.getElementById('qrisTotal').innerText = formatRupiah(getTotal());
            document.getElementById('modalQRIS').classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeQRIS() {
            document.getElementById('modalQRIS').classList.remove('is-open');
            document.body.style.overflow = '';
        }

        function showInvoice() {
            closeQRIS();

            document.getElementById('invNama').innerText = nama.value.trim() || '-';
            document.getElementById('invNomor').innerText = nomor.value.trim() || '-';
            document.getElementById('invEmail').innerText = email.value.trim() || '-';
            document.getElementById('invTanggal').innerText = tanggal.value || '-';
            document.getElementById('invJumlah').innerText = (jumlah.value || '0') + ' orang';
            document.getElementById('invTotal').innerText = formatRupiah(getTotal());

            document.getElementById('invoiceSection').classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeInvoice() {
            document.getElementById('invoiceSection').classList.remove('is-open');
            document.body.style.overflow = '';
        }

        document.getElementById('modalQRIS').addEventListener('click', function (event) {
            if (event.target === this) {
                closeQRIS();
            }
        });

        document.getElementById('invoiceSection').addEventListener('click', function (event) {
            if (event.target === this) {
                closeInvoice();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeQRIS();
                closeInvoice();
            }
        });
    </script>
</body>
</html>
