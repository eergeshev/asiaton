@extends('layouts.main')
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [54.98, 82.89],
            zoom: 13
        });

        DG.marker([54.98, 82.89]).addTo(map).bindPopup('Вы кликнули по мне!');
    });
</script>
@section('content')
    <section class="section" id="about">
        <div class="container mt-5">
            <div class="row justify-content-between page-direct">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0 fade-in-up">
                    <h6 class="cat-list-title mb-0">@lang('trans.contact')</h6>
                    <a href="/">@lang('trans.home')</a><i class="fa fa-chevron-right"></i> <span class="contact-link">@lang('trans.contact')</span>
                </div>
                <div class="col-md-6  mt-lg-5">
                    <div class="row mt-4">
                        <div class="col-12 about-text">
                            <p class="mb-4"><i class="fa-regular fa-phone fa-lg mr-3"></i><span>+ 123-456-7890</span></p>
                            <p class="mb-4"><i class="fa-brands fa-whatsapp fa-lg mr-3"></i><span>+ 123-456-7890</span></p>
                            <p class="mb-4"><i class="fa-regular fa-location-dot fa-lg mr-3"></i><span>12345 Fake ST NoWhere AB Country</span></p>
                            <p class="mb-0"><i class="fa-regular fa-envelope fa-lg mr-3"></i><span>info@website.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contact__map mt-5">
            <a class="dg-widget-link" href="https://2gis.kg/bishkek/firm/70000001019320032/74.621507%2C42.83408?m=74.621448%2C42.833976%2F18.2">Посмотреть на карте Бишкека</a><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":300,"borderColor":"transparent","pos":{"lat":42.81822509340957,"lon":74.60619906355308,"zoom":16},"opt":{"city":"bishkek"},"org":[{"id":"70000001019320032"}]});</script>
{{--            <a class="dg-widget-link" href="https://2gis.kg/bishkek/firm/70000001019333980/74.607393%2C42.840751?m=74.607082%2C42.84589%2F15.14">Посмотреть на карте Бишкека</a><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":300,"borderColor":"transparent","pos":{"lat":42.85843270812641,"lon":74.59321977301788,"zoom":13},"opt":{"city":"bishkek"},"org":[{"id":"70000001019333980"}]});</script>--}}
        </div>
    </section>
@endsection
