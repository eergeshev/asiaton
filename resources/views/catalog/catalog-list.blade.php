@extends('layouts.main')

@section('content')
<section class="section" id="blog">
    <div class="container-xxl mt-xxl-5 page-direct">
        <h3 class="cat-list-title ml-5 mt-xxl-5">@lang('trans.catalogs')</h3>
        <div class="mb-lg-5 ml-5">
            <a href="/">@lang('trans.home')</a><i class="fa fa-chevron-right"></i> <span class="contact-link">@lang('trans.catalogs')</span>
        </div>
        <div class="row">
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
@endsection
