<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : 'Website Title' }}
        {{ trans('main.user_login') }}
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png"
          sizes="32x32">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/default/logreg/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/default/logreg/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/default/logreg/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-login100"
         style="background: url({{asset('/assets/default/logreg/images/login-page-background.jpg')}});background-size: cover; min-height: 750px;">
        <div class="wrap-login100">
            <form class="form" action="{{route('auth.register')}}" method="post" id="loginForm"
                  style="text-align: left;direction: ltr">
                @csrf
                <span class="login100-form-title">Register</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100 input-field validate" type="text" name="name" placeholder="Full Name"
                           required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100 input-field validate" type="text" name="username" placeholder="Username"
                           required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                </div>


                <div class="wrap-input100 validate-input">
                    <input class="input100 input-field validate" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>


                <div class="wrap-input100 validate-input">
                    <input type="password" name="password" class="input-field validate input100"
                           placeholder="Password" required>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input type="password" name="repassword" class="input-field validate input100"
                           placeholder="Confirm Password" required>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" name="submit" value="Register" class="login100-form-btn">
                </div>

                <div class="text-center p-t-20">

                    Sign up with <a href="/user/sociliate/google" class="btn btn-custom btn-check-form ">
                        <img src="{{asset('/assets/default/logreg/images/google.png')}}" alt="IMG" style="width: 25px">
                    </a>
                    or
                    <a href="{{ url('/user/auth/redirect/github') }}" class="btn btn-custom btn-check-form">
                        <img src="{{asset('/assets/default/logreg/images/fb.png')}}" alt="IMG" style="width: 30px"></a>
                </div>

                <div class="text-center p-t-20">
                    Already Have an account? <br> <a class="txt2" href="/login"> Sign in
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
            <div class="login100-pic js-tilt">
                <img src="{{asset('/assets/default/logreg/images/img-02.png')}}" alt="IMG" class="model">
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{asset('logreg/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logreg/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('logreg/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logreg/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('logreg/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/default/logreg/js/main.js')}}"></script>
