@extends('layouts.main')

@section('content')
    <header class="header mb-lg-5" style="height: 100px;">
{{--        <div class="overlay">--}}
{{--        </div>--}}
{{--        <img src="/images/background2.jpg" style=" background-repeat: no-repeat; background-size: cover;"/>--}}

    </header>
    <div class="container-xxl mt-3 mb-lg-5">
{{--        <div class="row justify-content-between catalog-box">--}}
            <h6 class="cat-list-title mb-0">{{ $catalog->name }}</h6>
            <div class="row justify-content-between page-direct">
                <div class="col-md-4 pr-md-5 mb-4  mb-md-0 fade-in-up">
                    <a href="/">@lang('trans.home')</a><i class="fa-regular fa-chevron-right"></i><a href="/catalog-list">@lang('trans.catalogs')</a><i class="fa fa-chevron-right"></i> <span>@lang('trans.catalog')</span>
                    <div class="catalog-img">
                        <img src="/upload/{{ $catalog->image }}" alt="" class="w-100 mt-5 shadow-sm">
                    </div>
                </div>
                <div class="col-md-8  mt-lg-5">
                    <div class="row mt-xxl-5">
                        <div class="col-12 about-text">
                            <p>{!! $catalog->desc !!}</p>
                            <h4 class="mt-5">@lang('trans.properties') {{ $catalog->name }}</h4>
                            <ul class="catalog-li">
                                @foreach($catalog->properties as $property)
                                    <li>{{ $property->desc_ru }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="catalog-btn-box mt-5 mb-5">
                        <a target="_blank" href="/catalog-pdf/{{ $catalog->id }}" class="catalog-btn">
                            <span>@lang('trans.catalog_pdf_view')</span> <i class="fa-regular fa-arrow-up-right-from-square ml-3"></i>
                        </a>
                    </div>
                </div>
{{--            </div>--}}
        </div>

    </div>
@endsection
