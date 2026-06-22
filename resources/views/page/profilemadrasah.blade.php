@extends('layout.main.index')

@section('section')
    <div class="border-b border-slate-200 pb-4">
        <h2 class="text-[#0B2D72] font-extrabold text-3xl tracking-tight">Profil & Legalitas Madrasah</h2>
        <p class="text-sm text-slate-500 mt-1">Data identitas resmi, legalitas, kepemilikan aset, dan kontak instansi</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-base font-bold text-[#0B2D72] flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0992C2]" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Identitas & Dokumen Resmi
                </h3>
            </div>

            <div class="p-6 divide-y divide-slate-100 text-sm">
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">Nama Madrasah</span>
                    <span class="text-[#0B2D72] font-bold sm:w-2/3">MTsN Kota Cimahi</span>
                </div>
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">NSM / NPSN</span>
                    <span class="text-slate-800 font-semibold sm:w-2/3">121132770001 / 20279746</span>
                </div>
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">Akreditasi</span>
                    <span class="text-slate-800 font-semibold sm:w-2/3">A (Nilai: 93)</span>
                </div>
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">NPWP</span>
                    <span class="text-slate-800 font-mono sm:w-2/3">00.014.759.5-424.000</span>
                </div>
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">SK Izin Pendirian</span>
                    <span class="text-slate-800 sm:w-2/3">DIPA-025.04.2.416412 / 2016</span>
                </div>
                <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                    <span class="text-slate-400 font-medium sm:w-1/3">SK Izin Operasional</span>
                    <span class="text-slate-800 sm:w-2/3">88 / 1969 <span class="text-xs text-slate-400 font-normal">(Tgl
                            12/08/1969)</span></span>
                </div>
            </div>
        </div>

        <div class="space-y-6">

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                    <h3 class="text-base font-bold text-[#0B2D72] flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0992C2]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Manajemen & Kontak
                    </h3>
                </div>
                <div class="p-6 divide-y divide-slate-100 text-sm">
                    <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                        <span class="text-slate-400 font-medium sm:w-1/3">Nama Kepala</span>
                        <span class="text-[#0B2D72] font-bold sm:w-2/3">Rubaitun, S.Pd, M.Pd.</span>
                    </div>
                    <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                        <span class="text-slate-400 font-medium sm:w-1/3">NIP</span>
                        <span class="text-slate-800 font-mono sm:w-2/3">197112111997022004</span>
                    </div>
                    <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                        <span class="text-slate-400 font-medium sm:w-1/3">No. Telepon</span>
                        <span class="text-slate-800 sm:w-2/3">(022) 6671464</span>
                    </div>
                    <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                        <span class="text-slate-400 font-medium sm:w-1/3">Situs Resmi / Email</span>
                        <a href="https://mtsn-kotacimahi.sch.id" target="_blank"
                            class="text-[#0992C2] hover:text-[#0b2d72] hover:underline sm:w-2/3 break-all font-medium">mtsn-kotacimahi.sch.id</a>
                    </div>
                    <div class="py-3 flex flex-col sm:flex-row sm:justify-between gap-1">
                        <span class="text-slate-400 font-medium sm:w-1/3">Alamat Lengkap</span>
                        <span class="text-slate-700 sm:w-2/3 leading-relaxed">
                            Jalan Tsanawiyah No. 1, Kel. Cibeber, Kec. Cimahi Selatan, Kota Cimahi, Jawa Barat 40531
                        </span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-100 bg-slate-50/50">
                    <h3 class="text-base font-bold text-[#0B2D72] flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0992C2]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Status Aset & Bangunan
                    </h3>
                </div>
                <div class="p-6 grid grid-cols-2 gap-4 text-sm">
                    <div class="bg-[#F6E7BC]/40 p-3.5 rounded-xl border border-[#F6E7BC]">
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Kepemilikan
                            Tanah</span>
                        <span class="text-[#0B2D72] font-bold block mt-1">Milik Sendiri (Pemerintah)</span>
                    </div>
                    <div class="bg-[#F6E7BC]/40 p-3.5 rounded-xl border border-[#F6E7BC]">
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Luas Tanah</span>
                        <span class="text-[#0B2D72] font-bold block mt-1">6.462 m²</span>
                    </div>
                    <div class="bg-[#F6E7BC]/40 p-3.5 rounded-xl border border-[#F6E7BC]">
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Status
                            Bangunan</span>
                        <span class="text-[#0B2D72] font-bold block mt-1">Pemerintah / IMB Resmi</span>
                    </div>
                    <div class="bg-[#F6E7BC]/40 p-3.5 rounded-xl border border-[#F6E7BC]">
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Luas
                            Bangunan</span>
                        <span class="text-[#0B2D72] font-bold block mt-1">3.043 m²</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-slate-100 bg-slate-50/50">
            <h3 class="text-base font-bold text-[#0B2D72]">Data Rombongan Belajar (Rombel)</h3>
        </div>

        <div class="w-full overflow-x-auto">
            <table class="w-full text-sm text-left text-slate-600 min-w-[800px]">
                <thead
                    class="text-xs text-slate-700 uppercase bg-slate-100/70 border-b border-slate-200 text-center font-bold">
                    <tr>
                        <th rowspan="2" class="px-4 py-4 border-r border-slate-200">Tahun Ajaran</th>
                        <th colspan="2" class="px-4 py-2 border-r border-slate-200 bg-slate-50 text-[#0B2D72]">Kelas VII
                        </th>
                        <th colspan="2" class="px-4 py-2 border-r border-slate-200 bg-slate-50 text-[#0992C2]">Kelas
                            VIII</th>
                        <th colspan="2" class="px-4 py-2 border-r border-slate-200 bg-slate-50 text-[#0AC4E0]">Kelas IX
                        </th>
                        <th colspan="2" class="px-4 py-2 bg-[#F6E7BC]/30 text-[#0B2D72]">Total</th>
                    </tr>
                    <tr class="border-b border-slate-200 bg-slate-50 text-[11px]">
                        <th class="px-3 py-2 border-r border-slate-200">Siswa</th>
                        <th class="px-3 py-2 border-r border-slate-200">Rombel</th>
                        <th class="px-3 py-2 border-r border-slate-200">Siswa</th>
                        <th class="px-3 py-2 border-r border-slate-200">Rombel</th>
                        <th class="px-3 py-2 border-r border-slate-200">Siswa</th>
                        <th class="px-3 py-2 border-r border-slate-200">Rombel</th>
                        <th class="px-3 py-2 border-r border-slate-200">Siswa</th>
                        <th class="px-3 py-2">Rombel</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-200 text-center">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-3.5 font-semibold text-slate-800 border-r border-slate-200 bg-slate-50/30">
                            2021/2022</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100 font-bold text-[#0B2D72] bg-[#F6E7BC]/10">10</td>
                        <td class="px-3 py-3.5 font-bold text-[#0B2D72] bg-[#F6E7BC]/10">12</td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-3.5 font-semibold text-slate-800 border-r border-slate-200 bg-slate-50/30">
                            2022/2023</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100">10</td>
                        <td class="px-3 py-3.5 border-r border-slate-200 font-medium text-slate-500">11</td>
                        <td class="px-3 py-3.5 border-r border-slate-100 font-bold text-[#0B2D72] bg-[#F6E7BC]/10">10</td>
                        <td class="px-3 py-3.5 font-bold text-[#0B2D72] bg-[#F6E7BC]/10">12</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
