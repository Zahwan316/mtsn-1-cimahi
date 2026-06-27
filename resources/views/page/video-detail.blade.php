@extends("layout.main.index")

@section("section")
    <div>
        <x-header text="Guru Parigel" />
        <span class="text-sm text-slate-500">Diterbitkan: 12 Desember 2025</span>
    </div>
    <div class="w-full aspect-video rounded-2xl overflow-hidden shadow-md border border-slate-100">
        <iframe
            src="https://www.youtube.com/embed/JQAPEOPctBo"
            class="w-full h-full"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>
@endsection
