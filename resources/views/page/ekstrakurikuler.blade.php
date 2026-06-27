@extends("layout.main.index")

@section("section")
    <x-header text="Ekstrakurikuler" />
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 w-full">
        <x-card-ekstrakurikuler />
    </div>
@endsection
