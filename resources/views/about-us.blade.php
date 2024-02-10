@extends('layouts.main')

@section('content')

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container mt-5">
            <div class="row justify-content-between page-direct">
                <div class="col-md-5 pr-md-5 mb-4 mb-md-0 fade-in-up">
                    <h6 class="cat-list-title mb-0">@lang('trans.about')</h6>
                    <a href="/">@lang('trans.home')</a><i class="fa fa-chevron-right"></i> <span class="contact-link">@lang('trans.about')</span>
                </div>
                <div class="col-md-7  mt-lg-5">
                    <div class="row">
                        <div class="col-12 about-text">
                            <p>{!! $about->main_text !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid about-wallpaper">
            <img src="/upload/{{ $about->image }}">
        </div>
        <div class="container mt-5 about-text contain-seventy">
            <p>{{ $about->sub_text }}</p>
        </div>
        <div class="container about-principles">
            <p>@lang('trans.our_principles')</p>
        </div>
        <div class="container about-list">
            @foreach($principles as $principle)
                <div class="about-list-item">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="about-list-item-title fadeInUp-scroll visible">
                                {{ $principle->title }}
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="about-list-item-description fadeInUp-scroll visible">
                                {{ $principle->description }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
{{--    <section id="portfolio" class="section portfolio-section">--}}
{{--        <div class="container">--}}
{{--            --}}{{--            <h6 class="section-title text-center">Каталог</h6>--}}
{{--            <div class="filters">--}}
{{--                <a href="#" data-filter=".new" class="active">--}}
{{--                    New--}}
{{--                </a>--}}
{{--                <a href="#" data-filter=".advertising">--}}
{{--                    Advertising--}}
{{--                </a>--}}
{{--                <a href="#" data-filter=".branding">--}}
{{--                    Branding--}}
{{--                </a>--}}
{{--                <a href="#" data-filter=".web">--}}
{{--                    Web--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="portfolio-container">--}}
{{--                <div class="col-md-6 col-lg-4 web new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/3.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 web new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/12.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 advertising new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/11.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 web">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/10.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-4 advertising">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/9.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 web new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/8.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 advertising new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/7.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 advertising new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/6.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 branding new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/5.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 branding">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/4.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 branding new">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/3.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 branding">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/2.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 branding">--}}
{{--                    <div class="portfolio-item">--}}
{{--                        <img src="/images/1.jpg" class="img-fluid"--}}
{{--                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End OF About Section -->
@endsection
