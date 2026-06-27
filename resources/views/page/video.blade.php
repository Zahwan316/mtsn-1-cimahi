@extends("layout.main.index")

@section("section")
    <x-header text="Galeri Video" />
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6  w-full max-w-5xl ">
        <x-card-gallery date="20 April 2026" img="img/IMG_6483-1-768x432.jpg" title="Peringatan Upacara" />
    </div>
@endsection
