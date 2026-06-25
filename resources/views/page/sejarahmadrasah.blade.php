@extends('layout.main.index')

@section('section')
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#0B2D72] tracking-tight mb-4">Sejarah Madrasah</h2>
        <div class="w-24 h-1 bg-emerald-500 mx-auto rounded-full"></div>
    </div>

    <!-- Blok Narasi Sejarah (Grid Bergantian Gambar & Teks) -->
    <div class="space-y-12 md:space-y-20">

        <!-- Bagian 1: Asal Usul -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div class="order-2 md:order-1 space-y-4">
                <span class="text-xs uppercase tracking-wider font-bold text-emerald-600">Awal Pendirian</span>
                <h3 class="text-xl md:text-2xl font-bold text-slate-800">MTs Nurul Falah Sukasari (1967)</h3>
                <p class="text-slate-600 text-sm leading-relaxed font-light text-justify">
                    MTs Negeri Sukasari berdiri sejak tahun 1967, awalnya berupa madrasah swasta dengan nama <strong>MTs
                        Nurul Falah Sukasari</strong> yang terletak di Kampung Sukasari, Desa Baros, Kecamatan Cimahi
                    Tengah, Kabupaten Bandung dan dipimpin oleh Raihan Kimin.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed font-light text-justify">
                    Setelah memperoleh status negeri berdasarkan Keputusan Menteri Agama No. 88 tahun 1969, namanya resmi
                    berubah menjadi <strong>MTs A.I.N</strong> (Madrasah Tsanawiyah Agama Islam Negeri). Pada tahun 1979,
                    lokasi madrasah dipindahkan ke Desa Cibeber, Kecamatan Cimahi Selatan dengan nama MTs Negeri Sukasari
                    Tjimahi.
                </p>
            </div>
            <div class="order-1 md:order-2">
                <div class="w-full h-64 md:h-80 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                    <img src="{{ asset('img/sejarah.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        alt="Foto Sejarah MTsN" />
                </div>
            </div>
        </div>

        <!-- Bagian 2: Perkembangan & Prestasi -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div>
                <div class="w-full h-64 md:h-80 rounded-2xl overflow-hidden shadow-lg border border-slate-200">
                    <img src="{{ asset('img/sejarah2.jpg') }}"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        alt="Foto Perkembangan MTsN" />
                </div>
            </div>
            <div class="space-y-4">
                <span class="text-xs uppercase tracking-wider font-bold text-emerald-600">Perkembangan & Akreditasi</span>
                <h3 class="text-xl md:text-2xl font-bold text-slate-800">Menuju Madrasah Unggulan</h3>
                <p class="text-slate-600 text-sm leading-relaxed font-light text-justify">
                    Berkat kegigihan para pengelola bersama komite madrasah, siswa-siswi mampu bersaing ketat dengan SMP
                    sederajat di Kota Cimahi. Lulusan kami banyak diterima di sekolah favorit seperti SMKN 1 Cimahi, SMAN 2
                    Cimahi, hingga MAN 1 Bandung.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed font-light text-justify">
                    Hingga pada tahun 2007, madrasah resmi meraih <strong>Akreditasi "A"</strong> dari BASN dengan nomor
                    <em>Dp. 002785</em>. Animo masyarakat terus melonjak tajam; tercatat sejak 2008, berkisar 700 hingga 800
                    pendaftar setiap tahunnya harus bersaing memperebutkan kuota yang hanya menampung 400 siswa.
                </p>
            </div>
        </div>

    </div>

    <!-- Bagian 3: Linimasa Kepemimpinan (Timeline) -->
    <div class="mt-24">
        <div class="text-center mb-12">
            <h3 class="text-xl md:text-2xl font-bold text-slate-800">Periode Kepemimpinan</h3>
            <p class="text-sm text-slate-500 mt-1">Rekam jejak para tokoh di balik kemajuan madrasah dari masa ke masa</p>
        </div>

        <!-- Komponen Timeline Vertikal -->
        <div class="relative border-l-2 border-slate-200 ml-4 md:ml-32 space-y-8">

            <!-- Periode 1 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">1967 -
                        1977</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">1967 - 1977</span>
                    <h4 class="font-bold text-slate-800 text-base">Raihan Kimin <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Pertama)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Madrasah baru memiliki 3 kelas (Rombel
                        awal 1 kelas per tingkatan), lalu berkembang pesat menjadi dua kelas untuk masing-masing tingkatan.
                    </p>
                </div>
            </div>

            <!-- Periode 2 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">1978 -
                        1992</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">1978 - 1992</span>
                    <h4 class="font-bold text-slate-800 text-base">Drs. Dudu Abdullah <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Kedua)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Lokasi madrasah dipindahkan resmi ke
                        Desa Cibeber. Jumlah siswa bertambah menjadi 9 kelas, serta mulai dilengkapi fasilitas Laboratorium
                        IPA dan perpustakaan sekolah.</p>
                </div>
            </div>

            <!-- Periode 3 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">1992 -
                        1999</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">1992 - 1999</span>
                    <h4 class="font-bold text-slate-800 text-base">H. Taman, BA <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Ketiga)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Melaksanakan akselerasi pembangunan
                        fisik masif hingga mampu menampung kapasitas total 18 kelas (6 rombel per tingkatan) dan sukses
                        menyelenggarakan KBM pagi hari seluruhnya.</p>
                </div>
            </div>

            <!-- Periode 4 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">2000 -
                        2009</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">2000 - 2009</span>
                    <h4 class="font-bold text-slate-800 text-base">Drs. E. Gunawan <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Keempat)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Pembangunan infrastruktur berlanjut
                        hingga kapasitas bertambah menjadi 24 kelas. Mulai mengintegrasikan teknologi modern dengan
                        pengadaan Laboratorium Komputer dan Ruang Multimedia.</p>
                </div>
            </div>

            <!-- Periode 5 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">2009 -
                        2021</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">2009 - 2021</span>
                    <h4 class="font-bold text-slate-800 text-base">Drs. Rudaya, M.MPd <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Kelima)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">
                        Sukses menyejajarkan kualitas dengan SMP unggulan. Kapasitas melesat ke 30 rombel, dilengkapi Masjid
                        Baiturrahman 2 lantai hasil swadaya, dan perluasan laboratorium terpadu (IPA, Bahasa, Multimedia,
                        PAI). Pada <strong>tahun 2015</strong>, nama sekolah resmi bertransformasi menjadi <strong>MTs
                            Negeri Kota Cimahi</strong> (KMA No. 212/2015).
                    </p>
                </div>
            </div>

            <!-- Periode 6 -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-500 w-4 h-4 rounded-full border-4 border-white group-hover:bg-[#0B2D72] transition-colors">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span class="text-xs font-bold text-[#0B2D72] bg-[#0B2D72]/5 px-2.5 py-1 rounded-full">2021 -
                        2023</span>
                </div>
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">2021 - 2023</span>
                    <h4 class="font-bold text-slate-800 text-base">Dra. Hj. Eulis Nurhasanah, M.Pd. <span
                            class="text-sm font-normal text-slate-500">(Kepala Madrasah Keenam)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Pada masa kepemimpinan ini, madrasah
                        berhasil merealisasikan proyek strategis nasional berupa pembangunan Gedung Ruang Kelas Baru (RKB)
                        bersumber dana SBSN sebanyak 6 lokal kelas baru.</p>
                </div>
            </div>

            <!-- Periode Sekarang -->
            <div class="relative pl-6 md:pl-8 group">
                <div
                    class="absolute -left-[9px] top-1.5 bg-emerald-600 w-4 h-4 rounded-full border-4 border-emerald-100 animate-pulse">
                </div>
                <div class="absolute right-full mr-6 top-1 hidden md:block text-right w-24">
                    <span
                        class="text-xs font-bold text-white bg-emerald-600 px-2.5 py-1 rounded-full animate-pulse">Sekarang</span>
                </div>
                <div
                    class="bg-emerald-50/50 p-5 rounded-2xl shadow-sm border border-emerald-100 hover:shadow-md transition-shadow">
                    <span class="inline-block md:hidden text-xs font-bold text-emerald-600 mb-2">2024 - Sekarang</span>
                    <h4 class="font-bold text-slate-800 text-base">Rubaitun, S.Pd, M.Pd. <span
                            class="text-sm font-semibold text-emerald-700">(Kepala Madrasah Saat Ini)</span></h4>
                    <p class="text-xs text-slate-600 mt-2 leading-relaxed font-light">Beliau merupakan figur pendidik senior
                        yang telah setia mengabdi sebagai guru Matematika di lingkungan internal MTsN Kota Cimahi sejak
                        tahun 1997.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
