@extends("layout.main.index")

@section("section")
    <x-header :text="$slug ? $slug : 'Not Found'" />
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200 pb-6 mb-10">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-amber-500 text-white rounded-2xl flex items-center justify-center shadow-lg shadow-amber-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0B2D72]">Pramuka</h2>
                    <p class="text-xs md:text-sm text-slate-500 font-medium tracking-wide">Gugus Depan MTs Negeri Kota Cimahi</p>
                </div>
            </div>
            <span class="px-4 py-1.5 bg-amber-50 text-amber-700 border border-amber-200 rounded-full text-xs font-semibold tracking-wide">
                Ekstrakurikuler Wajib
            </span>
        </div>

        <div class="space-y-16">
            <div class="space-y-4">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                    <span class="w-1 h-5 bg-amber-500 rounded-full"></span>
                    Dokumentasi Kegiatan
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="group overflow-hidden rounded-2xl shadow-sm border border-slate-200 bg-white aspect-[4/3]">
                        <img src="{{ asset('img/pramuka.jpeg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Kegiatan Pramuka 1" />
                    </div>
                    <div class="group overflow-hidden rounded-2xl shadow-sm border border-slate-200 bg-white aspect-[4/3]">
                        <img src="{{ asset('img/pramuka.jpeg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Kegiatan Pramuka 2" />
                    </div>
                    <div class="group overflow-hidden rounded-2xl shadow-sm border border-slate-200 bg-white aspect-[4/3] sm:col-span-2 md:col-span-1">
                        <img src="{{ asset('img/pramuka.jpeg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Kegiatan Pramuka 3" />
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="border-b border-slate-100 pb-3">
                    <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <span class="w-1 h-5 bg-amber-500 rounded-full"></span>
                        Pengurus Inti Pramuka
                    </h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @php
                        $pengurus = [
                            'Salman Alfath Fauzan',
                            'Runa Layla Millata Hanifa',
                            'Annisa Safa Ramadhani',
                            'Mohammad Khaizan Al-Ghazali',
                            'Hasna Syamila Hakim',
                            'Sazkia Puji Utami',
                            'Qnayla Putri Rizanty'
                        ];
                    @endphp

                    @foreach($pengurus as $nama)
                        <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex items-center gap-3.5 hover:border-amber-200 hover:shadow-md transition-all duration-200 group">
                            <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 text-slate-600 font-bold text-sm flex items-center justify-center flex-shrink-0 group-hover:bg-amber-500 group-hover:text-white group-hover:border-amber-500 transition-colors duration-300">
                                {{ substr($nama, 0, 1) }}
                            </div>
                            <div class="overflow-hidden">
                                <h4 class="font-semibold text-slate-800 text-sm leading-tight truncate group-hover:text-[#0B2D72] transition-colors">
                                    {{ $nama }}
                                </h4>
                                <span class="text-[10px] text-slate-400 font-medium tracking-wider uppercase block mt-0.5">
                                    Anggota Inti
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
