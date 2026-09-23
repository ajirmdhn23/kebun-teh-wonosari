<style>
    /* RESET KHUSUS NAVBAR */
    #navbar-wonosari,
    #navbar-wonosari *,
    #navbar-wonosari a,
    #navbar-wonosari a:visited,
    #navbar-wonosari a:hover,
    #navbar-wonosari a:focus {
        box-sizing: border-box !important;
        color: #ffffff !important;
        opacity: 1 !important;
        filter: none !important;
        text-decoration: none !important;
        text-shadow: none !important;
    }

    #navbar-wonosari {
        position: absolute !important;
        z-index: 999999 !important;
        top: 0 !important;
        right: 0 !important;
        left: 0 !important;
        display: block !important;
        width: 100% !important;
        padding: 28px 0 !important;
        background: transparent !important;
        font-family: "DM Sans", Arial, sans-serif !important;
    }

    #navbar-wonosari .navbar-wrap {
        display: flex !important;
        width: min(1360px, calc(100% - 64px)) !important;
        margin: 0 auto !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 30px !important;
    }

    #navbar-wonosari .navbar-logo {
        display: inline-flex !important;
        flex-direction: column !important;
        flex-shrink: 0 !important;
        line-height: 1 !important;
    }

    #navbar-wonosari .navbar-logo-main {
        color: #ffffff !important;
        font-family: "Playfair Display", Georgia, serif !important;
        font-size: 1.55rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.08em !important;
    }

    #navbar-wonosari .navbar-logo-sub {
        margin-top: 5px !important;
        color: #ffffff !important;
        font-size: 0.50rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.16em !important;
    }

    #navbar-wonosari .navbar-menu {
        display: flex !important;
        align-items: center !important;
        gap: clamp(16px, 1.75vw, 31px) !important;
        font-size: 0.78rem !important;
        font-weight: 700 !important;
        white-space: nowrap !important;
    }

    #navbar-wonosari .navbar-link {
        display: inline-block !important;
        padding: 8px 0 !important;
        border-bottom: 1px solid transparent !important;
        color: #ffffff !important;
        transition: color 180ms ease, border-color 180ms ease !important;
    }

    #navbar-wonosari .navbar-link:hover {
        color: #ecd3a1 !important;
    }

    #navbar-wonosari .navbar-link.active {
        color: #ecd3a1 !important;
        border-bottom-color: #ecd3a1 !important;
    }

    #navbar-wonosari .navbar-ticket {
        display: inline-flex !important;
        min-height: 42px !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 0 18px !important;
        border: 1px solid rgba(255, 255, 255, 0.62) !important;
        border-radius: 999px !important;
        color: #ffffff !important;
        transition: background 180ms ease, color 180ms ease !important;
    }

    #navbar-wonosari .navbar-ticket:hover {
        color: #123b2b !important;
        background: #ffffff !important;
    }

    @media (max-width: 900px) {
        #navbar-wonosari {
            padding: 20px 0 !important;
        }

        #navbar-wonosari .navbar-wrap {
            width: min(100% - 36px, 1360px) !important;
        }

        #navbar-wonosari .navbar-menu {
            gap: 13px !important;
            font-size: 0.70rem !important;
        }

        #navbar-wonosari .navbar-ticket {
            padding: 0 13px !important;
        }
    }
</style>

<nav id="navbar-wonosari">
    <div class="navbar-wrap">
        <a href="{{ route('beranda') }}" class="navbar-logo">
            <span class="navbar-logo-main">WONOSARI</span>
            <span class="navbar-logo-sub">EXPLOREWONOSARI.ID</span>
        </a>

        <div class="navbar-menu">
            <a
                href="{{ route('beranda') }}"
                class="navbar-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
            >
                Beranda
            </a>

            <a
                href="{{ route('kontak') }}"
                class="navbar-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
            >
                Kunjungi
            </a>

            <a
                href="{{ route('paket') }}"
                class="navbar-link {{ request()->routeIs('paket') ? 'active' : '' }}"
            >
                Paket Wisata
            </a>

            <a
                href="{{ route('pemesanan') }}"
                class="navbar-link {{ request()->routeIs('pemesanan') ? 'active' : '' }}"
            >
                Reservasi
            </a>

            <a
                href="{{ route('katalog') }}"
                class="navbar-link {{ request()->routeIs('katalog') ? 'active' : '' }}"
            >
                Produk
            </a>

            <a
                href="{{ route('event') }}"
                class="navbar-link {{ request()->routeIs('event') ? 'active' : '' }}"
            >
                Event
            </a>

            <a href="{{ route('pemesanan') }}" class="navbar-ticket">
                Pesan Tiket
            </a>
        </div>
    </div>
</nav>
