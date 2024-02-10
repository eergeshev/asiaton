@extends('layouts.main')

@section('content')
    <section class="section" id="blog">
        <div class="container-xxl mt-xxl-5 mb-5 page-direct">
            <h3 class="cat-list-title  mt-5">@lang('trans.products')</h3>
            <div class="mb-lg-5">
                <a href="/">@lang('trans.home')</a><i class="fa fa-chevron-right"></i> <span class="contact-link">@lang('trans.products')</span>
            </div>
            <div class="row pt-xxl-5">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="single-album">
                            <div class="album-img">
                                <a href="/product-type/{{ $product->id }}">
                                    <img src="/upload/{{ $product->main_image }}" alt="img1" style="overflow: hidden">
                                </a>
                            </div>
                            <div class="album-content">
                                <div class="album-info">
                                    <h3>{{ $product->name }}</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
