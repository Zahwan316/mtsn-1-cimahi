<header class="sticky top-0 z-50 w-full transition-all duration-300">
    <nav class="w-full min-h-[32px] sm:h-8 bg-[#0992C2] text-white border-b border-white/10 px-4 md:px-12 flex items-center transition-all duration-300">
    <div class="max-w-7xl mx-auto w-full flex flex-col sm:flex-row items-center justify-between gap-2 sm:gap-4 py-1.5 sm:py-0 text-[11px] font-medium tracking-wide">

        <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6">
            <div class="flex items-center gap-1.5 hover:text-slate-200 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span>Telp: <span class="font-light">021-23232</span></span>
            </div>

            <span class="hidden sm:inline text-white/30">|</span>

            <div class="flex items-center gap-1.5 hover:text-slate-200 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span>Fax: <span class="font-light">022-6671464</span></span>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <a href="mailto:info@mtsn-kotacimahi.sch.id" class="flex items-center gap-1.5 hover:text-amber-300 transition-colors group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white/80 group-hover:text-amber-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="font-light">info@mtsn-kotacimahi.sch.id</span>
            </a>
        </div>

    </div>
</nav>

    <nav class="w-full h-20 bg-[#0B2D72]/80 backdrop-blur-md text-white  top-0 z-50 border-b border-white/10 px-6 md:px-12 transition-all duration-300">
        <div class="max-w-7xl mx-auto h-full flex flex-row items-center justify-between">

            <!-- Sisi Kiri: Logo & Nama Sekolah -->
            <a href="/" class="flex items-center gap-3 h-full group">
                <div class="h-12 w-12 p-0.5 bg-white rounded-xl shadow-md transition-transform duration-300 group-hover:scale-105">
                    <img src="{{ asset('img/logoman-2.png') }}" class="w-full h-full object-contain" alt="Logo MTsN Kota Cimahi" />
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-base tracking-wide leading-tight group-hover:text-emerald-400 transition-colors duration-300">MTsN KOTA CIMAHI</span>
                    <span class="text-[10px] text-slate-300 tracking-wider uppercase font-medium">Madrasah Unggulan Berbudaya</span>
                </div>
            </a>

            <div class="hidden md:flex flex-row items-center gap-1 lg:gap-2 h-full font-medium text-sm">

                <!-- Menu Utama -->
                <a href="/" class="px-4 py-2 rounded-xl hover:bg-white/10 text-emerald-400 transition-all duration-200">
                    Beranda
                </a>

                <!-- Dropdown 1: Profil -->
                <div class="relative h-full flex items-center group/dropdown">
                    <button class="px-4 py-2 rounded-xl hover:bg-white/10 flex items-center gap-1.5 transition-all duration-200 cursor-pointer">
                        <span>Profil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover/dropdown:rotate-180 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Isi Dropdown (Muncul saat di-hover) -->
                    <div class="absolute top-[80%] left-0 w-52 bg-white text-slate-800 rounded-2xl shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover/dropdown:opacity-100 group-hover/dropdown:visible group-hover/dropdown:top-[100%] transition-all duration-300 z-50">
                        <a href="#sambutan" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Sambutan Kepala</a>
                        <a href="#visi-misi" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Visi & Misi</a>
                        <a href="#sejarah" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Sejarah Sekolah</a>
                        <a href="#struktur" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Struktur Organisasi</a>
                    </div>
                </div>

                <!-- Dropdown 2: Akademik -->
                <div class="relative h-full flex items-center group/dropdown">
                    <button class="px-4 py-2 rounded-xl hover:bg-white/10 flex items-center gap-1.5 transition-all duration-200 cursor-pointer">
                        <span>Akademik</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover/dropdown:rotate-180 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute top-[80%] left-0 w-48 bg-white text-slate-800 rounded-2xl shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover/dropdown:opacity-100 group-hover/dropdown:visible group-hover/dropdown:top-[100%] transition-all duration-300 z-50">
                        <a href="#kurikulum" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Kurikulum</a>
                        <a href="#kalender" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Kalender Akademik</a>
                        <a href="#fasilitas" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Fasilitas Belajar</a>
                    </div>
                </div>

                <!-- Dropdown 3: Program -->
                <div class="relative h-full flex items-center group/dropdown">
                    <button class="px-4 py-2 rounded-xl hover:bg-white/10 flex items-center gap-1.5 transition-all duration-200 cursor-pointer">
                        <span>Program</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover/dropdown:rotate-180 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute top-[80%] right-0 lg:left-0 w-56 bg-white text-slate-800 rounded-2xl shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover/dropdown:opacity-100 group-hover/dropdown:visible group-hover/dropdown:top-[100%] transition-all duration-300 z-50">
                        <a href="#tahfidz" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Tahfidz Al-Qur'an</a>
                        <a href="#digital-class" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Digital Classroom</a>
                        <a href="#ekstrakurikuler" class="block px-4 py-2.5 hover:bg-slate-50 hover:text-emerald-600 transition-colors">Ekstrakurikuler</a>
                    </div>
                </div>

                <!-- Tombol CTA: PPDB -->
                <a href="#ppdb" class="ml-4 px-5 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase font-bold tracking-wider rounded-xl shadow-lg shadow-emerald-900/20 transition-all duration-300 hover:-translate-y-0.5">
                    PPDB Online
                </a>
            </div>

            <!-- Tombol Menu Mobile (Muncul di Layar HP) -->
            <div class="flex md:hidden">
                <button class="p-2 rounded-xl bg-white/10 hover:bg-white/25 transition-colors cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </nav>
</header>
