<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png" sizes="32x32">
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
    <style>
        /* CSS Document */

        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

        body {
            background: #212121;
            font-size:22px;
            line-height: 32px;
            color: #ffffff;
            margin: 0;
            padding: 0;
            word-wrap:break-word !important;
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            font-size: 60px;
            text-align: center;
            color: #FFF;
        }

        h3 {
            font-size: 30px;
            line-height: 34px;
            text-align: center;
            color: #FFF;
        }

        h3 a {
            color: #FFF;
        }

        a {
            color: #FFF;
        }

        h1 {
            margin-top: 100px;
            text-align:center;
            font-size:60px;
            line-height: 70px;
            font-family: 'Bree Serif', 'serif';
        }

        #container {
            margin: 0 auto;
            max-width: 890px;
        }

        p {
            text-align: center;
        }

        .toggle,
        [id^=drop] {
            display: none;
        }

        /* Giving a background-color to the nav container. */
        nav {
            margin:0;
            padding: 0;
            background-color: #254441;
        }

        #logo {
            display: block;
            padding: 0 30px;
            float: left;
            font-size:20px;
            line-height: 60px;
        }

        /* Since we'll have the "ul li" "float:left"
         * we need to add a clear after the container. */

        nav:after {
            content:"";
            display:table;
            clear:both;
        }

        /* Removing padding, margin and "list-style" from the "ul",
         * and adding "position:reltive" */
        nav ul {
            float: right;
            padding:0;
            margin:0;
            list-style: none;
            position: relative;
        }

        /* Positioning the navigation items inline */
        nav ul li {
            margin: 0px;
            display:inline-block;
            float: left;
            background-color: #254441;
        }

        /* Styling the links */
        nav a {
            display:block;
            padding:14px 20px;
            color:#FFF;
            font-size:17px;
            text-decoration:none;
        }


        nav ul li ul li:hover { background: #000000; }

        /* Background color change on Hover */
        nav a:hover {
            background-color: #000000;
        }

        /* Hide Dropdowns by Default
         * and giving it a position of absolute */
        nav ul ul {
            display: none;
            position: absolute;
            /* has to be the same number as the "line-height" of "nav a" */
            top: 60px;
        }

        /* Display Dropdowns on Hover */
        nav ul li:hover > ul {
            display:inherit;
        }

        /* Fisrt Tier Dropdown */
        nav ul ul li {
            width:170px;
            float:none;
            display:list-item;
            position: relative;
        }

        /* Second, Third and more Tiers
         * We move the 2nd and 3rd etc tier dropdowns to the left
         * by the amount of the width of the first tier.
        */
        nav ul ul ul li {
            position: relative;
            top:-60px;
            /* has to be the same number as the "width" of "nav ul ul li" */
            left:170px;
        }


        /* Change ' +' in order to change the Dropdown symbol */
        li > a:after { content:  ' +'; }
        li > a:only-child:after { content: ''; }


        /* Media Queries
        --------------------------------------------- */

        @media all and (max-width : 768px) {

            #logo {
                display: block;
                padding: 0;
                width: 100%;
                text-align: center;
                float: none;
            }

            nav {
                margin: 0;
            }

            /* Hide the navigation menu by default */
            /* Also hide the  */
            .toggle + a,
            .menu {
                display: none;
            }

            /* Stylinf the toggle lable */
            .toggle {
                display: block;
                background-color: #254441;
                padding:14px 20px;
                color:#FFF;
                font-size:17px;
                text-decoration:none;
                border:none;
            }

            .toggle:hover {
                background-color: #000000;
            }

            /* Display Dropdown when clicked on Parent Lable */
            [id^=drop]:checked + ul {
                display: block;
            }

            /* Change menu item's width to 100% */
            nav ul li {
                display: block;
                width: 100%;
            }

            nav ul ul .toggle,
            nav ul ul a {
                padding: 0 40px;
            }

            nav ul ul ul a {
                padding: 0 80px;
            }

            nav a:hover,
            nav ul ul ul a {
                background-color: #000000;
            }

            nav ul li ul li .toggle,
            nav ul ul a,
            nav ul ul ul a{
                padding:14px 20px;
                color:#FFF;
                font-size:17px;
            }


            nav ul li ul li .toggle,
            nav ul ul a {
                background-color: #212121;
            }

            /* Hide Dropdowns by Default */
            nav ul ul {
                float: none;
                position:static;
                color: #ffffff;
                /* has to be the same number as the "line-height" of "nav a" */
            }

            /* Hide menus on hover */
            nav ul ul li:hover > ul,
            nav ul li:hover > ul {
                display: none;
            }

            /* Fisrt Tier Dropdown */
            nav ul ul li {
                display: block;
                width: 100%;
            }

            nav ul ul ul li {
                position: static;
                /* has to be the same number as the "width" of "nav ul ul li" */

            }

        }

        @media all and (max-width : 330px) {

            nav ul li {
                display:block;
                width: 94%;
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
                font-family: 'Abril Fatface';font-size: 22px;
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
                <div class="row">
                    <a href="/">
                        <img src="{{ get_option('site_logo') }}" alt="{{ get_option('site_title') }}" class="logo-icon"/>
                        <img src="{{ get_option('site_logo_type') }}" alt="{{ get_option('site_title') }}" class="logo-type"/>

                    </a>
                </div>
            </div>
            <div class="col-md-5 col-xs-12 tab-con">
                <div class="row search-box">
                    <form action="/search">
                        {{ csrf_field() }}
                        <input type="text" name="q" class="col-md-11 provider-json" placeholder="Search..."/>
                        <button type="submit" name="search" class="pull-left col-md-1"><span class="homeicon mdi mdi-magnify"></span></button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 text-center tab-con">
                <div class="row">
                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                        <a href="/user/content/new" class="header-upload-button pulse"><span class="headericon mdi mdi-arrow-up-bold"></span>{{ trans('main.upload_course') }}</a>
                    @endif
                    @if(isset($user))
                        <a href="/user/ticket" class="header-login-in-button">
                            <img src="{{ $userMeta['avatar'] ?? get_option('default_user_avatar','') }}" class="user-header-avatar">
                            <span class="header-title-caption">{{ $user['name'] }}</span>
                            <span class="headericon mdi mdi-chevron-down"></span>
                            <label class="alert">
                                @if(isset($alert['all']) && $alert['all']>0)
                                    <span class="noti-holder">{{ $alert['all'] }}</span>
                                @endif
                                <span class="noti-icon headericon mdi mdi-bell-alert" onclick="window.location.href='/user/ticket/notification';"></span>
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
                                            <img src="{{ !empty($userMeta['avatar']) ? $userMeta['avatar'] : '/assets/default/images/user.png' }}" class="dash-s">
                                        </a>
                                    @else
                                        <a href="/user/content"><img src="{{ !empty($userMeta['avatar']) ? $userMeta['avatar'] : '/assets/default/images/user.png' }}" class="dash-s"></a>
                                    @endif
                                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                                        <div class="overlap-profile-viewer-info">
                                            <a href="/user/dashboard" class="dash-s2"><span>{{ !empty($user['category']['title']) ? $user['category']['title'] : 'General User' }}</span></a>
                                            <a href="/user/dashboard" class="btn btn-danger">{{ trans('main.user_panel') }}</a>
                                        </div>
                                    @else
                                        <div class="overlap-profile-viewer-info">
                                            <a href="/user/video/buy" class="dash-s2"><span>{{ !empty($user['category']['title']) ? $user['category']['title'] : 'General User' }}</span></a>
                                            <a href="/user/video/buy" class="btn btn-danger">{{ trans('main.user_panel') }}</a>
                                        </div>
                                    @endif
                                </div>
                                <ul>
                                    <li><a href="/profile/{{ $user['id'] }}"><span class="headericon mdi mdi-account"></span>
                                            <p>{{ trans('main.profile') }}</p></a></li>
                                    <li><a href="/user/ticket"><span class="headericon mdi mdi-headset"></span>
                                            <p>{{ trans('main.support') }}</p></a></li>
                                    <li><a href="/category?order=favorite"><span class="headericon mdi mdi-heart"></span>
                                            <p>{{ trans('main.favorite') }}</p></a></li>
                                    <li><a href="/user/profile"><span class="headericon mdi mdi-settings"></span>
                                            <p>{{ trans('main.settings') }}</p></a></li>
                                    <li><a href="/logout"><span class="headericon mdi mdi-power"></span>
                                            <p>{{ trans('main.exit') }}</p></a></li>
                                </ul>
                            </div>
                        </a>
                    @else
                        <a href="/user?redirect={{ Request::path() }}" class="header-login-button"><span class="headericon mdi mdi-account"></span>{{ trans('main.login_signup') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row sep"></div>
    <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
    <nav>
        <div id="logo">
            <a href="/">
            <!--            <img src="{{ get_option('site_logo') }}" alt="{{ get_option('site_title') }}" class="logo-icon"/>-->
                <img src="{{ get_option('site_logo_type') }}" alt="{{ get_option('site_title') }}" class="logo-type" width="100px">

            </a>
        </div>

        <label for="drop" class="toggle">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-1" class="toggle">WordPress+

                </label>
                <a href="#">WordPress</a>
                <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="#">Themes and stuff</a></li>
                    <li><a href="#">Plugins</a></li>
                    <li><a href="#">Tutorials</a></li>
                </ul>

            </li>

            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
    </nav>
    <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->
    <div class="hidden-xs" id="header-menu-section">
        <div class="row">
            <div class="menu-header">

                <div class="col-md-1 text-center tab-con">
                    <a href="/"><img src="{{ get_option('site_logo') }}" class="menu-logo"/></a>
                </div>
                <div class="col-md-10 col-xs-12 tab-con">
                    <ul id="accordion" class="cat-filters-li accordion accordion-s">
                        @foreach($setting['category'] as $mainCategory)
                            @if(count($mainCategory->childs)>0)
                                <li class="has-child" onmouseover="this.style.borderColor='{{ $mainCategory->color }}'" onmouseleave="this.style.borderColor='transparent'">
                                    <a href="javascript:void(0);">
                                        <img src="{{ $mainCategory->image }}"/>
                                        {{  $mainCategory->title }}
                                    </a>
                                    <ul>
                                        @foreach($mainCategory->childs as $child)
                                            <li onmouseover="this.style.borderColor='{{ $child->color }}'" onmouseleave="this.style.borderColor='transparent'">
                                                <a href="/category/{{ $child->class }}">
                                                    <img src="{{ $child->image }}"/>
                                                    {{ $child->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="no-child" onmouseover="this.style.borderColor='{{ $mainCategory->color }}'" onmouseleave="this.style.borderColor='transparent'">
                                    <a href="/category/{{ $mainCategory->class }}">
                                        <img src="{{ $mainCategory->image }}"/>
                                        {{ $mainCategory->title }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="sep-green"></div>
            <div class="menu-header menu-header-child">

                <div class="col-md-10 col-xs-12 col-md-offset-1">
                    <ul>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="hidden-md hidden-lg hidden-sm mobile-menu">
        <div class="row h-20"></div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>{{ trans('main.category') }}</b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @foreach($setting['category'] as $mainCategory)
                            @if(count($mainCategory->childs)>0)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$mainCategory->title}}<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($mainCategory->childs as $child)
                                            <li><a href="/category/{{ $child->class }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="/category/{{ $mainCategory->class }}">{{$mainCategory->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>


