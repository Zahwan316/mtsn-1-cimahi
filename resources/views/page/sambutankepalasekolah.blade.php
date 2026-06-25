@extends("layout.main.index")

@section("section")
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Sambutan Kepala Sekolah</h2>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center bg-white p-6 md:p-8 rounded-2xl shadow-sm">
            <div class="w-full flex justify-center lg:justify-end">
                <div class="w-full max-w-[400px] aspect-[3/4] overflow-hidden rounded-2xl shadow-lg ring-4 ring-emerald-50">
                    <img src="{{ asset('img/kepala-sekolah.jpg') }}" class="w-full h-full object-cover object-top transition duration-500 hover:scale-105" alt="Kepala Sekolah MTsN Kota Cimahi" />
                </div>
            </div>

            <div class="flex flex-col justify-center">
                {{-- <span class="text-emerald-600 font-semibold tracking-wider text-sm uppercase mb-2">Sambutan Pimpinan</span> --}}

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
@endsection
