<style>
    .headersatu{
  padding: 15px;
  text-align: center;
  background: #1abc9c;
  color: rgb(0, 0, 0);
  font-size: 30px;
}
div#navbarText {
    background: yellow;
}
.navbar-expand-lg .navbar-nav .nav-link {
    color: black;
}
.navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
    background: #1abc9c;
}
.navbar{
    --bs-navbar-padding-x: none;
}
.dropdown-menu{
    margin-left: -55px;
    --bs-dropdown-link-hover-bg: #f4f900;
}
</style>



<div class="headersatu">
    <h1>Amazing E-Grocery</h1>
</div>

<div class="container-fluid bg-light p-0">
    <nav class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid p-0">

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarText">

                <div class="bg-yellow">
                    <div class="d-flex container">
                        <a href="{{ route('locale.setting', 'en') }}" class="nav-link me-2">
                            EN
                        </a>
                        <a href="{{ route('locale.setting', 'id') }}" class="nav-link me-2">
                            ID
                        </a>
                    </div>

                </div>

                <ul class="navbar-nav">
                    <a href="/" class="nav-link fw-bold">{{ __('navbar.homepage_link') }}</a>

                    @auth
                        <a href="{{ route('mycart') }}" class="nav-link fw-bold">{{ __('navbar.mycart') }}</a>
                        @if (Auth::user()->Role->role_name == 'Admin')
                            <a href="{{ route('accounts-maintenance') }}" class="nav-link fw-bold">@lang('navbar.account_maintenance')

                            </a>
                        @endif
                    @endauth


                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('profile') }}" class="dropdown-item">@lang('navbar.account_setting')</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    @lang('navbar.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container ">

        {{-- <nav class="navbar navbar-expand-lg bg-light">

            <div class="container-fluid p-0">

                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarText">

                    <div class="bg-yellow">
                        <div class="d-flex container">
                            <a href="{{ route('locale.setting', 'en') }}" class="nav-link me-2">
                                EN
                            </a>
                            <a href="{{ route('locale.setting', 'id') }}" class="nav-link me-2">
                                ID
                            </a>
                        </div>

                    </div>

                    <ul class="navbar-nav">
                        <a href="/" class="nav-link fw-bold">{{ __('navbar.homepage_link') }}</a>

                        @auth
                            <a href="{{ route('mycart') }}" class="nav-link fw-bold">{{ __('navbar.mycart') }}</a>
                            @if (Auth::user()->Role->role_name == 'Admin')
                                <a href="{{ route('accounts-maintenance') }}" class="nav-link fw-bold">@lang('navbar.account_maintenance')

                                </a>
                            @endif
                        @endauth


                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('profile') }}" class="dropdown-item">@lang('navbar.account_setting')</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('navbar.logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

    </div>

</div>
