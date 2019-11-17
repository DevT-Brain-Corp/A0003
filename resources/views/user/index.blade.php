@extends('user.layout.home')

@section('title','Beranda')
@section('content')

    <div class="card">
        <div class="card-body">
            <p class="card-text">Cari gedung yang kamu cari disini.</p>

            <div class="input-group mb-3">
                <form action="">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <input class="btn btn-outline-secondary" type="submit" id="button-addon2">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="container mt-4">

        @foreach($gedung as $gedung)
            <article data-postid="{{ $gedung->id }}">
                <div class="card float-left ml-2" style="width: 18rem;">
                    <a href="">
                        <img src="{{ asset('assets/images/interior.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="/gedung/{{ $gedung->id }}">
                            <h5 class="card-title" style="text-decoration: none;">{{$gedung->name_building}}</h5>
                        </a>
                        <div class="" style="font-size: 10px;">
                            <p>Daya tampung : {{ $gedung->capacity }}</p>
                            <p>Harga sewa : Rp.{{ $gedung->cost }}/hari</p>
                        </div>
                        <p class="card-text">{{ $gedung->description }}</p>
                    </div>
                </div>
            </article>

        @endforeach

    </div>
@endsection

