<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png"
          sizes="32x32">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{!! get_option('site_description','') !!}">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/default/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/bootstrap/css/bootstrap-3.2.rtl.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/owlcarousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/raty/jquery.raty.css"/>
    <link rel="stylesheet" href="/assets/default/view/fluid-player-master/fluidplayer.min.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/simplepagination/simplePagination.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/easyautocomplete/easy-autocomplete.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/jquery-te/jquery-te-1.4.0.css"/>
    <link rel="stylesheet" href="/assets/default/stylesheets/vendor/mdi/css/materialdesignicons.min.css"/>


    <!--   menu bar-- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/reset.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/ionicon.min.css')}}">


    <style>

        .searchbox {
            position: relative;
            min-width: 50px;
            width: 0%;
            height: 50px;
            float: right;
            overflow: hidden;

            -webkit-transition: width 0.3s;
            -moz-transition: width 0.3s;
            -ms-transition: width 0.3s;
            -o-transition: width 0.3s;
            transition: width 0.3s;
        }

        .searchbox-input {
            top: 0;
            right: 0;
            border: 1px solid #d9dfe5;
            outline: 0;
            background: white;
            width: 100%;
            height: 45px;
            margin: 0;
            padding: 0px 55px 0px 20px;
            font-size: 20px;

            border-radius: 20px;
        }


        .searchbox-icon,
        .searchbox-submit {
            width: 50px;
            height: 45px;
            /*border-radius: 100%;*/
            display: block;
            position: absolute;
            top: 0;
            font-size: 22px;
            right: 0;
            padding: 0;
            margin: 0;
            border: 0;
            outline: 0;
            line-height: 45px;
            text-align: center;
            cursor: pointer;
            color: #FFFFFF;
            background: #008080;
        }

        .searchbox-open {
            width: 100%;
        }


        @media screen and (max-width: 768px) {
            .search-area {
                display: none;
            }
        }
    </style>


    <!--    menu bar-- -->

    @if(get_option('site_rtl','0') == 1)
        <link rel="stylesheet" href="/assets/default/stylesheets/view-custom-rtl.css"/>
    @else
        <link rel="stylesheet" href="/assets/default/stylesheets/view-custom.css?time={!! time() !!}"/>
    @endif
    <link rel="stylesheet" href="/assets/default/stylesheets/view-responsive.css"/>
    @if(get_option('main_css')!='')
        <style>
            {!! get_option('main_css') !!}
            body {
                font-family: 'Abril Fatface';
                font-size: 22px;
            }
        </style>
    @endif
    <script type="application/javascript" src="/assets/default/vendor/jquery/jquery.min.js"></script>
    <title>@yield('title'){!! $title ?? '' !!}</title>

    @yield('style')

</head>
<body>


<div class="container-fluid">
    <div class="row line-header"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row middle-header">
            <div class="col-md-3 col-xs-12 tab-con">

            </div>
            <div class="col-md-6 col-xs-12 tab-con">
<!--                <div class="row search-box">
                    <form action="/search">
                        {{ csrf_field() }}
                        <input type="text" name="q" class="col-md-11 provider-json" placeholder="Search..."/>
                        <button type="submit" name="search" class="pull-left col-md-1"><span
                                class="homeicon mdi mdi-magnify"></span></button>
                    </form>
                </div>-->
            </div>
            <div class="col-md-3 col-xs-12 text-center tab-con">
                <div class="row">
                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                        <a href="/user/content/new" class="header-upload-button pulse"><span
                                class="headericon mdi mdi-arrow-up-bold"></span>{{ trans('main.upload_course') }}</a>
                    @endif
                    @if(isset($user))
                        <a href="/user/ticket" class="header-login-in-button">
                            <img src="{{ $userMeta['avatar'] ?? get_option('default_user_avatar','') }}"
                                 class="user-header-avatar">
                            <span class="header-title-caption">{{ $user['name'] }}</span>
                            <span class="headericon mdi mdi-chevron-down"></span>
                            <label class="alert">
                                @if(isset($alert['all']) && $alert['all']>0)
                                    <span class="noti-holder">{{ $alert['all'] }}</span>
                                @endif
                                <span class="noti-icon headericon mdi mdi-bell-alert"
                                      onclick="window.location.href='/user/ticket/notification';"></span>
                            </label>
                            <label onclick="event.stopPropagation();" class="alert alert-f">
                                @if(isset($alert['ticket']) && $alert['ticket']>0)
                                    <span>{{ $alert['ticket'] }}</span>
                                @endif
                                <i class="headericon mdi mdi-email"></i>
                            </label>
                            <div class="animated user-overlap sbox3">
                                <div class="overlap-profile-viewer">
                                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                                        <a href="/user/dashboard">
                                            <img
                                                src="{{ !empty($userMeta['avatar']) ? $userMeta['avatar'] : '/assets/default/images/user.png' }}"
                                                class="dash-s">
                                        </a>
                                    @else
                                        <a href="/user/content"><img
                                                src="{{ !empty($userMeta['avatar']) ? $userMeta['avatar'] : '/assets/default/images/user.png' }}"
                                                class="dash-s"></a>
                                    @endif
                                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                                        <div class="overlap-profile-viewer-info">
                                            <a href="/user/dashboard"
                                               class="dash-s2"><span>{{ !empty($user['category']['title']) ? $user['category']['title'] : 'General User' }}</span></a>
                                            <a href="/user/dashboard"
                                               class="btn btn-danger">{{ trans('main.user_panel') }}</a>
                                        </div>
                                    @else
                                        <div class="overlap-profile-viewer-info">
                                            <a href="/user/video/buy"
                                               class="dash-s2"><span>{{ !empty($user['category']['title']) ? $user['category']['title'] : 'General User' }}</span></a>
                                            <a href="/user/video/buy"
                                               class="btn btn-danger">{{ trans('main.user_panel') }}</a>
                                        </div>
                                    @endif
                                </div>
                                <ul>
                                    <li><a href="/profile/{{ $user['id'] }}"><span
                                                class="headericon mdi mdi-account"></span>
                                            <p>{{ trans('main.profile') }}</p></a></li>
                                    <li><a href="/user/ticket"><span class="headericon mdi mdi-headset"></span>
                                            <p>{{ trans('main.support') }}</p></a></li>
                                    <li><a href="/category?order=favorite"><span
                                                class="headericon mdi mdi-heart"></span>
                                            <p>{{ trans('main.favorite') }}</p></a></li>
                                    <li><a href="/user/profile"><span class="headericon mdi mdi-settings"></span>
                                            <p>{{ trans('main.settings') }}</p></a></li>
                                    <li><a href="/logout"><span class="headericon mdi mdi-power"></span>
                                            <p>{{ trans('main.exit') }}</p></a></li>
                                </ul>
                            </div>
                        </a>
                    @else
                       {{-- <a href="/user?redirect={{ Request::path() }}" class="header-login-button"><span
                                class="headericon mdi mdi-account"></span>{{ trans('main.login_signup') }}</a>--}}
                        <span> &nbsp; </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row sep"></div>

    <div>
        <div class="row">
            <!-- Section: Header -->
            <header class="nav-header">
                <div class="container">
                    <div class="wrapper">
                        <div class="header-item-left">
                            <a href="/">
                                <img src="{{ get_option('site_logo') }}" alt="{{ get_option('site_title') }}"
                                     class="logo-icon" style="height: 95px;">
                            </a>
                        </div>
                        <!-- Section: Navbar Menu -->
                        <div class="header-item-center">
                            <div class="overlay"></div>
                            <nav class="menu">
                                <div class="menu-mobile-header">
                                    <button type="button" class="menu-mobile-arrow"><i
                                            class="ion ion-ios-arrow-back"></i></button>
                                    <div class="menu-mobile-title"></div>
                                    <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i>
                                    </button>
                                </div>
                                <ul class="menu-section">
                                    <li><a href="#">Home</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Categories <i class="ion ion-ios-arrow-down"></i></a>
                                        <div class="menu-subs menu-mega menu-column-4">
                                            @foreach($setting['category'] as $mainCategory)
                                                <div class="list-item">
                                                    <h4 class="title">
                                                        {{$mainCategory->title }}
                                                    </h4>
                                                    <ul>
                                                        @forelse($mainCategory->childs as $child)
                                                            <li>
                                                                <a href="/category/{{ $child->class }}">
                                                                    {{ $child->title }}
                                                                </a>
                                                            </li>
                                                        @empty
                                                            "N/A Right Now"
                                                        @endforelse
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li><a href="{{url('/blog')}}">Blogs</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Accounts <i class="ion ion-ios-arrow-down"></i></a>
                                        <div class="menu-subs menu-column-1">
                                            <ul>
                                                <li><a href="/user?redirect={{ Request::path() }}">Sign in</a></li>
                                                <li><a href="/register">Sign Up</a></li>
                                                <li><a href="#">Help & Question</a></li>
                                                <li><a href="#">Privacy & Policy</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header-item-right">

                            <div class="search-area">
                                <form class="searchbox" action="/search">
                                    {{ csrf_field() }}
                                    <input type="search" placeholder="Search......" name="q"
                                           class="searchbox-input" onkeyup="buttonUp();" required>

                                    <button type="submit"    class="searchbox-submit"><i class="fa fa-arrow-right"></i>    </button>
                                    <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </form>
                            </div>

                            <button type="button" class="menu-mobile-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>
            </header>
            <!-- Section: Header -->

            <div class="sep-green"></div>

        </div>
    </div>

</div>

