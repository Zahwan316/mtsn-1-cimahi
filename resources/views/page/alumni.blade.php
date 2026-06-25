@extends("layout.main.index")

@section("section")
    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">Alumni</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 w-full">
        <div class="bg-white rounded-2xl shadow-md relative border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
            <div>
                <!-- Bagian Media / Gambar -->
                <div class="w-full h-auto bg-slate-100 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                    {{-- Cek apakah variabel gambar tersedia dan tidak kosong --}}
                    {{-- @if(isset($prasarana->foto) && $prasarana->foto != '') --}}
                        <img src="{{ asset('img/rohaeni.jpeg') }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            alt="Foto alumni" />
                    {{-- @else --}}
                        <!-- Fallback: Ilustrasi Ikon Kelas Minimalis jika gambar tidak ada -->
                        {{--  <div class="flex flex-col items-center justify-center text-slate-400 p-6 space-y-3">
                            <div class="p-4 bg-emerald-50 rounded-2xl text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="text-xs font-medium tracking-wide text-slate-400">Gambar tidak tersedia</span>
                        </div> --}}
                    {{-- @endif --}}

                    <!-- Badge Kode Kelas di Atas Gambar -->
                    <span class="absolute top-3 left-3 bg-[#0B2D72] text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-md tracking-wider">
                        2018
                    </span>
                </div>

                <!-- Bagian Konten / Detail -->
                <div class="p-5 space-y-3 absolute bottom-0 bg-transparent">
                    <div>
                        <h4 class="text-base font-bold text-white leading-snug group-hover:text-[#0B2D72] transition-colors mb-2">
                            Lorem ipsum dolor sit amet
                        </h4>
                        <span class="text-xs uppercase font-bold text-slate-200 tracking-wider block">Guru PNS Kemenag</span>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
