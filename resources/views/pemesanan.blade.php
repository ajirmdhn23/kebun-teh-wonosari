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

{{-- WRAPPER CENTER --}}
<div class="min-h-screen flex justify-center">

    {{-- CONTAINER UTAMA --}}
    <div class="w-full max-w-5xl px-6 py-10">

        {{-- ===================== BANNER ===================== --}}
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-10">
            <img
                src="image/pemesanan.jpg"
                alt="Kebun Teh"
                class="w-full h-[280px] object-cover"
            >
        </div>

        {{-- ===================== FORM ===================== --}}
        <div class="bg-lime-300 rounded-2xl shadow-xl p-10">

            <h2 class="text-xl font-bold mb-2">
                Kirim Pesan Reservasi ke kami!
            </h2>
            <p class="text-sm mb-8">
                Isi form dibawah ini untuk pesan lebih lanjut, chat akan
                direspon saat hari kerja ya gengs!
            </p>

            <form onsubmit="return false" class="space-y-6">

                {{-- Nama --}}
                <div>
                    <label class="font-semibold text-sm">1. Nama Lengkap</label>
                    <input id="nama" type="text"
                        class="w-full mt-2 p-4 rounded-full focus:outline-none">
                </div>

                {{-- Email --}}
                <div>
                    <label class="font-semibold text-sm">2. Email Pengguna</label>
                    <input id="email" type="email"
                        class="w-full mt-2 p-4 rounded-full focus:outline-none">
                </div>

                {{-- WhatsApp --}}
                <div>
                    <label class="font-semibold text-sm">3. Nomor WhatsApp</label>
                    <input id="nomor" type="text"
                        class="w-full mt-2 p-4 rounded-full focus:outline-none">
                </div>

                {{-- Tanggal --}}
                <div>
                    <label class="font-semibold text-sm">4. Tanggal Kunjungan</label>
                    <input id="tanggal" type="date"
                        class="w-full mt-2 p-4 rounded-full focus:outline-none">
                </div>

                {{-- Jumlah Orang --}}
                <div>
                    <label class="font-semibold text-sm">5. Jumlah Orang</label>
                    <input id="jumlahOrang" type="number" min="1" value="1"
                        class="w-full mt-2 p-4 rounded-full focus:outline-none">
                </div>

                {{-- Harga --}}
                <span id="hargaSatuan" class="hidden">25000</span>

                {{-- Total --}}
                <div class="bg-white rounded-full p-4 flex justify-between font-semibold text-sm">
                    <span>Total Harga</span>
                    <span>Rp <span id="totalHarga">25.000</span></span>
                </div>

                {{-- Button --}}
                <div class="text-center pt-4">
                    <!-- Perubahan: tombol sekarang buka QRIS (openQRIS) -->
                    <button type="button"
                        onclick="openQRIS()"
                        class="bg-green-800 text-white px-8 py-3 rounded-md hover:bg-green-900 transition">
                        Pesan Sekarang
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- ===================== MODAL QRIS ===================== --}}
<div id="modalQRIS"
     class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-[999]">

    <div class="bg-white dark:bg-[#0A8240] w-96 p-6 rounded-2xl shadow-lg">

        <h3 class="text-xl font-semibold text-center mb-4 text-gray-800 dark:text-white">
            Pembayaran QRIS
        </h3>

        <!-- Perbaikan: path folder images (pastikan public/images/qris.png ada) -->
        <img src="image/qris.jpg" class="w-full rounded-lg shadow" alt="QRIS">

        <p class="text-center text-gray-700 dark:text-gray-300 mt-4">
            Total bayar: <span id="qrisTotal" class="font-bold"></span>
        </p>

        <button onclick="closeQRIS()"
             class="mt-3 w-full bg-[#0F62FE] text-white p-2 rounded-lg hover:bg-[#C2E261]">
            Tutup
        </button>

        {{-- Tombol Lihat Invoice --}}
        <button onclick="showInvoice()"
                class="mt-3 w-full bg-[#0F62FE] text-white p-2 rounded-lg hover:bg-[#C2E261]">
            Lihat Invoice
        </button>

    </div>
</div>

{{-- ===================== INVOICE ===================== --}}
<div id="invoiceSection"
     class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-[999]">

    <div class="bg-white w-[420px] p-6 rounded-2xl shadow-lg">

        <h3 class="text-xl font-bold text-center mb-4">
            INVOICE PEMESANAN
        </h3>

        <div class="space-y-2 text-sm">
            <p><strong>Nama:</strong> <span id="invNama"></span></p>
            <p><strong>No HP:</strong> <span id="invNomor"></span></p>
            <p><strong>Email:</strong> <span id="invEmail"></span></p>
            <p><strong>Tanggal:</strong> <span id="invTanggal"></span></p>
            <p><strong>Jumlah Orang:</strong> <span id="invJumlah"></span></p>
            <p><strong>Total Harga:</strong> <span id="invTotal"></span></p>
        </div>

        <button onclick="closeInvoice()"
            class="mt-5 w-full bg-green-800 text-white p-2 rounded-lg">
            Tutup Invoice
        </button>

    </div>
</div>

{{-- ===================== SCRIPT ===================== --}}
<script>
    // Ambil elemen yang dipakai
    const jumlah = document.getElementById('jumlahOrang');
    const harga = parseInt(document.getElementById('hargaSatuan').innerText);

    // Supaya showInvoice bisa pakai nama/nomor/email/tanggal tanpa error
    const nama = document.getElementById('nama');
    const nomor = document.getElementById('nomor');
    const email = document.getElementById('email');
    const tanggal = document.getElementById('tanggal');

    function updateTotal() {
        const total = (Number(jumlah.value) || 0) * harga;
        document.getElementById('totalHarga').innerText =
            total.toLocaleString('id-ID');
    }

    jumlah.addEventListener('input', updateTotal);
    updateTotal();

    // ---- OPEN / CLOSE QRIS ----
    function openQRIS() {
        const total = (Number(jumlah.value) || 0) * harga;
        document.getElementById('qrisTotal').innerText =
            "Rp " + total.toLocaleString('id-ID');

        document.getElementById('modalQRIS').classList.remove('hidden');
    }

    function closeQRIS() {
        document.getElementById('modalQRIS').classList.add('hidden');
    }

    // ---- INVOICE (tetap seperti semula, tapi aman) ----
    function showInvoice() {
        // tutup QRIS jika masih terbuka
        closeQRIS();

        document.getElementById('invNama').innerText = nama.value || "-";
        document.getElementById('invNomor').innerText = nomor.value || "-";
        document.getElementById('invEmail').innerText = email.value || "-";
        document.getElementById('invTanggal').innerText = tanggal.value || "-";
        document.getElementById('invJumlah').innerText = jumlah.value || "0";
        document.getElementById('invTotal').innerText =
            "Rp " + ((Number(jumlah.value) || 0) * harga).toLocaleString('id-ID');

        document.getElementById('invoiceSection').classList.remove('hidden');
    }

    function closeInvoice() {
        document.getElementById('invoiceSection').classList.add('hidden');
    }
</script>

<!-- FOOTER -->
<footer>
  @include('partials.footer')
</footer>

</body>
</html>
