@extends('layouts.layout')
@section('title', 'My cart')
@section('content')
    <div class="container my-5">

        <div class="card" style="background:#95f5b7;">
            <div class="card-body text-center">
                <h5 class="card-title">@lang('checkout.success')</h5>
                <p class="card-text">@lang('checkout.caption')</p>
                <h6>
                    <a href="/">@lang('checkout.link')</a>
                </h6>
            </div>
        </div>

    </div>
@endsection
