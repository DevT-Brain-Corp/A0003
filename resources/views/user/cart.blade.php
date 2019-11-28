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
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Gedung</td>
                        <td class="description"></td>
                        <td class="price">Harga</td>
                        <td class="start">Mulai</td>
                        <td class="selesai">selesai</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('user/images/cart/one.png') }}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">sutarjo</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>Rp.1500000</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <input class="cart_quantity_input" type="date" name="quantity" value="1/1/2019" size="2">
                            </div>
                        </td>
                        <td class="mulai">
                            <div class="cart_quantity_button">
                                <input class="cart_quantity_input" type="date" name="quantity" value="1/1/2019" size="2">
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">Rp.1500000</p>
                        </td>
                    </tr>


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
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href=""><button class="btn btn-primary">Pesan dan bayar</button></a>
            </div>
        </div>
    </section> <!--/#cart_items-->
    @endsection
