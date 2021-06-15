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
    <link rel="icon" type="image/png" href="{{asset('/assets/default/logreg/images/icons/favicon.ico')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('logreg/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
    <div class="container-login100" style="background: url('/assets/default/logreg/images/login-page-background.jpg');background-size: cover; min-height: 750px;">
        <div class="wrap-login100">

            <form class="form" action="/login" method="post" id="loginForm" style="text-align: left;direction: ltr">
                {{ csrf_field() }}
                <span class="login100-form-title">
						 Login To Tutoring School
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 input-field validate" type="text" name="username" placeholder="{{ trans('main.username_email') }}"
                           autocomplete="new-password" valid-title="Fill out this form" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input type="password" name="password" class="input-field validate input100" valid-title="Fill out this form"
                           autocomplete="new-password" placeholder="{{ trans('main.password') }}" required>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ trans('main.sign_in') }}
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <div class="f_link">
                        <a href="" class="resetTag restag pull-right"
                           style="color: #242424 !important;">{{ trans('main.forget_password') }}</a>
                        <br>
                        <a href="/user/sociliate/google" class="btn btn-custom btn-check-form pull-left"><i
                                class="fa fa-google-plus icon-rs"></i><span>{{ trans('main.sign_in_google') }}</span></a>
                        <br>
                        <a href="{{ url('/user/auth/redirect/github') }}" class="btn btn-custom btn-check-form pull-left"><i
                                class="fa fa-github icon-rs"></i><span>Github</span></a>
                    </div>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
            <div class="login100-pic js-tilt">
                <img src="{{asset('/assets/default/logreg/images/img-02.png')}}" alt="IMG">
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
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/default/logreg/js/main.js')}}"></script>




<script>
    $(document).keypress(function (e) {
        if (e.which == 13) {
            $('#loginForm').submit();
        }
    });
</script>
<script>
    $('.btn-register-user').on('click', function (e) {
        if ($('#r-password').val() != $('#r-re-password').val()) {
            $.notify({
                message: 'Password & its confirmation are not the same.'
            }, {
                type: 'danger',
                allow_dismiss: false,
                z_index: '99999999',
                placement: {
                    from: "bottom",
                    align: "right"
                },
                position: 'fixed'
            });
            e.preventDefault();
        }
    })
</script>
<script>
    $('.regTag').click(function () {
        if ($('.regTag strong').text() == 'Register') {
            $('.regTag strong').text('Login');
            $('.regTag strong').css('position', 'static');
        } else {
            $('.regTag strong').text('Register');
            $('.regTag strong').css('position', 'relative');
            $('.regTag strong').css('top', '-8px');
        }
    })
</script>
{!! NoCaptcha::renderJs() !!}

</body>
</html>
