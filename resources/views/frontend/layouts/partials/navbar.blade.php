<header>
    <div id="main-menu" class="main-menu-container">
        <div class="main-menu">
            <div class="container">
                <div class="navbar-default">
                    <div class="navbar-header float-left">
                        <a class="navbar-brand text-uppercase" href="{{url('/')}}">
                            {{--<img src="{{asset("storage/logos/".config('logo_w_image'))}}" alt="logo">--}}
                            <img src="{{asset("storage/logos/logo-inboxed-logo.png")}}" alt="logo" class="img-logo">
                            <style>
                                .img-logo{
                                    width: 150px;
                                }
                            </style>
                        </a>
                    </div><!-- /.navbar-header -->

                    <div class="cart-search float-right ul-li">
                        <ul>
                            <li>
                                <a href="{{route('cart.index')}}"><i class="fas fa-shopping-bag"></i>
                                    @if(auth()->check() && Cart::session(auth()->user()->id)->getTotalQuantity() != 0)
                                        <span class="badge badge-danger position-absolute">{{Cart::session(auth()->user()->id)->getTotalQuantity()}}</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>


                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <nav class="navbar-menu float-right">
                        <div class="nav-menu ul-li">
                            <ul>
                                @if(count($custom_menus) > 0 )
                                    @foreach($custom_menus as $menu)
                                        {{--@if(is_array($menu['id']) && $menu['id'] == $menu['parent'])--}}
                                            {{--@if($menu->subs && (count($menu->subs) > 0))--}}
                                        @if($menu['id'] == $menu['parent'])
                                            @if(count($menu->subs) == 0)
                                                <li class="">
                                                    <a href="{{asset($menu->link)}}"
                                                       class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                       id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                </li>

                                            @else
                                                <li class="menu-item-has-children ul-li-block">
                                                    <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                    <ul class="sub-menu">
                                                        @foreach($menu->subs as $item)
                                                            @include('frontend.layouts.partials.dropdown', $item)
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                                @if(auth()->check())
                                    @if($logged_in_user->hasRole('student'))
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('frontend.auth.logout') }}"><i class="fas fa-sign-out-alt"></i></a>
                                    </li>
                                    @else
                                    <li class="menu-item-has-children ul-li-block">
                                        <a href="#!">{{ $logged_in_user->name }}</a>
                                        <ul class="sub-menu">
                                            @can('view backend')
                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                </li>
                                            @endcan

                                            <li>
                                                <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif
                                @else
                                    <li>
                                        <div class="log-in mt-0">

                                            <a href="/newlogin">login</a>
                                            {{-- <a id="openLoginModal" data-target="#myModal"
                                               href="#">@lang('navs.general.login')</a> --}}
                                            {{--@include('frontend.layouts.modals.loginModal')--}}

                                        </div>
                                    </li>
                                @endif
                                    @if(count($locales) > 1)
                                    <li class="menu-item-has-children ul-li-block">
                                        <a href="#">
                                            <span class="d-md-down-none">@lang('menus.language-picker.language')
                                                ({{ strtoupper(app()->getLocale()) }})</span>
                                        </a>
                                        <ul class="sub-menu">
                                            @foreach($locales as $lang)
                                                @if($lang != app()->getLocale())
                                                    <li>
                                                        <a href="{{ '/lang/'.$lang }}"
                                                           class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>

                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src={{asset("storage/logos/".config('logo_w_image'))}} alt="Logo">
                            </a>
                        </div>
                        <nav>
                            <ul>
                                @if(count($custom_menus) > 0 )
                                    @foreach($custom_menus as $menu)
                                        @if($menu['id'] == $menu['parent'])
                                            @if(count($menu->subs) > 0)
                                                <li class="">
                                                    <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                    <ul class="">
                                                        @foreach($menu->subs as $item)
                                                            @include('frontend.layouts.partials.dropdown', $item)
                                                        @endforeach
                                                    </ul>
                                                </li>
                                             @else
                                                <li class="">
                                                    <a href="{{asset($menu->link)}}"
                                                       class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                       id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                </li>
                                            @endif

                                        @endif
                                    @endforeach
                                @endif
                                @if(auth()->check())
                                    <li class="">
                                        <a href="#!">{{ $logged_in_user->name}}</a>
                                        <ul class="">
                                            @can('view backend')
                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                </li>
                                            @endcan


                                            <li>
                                                <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <div class=" ">
                                            <a id="openLoginModal" data-target="#myModal"
                                               href="#">@lang('navs.general.login')</a>
                                            <!-- The Modal -->
                                        </div>
                                    </li>
                                @endif
                                    @if(count($locales) > 1)
                                        <li class="menu-item-has-children ul-li-block">
                                            <a href="#">
                                            <span class="d-md-down-none">@lang('menus.language-picker.language')
                                                ({{ strtoupper(app()->getLocale()) }})</span>
                                            </a>
                                            <ul class="">
                                                @foreach($locales as $lang)
                                                    @if($lang != app()->getLocale())
                                                        <li>
                                                            <a href="{{ '/lang/'.$lang }}"
                                                               class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>