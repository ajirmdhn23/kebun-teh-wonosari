<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Pusat Bantuan & Lokasi</title>
</head>
<body class="bg-[#0B683A] text-gray-900">

<!-- NAVBAR -->
<nav>
  @include('partials.navbar')
</nav>

<!-- JUDUL -->
<h2 class="text-center text-2xl font-bold text-white py-8">Pusat Bantuan dan Lokasi Wisata</h2>

<div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-6 px-6 pb-14">

  <!-- KOLOM KIRI -->
  <div class="space-y-6">

    <div class="bg-[#C7E78B] p-6 rounded-2xl shadow">
      <h3 class="font-bold mb-2">Alamat :</h3>
      <p class="text-sm leading-relaxed">
        Wisata Agro Kebun Teh Wonosari,<br>
        RT.04/RW.07, Toyomarto, Kec. Singosari,<br>
        Kabupaten Malang, Jawa Timur<br>
        65153
      </p>
    </div>

    <div class="bg-[#C7E78B] p-6 rounded-2xl shadow">
      <h3 class="font-bold mb-2">Chat WhatsApp</h3>
      <p class="text-sm mb-4">Butuh informasi detail dan jawaban cepat? Klik tombol di bawah ini untuk info lebih lanjut!</p>
      <a href="#" class="bg-[#0B683A] text-white px-4 py-2 rounded-xl text-sm block text-center">Chat Via WhatsApp</a>
    </div>

    <div class="bg-[#C7E78B] p-6 rounded-2xl shadow">
      <h3 class="font-bold mb-2">Email</h3>
      <p class="text-sm">Segala aduan yang tersedia, hubungi kami di email!</p>
      <p class="font-semibold mt-2 text-sm">@explorewonosari.gmail.com</p>
    </div>

    <div class="bg-[#C7E78B] p-6 rounded-2xl shadow">
      <h3 class="font-bold mb-2">Jam Operasional</h3>
      <p class="text-sm leading-relaxed">
        Senin - Jumat : 08.00 - 17.00<br>
        Sabtu - Minggu : 07.00 - 18.00
      </p>
    </div>
  </div>

  <!-- KOLOM TENGAH (MAP) -->
  <section style="padding: 60px 0; background-color: #e7f8ee;">
  <div style="max-width: 1200px; margin: auto; padding: 20px;">

    <!-- Bingkai hijau -->
    <div style="
        background-color: #0F7A38;
        border-radius: 30px;
        padding: 18px;
    ">

      <!-- Area putih -->
      <div style="
          background-color: white;
          border-radius: 22px;
          padding: 12px;
          height: 650px;
      ">

        <!-- Map -->
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.021853075386!2d112.52327077206638!3d-7.82449237668602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b2bd79f413%3A0x9f9e56ee2fd46b6c!2sKebun%20Teh%20Wonosari!5e0!3m2!1sid!2sid!4v1700000000000"
          style="
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 16px;
          "
          loading="lazy"
          allowfullscreen>
        </iframe>

      </div>

    </div>

  </div>
</section>



  <!-- KOLOM KANAN (FORM) -->
  <div class="bg-[#C7E78B] p-8 rounded-2xl shadow">
    <h3 class="font-bold text-lg mb-2">Kirim Pesan Reservasi dan Aduan ke kami!</h3>
    <p class="text-sm mb-4">Isi form dibawah ini untuk pesan lebih lanjut, chat akan direspon saat hari kerja ya gengs!</p>

    <form class="space-y-4">
      <div>
        <label class="text-sm font-semibold">1. Nama Lengkap</label>
        <input type="text" class="w-full p-3 mt-1 rounded-xl border" />
      </div>
      <div>
        <label class="text-sm font-semibold">2. Email Pengguna</label>
        <input type="email" class="w-full p-3 mt-1 rounded-xl border" />
      </div>
      <div>
        <label class="text-sm font-semibold">3. Nomor WhatsApp</label>
        <input type="text" class="w-full p-3 mt-1 rounded-xl border" />
      </div>
      <div>
        <label class="text-sm font-semibold">4. Pesan</label>
        <textarea class="w-full p-3 mt-1 rounded-xl border h-32"></textarea>
      </div>
      <button class="bg-[#0B683A] w-full text-white py-3 rounded-xl font-semibold hover:bg-[#074D2A]">Kirim</button>
    </form>
  </div>
</div>
<!-- FOOTER -->
<footer>
  @include('partials.footer')
</footer>

</body>
</html>
