@if(!empty(session('Error')))

    @if(session('Error') == 'duplicate_user')
        <span>{{ trans('main.entered_username_exists') }}</span>
    @endif

    @if(session('Error') == 'duplicate_email')
        <span>{{ trans('main.entered_email_exists') }}</span>
    @endif

    @if(session('Error') == 'password_not_same')
        <span>{{ trans('main.pass_confirmation_same') }}</span>
    @endif

@endif



<div class="limiter">
    <div class="container-login100" style="background: url('/assets/default/logreg/images/login-page-background.jpg');background-size: cover; min-height: 750px;">
        <div class="wrap-login100">
            <form class="form" action="/registerUser" method="post" id="loginForm" style="text-align: left;direction: ltr">
                {{ csrf_field() }}
                <span class="login100-form-title">
						 Register To Tutoring School
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100 input-field validate" type="text" name="username"  placeholder="Username" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input type="password" name="password" class="input-field input100"
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
