<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Wonosari Agro</title>
</head>

<body class="bg-[#1b7f3a] text-gray-800 font-sans">

 <!-- NAVBAR -->
<nav>
  @include('partials.navbar')
</nav>

  <!-- HERO SECTION -->
  <section class="max-w-6xl mx-auto px-4 mb-10">
    <img src="{{ asset('image/atas.jpg') }}" class="rounded-lg object-cover w-full h-[360px]" />
    <h2 class="text-center text-xl font-bold mt-4 text-white">WISATA AGRO WONOSARI MALANG</h2>
    <p class="text-center text-sm max-w-2xl mx-auto mt-2 text-green-100">
      Wisata Agro Wonosari di Singosari, Malang, sekitar 6 km dari Lawang, menawarkan kebun teh 
      luas dengan tiket masuk Rp15.000–20.000. Fasilitas lengkap tersedia, termasuk kolam renang, 
      area bermain anak, restoran, penginapan bungalow dan Rollaas Hotel, serta tempat pengolahan 
      teh dengan paket petik teh. Wahana seperti ATV, flying fox, dan Finn Komodo juga siap 
      memeriahkan kunjungan. Selain itu, Bukit Kuneer menawarkan trekking mudah dengan pemandangan 
      Instagramable dan udara segar, tiket masuk sekitar Rp10.000–15.000 terpisah dari tiket utama.
       Arjuna Geopark adalah kawasan edukatif dengan formasi keindahan alam Gunung Arjuna dan 
      berbagai macam spot foto dan taman, cocok untuk wisata edukasi dengan tiket masuk Rp10.000–20.000 
      tergantung paket.
    </p>
  </section>

  <!-- PAKET WISATA -->
  <section id="paket" class="w-full bg-[#d4edb6] py-10">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-center font-bold text-lg mb-6 text-green-900">Paket Wisata</h2>

      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-md p-4">
          <img src="{{ asset('image/paket edukasi.jpg') }}" class="rounded-lg w-full" />
          <h3 class="font-semibold mt-4 text-center">Paket Edukasi</h3>
          <p class="text-xs mt-2 text-center">Cocok untuk pelajar atau rombongan sekolah yang ingin 
            belajar tentang proses pengolahan teh dari daun hingga menjadi produk siap saji.
             Fasilitas: Pemandu wisata, kunjungan ke pabrik teh, edukasi budidaya teh, welcome drink.
          </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
          <img src="{{ asset('image/paket edukasi.jpg') }}" class="rounded-lg w-full" />
          <h3 class="font-semibold mt-4 text-center">Paket Outbound</h3>
          <p class="text-xs mt-2 text-center">Aktivitas outbound seru di area kebun teh dengan 
            berbagai permainan kelompok.Fasilitas: Instruktur outbound, alat permainan, 
            makan siang, spot foto.
          </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
          <img src="{{ asset('image/tracking.jpg') }}" class="rounded-lg w-full" />
          <h3 class="font-semibold mt-4 text-center">Paket Tracking Kebun Teh</h3>
          <p class="text-xs mt-2 text-center">Menyusuri hamparan kebun teh dengan pemandangan 
            pegunungan Arjuno yang indah.Fasilitas: Guide lokal, air mineral, dokumentasi (opsional).
          </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
          <img src="{{ asset('image/tracking.jpg') }}" class="rounded-lg w-full" />
          <h3 class="font-semibold mt-4 text-center">Paket Camping</h3>
          <p class="text-xs mt-2 text-center">Menginap di tengah kebun teh dengan suasana sejuk dan 
            tenang.Fasilitas: Tenda/glamping area, api unggun, makan malam, sarapan.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- KATALOG PRODUK -->
  <section id="produk" class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-center font-bold text-lg mb-6 text-white">Katalog Produk & Bisnis</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk1.jpg') }}" class="mx-auto h-40" />
        <a href="/katalog" class="font-semibold mt-3 text-sm">Java Coffee Jampit</a>
        <p class="text-xs mt-1">Kopi Arabika dari Perkebunan Jampit, Bondowoso. Ciri khas: 
          Rasa seimbang, acidity ringan, body sedang, dan aftertaste yang bersih dan floral.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk2.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Java Coffee Typica</h3>
        <p class="text-xs mt-1">Varietas arabika klasik dan langka. Ciri khas: Aroma floral, 
          acidity cerah, body ringan, dan rasa kompleks. Ideal untuk single origin high-end.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk3.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Java Coffee Maragogype</h3>
        <p class="text-xs mt-1">Arabika dengan ukuran biji besar (elephant bean). Ciri khas: 
          Rasa lembut, aroma ringan, dan kadar kafein lebih rendah dari arabika biasa. 
        </p>
      </div>
    </div>
  </section>

  <section id="produk" class="max-w-6xl mx-auto px-4 py-12">
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk4.jpg') }}" class="mx-auto h-40" />
        <a href="/katalog" class="font-semibold mt-3 text-sm">Rollaas White Tea</a>
        <p class="text-xs mt-1">Teh paling ringan dari pucuk daun muda sebelum matahari terbit. 
          Ciri khas: Rasa lembut, floral, dan manis alami, kaya antioksidan. Cocok untuk relaksasi 
          dan kesehatan kulit.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk5.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Teh Seduh Premium Rolas</h3>
        <p class="text-xs mt-1">Teh seduh dari daun pilihan produksi PT Rolas Nusantara Mandiri. 
          Ciri khas: Warna seduhan cerah pekat, rasa kuat dan mantap, serta aroma klasik teh 
          hitam Indonesia.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk6.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Rolas Teh Seduh Kentea</h3>
        <p class="text-xs mt-1">Teh artisan dengan karakter unik. Ciri khas: Rasa lembut, 
          aroma khas, dan aftertaste ringan. Cocok untuk dikonsumsi saat santai atau sajian premium.
        </p>
      </div>
    </div>
  </section>

   <section id="produk" class="max-w-6xl mx-auto px-4 py-12">
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk7.jpg') }}" class="mx-auto h-40" />
        <a href="/katalog" class="font-semibold mt-3 text-sm">Cerutu Golden Djawa</a>
        <p class="text-xs mt-1">Cerutu premium 100% handmade yang dibuat dari bahan baku internasional 
          dan tembakau otentik Besuki Na-Oogst, menghasilkan cita rasa high class.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk8.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Fanning 1 kg</h3>
        <p class="text-xs mt-1">Teh hitam dengan ukuran partikel halus (serbuk kasar) 
          hasil dari proses penyaringan. Ciri khas: Seduhan cepat dan pekat, aroma kuat, 
          dan rasa yang tegas.
        </p>
      </div>

      <div class="bg-white rounded-lg shadow p-4 text-center">
        <img src="{{ asset('image/produk9.jpg') }}" class="mx-auto h-40" />
        <h3 class="font-semibold mt-3 text-sm">Kopi Gunung Ijen PLB</h3>
        <p class="text-xs mt-1">Robusta premium, Memiliki body sangat kuat, aroma earthy & coklat pekat, 
          serta rasa lebih bersih dan halus dibanding robusta biasa. 
        </p>
      </div>
    </div>
  </section>

 <!-- FOOTER -->
<footer>
  @include('partials.footer')
</footer>

</body>
</html>
