@extends("layout.main.index")

@section("section")
    <x-header text="Komite Madrasah"/>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            

            <div class="space-y-8">
                <!-- 1. Pengertian Komite (Card Deskripsi) -->
                <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-100 space-y-4">
                    <div class="flex items-center gap-3 text-[#0B2D72]">
                        <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <h3 class="text-lg md:text-xl font-bold text-slate-800">Tentang Komite Madrasah</h3>
                    </div>
                    <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify font-light">
                        Komite Sekolah/Madrasah adalah lembaga mandiri yang beranggotakan orangtua/wali peserta didik, komunitas sekolah, serta tokoh masyarakat yang peduli pendidikan. Komite Sekolah/Madrasah diatur dengan <strong>Permendikbud Nomor 75 Tahun 2016</strong> tentang Komite Sekolah yang ditetapkan pada tanggal 30 Desember 2016 di Jakarta.
                    </p>
                </div>

                <!-- Grid Konten: Tugas & Unsur Anggota -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

                    <!-- 2. Tugas Komite -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 space-y-4 h-full">
                        <div class="flex items-center gap-3 border-b border-slate-100 pb-3">
                            <span class="flex-shrink-0 flex items-center justify-center w-9 h-9 bg-amber-50 text-amber-600 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </span>
                            <h3 class="text-base font-bold text-slate-800">Tugas Komite</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2.5 text-slate-600 text-xs md:text-sm leading-relaxed">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2 flex-shrink-0"></span>
                                <span>Memberikan pertimbangan dalam penentuan dan pelaksanaan kebijakan pendidikan.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-slate-600 text-xs md:text-sm leading-relaxed">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2 flex-shrink-0"></span>
                                <span>Menggalang dana dan sumber daya pendidikan lainnya melalui upaya kreatif dan inovatif.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-slate-600 text-xs md:text-sm leading-relaxed">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2 flex-shrink-0"></span>
                                <span>Mengawasi pelayanan pendidikan sesuai ketentuan peraturan perundang-undangan.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-slate-600 text-xs md:text-sm leading-relaxed">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2 flex-shrink-0"></span>
                                <span>Menindaklanjuti keluhan, saran, kritik, aspirasi dari peserta didik, orang tua, dan masyarakat.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- 3. Unsur Anggota -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 space-y-4 h-full">
                        <div class="flex items-center gap-3 border-b border-slate-100 pb-3">
                            <span class="flex-shrink-0 flex items-center justify-center w-9 h-9 bg-blue-50 text-blue-600 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                            <h3 class="text-base font-bold text-slate-800">Unsur Anggota</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-slate-600 text-xs md:text-sm">
                                <span class="flex items-center justify-center w-5 h-5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-md">1</span>
                                <span>Orangtua/wali siswa yang aktif</span>
                            </li>
                            <li class="flex items-center gap-3 text-slate-600 text-xs md:text-sm">
                                <span class="flex items-center justify-center w-5 h-5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-md">2</span>
                                <span>Tokoh Masyarakat</span>
                            </li>
                            <li class="flex items-center gap-3 text-slate-600 text-xs md:text-sm">
                                <span class="flex items-center justify-center w-5 h-5 bg-blue-50 text-blue-600 text-[10px] font-bold rounded-md">3</span>
                                <span>Pakar Pendidikan</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- 4. Susunan Pengurus Komite -->
                <div class="pt-6">
                    <div class="text-center mb-6">
                        <h3 class="text-lg font-bold text-slate-800">Pengurus Komite Periode 2024-2028</h3>
                    </div>

                    <!-- Card Profil Pengurus -->
                    <div class="flex justify-center">
                        <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4 w-full max-w-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 border border-slate-200">
                                <!-- Placeholder avatar minimalis -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 text-base leading-tight">Yahya</h4>
                                <span class="inline-block text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded mt-1">
                                    Ketua Komite
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>

@endsection
