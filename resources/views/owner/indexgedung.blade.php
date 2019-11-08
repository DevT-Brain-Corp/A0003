@extends('layouts.main')

    @section('title','SIPENTUR | Data Gedung')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Data Gedung</div>
        <br>
        <br>
        <a href="owner.creategedung" class="btn btn-sm btn-danger">TAMBAH DATA +</a>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_content">
                <table id="datatable" class="table table-striped jambo_table bulk-action">
                    <thead >
                    <tr class="headings">
                        <th scope="row">No.</th>
                        <th>Nama Gedung</th>
                        <th>Alamat Gedung</th>
                        <th>Status Gedung</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $gedung as $gedung )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gedung->NamaGedung }}</td>
                        <td>{{ $gedung->AlamatGedung }}</td>
                        <td>
                            @if ($gedung->Verifikasi == 0)
                            Belum diverifikasi
                            @elseif($gedung->Verifikasi == 1)
                            Terverifikasi
                            @endif
                        </td>
                        <td>
                        <a href="/owner.showgedung/{{ $gedung->id }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>   Detail </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection