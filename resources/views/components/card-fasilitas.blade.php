<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <div class="bg-white rounded-2xl shadow-md border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">

            <div>
                <!-- Bagian Media / Gambar -->
                <div class="w-full h-48 bg-slate-100 relative overflow-hidden flex items-center justify-center border-b border-slate-100">

                    {{-- Cek apakah variabel gambar tersedia dan tidak kosong --}}
                    @if(isset($img) && $img != '')
                        <img src="{{ $img }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            alt="Foto Ruang Kelas" />
                    @else
                        <!-- Fallback: Ilustrasi Ikon Kelas Minimalis jika gambar tidak ada -->
                        <div class="flex flex-col items-center justify-center text-slate-400 p-6 space-y-3">
                            <div class="p-4 bg-emerald-50 rounded-2xl text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="text-xs font-medium tracking-wide text-slate-400">Gambar tidak tersedia</span>
                        </div>
                    @endif

                    <!-- Badge Kode Kelas di Atas Gambar -->
                    <span class="absolute top-3 left-3 bg-[#0B2D72] text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-md tracking-wider">
                        {{ $id }}
                    </span>
                </div>

                <!-- Bagian Konten / Detail -->
                <div class="p-5 space-y-3">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Nama Jenis Prasarana</span>
                        <h4 class="text-base font-bold text-slate-800 leading-snug group-hover:text-[#0B2D72] transition-colors">
                            {{ $name }}
                        </h4>
                    </div>
                </div>
            </div>

            <!-- Bagian Footer Kartu (Kondisi) -->
            <div class="px-5 pb-5 pt-2 border-t border-slate-50 flex items-center justify-between">
                <span class="text-xs text-slate-400 font-light">Status Kondisi:</span>

                <!-- Badge Kondisi Dinamis (Contoh menggunakan warna Hijau untuk Baik) -->
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold border {{ $status == "Baik" ?  "bg-emerald-50 text-emerald-700 border-emerald-100" : "bg-red-50 text-red-600 border-red-100"}}   ">
                    <span class="w-1.5 h-1.5 rounded-full {{ $status == "Baik" ?  "bg-emerald-500 " : "bg-red-500 "}} animate-pulse"></span>
                    {{ $status }}
                </span>
            </div>

    </div>
</div>
