{{-- resources/views/partials/footer.blade.php --}}

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
                <a href="/paket" class="hover:text-[#1F5B36]">Produk</a>
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