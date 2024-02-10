<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>AsiaTon</title>
    <link rel="icon" href="/images/logo.png" type="image/x-icon" />
    <!-- font icons -->
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/imageStyle.css">
    <link href="../../fontawesome-free-6.2.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="../../fontawesome-free-6.2.0-web/css/brands.css" rel="stylesheet">
    <link href="../../fontawesome-free-6.2.0-web/css/solid.css" rel="stylesheet">
{{--    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>--}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- page Navigation -->
@if(request()->is('/'))
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
@else
    <nav class="navbar custom-navbar custom-color navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
@endif
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/imgs/asia-logo.png" alt="">
        </a>
        <div class="menu-btn not-active" id="menu-btn" data-toggle="collapse"
      data-target="#navbarSupportedContent"><span></span></div>
        {{--        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"--}}
{{--                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="{{ (request()->is('/')) ? 'activ' : '' }}">
                    <a class="nav-link" href="/">@lang('trans.home')</a>
                </li>
                <li class="{{ (request()->is('/about-us')) ? 'activ' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">@lang('trans.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/catalog-list">@lang('trans.catalog')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">@lang('trans.products')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">@lang('trans.contact')</a>
                </li>

                <div class="dropdown">
                    <a class="dropbtn">
                        <span>{{ $lang }}</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="/locale/en">EN</a>
                        <a href="/locale/ru">RU</a>
                    </div>
                </div>

            </ul>
            <div class="header__right">
                <div class="social-med ia justify-content-lg-between">
                    <a class="socnet" href="{{ $contact->facebook }}"><img src="../imgs/icon-fb.svg" alt=""></a>
                    <a class="socnet" href="{{ $contact->instagram }}"><img src="../imgs/icon-inst.svg" alt=""></a>
                    <a class="socnet" href="t.me{{ $contact->telegram }}"><img src="../imgs/icon-tg.svg" alt=""></a>
                    <a class="socnet" href="{{ $contact->tiktok }}"><img src="../imgs/icon-tik.svg" alt=""></a>
    {{--                <a href="/" class="login">Login</a>--}}
                </div>

            </div>
        </div>
    </div>
</nav>
<!-- End Of Second Navigation -->
<main>
    @yield('content')
</main>

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3 contacty">
                <h3 class="mb-4">@lang('trans.contact')</h3>
                <p class="mb-4"><i class="fa fa-phone fa-lg mr-3"></i><span>{{ $contact->phone }}</span></p>
                <p class="mb-4"><i class="fa fa-map-marker fa-lg mr-3 mt-0"></i><span>{{ $contact->address }}</span></p>
                <p class="mb-0"><i class="fa fa-envelope fa-lg mr-3"></i><span>{{ $contact->email }}</span></p>
            </div>
            <div class="col-md-7 mt-5">
                <form action="{{ route('contact-form') }}" method="POST">
                    @csrf
                    <h4 class="mb-4">@lang('trans.contact_form')</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name"
                                   placeholder="@lang('trans.name')">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="number" class="form-control text-white rounded-0 bg-transparent" name="phone"
                                   placeholder="@lang('trans.phone')">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email"
                                   placeholder="@lang('trans.email')">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="company_name"
                                   placeholder="@lang('trans.company_name')">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject"
                                   placeholder="@lang('trans.subject')">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="4"
                                      class="form-control text-white rounded-0 bg-transparent"
                                      placeholder="@lang('trans.message')"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">@lang('trans.send')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Page Footer -->
        <footer class="mt-5 py-4 border-top border-secondary">
            <p class="mb-0 small">&copy;
                <script>document.write(new Date().getFullYear())</script>
                Asia Ton. @lang('trans.rights')
            </p>
        </footer>
        <!-- End of Page Footer -->
        <a  href="https://wa.me/{{ $contact->whatsapp }}" class="back-to-top" target="_blank">
            <img id="whatsapp" src="/imgs/whatsapp.png" alt="" style="z-index: 2">
        </a>
    </div>
</section>

<!-- core  -->
<script src="../vendors/jquery/jquery-3.4.1.js"></script>
<script src="../vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap 3 affix -->
<script src="../vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Isotope -->
<script src="../vendors/isotope/isotope.pkgd.js"></script>

<!-- LeadMark js -->
<script src="../js/leadmark.js"></script>

</body>
</html>
