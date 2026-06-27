@extends("layout.main.index")

@section("section")
    <x-header text="Alumni"/>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 w-full">
        <x-card-alumni img="img/rohaeni.jpeg" job="Pegawai Sipil" year="2015" name="Rohaeni" />
        <x-card-alumni img="img/rohaeni.jpeg" job="Pegawai Sipil" year="2015" name="Rohaeni" />
        <x-card-alumni img="img/rohaeni.jpeg" job="Pegawai Sipil" year="2015" name="Rohaeni" />
        <x-card-alumni img="img/rohaeni.jpeg" job="Pegawai Sipil" year="2015" name="Rohaeni" />
        <x-card-alumni img="img/rohaeni.jpeg" job="Pegawai Sipil" year="2015" name="Rohaeni" />
    </div>
@endsection
