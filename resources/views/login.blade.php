<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — Explore Wonosari</title>

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
            --ivory: #f8f5ee;
            --paper: #fffdf9;
            --gold: #d3ad71;
            --muted: #68756c;
            --line: rgba(18, 59, 43, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
            color: var(--forest);
            background:
                radial-gradient(circle at 13% 12%, rgba(136, 173, 111, 0.33), transparent 22%),
                radial-gradient(circle at 86% 86%, rgba(211, 173, 113, 0.18), transparent 25%),
                linear-gradient(135deg, #09291d 0%, #123b2b 52%, #174834 100%);
            font-family: "DM Sans", Arial, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .auth-page {
            position: relative;
            display: grid;
            min-height: 100vh;
            grid-template-columns: minmax(0, 1fr) minmax(390px, 0.82fr);
            overflow: hidden;
        }

        .auth-page::before {
            position: absolute;
            top: -160px;
            right: 35%;
            width: 370px;
            height: 370px;
            border: 1px solid rgba(255, 255, 255, 0.13);
            border-radius: 50%;
            content: "";
        }

        .auth-page::after {
            position: absolute;
            bottom: -130px;
            left: -80px;
            width: 270px;
            height: 270px;
            border: 1px solid rgba(226, 190, 127, 0.32);
            border-radius: 50%;
            content: "";
        }

        .auth-intro {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 48px clamp(42px, 7vw, 120px);
            color: #ffffff;
        }

        .auth-brand {
            display: inline-flex;
            flex-direction: column;
            align-self: flex-start;
            line-height: 1;
        }

        .auth-brand strong {
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: 1.72rem;
            letter-spacing: 0.08em;
        }

        .auth-brand span {
            margin-top: 6px;
            color: rgba(255, 255, 255, 0.76);
            font-size: 0.53rem;
            font-weight: 700;
            letter-spacing: 0.17em;
        }

        .auth-copy {
            max-width: 600px;
            margin: auto 0;
            padding: 80px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.78);
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 30px;
            height: 1px;
            background: #e6ca96;
            content: "";
        }

        .auth-copy h1 {
            max-width: 600px;
            margin: 0;
            color: #ffffff;
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(3.3rem, 5.6vw, 6.2rem);
            font-weight: 600;
            line-height: 0.93;
            letter-spacing: -0.06em;
        }

        .auth-copy h1 em {
            color: #e9cc98;
            font-style: italic;
        }

        .auth-copy p {
            max-width: 440px;
            margin: 24px 0 0;
            color: rgba(255, 255, 255, 0.72);
            font-size: 0.93rem;
            line-height: 1.75;
        }

        .auth-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            align-self: flex-start;
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.78rem;
            font-weight: 700;
        }

        .auth-back:hover {
            color: #e9cc98;
        }

        .auth-panel {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 46px;
            background: var(--ivory);
        }

        .auth-card {
            width: min(100%, 420px);
        }

        .auth-card .eyebrow {
            margin-bottom: 16px;
            color: var(--leaf);
        }

        .auth-card .eyebrow::before {
            background: var(--gold);
        }

        .auth-card h2 {
            margin: 0;
            color: var(--forest);
            font-family: "Playfair Display", Georgia, serif;
            font-size: clamp(2.45rem, 4vw, 3.45rem);
            font-weight: 600;
            line-height: 1;
            letter-spacing: -0.05em;
        }

        .auth-card > p {
            margin: 14px 0 32px;
            color: var(--muted);
            font-size: 0.87rem;
            line-height: 1.65;
        }

        .auth-form {
            display: grid;
            gap: 20px;
        }

        .field {
            display: grid;
            gap: 8px;
        }

        .field label {
            color: var(--forest);
            font-size: 0.76rem;
            font-weight: 700;
        }

        .field input {
            width: 100%;
            min-height: 52px;
            padding: 0 15px;
            border: 1px solid var(--line);
            border-radius: 0;
            outline: 0;
            color: var(--forest);
            background: #ffffff;
            font-family: inherit;
            font-size: 0.87rem;
            transition: border-color 180ms ease, box-shadow 180ms ease;
        }

        .field input:focus {
            border-color: var(--leaf);
            box-shadow: 0 0 0 4px rgba(111, 145, 96, 0.14);
        }

        .field input::placeholder {
            color: #a0aaa3;
        }

        .auth-submit {
            width: 100%;
            min-height: 52px;
            margin-top: 5px;
            border: 0;
            border-radius: 999px;
            color: #ffffff;
            background: var(--forest);
            font-family: inherit;
            font-size: 0.82rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 180ms ease, transform 180ms ease;
        }

        .auth-submit:hover {
            background: var(--forest-deep);
            transform: translateY(-2px);
        }

        .auth-switch {
            margin: 24px 0 0;
            padding-top: 23px;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 0.82rem;
            text-align: center;
        }

        .auth-switch a {
            color: var(--forest);
            font-weight: 700;
        }

        .auth-switch a:hover {
            color: var(--leaf);
        }

        @media (max-width: 850px) {
            .auth-page {
                display: block;
            }

            .auth-intro {
                min-height: 365px;
                padding: 33px 30px;
            }

            .auth-copy {
                margin: 0;
                padding: 48px 0 25px;
            }

            .auth-copy h1 {
                font-size: clamp(3.25rem, 11vw, 5rem);
            }

            .auth-back {
                display: none;
            }

            .auth-panel {
                min-height: auto;
                padding: 62px 30px;
            }
        }

        @media (max-width: 460px) {
            .auth-intro {
                min-height: 335px;
                padding: 28px 22px;
            }

            .auth-panel {
                padding: 48px 22px;
            }
        }
    </style>
</head>

<body>
    <main class="auth-page">
        <section class="auth-intro">
            <a href="{{ url('/') }}" class="auth-brand">
                <strong>WONOSARI</strong>
                <span>EXPLOREWONOSARI.ID</span>
            </a>

            <div class="auth-copy">
                <span class="eyebrow">Kembali ke Wonosari</span>

                <h1>
                    Masuk, lalu<br>
                    lanjutkan<br>
                    <em>perjalananmu.</em>
                </h1>

                <p>
                    Simpan rencana kunjungan, lihat detail reservasi,
                    dan nikmati pengalaman Wonosari dengan lebih mudah.
                </p>
            </div>

            <a href="{{ url('/') }}" class="auth-back">
                <span>←</span> Kembali ke beranda
            </a>
        </section>

        <section class="auth-panel">
            <div class="auth-card">
                <span class="eyebrow">Akun pengunjung</span>

                <h2>Selamat datang.</h2>

                <p>
                    Masukkan email dan password untuk melanjutkan ke akunmu.
                </p>

                <form class="auth-form" onsubmit="return false">
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="nama@email.com" required>
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Masukkan password" required>
                    </div>

                    <button type="submit" class="auth-submit">
                        Masuk ke akun <span>→</span>
                    </button>
                </form>

                <p class="auth-switch">
                    Belum punya akun?
                    <a
