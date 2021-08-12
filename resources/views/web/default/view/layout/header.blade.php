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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--   menu bar-- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/reset.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/ionicon.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/stylesheets/modified.css')}}">


    <style>

        .new_footer_area {
            background:#fbfbfd;
        }


        .new_footer_top {
            padding: 30px 0px 100px;
            position: relative;
            overflow-x: hidden;
        }
        .new_footer_area .footer_bottom {
            padding-top: 5px;
            padding-bottom: 50px;
        }
        .footer_bottom {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            color: #7f88a6;
            padding: 27px 0px;
        }
        .new_footer_top .company_widget p {
            font-size: 16px;
            font-weight: 300;
            line-height: 28px;
            color: #6a7695;
            margin-bottom: 20px;
        }
        .new_footer_top .company_widget .f_subscribe_two .btn_get {
            border-width: 1px;
            margin-top: 20px;
        }
        .btn_get_two:hover {
            background: #ED1D4F!important;
            color: #5e2ced;
            border: 1px solid #ED1D4F!important;
        }
        .btn_get:hover {
            color: #fff;
            background: #6754e2;
            border-color: #6754e2;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
            text-decoration: none;
            outline: none;
        }



        .new_footer_top .f_widget.about-widget .f_list li a:hover {
            color: #5e2ced;
        }
        .new_footer_top .f_widget.about-widget .f_list li {
            margin-bottom: 11px;
        }
        .f_widget.about-widget .f_list li:last-child {
            margin-bottom: 0px;
        }
        .f_widget.about-widget .f_list li {
            margin-bottom: 15px;
        }
        .f_widget.about-widget .f_list {
            margin-bottom: 0px;
        }
        .new_footer_top .f_social_icon a {
            width: 44px;
            height: 44px;
            line-height: 43px;
            background: transparent;
            border: 1px solid #e2e2eb;
            font-size: 24px;
        }
        .f_social_icon a {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            font-size: 14px;
            line-height: 45px;
            color: #858da8;
            display: inline-block;
            background: #ebeef5;
            text-align: center;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .ti-facebook:before {
            content: "\e741";
        }
        .ti-twitter-alt:before {
            content: "\e74b";
        }
        .ti-vimeo-alt:before {
            content: "\e74a";
        }
        .ti-pinterest:before {
            content: "\e731";
        }

        .btn_get_two {
            -webkit-box-shadow: none;
            box-shadow: none;
            background: #ed2c7c;
            border-color: #ed2c7c;
            color: #fff;
        }

        .btn_get_two:hover {
            background: transparent;
            color: #5e2ced;
        }

        .new_footer_top .f_social_icon a:hover {
            background: #ED1D4F;
            border-color: #ED1D4F;
            color:white;
        }
        .new_footer_top .f_social_icon a + a {
            margin-left: 4px;
        }
        .new_footer_top .f-title {
            margin-bottom: 30px;
            color: #263b5e;
        }
        .f_600 {
            font-weight: 600;
        }
        .f_size_18 {
            font-size: 18px;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #4b505e;
        }
        .new_footer_top .f_widget.about-widget .f_list li a {
            color: #6a7695;
        }


        .new_footer_top .footer_bg {
            position: absolute;
            bottom: 0;
            /*background: url("http://droitthemes.com/html/saasland/img/seo/footer_bg.png") no-repeat scroll center 0;*/
            /*background: url("http://i.stack.imgur.com/kx8MT.gif") no-repeat scroll center 0;*/
            background:white;
            width: 100%;
            /*height: 266px;*/
        }

        .new_footer_top .footer_bg .footer_bg_one {
            background: url('https://1.bp.blogspot.com/-mvKUJFGEc-k/XclCOUSvCnI/AAAAAAAAUAE/jnBSf6Fe5_8tjjlKrunLBXwceSNvPcp3wCLcBGAsYHQ/s1600/volks.gif') no-repeat center center;
            width: 330px;
            height: 105px;
            background-size:100%;
            position: absolute;
            bottom: 0;
            left: 30%;
            -webkit-animation: myfirst 22s linear infinite;
            animation: myfirst 22s linear infinite;
        }

        .new_footer_top .footer_bg .footer_bg_two {
            background: url("https://1.bp.blogspot.com/-hjgfxUW1o1g/Xck--XOdlxI/AAAAAAAAT_4/JWYFJl83usgRFMvRfoKkSDGd--_Sv04UQCLcBGAsYHQ/s1600/cyclist.gif") no-repeat center center;
            width: 88px;
            height: 100px;
            background-size:100%;
            bottom: 0;
            left: 38%;
            position: absolute;
            -webkit-animation: myfirst 30s linear infinite;
            animation: myfirst 30s linear infinite;
        }



        @-moz-keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }

        @-webkit-keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }

        @keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }

        /*************footer End*****************/



    </style>

    <style>
        @media screen and (min-width: 768px) {
            .search-box {
                display: none;
                margin-bottom: 20px;
            }
        }

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
            background: #ED1D4F;
        }

        .searchbox-open {
            width: 100%;
        }

        .header-item-right a:hover, .nav-header .menu > ul > li:hover > a .menu-mega{
            display: block!important;
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
    @if(\Illuminate\Support\Facades\Auth::user())
    <div class="row line-header"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row middle-header">
            <div class="col-md-3 col-xs-12 tab-con">

            </div>
            <div class="col-md-6 col-xs-12 tab-con">
              <div class="row search-box">
                    <form action="/search">
                        {{ csrf_field() }}
                        <input type="text" name="q" class="col-md-11 provider-json" placeholder="Search..."/>
                        <button type="submit" name="search" class="pull-left col-md-1"><span
                                class="homeicon mdi mdi-magnify"></span></button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 text-center tab-con">
                <div class="row" style="margin-top: 15px;">
                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                        <a href="/user/content/new" class="header-upload-button pulse"><span
                                class="headericon mdi mdi-arrow-up-bold"></span>{{ trans('main.upload_course') }}</a>
                    @endif
                    @if(isset($user))
                        <a href="/user/ticket" class="header-login-in-button">
                            <img src="{{ $userMeta['avatar'] ?? get_option('default_user_avatar','') }}"
                                 class="user-header-avatar">

<!--                            <span class="header-title-caption">{{ $user['name'] }}</span>
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
                            </label>-->

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
    @endif
    <div>

        <div class="row" style="">
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
                                                @guest()
                                                <li><a href="/user?redirect={{ Request::path() }}">Sign in</a></li>
                                                <li><a href="/register">Sign Up</a></li>
                                                @endguest
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

