@extends('layouts.main')

@section('content')
    <!-- Page Header -->
    <header class="header subDomain">

    </header>
    <!-- About Section -->
    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container-fluid">
{{--            <h6 class="section-title text-center">Каталог</h6>--}}
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    New
                </a>
                <a href="#" data-filter=".advertising">
                    Advertising
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <a href="#" data-filter=".web">
                    Web
                </a>
            </div>
            <div class="portfolio-container">
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="/images/3.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="/images/12.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="/images/11.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="/images/10.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 advertising">
                    <div class="portfolio-item">
                        <img src="/images/9.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="/images/8.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="/images/7.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="/images/6.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="/images/5.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="/images/4.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="/images/3.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="/images/2.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="/images/1.jpg" class="img-fluid"
                             alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->
@endsection
