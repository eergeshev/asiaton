@extends('layouts.main')

@section('content')

    <!-- Page Header -->
    <header class="header">

        <img src="/images/444.jpg">
        <div class="overlay">
{{--            <h1 class="subtitle">LeadMark Landing Page</h1>--}}
            <h3 class="title">@lang('trans.we_color')</h3>
        </div>
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 "/>
            </svg>
        </div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->

        <div class="container-xxl">
            <div class="row info mt-4">
                <div class="col-sm-6 info-left">
                    <img src="/upload/{{ $main_text->image }}" class="rotate">
                </div>
                <div class="col-sm-6 about-text">
                    <p>{!! $main_text->text !!}</p>
                </div>
            </div>
        </div>

    <section>
        <div class="container mt-5">
            <div class="row pt-xxl-5">
                <video src="/videos/video.mp4" muted loop autoplay></video>
            </div>
        </div>
    </section>



    <!-- Blog Section -->
    <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-3 text-center">@lang('trans.catalog')</h6>
            <div class="row justify-content-between">
                @foreach($catalogs as $catalog)
                    <div class="col-md-3 main-catalog">
                        <a href="/catalog/{{ $catalog->id }}">
                            <div class="card border-0 catalog">
                                <img src="/upload/{{ str_replace('\\', '/', $catalog->image) }}" alt="" class="card-img-top w-100">
                                <div class="card-body">
                                    <p class="card-title">{{ $catalog->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End of Blog Section -->

    <section class="section" id="blog">
        <div class="container-xxl mt-xxl-5 mb-5 page-direct">
            <div class="row pt-xxl-5">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="single-album">
                            <div class="album-img">
                                <a href="/product-type/{{ $product->id }}"> <img src="/upload/{{ $product->main_image }}" alt="img1"></a>
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

    <!-- Testmonial Section -->
{{--    <section class="section" id="testmonial">--}}
{{--        <div class="container-xxl">--}}
{{--            <div class="row justify-content-lg-between">--}}
{{--                <div class="col-md-4 my-3 my-md-0">--}}
{{--                    <div class="news">--}}
{{--                        <div class="media align-items-center mb-3">--}}
{{--                            <img class="mr-3" src="/images/1111.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="news-desc">--}}
{{--                            <h5>Свойства Отвержденной Порошковой Краски</h5>--}}
{{--                            <p class="mb-0">После покрытия металла порошковой краской, краска затвердевает--}}
{{--                                и принимает свою окончательную форму. Ожидается, что материал, извлеченный из печи--}}
{{--                                полимеризации, будет иметь следующие свойства, отражающие...--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="news-more d-flex">--}}
{{--                            <a href="#">Подробнее</a><i class="fa-regular fa-arrow-right"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 my-3 my-md-0">--}}
{{--                    <div class="news">--}}

{{--                        <div class="media align-items-center mb-3">--}}
{{--                            <img class="mr-3" src="/images/8.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="news-desc">--}}
{{--                            <h5>EPD — Экологическая декларация продукции</h5>--}}
{{--                            <p class="mb-0">Документы EPD, а именно экологические декларации продукции — это независимо проверенные--}}
{{--                                и зарегистрированные документы, которые показывают воздействие продукта или услуги на окружающую--}}
{{--                                среду, которое...--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="news-more d-flex">--}}
{{--                            <a href="#">Подробнее</a><i class="fa-regular fa-arrow-right"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 my-3 my-md-0">--}}
{{--                    <div class="news">--}}
{{--                        <div class="media align-items-center mb-3">--}}
{{--                            <img class="mr-3" src="/images/777.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="news-desc">--}}
{{--                            <h5>Asiaton Класс 2 Superdurable</h5>--}}
{{--                            <p class="mb-0">Мы, ‘Asiaton’, стремимся повысить эффективность--}}
{{--                                благодаря сверхпрочности, улучшенному внешнему виду и экологичности наших продуктов.--}}
{{--                                Asiaton — это серия порошковых красок, специально...--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="news-more d-flex">--}}
{{--                            <a href="#">Подробнее</a><i class="fa-regular fa-arrow-right"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
