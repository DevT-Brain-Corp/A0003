@extends('user.layout.home')

@section('title','Beranda')
@section('content')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>SI</span>PENTUR</h1>
                                    <h2>Booking gedung keinginanmu</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>

                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('user/images/home/girl1.jpg') }}" class="girl img-responsive"
                                         alt=""/>
                                    <img src="{{ asset('user/images/home/pricing.png') }}" class="pricing" alt=""/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>SI</span>PENTUR</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>

                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('user/images/home/girl2.jpg') }}" class="girl img-responsive"
                                         alt=""/>
                                    <img src="{{ asset('user/images/home/pricing.png') }}" class="pricing" alt=""/>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>SI</span>PENTUR</h1>
                                    <h2>Kemudahan akses</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>

                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('user/images/home/girl3.jpg') }}" class="girl img-responsive"
                                         alt=""/>
                                    <img src="{{ asset('user/images/home/pricing.png') }}" class="pricing" alt=""/>
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Cari Gedung</h2>

                        <div class="col-sm-4">
                            @foreach($verif as $gedung)
                                <article data-postid="{{ $gedung->id }}">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ asset('user/images/home/product1.jpg') }}" alt=""/>
                                                <h2>Rp.{{ $gedung->cost }} /hari</h2>
                                                <p>{{$gedung->name_building}}</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Sewa</a>
                                            </div>
                                            <a href="/gedung/{{ $gedung->id }}">
                                                <div class="product-overlay">
                                                    <div class="overlay-content">
                                                        <h2>Rp.{{ $gedung->cost }}</h2>
                                                        <p>{{$gedung->name_building}}</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Sewa</a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                                @foreach($edit as $gedung)
                                    <article data-postid="{{ $gedung->id }}">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('user/images/home/product1.jpg') }}" alt=""/>
                                                    <h2>Rp.{{ $gedung->cost }} /hari</h2>
                                                    <p>{{$gedung->name_building}}</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Sewa</a>
                                                </div>
                                                <a href="/gedung/{{ $gedung->id }}">
                                                    <div class="product-overlay">
                                                        <div class="overlay-content">
                                                            <h2>Rp.{{ $gedung->cost }}</h2>
                                                            <p>{{$gedung->name_building}}</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-shopping-cart"></i>Sewa</a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                        </div>

                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

    {{--    <div class="container mt-4">--}}

    {{--        @foreach($gedung as $gedung)--}}
    {{--            <article data-postid="{{ $gedung->id }}">--}}
    {{--                <div class="card float-left ml-2" style="width: 18rem;">--}}
    {{--                    <a href="/gedung/{{ $gedung->id }}">--}}
    {{--                        <img src="{{ asset('assets/images/interior.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    </a>--}}
    {{--                    <div class="card-body">--}}
    {{--                        <a href="/gedung/{{ $gedung->id }}">--}}
    {{--                            <h5 class="card-title" style="text-decoration: none;">{{$gedung->name_building}}</h5>--}}
    {{--                        </a>--}}
    {{--                        <div class="" style="font-size: 10px;">--}}
    {{--                            <p>Daya tampung : {{ $gedung->capacity }}</p>--}}
    {{--                            <p>Harga sewa : Rp.{{ $gedung->cost }}/hari</p>--}}
    {{--                        </div>--}}
    {{--                        <p class="card-text">{{ $gedung->description }}</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </article>--}}

    {{--        @endforeach--}}

    {{--    </div>--}}
@endsection

