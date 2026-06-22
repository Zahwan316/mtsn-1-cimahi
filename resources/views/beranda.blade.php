@extends("layout.main.index")

@section("body")
<div>
    {{-- Hero Section --}}
    <div class="relative w-full h-[90vh] md:h-[96vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/mts1-cimahi.jpg') }}" class="w-full h-full object-cover object-center scale-105 animate-fade-in" alt="Gedung MTsN Kota Cimahi">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-900/60 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="w-full lg:w-2/3 space-y-6">

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight md:leading-none">
                    Terwujudnya Madrasah
                    <span class="block mt-2 bg-gradient-to-r from-emerald-400 to-teal-300 bg-clip-text text-transparent font-black tracking-wide drop-shadow-sm">
                        BERMUTU
                    </span>
                </h1>

                <p class="text-emerald-200/90 text-sm md:text-base font-medium tracking-wide">
                    Berakhlak • Bersih • Berbunga • Modern • Unggul • Terampil • Unik
                </p>

                <p class="text-base md:text-xl text-slate-200 max-w-xl leading-relaxed font-light">
                    Selamat Datang di <span class="font-semibold text-white">MTsN Kota Cimahi</span>. Tempat kreativitas, ilmu pengetahuan, dan nilai Islami tumbuh bersama untuk menyongsong masa depan.
                </p>

                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="#sambutan" class="group px-6 py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded-xl shadow-lg shadow-emerald-900/30 transition-all duration-300 hover:-translate-y-0.5 flex items-center gap-2">
                        Jelajahi Madrasah
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#ppdb" class="px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-xl border border-white/20 backdrop-blur-sm transition-all duration-300 hover:-translate-y-0.5">
                        Info PPDB 2026/2027
                    </a>
                </div>

            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-20 pointer-events-none">
            <svg class="w-full fill-white" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,60L1320,60C1200,60,960,60,720,60C480,60,240,60,120,60L0,60Z"></path>
            </svg>
        </div>
    </div>

    {{-- About Section --}}
    <div id="sambutan" class="w-full py-12 px-4 md:px-12 lg:px-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center bg-white p-6 md:p-8 rounded-2xl shadow-sm">

            <div class="w-full flex justify-center lg:justify-end">
                <div class="w-full max-w-[400px] aspect-[3/4] overflow-hidden rounded-2xl shadow-lg ring-4 ring-emerald-50">
                    <img src="{{ asset('img/kepala-sekolah.jpg') }}" class="w-full h-full object-cover object-top transition duration-500 hover:scale-105" alt="Kepala Sekolah MTsN Kota Cimahi" />
                </div>
            </div>

            <div class="flex flex-col justify-center">
                <span class="text-emerald-600 font-semibold tracking-wider text-sm uppercase mb-2">Sambutan Pimpinan</span>

                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-800 tracking-tight mb-4 leading-snug">
                    Assalamu’alaikum <br class="hidden md:inline"> Warahmatullahi Wabarakaatuh.
                </h2>

                <div class="text-slate-600 text-sm md:text-base leading-relaxed space-y-4 text-justify">
                    <p>
                        Sebagai media informasi dan komunikasi, web MTsN Kota Cimahi dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik, orang tua, dan masyarakat. Kualitas layanan menjadi salah satu misi sekolah dalam kaitannya dengan transparansi dan akuntabilitas sekolah.
                    </p>
                    <p>
                        Melaksanakan amanah sebagai pimpinan di MTsN Kota Cimahi, harapan untuk menjadikan sekolah besar dengan bertabur prestasi baik akademik maupun non-akademik terus meningkat dan lebih berkembang. Sekolah yang akan melahirkan generasi yang kreatif, inovatif, religius yang berwawasan lingkungan serta mengabdi kepada bangsa dan negara.
                    </p>
                    <p>
                        Dari lubuk hati yang dalam, saya mengajak seluruh warga sekolah, orang tua, dan masyarakat untuk bekerja sama, marilah kita bergandeng tangan dan berkolaborasi untuk menciptakan sekolah yang nyaman, aman, dan menyenangkan bagi putra-putri kita dalam menuntut ilmu.
                    </p>
                    <p class="font-medium text-slate-700 italic">
                        Wassalamu’alaikum Warahmatullahi Wabarakaatuh.
                    </p>
                </div>

                <div class="mt-6 border-t border-slate-100 pt-4">
                    <p class="font-bold text-slate-800 text-lg">Rubaitun, M. Pd.</p>
                    <p class="text-sm text-slate-500">Kepala Madrasah MTsN Kota Cimahi</p>
                </div>
            </div>

        </div>
    </div>

    {{-- Visi Misi Section --}}
    <div class="w-full bg-[#0B2D72] py-16 px-4 md:px-12 lg:px-24 text-white">
        <div class="max-w-7xl mx-auto space-y-12">

            <!-- Bagian Atas: Pengantar Visi Besar -->
            <div class="max-w-3xl">
                <h2 class="text-3xl md:text-4xl font-black tracking-tight mb-4">Visi & Misi Madrasah</h2>
                <p class="text-base md:text-lg text-white/90 leading-relaxed font-light">
                    Visi MTsN Kota Cimahi adalah <span class="font-bold text-amber-300">“Terwujudnya Madrasah BERMUTU,”</span> yang bermakna sebagai institusi pendidikan yang benar-benar berkualitas. <span class="italic text-cyan-100">“Bermutu”</span> juga merupakan akronim dari Berakhlak, Bersih, Berbunga, Modern, Unggul, Terampil, dan Unik.
                </p>
            </div>

            <!-- Bagian Bawah: Grid Konten Responsif -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- Blok Kiri: Indikator Visi -->
                <div class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-xl border border-white/10 space-y-4">
                    <div class="flex items-center gap-3 border-b border-white/20 pb-4">
                        <span class="flex items-center justify-center w-10 h-10 bg-amber-400 text-[#0992C2] rounded-xl font-bold shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </span>
                        <h3 class="text-xl font-extrabold tracking-wide">Indikator Visi</h3>
                    </div>

                    <ul class="space-y-3.5">
                        @foreach($visi as $index => $data)
                            <li class="flex items-start gap-3 text-white/95 text-sm md:text-base leading-relaxed group">
                                <span class="flex-shrink-0 flex items-center justify-center w-6 h-6 bg-white/20 rounded-md text-xs font-bold text-amber-300 mt-0.5 group-hover:bg-amber-400 group-hover:text-[#0992C2] transition-colors">
                                    {{ $index + 1 }}
                                </span>
                                <p class="flex-1">{{ $data }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Blok Kanan: Misi Madrasah -->
                <div class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-xl border border-white/10 space-y-4">
                    <div class="flex items-center gap-3 border-b border-white/20 pb-4">
                        <span class="flex items-center justify-center w-10 h-10 bg-emerald-400 text-[#0992C2] rounded-xl font-bold shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </span>
                        <h3 class="text-xl font-extrabold tracking-wide">Misi Madrasah</h3>
                    </div>

                    <ul class="space-y-3.5">
                        @foreach($misi as $index => $data)
                            <li class="flex items-start gap-3 text-white/95 text-sm md:text-base leading-relaxed group">
                                <span class="flex-shrink-0 flex items-center justify-center w-6 h-6 bg-white/20 rounded-md text-xs font-bold text-emerald-300 mt-0.5 group-hover:bg-emerald-400 group-hover:text-[#0992C2] transition-colors">
                                    {{ $index + 1 }}
                                </span>
                                <p class="flex-1">{{ $data }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- Berita Section --}}
    <div class="w-full py-16 px-4 md:px-12 lg:px-24 bg-slate-50">
        <div class="max-w-7xl mx-auto space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Berita Terbaru</h2>
                    <p class="text-sm text-slate-500 mt-1">Informasi dan kegiatan terupdate di MTsN Kota Cimahi</p>
                </div>

                <div class="flex gap-2">
                    <button id="prevBtn" class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button id="nextBtn" class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-700 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </div>
            </div>

            <div class="relative w-full h-[350px] md:h-[480px] rounded-3xl overflow-hidden shadow-xl group">
                <div id="carouselWrapper" class="flex w-full h-full transition-transform duration-700 ease-in-out">

                    {{-- Item Slider 1 --}}
                    <div class="w-full h-full flex-shrink-0 relative">
                        <img src="{{ asset('img/Banner.jpg') }}" class="w-full h-full object-cover object-center" alt="Banner Berita">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-12 space-y-3">
                            <span class="px-3 py-1 bg-emerald-600 text-white text-xs font-semibold uppercase tracking-wider rounded-md">
                                Kegiatan
                            </span>
                            <h3 class="text-xl md:text-3xl font-bold text-white tracking-tight max-w-4xl line-clamp-2">
                                Pembukaan Kegiatan Classmeeting Semester Genap MTsN Kota Cimahi
                            </h3>
                            <div class="flex items-center gap-4 text-xs md:text-sm text-slate-300">
                                <span>12-02-2026</span>
                                <span>•</span>
                                <a href="/berita" class="text-emerald-400 hover:text-emerald-300 font-medium inline-flex items-center gap-1 group/btn">
                                    Baca Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Item Slider 2 --}}
                    <div class="w-full h-full flex-shrink-0 relative">
                        <img src="{{ asset('img/Banner.jpg') }}" class="w-full h-full object-cover object-center" alt="Banner Berita">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-12 space-y-3">
                            <span class="px-3 py-1 bg-emerald-600 text-white text-xs font-semibold uppercase tracking-wider rounded-md">
                                Kegiatan
                            </span>
                            <h3 class="text-xl md:text-3xl font-bold text-white tracking-tight max-w-4xl line-clamp-2">
                                Pelaksanaan Ujian Madrasah Berbasis Komputer Berjalan Lancar
                            </h3>
                            <div class="flex items-center gap-4 text-xs md:text-sm text-slate-300">
                                <span>12-02-2026</span>
                                <span>•</span>
                                <a href="/berita" class="text-emerald-400 hover:text-emerald-300 font-medium inline-flex items-center gap-1 group/btn">
                                    Baca Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Indikator Dot Slider --}}
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20">
                    <button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white transition-all duration-300" data-slide="0"></button>
                    <button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/40 transition-all duration-300" data-slide="1"></button>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten Lainnya Section --}}
    <div class="w-full py-16 px-4 md:px-12 lg:px-24 bg-slate-50">
        <div class="max-w-7xl mx-auto space-y-8">

            <div>
                <h2 class="text-slate-900 font-extrabold text-3xl tracking-tight">Info Lainnya</h2>
                <p class="text-sm text-slate-500 mt-1">Ikuti kegiatan lainnya dari sekolah kami</p>
            </div>

            <div class="flex flex-wrap gap-3">
                <button onclick="filterContent('semua')" id="btn-semua" class="filter-btn px-5 py-2.5 bg-emerald-600 text-white font-semibold text-sm rounded-xl shadow-md shadow-emerald-900/10 transition-all duration-300 cursor-pointer">
                    Semua
                </button>
                <button onclick="filterContent('pengumuman')" id="btn-pengumuman" class="filter-btn px-5 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-sm rounded-xl shadow-sm transition-all duration-300 cursor-pointer">
                    Pengumuman
                </button>
                <button onclick="filterContent('karya-guru')" id="btn-karya-guru" class="filter-btn px-5 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-sm rounded-xl shadow-sm transition-all duration-300 cursor-pointer">
                    Karya Guru
                </button>
                <button onclick="filterContent('ekstrakurikuler')" id="btn-ekstrakurikuler" class="filter-btn px-5 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-sm rounded-xl shadow-sm transition-all duration-300 cursor-pointer">
                    Ekstrakurikuler
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                <div data-category="pengumuman" class="content-item group relative h-[300px] md:h-[380px] rounded-3xl overflow-hidden shadow-lg transition-all duration-500 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('img/Banner.jpg') }}" class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" alt="Info Pengumuman">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 space-y-3">
                        <span class="px-3 py-1 bg-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-md">Pengumuman</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white tracking-tight line-clamp-2">Penerimaan Peserta Didik Baru (PPDB) Jalur Prestasi Mulai Dibuka</h3>
                        <div class="flex items-center gap-4 text-xs text-slate-300 pt-1">
                            <span>12 Jun 2026</span>
                            <span>•</span>
                            <a href="/berita" class="text-emerald-400 hover:text-emerald-300 font-medium inline-flex items-center gap-1 group/btn">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-category="karya-guru" class="content-item group relative h-[300px] md:h-[380px] rounded-3xl overflow-hidden shadow-lg transition-all duration-500 hover:-translate-y-1 hover:shadow-xl">
                    <img src="{{ asset('img/Banner.jpg') }}" class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" alt="Karya Guru">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/95 via-slate-950/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8 space-y-3">
                        <span class="px-3 py-1 bg-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-md">Karya Guru</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white tracking-tight line-clamp-2">Pemanfaatan Teknologi Kecerdasan Buatan dalam Media Pembelajaran Madrasah</h3>
                        <div class="flex items-center gap-4 text-xs text-slate-300 pt-1">
                            <span>10 Jun 2026</span>
                            <span>•</span>
                            <a href="/berita" class="text-emerald-400 hover:text-emerald-300 font-medium inline-flex items-center gap-1 group/btn">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="emptyState" class="hidden w-full flex-col items-center justify-center text-center py-16 px-4 bg-white rounded-3xl border border-dashed border-slate-200 shadow-sm transition-all duration-500">
                <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-400 mb-4 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-slate-800">Belum Ada Data</h4>
                <p class="text-sm text-slate-500 max-w-sm mt-1">
                    Informasi untuk kategori ini belum tersedia atau sedang dalam proses pembaharuan oleh admin madrasah.
                </p>
            </div>

        </div>
    </div>

    {{-- Quotes Section --}}
    <section class="w-full py-20 px-4 md:px-12 lg:px-24 bg-white relative overflow-hidden">
        <div class="absolute top-10 left-12 text-slate-100 pointer-events-none select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-44 w-44 fill-current opacity-60" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 21v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10 space-y-6">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 mb-2">
                <svg xmlns="http://www.w3.org/2000/xl" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
            </div>

            <blockquote class="text-xl md:text-3xl font-medium text-slate-800 italic leading-relaxed font-serif">
                "Barang siapa belum pernah merasakan pahitnya mencari ilmu walau sesaat, ia akan menelan hinanya kebodohan sepanjang hidupnya."
            </blockquote>

            <div class="w-16 h-1 bg-emerald-500 mx-auto rounded-full my-4"></div>

            <div>
                <cite class="not-italic font-extrabold text-slate-900 tracking-wide text-base md:text-lg block">
                    Imam Syafi'i RA.
                </cite>
                <span class="text-xs md:text-sm text-slate-500 font-medium tracking-wider uppercase mt-0.5 block">
                    Ulama & Mujtahid Agung Nusantara/Dunia
                </span>
            </div>
        </div>
    </section>
</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const wrapper = document.getElementById("carouselWrapper");
        const slides = wrapper.children;
        const totalSlides = slides.length;

        // Proteksi jika data berita dari database kosong
        if (totalSlides === 0) return;

        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const dots = document.querySelectorAll(".carousel-dot");

        let currentIndex = 0;
        let slideInterval;

        // Fungsi berpindah slide
        function goToSlide(index) {
            // Validasi sirkular indeks
            if (index >= totalSlides) currentIndex = 0;
            else if (index < 0) currentIndex = totalSlides - 1;
            else currentIndex = index;

            // Efek geser berdasarkan persentase matriks X
            wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Perbarui status warna dots indikator
            dots.forEach((dot, idx) => {
                if (idx === currentIndex) {
                    dot.classList.remove("bg-white/40", "w-2.5");
                    dot.classList.add("bg-emerald-500", "w-6"); // Dot aktif memanjang
                } else {
                    dot.classList.remove("bg-emerald-500", "w-6");
                    dot.classList.add("bg-white/40", "w-2.5");
                }
            });
        }

        // Fungsi pemicu otomatis awal
        function startAutoScroll() {
            slideInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 3000); // Kunci di 3 detik (3000 ms)
        }

        function resetAutoScroll() {
            clearInterval(slideInterval);
            startAutoScroll();
        }

        // Event Listener tombol navigasi
        nextBtn.addEventListener("click", () => {
            goToSlide(currentIndex + 1);
            resetAutoScroll();
        });

        prevBtn.addEventListener("click", () => {
            goToSlide(currentIndex - 1);
            resetAutoScroll();
        });

        // Event Listener klik langsung pada indikator titik (dots)
        dots.forEach((dot, idx) => {
            dot.addEventListener("click", () => {
                goToSlide(idx);
                resetAutoScroll();
            });
        });

        // Inisialisasi awal slider
        goToSlide(0);
        startAutoScroll();
    });

    function filterContent(category) {
        const items = document.querySelectorAll('.content-item');
        const buttons = document.querySelectorAll('.filter-btn');
        const emptyState = document.getElementById('emptyState');

        let visibleCount = 0; // Penghitung data aktif setelah difilter

        // 1. Proses memilah konten
        items.forEach(item => {
            if (category === 'semua' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                visibleCount++; // Tambah angka jika data terdeteksi ada
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });

        // 2. Logika Pemicu State Blank
        setTimeout(() => {
            if (visibleCount === 0) {
                // Tampilkan Empty State
                emptyState.classList.remove('hidden');
                emptyState.classList.add('flex');
            } else {
                // Sembunyikan Empty State jika ada data kembali
                emptyState.classList.add('hidden');
                emptyState.classList.remove('flex');
            }
        }, 300); // Menunggu animasi transisi box menghilang selesai

        // 3. Logika Pergantian Tema Warna Tombol Aktif
        buttons.forEach(btn => {
            if (btn.id === `btn-${category}`) {
                btn.className = "filter-btn px-5 py-2.5 bg-emerald-600 text-white font-semibold text-sm rounded-xl shadow-md transition-all duration-300 cursor-pointer";
            } else {
                btn.className = "filter-btn px-5 py-2.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-sm rounded-xl shadow-sm transition-all duration-300 cursor-pointer";
            }
        });
    }
</script>
