@extends('layouts.layout')
@section('title')
@section('content')

<style>
    .card-footer {
    background-color: #ffc107;
}
    .btn-primary {
    --bs-btn-color: black;
    --bs-btn-bg: #1abc9c;
    --bs-btn-border-color: none;
    --bs-btn-hover-color: #fff;
    /* --bs-btn-hover-bg: #0b5ed7; */
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
}
.btn:hover {
    color: black;
    background-color: #a9a5a5;
    border-color: solid 2px black;
}
.btn-info {
    --bs-btn-color: #000;
    --bs-btn-bg: yellow;
    --bs-btn-border-color: none;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #31d2f2;
}
.btn-warning {
    --bs-btn-color: #000;
    --bs-btn-bg: #1abc9c;
    --bs-btn-border-color: none;
}
.pagination{
    --bs-pagination-active-bg: #1abc9c;
    --bs-pagination-active-border-color: none;
    display: flex;
    justify-content: center;
}
.page-link{
    color: #1abc9c;
}
.btn-danger {
    --bs-btn-color: #fff;
    --bs-btn-bg: #dc3545;
    --bs-btn-border-color: none;
}
a.btn.btn-primary {
    display: flex;
    justify-content: center;
}
.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: none;
    border-radius: 0.375rem;
    max-width: 100%;
    height: auto;
}
</style>

    <div class="container py-5">
        @auth
            @if (Auth::user()->Role->role_name == 'Admin')
            <a href="{{ route('food.create') }}" class="btn btn-primary">@lang('homepage.button_add')</a>
            @endif
        @endauth

        <div class="row">

            @forelse ($item as $data)
                <div class="col-lg-3 my-3">
                    {{-- @auth
                        <div class="d-flex justify-content-end my-1">
                            @if (Auth::user()->Role->role_name == 'Admin')
                                <a href="{{ route('food.edit', $data->item_id) }}" class="btn btn-warning btn-sm  mx-1">@lang('homepage.button_edit')</a>
                                <a href="{{ route('food.delete', $data->item_id) }}" class="btn btn-danger btn-sm ">@lang('homepage.button_delete')</a>
                            @endif
                        </div>

                    @endauth --}}
                    <div class="card" style="min-height: 35vh;">

                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-2">
                                <img class="img-thumbnail"
                                src="{{ asset('image/'.$data->item_pict) }}"
                                style="height:20vh;">

                            </div>
                            @auth
                            <div class="d-flex justify-content-end my-1">
                            @if (Auth::user()->Role->role_name == 'Admin')
                                <a href="{{ route('food.edit', $data->item_id) }}" class="btn btn-warning btn-sm  mx-1">@lang('homepage.button_edit')</a>
                                <a href="{{ route('food.delete', $data->item_id) }}" class="btn btn-danger btn-sm ">@lang('homepage.button_delete')</a>
                            @endif
                            </div>
                            @endauth

                            <h6>{{ $data->item_name }}</h6>
                            <a href="{{ route('product.details', $data->item_id) }}" class="btn btn-info btn-sm ">Details</a>

                        </div>
                        <div class="card-footer">
                            Rp. {{ number_format($data->price) }}
                        </div>


                    </div>

                </div>
            @empty
                <div class="text-center my-5">
                    <h4>No Product to show</h4>
                </div>
            @endforelse
        </div>
        {{ $item->links() }}
    </div>

@endsection
