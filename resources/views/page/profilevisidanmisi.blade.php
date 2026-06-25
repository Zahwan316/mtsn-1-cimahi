@extends('layout.main.index')

@section('section')
    <!-- Bagian Atas: Pengantar Visi Besar -->
    <div class="max-w-3xl">
        <h2 class="text-3xl md:text-4xl font-black tracking-tight mb-4">Visi & Misi Madrasah</h2>
        <p class="text-base md:text-lg text-slate-800 leading-relaxed font-light">
            Visi MTsN Kota Cimahi adalah <span class="font-bold text-amber-300">“Terwujudnya Madrasah BERMUTU,”</span> yang
            bermakna sebagai institusi pendidikan yang benar-benar berkualitas. <span
                class="italic text-cyan-100">“Bermutu”</span> juga merupakan akronim dari Berakhlak, Bersih, Berbunga,
            Modern, Unggul, Terampil, dan Unik.
        </p>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 items-start w-full">

        <!-- Blok 1: Indikator Visi -->
        <div class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-xl border border-white/10 space-y-4 h-full">
            <div class="flex items-center gap-3 border-b border-white/20 pb-4 text-black">
                <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-amber-400 text-[#0B2D72] rounded-xl font-bold shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </span>
                <h3 class="text-xl font-extrabold tracking-wide">Indikator Visi</h3>
            </div>

            <ul class="space-y-3.5">
                @foreach ($visi as $index => $data)
                    <li class="flex items-start gap-3 text-black/90 text-sm md:text-base leading-relaxed group">
                        <span class="flex-shrink-0 flex items-center justify-center w-6 h-6 bg-white/20 rounded-md text-xs font-bold text-amber-300 mt-0.5 group-hover:bg-amber-400 group-hover:text-[#0B2D72] transition-colors duration-200">
                            {{ $index + 1 }}
                        </span>
                        <p class="flex-1 font-light text-justify">{{ $data }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Blok 2: Misi Madrasah -->
        <div class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-xl border border-white/10 space-y-4 h-full">
            <div class="flex items-center gap-3 border-b border-white/20 pb-4 text-black">
                <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-emerald-400 text-[#0B2D72] rounded-xl font-bold shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </span>
                <h3 class="text-xl font-extrabold tracking-wide">Misi Madrasah</h3>
            </div>

            <ul class="space-y-3.5">
                @foreach ($misi as $index => $data)
                    <li class="flex items-start gap-3 text-black/90 text-sm md:text-base leading-relaxed group">
                        <span class="flex-shrink-0 flex items-center justify-center w-6 h-6 bg-white/20 rounded-md text-xs font-bold text-emerald-300 mt-0.5 group-hover:bg-emerald-400 group-hover:text-[#0B2D72] transition-colors duration-200">
                            {{ $index + 1 }}
                        </span>
                        <p class="flex-1 font-light text-justify">{{ $data }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Blok 3: Tujuan Madrasah -->
        <!-- Catatan: Loop variabel diubah ke $tujuan jika datanya berbeda dari $misi -->
        <div class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-2xl shadow-xl border border-white/10 space-y-4 h-full">
            <div class="flex items-center gap-3 border-b border-white/20 pb-4 text-black">
                <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-cyan-400 text-[#0B2D72] rounded-xl font-bold shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </span>
                <h3 class="text-xl font-extrabold tracking-wide">Tujuan Madrasah</h3>
            </div>

            <ul class="space-y-3.5">
                @foreach ($misi as $index => $data)
                    <li class="flex items-start gap-3 text-black/90 text-sm md:text-base leading-relaxed group">
                        <span class="flex-shrink-0 flex items-center justify-center w-6 h-6 bg-white/20 rounded-md text-xs font-bold text-cyan-300 mt-0.5 group-hover:bg-cyan-400 group-hover:text-[#0B2D72] transition-colors duration-200">
                            {{ $index + 1 }}
                        </span>
                        <p class="flex-1 font-light text-justify">{{ $data }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
