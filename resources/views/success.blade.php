@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="success-page">
                <i class="fa-regular fa-circle-check fa-3x"></i>
                <h3 class="mt-5">@lang('trans.success_message_1')</h3>
                <p>@lang('trans.success_message_2')</p>
                <div class="catalog-btn-box mt-5 mb-5">
                    <a href="/" class="catalog-btn">
                        @lang('trans.home')
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
