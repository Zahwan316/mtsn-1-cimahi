@extends("layout.main.index")

@section('section')
    <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-2xl shadow-xl border border-slate-100">
        <div class='mb-6'>
            <x-header text="Saran" />
        </div>
        <form action="#" method="POST" class="space-y-5">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="flex flex-col space-y-1.5">
                    <label for="name" class="text-sm font-semibold text-slate-700 tracking-wide">Nama Anda</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-light text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#0B2D72] focus:bg-white focus:ring-4 focus:ring-[#0B2D72]/5 transition-all duration-200"
                        required
                    />
                </div>

                <div class="flex flex-col space-y-1.5">
                    <label for="email" class="text-sm font-semibold text-slate-700 tracking-wide">Alamat Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="contoh@email.com"
                        class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-light text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#0B2D72] focus:bg-white focus:ring-4 focus:ring-[#0B2D72]/5 transition-all duration-200"
                        required
                    />
                </div>
            </div>

            <div class="flex flex-col space-y-1.5">
                <label for="subject" class="text-sm font-semibold text-slate-700 tracking-wide">Subjek Pesan</label>
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="Apa perihal yang ingin ditanyakan?"
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm font-light text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#0B2D72] focus:bg-white focus:ring-4 focus:ring-[#0B2D72]/5 transition-all duration-200"
                    required
                />
            </div>

            <div class="flex flex-col space-y-1.5">
                <label for="message" class="text-sm font-semibold text-slate-700 tracking-wide">Pesan Anda</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    placeholder="Tuliskan detail pesan atau pertanyaan Anda di sini..."
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm font-light text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#0B2D72] focus:bg-white focus:ring-4 focus:ring-[#0B2D72]/5 transition-all duration-200 resize-none"
                    required></textarea>
            </div>

            <div class="pt-2">
                <button
                    type="submit"
                    class="w-full sm:w-auto px-6 py-3 bg-[#0B2D72] hover:bg-[#071f52] text-white font-semibold text-sm rounded-xl shadow-lg shadow-[#0B2D72]/20 hover:shadow-xl transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer group"
                >
                    <span>Kirim Pesan</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>

        </form>
    </div>

@endsection
