@extends('user.layout.home')

@section('title','Beranda')
@section('content')
    <div>
        <p>Dibooking tgl : </p>
        <input type="button" name="a">
    </div>
    <div class="container">
        <div class="card">
            <img src="{{ $detailGedung->files }}" alt="foto gedung" style="height: 300px;width: 900px;">
            <h2>{{ $detailGedung->name_building }}</h2>
            <p>Alamat : {{ $detailGedung->address_building }}</p>
            <p>Harga sewa : Rp.{{$detailGedung->cost}}</p>
            <p>Kapasitas : {{ $detailGedung->capacity }}</p>
            <p>Kriteria :{{ $detailGedung->criteria }}</p>
            <button class="btn btn-primary">Booking sekarang</button>

        </div>
        <div class="card mt-4">
            <h4 class="mt-2">Deskripsi :</h4>
            <p>{{ $detailGedung->description }}</p>
        </div>


    </div>
@endsection
