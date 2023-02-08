@extends('layouts.layout')
@section('title', 'My cart')
@section('content')

<style>

.btn-warning {
    --bs-btn-color: #000;
    --bs-btn-bg: yellow;
    --bs-btn-border-color: none;
}
.table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    background-color: #1abc9c;
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
</style>
    <div class="container my-5">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th style="width:15vh;">Order Id</th>
                    <th>@lang('cart.tr_item')</th>
                    <th>@lang('cart.tr_price')</th>
                    <th>@lang('cart.tr_action')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $data->Item->item_name }}</td>
                        <td>Rp.{{ number_format($data->price) }}</td>
                        <td>
                            <a href="{{route('delete_cart',$data->order_id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach



            </tbody>

        </table>
        <div class="d-flex justify-content-between">
            <h4>Total : Rp. {{number_format($sum)}}</h4>
            <a href="{{route('checkout')}}" class="btn btn-warning">@lang('cart.checkout')</a>
        </div>

    </div>
@endsection
