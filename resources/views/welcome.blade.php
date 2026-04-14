<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wonosari – Explore Wonosari</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <style> body { font-family: 'Poppins', sans-serif; } </style>
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>
<body class="bg-lime-300"> 

<!-- NAVBAR -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div>
                <h1 class="text-green-700 font-bold text-xl tracking-wide">WONOSARI</h1>
                <p class="text-[10px] text-gray-500 tracking-widest">EXPLOREWONOSARI.ID</p>
            </div>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="/" class="hover:text-green-700">Beranda</a>
            <a href="/kontak" class="hover:text-green-700">Profil</a>
            <a href="/paket" class="hover:text-green-700">Paket Wisata</a>
            <a href="/pemesanan" class="hover:text-green-700">Reservasi</a>
            <a href="/paket" class="hover:text-green-700">Produk</a>
            <div class="relative group">
    <button class="hover:text-green-700 flex items-center gap-1">
        Galeri
        <svg class="w-4 h-4 mt-[1px]" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- DROPDOWN -->
    <div class="absolute left-0 mt-3 w-48 bg-white rounded-lg shadow-lg 
                opacity-0 invisible group-hover:opacity-100 
                group-hover:visible transition-all duration-300">

        <a href="#galeri"
           class="block px-4 py-3 text-sm hover:bg-green-100 hover:text-green-700 rounded-t-lg">
            Galeri Foto
        </a>
    </div>
</div>

            <a href="/event" class="hover:text-green-700">Event</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">Nikmati Pesona Alam & <br /> Edukasi di Kebun Teh <br /> Wonosari</h2>
            <p class="mt-6 text-gray-800 max-w-lg">“Dari sejarah, edukasi, hingga petualangan alam – Kebun Teh Wonosari hadir sebagai destinasi wisata yang menyegarkan jiwa dan memperkaya pengetahuan.”</p>
            <div class="mt-8 flex gap-4">
                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">Jelajahi</a>
                <a href="/pemesanan" class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500">Pesan Tiket</a>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-xl p-3">
            <img src="image/hero.jpg" class="rounded-lg object-cover w-full h-[360px]" />
        </div>
    </div>
</section>

<!-- SEJARAH -->
<section style="background-color: #0F7A38; padding: 60px 0; padding-left: 115px;">
    <div class="container text-center">

        <h2 style="color: white; font-weight: 700; margin-bottom: 20px;">
            Sejarah Kebun Teh Wonosari
        </h2>
        <p style="color: white; max-width: 800px; margin: 0 auto 40px; font-size: 15px;">
            Kebun Teh Wonosari berdiri sejak masa kolonial Belanda dan merupakan salah satu kebun teh pertama di Jawa Timur yang dibuka untuk wisata. 
            Berada di lereng Gunung Arjuno dengan udara sejuk dan panorama hijau, Wonosari kini menjadi destinasi wisata alam, edukasi, dan rekreasi keluarga 
            yang menyajikan sejarah, keindahan, serta pengalaman berharga.
        </p>

        <div style="display:flex; justify-content:center; align-items:center; gap:30px; flex-wrap:nowrap; width:100%; overflow:hidden; margin-bottom:40px;">

            <div style="background-color: white; border-radius: 12px; padding: 10px; width: 300px;">
                <img src="{{ asset('image/sejarah1.jpg') }}" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            </div>

            <div style="background-color: white; border-radius: 12px; padding: 10px; width: 300px;">
                <img src="{{ asset('image/sejarah2.jpg') }}" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            </div>

            <div style="background-color: white; border-radius: 12px; padding: 10px; width: 300px;">
                <img src="{{ asset('image/sejarah3.jpg') }}" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            </div>
        </div>

        <a href="{{ url('/sejarah') }}" 
           style="background-color: #A5D674; color: black; padding: 10px 30px; border-radius: 8px; text-decoration: none; font-weight: 600;">
            Selengkapnya
        </a>

    </div>
</section>

<!-- PROFIL -->
<section class="py-20 bg-lime-300">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-6">Profil Kebun Teh Wonosari</h3>
        <p class="max-w-4xl mx-auto text-gray-800 mb-12">Kebun Teh Wonosari adalah destinasi wisata alam dan edukasi di lereng Gunung Arjuno, Jawa Timur. Selain menyajikan pemandangan kebun teh yang hijau dan udara sejuk pegunungan, Wonosari juga menawarkan berbagai aktivitas menarik mulai dari wisata edukasi, outbound, family trip, hingga penginapan.</p>
        <div class="bg-green-700 text-white rounded-xl grid md:grid-cols-4 gap-6 py-6 px-6 text-sm font-semibold">
            <div><p class="text-green-200">Lokasi</p><p>Singosari, Malang</p></div>
            <div><p class="text-green-200">Jam Buka</p><p>07.00 – 17.00 WIB</p></div>
            <div><p class="text-green-200">Tiket Masuk</p><p>15.000 / Orang</p></div>
            <div><p class="text-green-200">Luas Kebun</p><p>± 1.144 ha</p></div>
        </div>
    </div>
</section>

<!-- PERKEBUNAN NUSANTARA XII -->
<section class="bg-[#d8ffb4] py-16 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <img src="image/profil-kebun1.jpg" class="mx-auto h-100 mb-50" />
        <h3 class="text-2xl font-bold text-green-800 mb-2">Sekilas PT Perkebunan Nusantara XII</h3>
        <p class="text-gray-700 text-sm">Pengelola Kebun Teh Wonosari Malang adalah PT Perkebunan Nusantara XII (PTPN XII). PTPN XII yang mengelola kebun teh ini sejak masa pasca-kemerdekaan, dan kini berkembang menjadi destinasi agrowisata yang populer di lereng Gunung Arjuno.</p>
    </div>
</section>

<!-- GERAKAN AFIRMASI -->
<section class="bg-green-700 py-16 text-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div class="flex justify-center">
            <img src="image/afirmasi.png" class="h-64 object-cover rounded-xl shadow-xl" />
        </div>
        <div class="space-y-4">
            <div class="bg-green-600 p-4 rounded-xl shadow"><p class="text-sm">Lingkaran yang terbentuk pada foto jari dan telunjuk melambangkan siklus pembelajaran tanpa akhir.</p></div>
            <div class="bg-green-600 p-4 rounded-xl shadow"><p class="text-sm">Postur tangan dengan kemiringan 45 derajat melambangkan rasa percaya diri, tekad, agresivitas untuk tumbuh melewati menjadi yang terbaik.</p></div>
            <div class="bg-green-600 p-4 rounded-xl shadow"><p class="text-sm">Tiga jari yang sejajar melambangkan sinergi seluruh entitas PTPN Group sekaligus mendukung gerakan EVP “Tumbuh, Unggul, Bangun Negeri”.</p></div>
        </div>
    </div>
</section>

<!-- HIGHLIGHT PAKET WISATA -->
<section class="bg-lime-300 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-10 text-green-900">Highlight Paket Wisata</h3>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white rounded-xl shadow p-3">
                <img src="image/wisata1.jpg" class="rounded-lg h-48 w-full object-cover" />
                <p class="mt-3 font-semibold text-green-800 text-sm">Wisata Edukasi</p>
                <p class="text-xs mt-2 text-center">Cocok untuk pelajar</p>
            </div>
            <div class="bg-white rounded-xl shadow p-3">
                <img src="image/wisata2.jpg" class="rounded-lg h-48 w-full object-cover" />
                <p class="mt-3 font-semibold text-green-800 text-sm">Outbound & Adventure</p>
                <p class="text-xs mt-2 text-center">Cocok untuk pelajar...</p>
            </div>
            <div class="bg-white rounded-xl shadow p-3">
                <img src="image/wisata3.jpg" class="rounded-lg h-48 w-full object-cover" />
                <p class="mt-3 font-semibold text-green-800 text-sm">Family Picnic</p>
                <p class="text-xs mt-2 text-center">Cocok untuk pelajar...</p>
            </div>
            <div class="bg-white rounded-xl shadow p-3">
                <img src="image/wisata4.jpg" class="rounded-lg h-48 w-full object-cover" />
                <p class="mt-3 font-semibold text-green-800 text-sm">Hotel & Penginapan</p>
                <p class="text-xs mt-2 text-center">Cocok untuk pelajar...</p>
            </div>
        </div>
    </div>
</section>

<!-- PETA LOKASI -->
<section style="padding: 60px 0; background-color: #e7f8ee;">
  <div style="width: 100%; max-width: 1200px; margin: auto;">
      
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.021853075386!2d112.52327077206638!3d-7.82449237668602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b2bd79f413%3A0x9f9e56ee2fd46b6c!2sKebun%20Teh%20Wonosari!5e0!3m2!1sid!2sid!4v1700000000000"
        width="100%" 
        height="500" 
        style="border:0;border-radius:25px" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>

  </div>
</section>

<!-- PRODUK -->
<section class="bg-lime-300 py-20 text-center">
    <h3 class="text-3xl font-bold text-green-900 mb-12">Produk</h3>
    <div class="max-w-4xl mx-auto grid md:grid-cols-4 gap-8 px-6">
        <img src="image/produk1.jpg" class="h-40 object-contain mx-auto" />
        <img src="image/produk2.jpg" class="h-40 object-contain mx-auto" />
        <img src="image/produk3.jpg" class="h-40 object-contain mx-auto" />
        <img src="image/produk4.jpg" class="h-40 object-contain mx-auto" />
    </div>
</section>

<!-- GALERI -->
<section id="galeri" class="bg-green-700 py-20 text-white text-center">
    <h3 class="text-3xl font-bold mb-12">Momen Wisata & Cerita Pengunjung</h3>
    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-6 px-6">
        <img src="image/14.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/15.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/16.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/17.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/18.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/19.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/20.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/22.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
        <img src="image/23.jpg" class="rounded-lg shadow-xl object-cover h-60 w-full" />
    </div>
</section>

</body>
</html>

<!-- ================= TESTIMONI ================= -->
<section class="py-20 bg-white text-center">
    <h3 class="text-3xl font-bold mb-10 text-green-900">Testimoni Pengunjung</h3>
    <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8">
        <div class="bg-lime-200 p-6 rounded-xl shadow">
            <p class="text-sm italic">“Udara sejuk, pemandangan hijau sejauh mata memandang, dan aroma teh yang menenangkan. Tempat terbaik untuk melepas penat dari hiruk pikuk kota.”</p>
            <h4 class="mt-4 font-bold text-green-800">— Rina</h4>
        </div>
        <div class="bg-lime-200 p-6 rounded-xl shadow">
            <p class="text-sm italic">“Anak-anak jadi tahu proses pembuatan teh dari pemetikan sampai pengemasan. Pemandu ramah banget dan fasilitasnya bersih. Recommended untuk wisata keluarga.”</p>
            <h4 class="mt-4 font-bold text-green-800">— Bagas</h4>
        </div>
        <div class="bg-lime-200 p-6 rounded-xl shadow">
            <p class="text-sm italic">“Begitu sampai langsung disambut pemandangan hijau luas. Udara bersih dan tenang banget, cocok buat healing bareng teman semuanya dan juga untuk atau keluarga”</p>
            <h4 class="mt-4 font-bold text-green-800">— Siska</h4>
        </div>
    </div>
</section>

<!-- FOOTER -->
 <footer class="bg-gray-100 text-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-4">
        
        {{-- BARIS ATAS: Logo Kiri & Menu Kanan --}}
        <div class="flex flex-col md:flex-row justify-between items-center pb-6">
            
            {{-- Logo WONOSARI (Sama seperti di Navbar) --}}
            <a href="/" class="flex items-center space-x-2 mb-4 md:mb-0">
                <div class="flex flex-col text-left">
                    <div class="flex items-start leading-none">
                        {{-- Menggunakan warna hijau gelap yang sudah kita definisikan --}}
                        <span class="text-3xl font-serif tracking-widest text-[#1F5B36]">
                            WONOSARI
                        </span>
                    </div>
                    <span class="text-xs tracking-widest text-gray-500 font-light mt-1">
                        EXPLOREWONOSARI.ID
                    </span>
                </div>
            </a>

            {{-- Menu Navigasi --}}
            <div class="flex space-x-6 text-sm font-medium">
                <a href="/kontak" class="hover:text-[#1F5B36]">Profil</a>
                <a href="/paket" class="hover:text-[#1F5B36]">Paket Wisata</a>
                <a href="/pemesanan" class="hover:text-[#1F5B36]">Reservasi</a>
                <a href="/produk" class="hover:text-[#1F5B36]">Produk</a>
                <a href="/galeri" class="hover:text-[#1F5B36]">Galeri</a>
                <a href="/event" class="hover:text-[#1F5B36]">Event</a>
            </div>
        </div>

        {{-- Garis Pemisah --}}
        <hr class="border-gray-300 my-4">

        {{-- BARIS BAWAH: Hak Cipta Kiri & Sosial Media Kanan --}}
        <div class="flex flex-col md:flex-row justify-between items-center pt-2 pb-4 text-sm text-gray-600">
            {{-- Hak Cipta --}}
            <p class="mb-4 md:mb-0">EXPLOREWONOSARI.ID &copy; 2025. All rights reserved.</p>

            {{-- Ikon Sosial Media --}}
            <div class="flex space-x-4">
                {{-- YouTube --}}
                <a href="#" class="hover:text-[#1F5B36]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15.5l6-3.5-6-3.5v7zM21.5 8.35c.16.89.26 1.83.26 2.82 0 1.57-.18 3.12-.54 4.58-.29 1.18-.84 2.19-1.57 3.03-.7.75-1.58 1.34-2.58 1.63-1.42.4-2.91.56-4.57.56-1.66 0-3.15-.16-4.57-.56-1-.29-1.88-.88-2.58-1.63-.73-.84-1.28-1.85-1.57-3.03-.36-1.46-.54-3.01-.54-4.58 0-1 .1-1.93.26-2.82.16-.89.47-1.69.87-2.39.4-.7.93-1.25 1.56-1.69.73-.49 1.56-.84 2.53-1.04 1.42-.32 2.91-.48 4.57-.48 1.66 0 3.15.16 4.57.48.97.2 1.8.55 2.53 1.04.63.44 1.16.99 1.56 1.69.4.7.71 1.5.87 2.39z"/></svg>
                </a>
                {{-- Facebook --}}
                <a href="#" class="hover:text-[#1F5B36]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.97 3.65 9.17 8.44 9.87v-7.89H7.44V12h3V9.75c0-3.15 1.9-4.88 4.7-4.88.94 0 1.88.08 2.8.2v2.45h-1.46c-1.2 0-1.44.57-1.44 1.41V12h2.89l-.47 2.98h-2.42v7.89c4.79-.7 8.44-4.9 8.44-9.87z"/></svg>
                </a>
                {{-- Twitter/X --}}
                <a href="#" class="hover:text-[#1F5B36]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 5.86c-.7.31-1.45.52-2.22.61.81-.48 1.43-1.24 1.72-2.14-.76.45-1.6.78-2.49.96-.71-.75-1.72-1.22-2.87-1.22-2.17 0-3.94 1.77-3.94 3.95 0 .31.04.61.12.9-.81-.04-1.58-.2-2.32-.48-2.61-1.08-4.92-3.41-6.47-6.23-.27-.47-.42-1.02-.42-1.62 0-1.37.7-2.58 1.77-3.29-.02 0-.05.02-.07.03-.6.55-1.02 1.34-1.02 2.22 0 1.2.65 2.27 1.64 2.89-.52 0-1.02-.15-1.45-.4v.05c0 1.92 1.37 3.52 3.18 3.88-.33.09-.67.14-1.03.14-.25 0-.49-.03-.73-.07.5 1.57 1.97 2.73 3.74 2.77-1.36 1.07-3.08 1.71-4.96 1.71-.32 0-.64-.02-.95-.06 1.76 1.13 3.86 1.79 6.09 1.79 7.3 0 11.28-6.05 11.28-11.28 0-.17-.0-.34-.01-.5-.73-.48-1.57-.84-2.46-1.02z"/></svg>
                </a>
                {{-- Instagram --}}
                <a href="#" class="hover:text-[#1F5B36]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c2.75 0 3.16.01 4.28.06 1.1.05 1.83.2 2.47.45.64.25 1.16.6 1.69 1.13.53.53.88 1.05 1.13 1.69.25.64.4 1.37.45 2.47.05 1.12.06 1.53.06 4.28s-.01 3.16-.06 4.28c-.05 1.1-.2 1.83-.45 2.47-.25.64-.6 1.16-1.13 1.69-.53.53-1.05.88-1.69 1.13-.64.25-1.37.4-2.47.45-1.12.05-1.53.06-4.28.06s-3.16-.01-4.28-.06c-1.1-.05-1.83-.2-2.47-.45-.64-.25-1.16-.6-1.69-1.13-.53-.53-.88-1.05-1.13-1.69-.25-.64-.4-1.37-.45-2.47-.05-1.12-.06-1.53-.06-4.28s.01-3.16.06-4.28c.05-1.1.2-1.83.45-2.47.25-.64.6-1.16 1.13-1.69.53-.53 1.05-.88 1.69-1.13.64-.25 1.37-.4 2.47-.45 1.12-.05 1.53-.06 4.28-.06zm0 1.9c-2.48 0-2.8.01-3.81.05-.98.05-1.5.18-1.83.31-.38.15-.65.34-.9.59-.25.25-.44.52-.59.9-.13.33-.26.85-.31 1.83-.04 1.01-.05 1.33-.05 3.81s.01 2.8.05 3.81c.05.98.18 1.5.31 1.83.15.38.34.65.59.9.25.25.52.44.9.59.33.13.85.26 1.83.31 1.01.04 1.33.05 3.81.05s2.8-.01 3.81-.05c.98-.05 1.5-.18 1.83-.31.38-.15.65-.34.9-.59.25-.25.44-.52.59-.9.13-.33.26-.85.31-1.83.04-1.01.05-1.33.05-3.81s-.01-2.8-.05-3.81c-.05-.98-.18-1.5-.31-1.83-.15-.38-.34-.65-.59-.9-.25-.25-.52-.44-.9-.59-.33-.13-.85-.26-1.83-.31-1.01-.04-1.33-.05-3.81-.05zm0 1.9c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 1.9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm3.8-2.67c.54 0 .98.44.98.98s-.44.98-.98.98-.98-.44-.98-.98.44-.98.98-.98z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
