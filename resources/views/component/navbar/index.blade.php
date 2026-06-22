<nav class="w-full h-20 bg-[#0B2D72]/80 backdrop-blur-md text-white sticky top-0 z-50 border-b border-white/10 px-6 md:px-12 transition-all duration-300">
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
