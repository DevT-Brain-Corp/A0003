@extends('user.layout.home')

@section('title','Detail Gedung')
@section('content')
    <section id="cart_items">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sewa</li>
                </ol>
            </nav>

            <div class="review-payment">
                <h2>Review & Payment</h2>
                <h2>{{ session('null') }}</h2>
            </div>
            @if(!Auth::user()==null)
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Gedung</td>
                            <td class="description"></td>
                            <td class="price">Harga</td>
                            <td class="start">Mulai</td>
                            <td class="selesai">selesai</td>
                            <td>Hapus</td>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sewa as $sewa)
                            <article data-postid="{{ $sewa->id }}">
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="{{ asset('user/images/cart/one.png') }}" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{ $sewa->building->name_building }}</a></h4>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{ $sewa->building->cost }}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <b id="start_date">{{ $sewa->day_start }}</b>
                                        </div>
                                    </td>
                                    <td class="mulai">
                                        <div class="cart_quantity_button">
                                            <b id="end_date">{{ $sewa->day_over }}</b>
                                        </div>
                                        {{--                                    {{ ($sewa->day_start) - ($sewa->day_over)  }}--}}
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="/sewa/{{ $sewa->id }}/hapus"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </article>
                            <tr>
                                <td colspan="4">&nbsp;</td>
                                <td colspan="2">
                                    <table class="table table-condensed total-result">
                                        <tr>
                                            <td>Total</td>
                                            <td><span>Rp.1500000</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lama penyewaan</td>
                                            <td>1 hari</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Pesan dan bayar</button>
                                                </a>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            @else
                <h2 class="text-center">Silahkan login terlebih dahulu</h2>
            @endif
        </div>
    </section> <!--/#cart_items-->
@endsection
