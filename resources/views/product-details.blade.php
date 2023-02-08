@extends('layouts.layout')
@section('title', 'Product details')
@section('content')

<style>
    .btn-warning {
    --bs-btn-color: #000;
    --bs-btn-bg: yellow;
    --bs-btn-border-color: none;
    }
    .btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: rgb(223, 223, 87);
    border-color: yellow;
}
.card-header {
    background: #1abc9c;
    font-weight: bold;
}
a.btn.btn-warning.btn-lg.fw-bold {
    display: flex;
    justify-content: center;
}
</style>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                @lang('product_details.product_detail')
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img class="img-thumbnail" src="{{asset('image/'.$item->item_pict)}}" style="height: 40vh;" alt="">
                </div>

                <h5 class="card-title">{{$item->item_name}}</h5>
                <p class="card-text">{{$item->item_desc}}</p>
                <h6>Price : Rp.{{number_format($item->price)}}</h6>
                <a href="{{route('buy',$item->item_id)}}" class="btn btn-warning btn-lg fw-bold">     @lang('product_details.buy')</a>
            </div>

        </div>
    </div>

@endsection
