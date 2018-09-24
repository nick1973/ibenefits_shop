<header>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">--}}
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
    <a href="{{ route('frontend.index') }}" class="navbar-brand"><img height="100px" src="/img/frontend/logo_horiz.png"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('labels.general.toggle_navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            {{--@if (config('locale.status') && count(config('locale.languages')) > 1)--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">{{ __('menus.language-picker.language') }} ({{ strtoupper(app()->getLocale()) }})</a>--}}

                    {{--@include('includes.partials.lang')--}}
                {{--</li>--}}
            {{--@endif--}}

            @auth
                {{--<li class="nav-item"><a href="{{route('frontend.user.dashboard')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}">{{ __('navs.frontend.dashboard') }}</a></li>--}}
            @endauth

            @guest
                <li class="nav-item"><a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">{{ __('navs.frontend.login') }}</a></li>

                @if (config('access.registration'))
                    <li class="nav-item"><a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">{{ __('navs.frontend.register') }}</a></li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{ $logged_in_user->name }}</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                        @can('view backend')
                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">{{ __('navs.frontend.user.administration') }}</a>
                        @endcan

                        <a href="{{ route('frontend.user.account') }}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">{{ __('navs.frontend.user.account') }}</a>
                        <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">{{ __('navs.general.logout') }}</a>
                    </div>
                </li>
            @endguest

            {{--<li class="nav-item"><a href="{{route('frontend.contact')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.contact')) }}">{{ __('navs.frontend.contact') }}</a></li>--}}
        </ul>
        {{--<form class="form-inline mt-2 mt-md-0">--}}
            {{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
        @if(Cart::count() == 0)
            <div class="ml-2">
                <a href="{{ route('frontend.cart') }}" style="color:#2e3192; text-decoration: none"><i class="fas fa-shopping-cart fa-2x ml-2 mr-2"></i>
                <span class="badge badge-primary mr-2" style="background-color:#2e3192">{{ Cart::count() }}</span></a>
            </div>
        @else
            <div class="ml-2">
                <a href="{{ route('frontend.cart') }}" style="color:#2e3192; text-decoration: none"><i class="fas fa-shopping-cart fa-2x ml-2 mr-2"></i>
                <span class="badge badge-primary mr-2" style="background-color:#2e3192">{{ Cart::count() }}</span></a>
            </div>
        @endif

        @auth
        <ul class="navbar-nav ml-1 mr-1">
            <li class="nav-item">
                {{--<a href="{{ route('frontend.user.account') }}"--}}
                   {{--class="nav-link {{ active_class(Active::checkRoute('frontend.user.account')) }}">--}}
                     Balance
                    <?php
                        $cart_total = floatval(str_replace(",","",Cart::total()));
                    ?>
                    @if($cart_total > $logged_in_user->balance )
                        <span class="text-danger"><i class="fas fa-pound-sign fa-2x pr-1" aria-hidden="true"></i>{{ $logged_in_user->balance - $cart_total }}</span>
                        @else
                        <i style="color:#2e3192" class="fas fa-pound-sign fa-2x pr-1" aria-hidden="true"></i>{{ $logged_in_user->balance - $cart_total }}
                    @endif
                {{--</a>--}}
            </li>
        </ul>
            <div class="form-inline mt-2 mt-md-0 ml-2">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="button" data-toggle="modal" data-target="#cashOut">Cash Out</button>
            </div>
        @endauth
    </div>
</nav>
</header>