<!-- Katalog Produk Kebun Teh Wonosari - TailwindCSS Version -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Berita Artikel Event Wonosari</title>
</head>
<body class="bg-[#0A8240] text-gray-800 font-sans">

<!-- NAVBAR -->
<nav>
  @include('partials.navbar')
</nav>

<!-- HERO IMAGE -->
<section class="max-w-6xl mx-auto px-4 mb-10">
  <img src="image/artikel.jpg" class="rounded-lg shadow-md w-full h-[300px] object-cover" />
  <h2 class="text-center text-2xl font-bold mt-4"></h2>
</section>

    {{-- Header --}}
    <div class="py-6 text-center">
        <h1 class="text-white text-xl font-bold tracking-wide">
            BERITA ARTIKEL EVENT
        </h1>
    </div>

    {{-- Container --}}
    <div class="max-w-6xl mx-auto px-6 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Card 1 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event1.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <a href="/testimoni" class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Hadirkan One Day Trip Seru di Tengah Kebun Teh Lawang
                    </a>
                    <p class="text-xs text-gray-600 mt-2">
                        Sabtu, 21 Juni 2025, di Kebun Teh Lawang, Kabupaten Malang — satu-satunya
                        kebun teh yang masih aktif di wilayah tersebut.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event2.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Hadirkan Wahana Game Kebun Teh Lawang
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Sabtu, 21 Juni 2025, di Kebun Teh Lawang, Kabupaten
                        Malang — suasana kebun teh yang masih aktif di
                        wilayah tersebut.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event3.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Malang, Liburan Edukatif di Tengah Perkebunan Teh
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Dikelola PTPN I Regional 5 Kebun Teh Wonosari,
                        tempat ini terkenal sebagai wisata edukasi teh
                        sekaligus destinasi liburan keluarga.
                    </p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event4.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Hadirkan Workshop Edukasi Pengolahan Teh
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Wisata Agro Wonosari mengadakan kegiatan edukatif
                        tentang proses pengolahan teh mulai dari pemetikan
                        hingga pengemasan. Pengunjung dapat mengenal lebih
                        dekat proses produksi teh khas Wonosari.
                    </p>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event5.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Malang, Liburan Edukatif di Tengah Perkebunan Teh
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Dikelola PTPN I Regional 5 Kebun Teh Wonosari,
                        tempat ini terkenal sebagai wisata edukasi teh
                        sekaligus destinasi liburan keluarga.
                    </p>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event6.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Gelar Lomba Fotografi Alam Bertema "Pesona Teh Wonosari"
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Dikelola PTPN I Regional 5 Kebun Teh Wonosari,
                        tempat ini terkenal sebagai wisata edukasi teh
                        sekaligus destinasi liburan keluarga.
                    </p>
                </div>
            </div>

            {{-- Card 7 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/16.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Tawarkan Sensasi Tracking Seru Menuju Bukit Kuneer
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Bagi pecinta alam dan petualangan,
                        Wisata Agro Wonosari kini menghadirkan
                        aktivitas tracking menuju Bukit Kuneer.
                        Pengunjung dapat menikmati perjalanan di
                        tengah hamparan kebun teh yang hijau.
                    </p>
                </div>
            </div>

            {{-- Card 8 --}}
            <div class="bg-white rounded-xl overflow-hidden shadow">
                <img src="{{ asset('image/event8.jpg') }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-sm text-green-800">
                        Wisata Agro Wonosari Luncurkan Program Edukasi "Petik Teh Sendiri" untuk Wisatawan
                    </h3>
                    <p class="text-xs text-gray-600 mt-2">
                        Program “Petik Teh Sendiri” ini memberikan kesempatan
                        bagi wisatawan untuk memahami proses awal produksi teh
                        sekaligus menikmati suasana alam yang sejuk dan hijau.
                    </p>
                </div>
            </div>

        </div>
    </div>

</body>
</html>

<!-- FOOTER -->
<footer>
  @include('partials.footer')
</footer>

</body>
</html>
