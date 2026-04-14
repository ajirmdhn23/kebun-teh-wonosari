<!-- Katalog Produk Kebun Teh Wonosari - TailwindCSS Version -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Katalog Produk Wonosari</title>
</head>
<body class="bg-[#0A8240] text-gray-800 font-sans">

<!-- NAVBAR -->
<nav>
  @include('partials.navbar')
</nav>

<!-- HERO IMAGE -->
<section class="max-w-6xl mx-auto px-4 mb-10">
  <img src="image/katalog-hero.jpg" class="rounded-lg shadow-md w-full h-[300px] object-cover" />
  <h2 class="text-center text-white text-2xl font-bold mt-4">Katalog Produk Kebun Teh Wonosari</h2>
</section>

<!-- CONTENT BLOCK 1 -->
<section class="w-full bg-[#C2E261] py-10">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4">
    <div>
      <p class="text-sm leading-relaxed">
        Java Coffee Jampit merupakan salah satu varian kopi Arabika terbaik yang berasal dari 
        perkebunan Jampit, Bondowoso – salah satu kawasan penghasil kopi legendaris di dataran 
        tinggi Jawa Timur. Perkebunan ini terletak di ketinggian sekitar 1.600 meter di atas 
        permukaan laut, sebuah lingkungan ideal bagi tumbuhnya kopi Arabika berkualitas tinggi.
         Suhu yang sejuk, tanah vulkanik yang subur, serta proses budidaya yang alami membuat 
         Java Coffee Jampti memiliki karakter rasa yang istimewa dan kompleks.
      </p>
    </div>
    <div>
      <img src="image/katalog1.jpg" class="rounded-lg shadow-md w-full" />
    </div>
  </div>
</section>

<!-- CONTENT BLOCK 2 -->
<section class="w-full bg-[#C2E261] py-10 mt-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4">
    <div>
      <img src="image/katalog2.jpg" class="rounded-lg shadow-md w-full" />
    </div>
    <div>
      <p class="text-sm leading-relaxed">
        Kopi ini diproduksi dari biji kopi Arabika pilihan yang dipetik secara selektif 
        hanya pada tingkat kematangan optimal. Proses pasca panennya dilakukan dengan sangat teliti,
         mulai dari pencucian (wet process), pengeringan alami, hingga tahap sangrai (medium roast)
          yang menjaga keseimbangan antara aroma dan rasa.
        Hasil akhirnya adalah secangkir kopi dengan aroma wangi yang kuat, rasa halus dan seimbang,
         serta aftertaste manis menyerupai cokelat dan karamel. Ada juga sedikit hint buah dan 
         keasaman lembut yang menambah kesegaran rasa, menjadikannya cocok untuk dinikmati kapan saja
          — baik di pagi hari untuk memulai aktivitas, maupun sore hari untuk menemani waktu santai.
      </p>
    </div>
  </div>
</section>

<!-- CONTENT BLOCK 3 -->
<section class="w-full bg-[#C2E261] py-10 mt-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4">
    <div>
      <p class="text-sm leading-relaxed font-semibold">Profil Rasa (Flavor Notes)</p>
      <ul class="text-sm mt-2 space-y-1 list-disc ml-5">
        <li>Aroma: Harum khas dengan sentuhan cokelat dan bunga</li>
        <li>Rasa Utama: Cokelat, karamel, dan sedikit citrus</li>
        <li>Body: Medium – terasa lembut namun penuh di mulut</li>
        <li>Acidity: Bright dan seimbang</li>
        <li>Aftertaste: Manis alami dan bertahan lama</li>
      </ul>
    </div>
    <div>
      <img src="image/katalog3.jpg" class="rounded-lg shadow-md w-full" />
    </div>
  </div>
</section>

<!-- CONTENT BLOCK 4 -->
<section class="w-full bg-[#C2E261] py-10 mt-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4">
    <div>
      <img src="image/katalog4.jpg" class="rounded-lg shadow-md w-full" />
    </div>
    <div>
      <p class="text-sm font-semibold">Keunggulan Java Coffee Jampit</p>
      <ul class="text-sm list-decimal ml-5 mt-2 space-y-1">
        <li>100% Arabika murni dari perkebunan Jampit, Bondowoso</li>
        <li>Ditanam di ketinggian >1.500 mdpl – kualitas premium dengan cita rasa khas pegunungan</li>
        <li>Dipanggang oleh roaster berpengalaman dengan tingkat sangrai medium roast</li>
        <li>Dikemas dalam kemasan kedap udara untuk menjaga kesegaran dan aroma alami</li>
        <li>Cocok untuk berbagai metode seduh: V60, French Press, Syphon, hingga Espresso Machine</li>
      </ul>
    </div>
  </div>
</section>

<!-- CONTENT BLOCK 5 -->
<section class="w-full bg-[#C2E261] py-10 mt-4">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 px-4">
    <div>
      <p class="text-sm leading-relaxed">
        Kenapa Memilih Java Coffee Jampit? 
      </p>
      <p class="text-sm leading-relaxed">
        Kopi ini tidak hanya sekadar minuman, tetapi juga pengalaman menikmati kekayaan rasa dari
         bumi Indonesia. Setiap tegukan membawa Anda merasakan perpaduan antara keasaman lembut, 
         aroma yang harum, dan cita rasa manis alami khas kopi Arabika Jampit. Bagi para pecinta 
         kopi sejati, Java Coffee Jampti adalah simbol dari keanggunan dan keaslian kopi nusantara.
      </p>
    </div>
    <div>
      <img src="image/katalog1.jpg" class="rounded-lg shadow-md w-full" />
    </div>
  </div>
</section>

<div style="display: flex; justify-content: center; padding: 15px 0;">
    <a href="{{ url('/pemesanan') }}" 
       style="background-color: #0F62FE; color: white; padding: 10px 30px; border-radius: 8px; text-decoration: none; font-weight: 600;">
        Pesan Sekarang
    </a>
</div>

<!-- FOOTER -->
<footer>
  @include('partials.footer')
</footer>

</body>
</html>
