<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 0 3-3V12m-12 6.75a3 3 0 0 1-3-3V12m12 6.75v-3.375c0-.621-.504-1.125-1.125-1.125h-3.75a1.125 1.125 0 0 0-1.125 1.125v3.375M16.5 12V6.75a3 3 0 0 0-3-3h-3a3 3 0 0 0-3 3V12m9 0h-9M20.25 12A2.25 2.25 0 0 0 18 9.75H16.5V12c0 .414.336.75.75.75h2.25A2.25 2.25 0 0 0 20.25 12ZM3.75 12A2.25 2.25 0 0 1 6 9.75H7.5V12c0 .414-.336.75-.75.75H6A2.25 2.25 0 0 1 3.75 12Z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium tracking-wide text-slate-400">Gambar tidak tersedia</span>
                    </div>
                @endif
                <!-- Badge Kode Kelas di Atas Gambar -->
                <span class="absolute top-3 left-3 bg-[#0B2D72] text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-md tracking-wider">
                    {{ isset($id) && "Test" }}
                </span>
            </div>
            <!-- Bagian Konten / Detail -->
            <div class="p-5 space-y-3">
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 tracking-wider block">Nama Ekstrakurikuler</span>
                    <h4 class="text-base font-bold text-slate-800 leading-snug group-hover:text-[#0B2D72] transition-colors mb-2">
                        @if(!isset($name))
                            Test
                        @endif
                    </h4>
                    <p class='text-sm'>lorem ipsum dolor sit amet constectur adipiscing elit</p>
                </div>
            </div>
        </div>
        <!-- Bagian Footer Kartu (Kondisi) -->
        <div class="px-5 pb-5 pt-2 border-t border-slate-50 flex items-center justify-between">
            <span class="text-xs text-slate-400 font-light">Status Keaktifan:</span>
            <!-- Badge Kondisi Dinamis (Contoh menggunakan warna Hijau untuk Baik) -->
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold border {{ isset($status) == "Baik" ?  "bg-emerald-50 text-emerald-700 border-emerald-100" : "bg-red-50 text-red-600 border-red-100"}}   ">
                <span class="w-1.5 h-1.5 rounded-full {{ isset($status) == "Baik" ?  "bg-emerald-500 " : "bg-red-500 "}} animate-pulse"></span>
                    @if(!isset($status))
                        Tidak Aktif
                    @endif
            </span>
        </div>
    </div>
</div>
