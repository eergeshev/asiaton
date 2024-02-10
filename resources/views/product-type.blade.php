@extends('layouts.main')

@section('content')

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container-xl mt-5">
            <div class="row justify-content-between page-direct">
                <div class="col-md-6 mb-4 mb-md-0 fade-in-up">
                    <h6 class="cat-list-title mb-3">{{ $product->name }}</h6>
                    <a href="/">@lang('trans.home')</a><i class="fa fa-chevron-right"></i><a href="/products">@lang('trans.products')</a><i class="fa fa-chevron-right"></i> <span class="contact-link">Product type</span>
                </div>
                <div class="col-md-6  mt-lg-5">
                    <div class="row">
                        <div class="col-12 about-text">
                            <p>{!! $product->desc_1 !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid about-wallpaper">
            <img src="/upload/{{ $product->wallpaper }}">
        </div>
        <div class="container-xxl mt-lg-5">
            <div class="container about-text">
                <p>{!! $product->desc_2 !!}</p>
            </div>
            <div class="row info mt-4">
                <div class="col-md-6 info-text">
                    <h6 class="section-title">{{ $product->tema_1 }}</h6>
                    <p>{!! $product->tema_desc_1 !!}</p>
                </div>
                <div class="col-md-6 ton-left">
                    <img src="/upload/{{ $product->tema_1_image }}">
                </div>
            </div>

            <div class="row info mt-5">
                <div class="col-lg-6 col-md-6 ton-left">
                    <img src="/upload/{{ $product->tema_2_image }}">
                </div>
                <div class="col-lg-6 col-md-6 info-text">
                    <h6 class="section-title">{{ $product->tema_2 }}</h6>
                    <p>{!! $product->tema_desc_2 !!}</p>
                </div>
            </div>
        </div>

    </section>
    <!-- End OF About Section -->
@endsection
