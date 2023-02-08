@extends('layouts.layout')
@section('title', 'Profile Setting')
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
.card{
    --bs-card-bg: #e9e8bf;
}
</style>
    <div class="container light-style flex-grow-1 container-p-y py-5">
        <div class="row">
            <h3>@lang('profile.title')</h3>
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('Display Picture/' . $user->display_picture_link) }}" style="width:40vh;"
                            class="rounded">

                    </div>
                    <form method="POST" action="{{ route('profile.update') }}" class="my-5"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row my-2">
                            <label for="first_name"
                                class="col-md-4 col-form-label text-md-right">@lang('profile.first_name')</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text"
                                    class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                    value="{{ old('first_name') ??  $user->first_name }}" required autocomplete="name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="last_name"
                                class="col-md-4 col-form-label text-md-right">@lang('profile.last_name')</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                    value="{{  old('last_name') ?? $user->last_name }}" required autocomplete="name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="role" class="col-md-4 col-form-label text-md-right">@lang('profile.role')</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" disabled value="{{$user->Role->role_name}}">
                                @error('role')
                                    <span class="invalid-feedback" gender="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">@lang('profile.gender')</label>

                            <div class="col-md-6">
                                <select name="gender_id" class="form-control">
                                    @foreach ($gender as $item)
                                        <option value="{{ $item->gender_id }}"
                                            {{ $item->gender_id == $user->gender_id ? 'selected' : '' }}>
                                            {{ $item->gender_desc }}</option>
                                    @endforeach
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" gender="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row my-2">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">@lang('profile.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-2">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">@lang('profile.password_confirm')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>

                        <div class="form-group row my-2">
                            <label for="display_picture_link"
                                class="col-md-4 col-form-label text-md-right">@lang('profile.dp')</label>

                            <div class="col-md-6">
                                <input type="file" name="display_picture_link" accept="image/*">

                            </div>
                            @error('display_picture_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        <div class="form-group row my-2 mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('profile.button_update')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        @endsection
