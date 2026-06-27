@extends("layout.main.index")

@section("section")
    <x-header text="Fasilitas"/>
    <!-- Grid Wrapper: Mengatur jumlah kartu otomatis sesuai ukuran layar -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 w-full">
        <x-card-fasilitas id="K8A" name="Ruang Kelas 8A" status="Baik" img="" />
    </div>
@endsection
