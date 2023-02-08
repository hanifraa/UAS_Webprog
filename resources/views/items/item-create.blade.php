@extends('layouts.layout')
@section('title', 'Create items')
@section('content')
<style>
    .btn-info {
    --bs-btn-color: #000;
    --bs-btn-bg: #1abc9c;
    --bs-btn-border-color: none;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #1d7c6a;
    }
</style>
    <div class="container p-5">
        <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-2">
                <label for="">Item Name</label>
                <input type="text" name="item_name" class="form-control">
            </div>
            <div class="form-group my-2">
                <label for="">Item Desc</label>
                <input type="text" name="item_desc" class="form-control">
            </div>
            <div class="form-group my-2">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group my-2">
                <label for="">Item Pict</label>
                <input type="file" name="item_pict" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-info my-2">Submit</button>
        </form>
    </div>
@endsection
