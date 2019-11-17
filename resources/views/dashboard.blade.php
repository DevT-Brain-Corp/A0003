@extends('layouts.main')
@section('title','SIPENTUR | Dashboard')
@section('container')
<div class="x_panel">
    <div class="x_content">
       <h1>SELAMAT DATANG DI SIPENTUR</h1>
       <h3>Sistem Informasi Penyewaan Infrastruktur di Kabupaten Jember</h3>
    </div>

    <div class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ex. Gedung serba...." aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary float-right" type="button" id="button-addon2">Cari gedung</button>
            </div>
        </div>
    </div>
</div>
@endsection
