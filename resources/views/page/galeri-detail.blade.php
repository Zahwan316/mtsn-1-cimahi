@extends("layout.main.index")

@section("section")
    <div>
        <x-header text="Hari Pramuka Nasional" />
        <span class="text-sm text-slate-500">Dibuat: 12 Desember 2025</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6  w-full max-w-5xl ">
        <x-card-gallery img="img/IMG_6483-1-768x432.jpg" title="Hari Pramuka" />
        <x-card-gallery img="img/IMG_6483-1-768x432.jpg" title="Hari Pramuka" />

    </div>
@endsection
