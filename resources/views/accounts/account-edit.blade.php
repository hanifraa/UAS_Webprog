@extends('layouts.layout')
@section('title', 'Edit')
@section('content')

<style>
.btn-primary {
    --bs-btn-color: black;
    --bs-btn-bg: #1abc9c;
    --bs-btn-border-color: #1abc9c;
    --bs-btn-active-bg: none;
}
.btn:hover {
    color: #000000;
    background-color: #1b8a74;
    border-color: #0a58ca00;
}
</style>


    <div class="container py-5">
        <h3>@lang('edit_role.title')</h3>
        <form action="{{route('accounts.update',$user->account_id)}}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label>@lang('edit_role.first_name')</label>
                <input type="text" class="form-control" value="{{$user->first_name}}" disabled>
            </div>
            <div class="form-group my-2">
                <label>@lang('edit_role.last_name')</label>
                <input type="text" class="form-control" value="{{$user->last_name}}" disabled>
            </div>
            <div class="form-group my-2">
                <label>Email</label>
                <input type="text" class="form-control" value="{{$user->email}}" disabled>
            </div>
            <div class="form-group my-2">
                <label>@lang('edit_role.role')</label>
                <select name="role_id"  class="form-control">
                    @foreach ($role as $data)
                    <option value="{{$data->role_id}}" {{$data->role_id == $user->role_id ? 'selected' : ''}}>{{$data->role_name}}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">@lang('edit_role.button_update')</button>
        </form>
    </div>
@endsection
