@extends("layout.main.index")

@section("section")
    <x-header text="Daftar Siswa" />
    <div class="w-full bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="w-full overflow-x-auto">
        <table class="w-full min-w-[600px] border-collapse text-left text-sm">
            <thead class="bg-[#0B2D72] text-white">
                <tr>
                    <th scope="col" class="px-6 py-4 font-bold tracking-wider w-16 text-center">No</th>
                    <th scope="col" class="px-6 py-4 font-bold tracking-wider">Nama Lengkap</th>
                    <th scope="col" class="px-6 py-4 font-bold tracking-wider">NISN</th>
                    <th scope="col" class="px-6 py-4 font-bold tracking-wider">Status</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 text-slate-700 bg-white">
                <tr class="hover:bg-slate-50/70 transition-colors duration-150">
                    <td class="px-6 py-4 whitespace-nowrap text-center font-medium text-slate-400">1</td>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold text-slate-900 tracking-wide uppercase">
                        Alyaa Asyfia Nabiilah
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap font-mono text-slate-600">
                        0055412635
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                            Kelas 7
                        </span>
                    </td>
                </tr>

                </tbody>
        </table>
    </div>
</div>
@endsection
