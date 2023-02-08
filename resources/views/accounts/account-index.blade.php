@extends('layouts.layout')
@section('title', 'Accounts Maintenance')
@section('content')

<style>
.btn-primary {
    --bs-btn-color: #0c0fdd;
    --bs-btn-bg: none;
    --bs-btn-border-color: none;
    --bs-btn-active-bg: none;
}
.btn-danger {
    --bs-btn-color: #0c0fdd;
    --bs-btn-bg: none;
    --bs-btn-border-color: none;
    --bs-btn-active-bg: none;
}
a:hover {
    animation: none;
}
.btn:hover {
    color: #084298;
    background-color: rgb(13 110 253 / 0%);
    border-color: #0a58ca00;
}
</style>
    <div class="container py-5">
        <h3>@lang('account_maintenance.title')</h3>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('account_maintenance.tr_first_name')</th>
                    <th scope="col">@lang('account_maintenance.tr_last_name')</th>
                    <th scope="col">@lang('account_maintenance.role')</th>
                    <th scope="col">@lang('account_maintenance.gender')</th>
                    <th scope="col">@lang('account_maintenance.action')</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($user as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->first_name}}</td>
                        <td>{{$data->last_name}}</td>
                        <td>{{$data->Role->role_name}}</td>
                        <td>{{$data->Gender->gender_desc}}</td>
                        <td>
                            <a href="{{route('accounts.edit',$data->account_id)}}" class="btn btn-primary">@lang('account_maintenance.button_edit')</a>
                            <a href="{{route('accounts.delete',$data->account_id)}}" class="btn btn-danger">@lang('account_maintenance.button_hapus')</a>

                        </td>

                    </tr>
                @empty
                    <h4>No User data to be maintenanced</h4>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
