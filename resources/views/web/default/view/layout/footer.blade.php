<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Don’t miss any updates of our new Courses & Articles.</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Contact</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Work With Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Term &amp; conditions</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Follow Us On</h3>
                        <div class="f_social_icon">
                            <a href="#" >
                                <i class="fab fa-facebook"></i>

                            </a>
                            <a href="#" >
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" >
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" >
                                <i class="fab fa-pinterest"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12 text-center">
                    <p class="mb-0 f_400">© The Tutoring School 2021 All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="container-fluid" id="footer">
    <div class="container">
        <div class="col-md-3 col-xs-12 tab-con login-container">
            <h4>{{ get_option('footer_col1_title') }}</h4>
            <p>{!! get_option('footer_col1_content') !!}</p>
        </div>
        <div class="col-md-3 col-xs-12 tab-con">
            <h4>{{ get_option('footer_col2_title') }}</h4>
            <p>{!! get_option('footer_col2_content') !!}</p>
        </div>
        <div class="col-md-3 col-xs-6 tab-con">
            <h4>{{ get_option('footer_col3_title') }}</h4>
            <p>{!! get_option('footer_col3_content') !!}</p>
        </div>
        <div class="col-md-3 col-xs-6 ab-con">
            <h4>{{ get_option('footer_col4_title') }}</h4>
            <p>{!! get_option('footer_col4_content') !!}</p>
        </div>
    </div>
</div>
<div class="container-fluid footer-blow">
    <div class="col-md-3 col-xs-12 text-center">
        <span class="social-text">{{ trans('main.social_footer') }}</span>
        <ul>
            @if(!empty($socials))
                @foreach($socials as $social)
                    <li>
                        <a href="{{ $social->link }}" target="_blank" title="{{ $social->title }}">
                            <img src="{{ $social->icon }}" alt="{{ $social->title }}"/>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
    <div class="col-md-9 col-xs-12">
        <span class="copyright">
            {{ trans('main.copyright') }}
        </span>
        <span class="copyright">
             {{ trans('main.copyright2') }}
        </span>
    </div>
</div>
<div class="modal fade" id="uploader-modal" role="dialog">
    <div class="modal-dialog modal-dialog-s">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ trans('main.file_manager') }}</h4>
            </div>
            <div class="modal-body">
                {{--<iframe class="modal-body-s" width="100%" height="400" src="/assets/default/filemanager/dialog.php?type=2&field_id=upload-id-fill&relative_url=1" frameborder="0"></iframe>--}}
                <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
            </div>
        </div>
    </div>
</div>
@if(get_option('site_popup',0) == '1')
    <div class="modal fade" id="site_popup">
        <div class="modal-dialog popup_modal">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="fa fa-close" data-dismiss="modal"></i>
                    <a href="{{ get_option('popup_url','javascript:void(0);') }}"><img src="{{ get_option('popup_image','') }}" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
@endif
@if(get_option('triangle-banner-top-image','')!='')
    <div class="fix-top-banner">
        <a href="{{ get_option('triangle-banner-top-url','') }}"><img src="{{ get_option('triangle-banner-top-image','') }}"></a>
    </div>
@endif
@if(get_option('triangle-banner-bottom-image','')!='')
    <div class="fix-bottom-banner">
        <a href="{{ get_option('triangle-banner-bottom-url','') }}"><img src="{{ get_option('triangle-banner-bottom-image','') }}"></a>
    </div>
@endif
@if(get_option('banner-html-box','')!='')
    <div class="fix-html-bottom">
        {!! get_option('banner-html-box','') !!}
    </div>
@endif

{{--menubar--}}
<script src="{{asset('assets/default/new_menu/js/script.js')}}" defer></script>
<script>
    $(document).ready(function(){
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function(){
            return false;
        });
        searchBox.mouseup(function(){
            return false;
        });
        $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
    });
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }
</script>
{{--menubar--}}


<!-- Scripts -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(), 'guest' => !auth()->check()]); ?>;
</script>

<script type="application/javascript" src="/assets/default/vendor/jquery-ui/js/jquery-1.10.2.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/justgage/raphael-2.1.4.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/justgage/justgage.js"></script>
<script type="application/javascript" src="/assets/default/vendor/simplepagination/jquery.simplePagination.js"></script>
<script type="application/javascript" src="/assets/default/vendor/onloader/js/jquery.oLoader.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/ios7-switch/ios7-switch.js"></script>
<script type="application/javascript" src="/assets/default/vendor/sticky/jquery.sticky.js"></script>
<script type="application/javascript" src="/assets/default/vendor/chartjs/Chart.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap-notify-master/bootstrap-notify.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/auto-numeric/autoNumeric.js"></script>
<script type="application/javascript" src="/assets/default/vendor/raty/jquery.raty.js"></script>
<script type="application/javascript" src="/assets/default/vendor/easyautocomplete/jquery.easy-autocomplete.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script type="application/javascript" src="/assets/default/vendor/owlcarousel/dist/owl.carousel.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/jquery-te/jquery-te-1.4.0.min.js"></script>
<script type="application/javascript">var sliderTimer = <?=get_option('main_page_slider_timer', 10000);?>;</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    var preloader = {!! get_option('site_preloader',0) !!};
</script>
<script type="application/javascript" src="/assets/default/javascripts/view-custom.js"></script>
@if(isset($user))
    <script>login({!! $user['id'] !!})</script>
@endif
@if(get_option('site_popup',0) == '1' && session('popup') == 0)
    <script>
        $(function () {
            $('#site_popup').modal();
        })
    </script>
    @php session(['popup'=>1]) @endphp
@endif
@yield('script')
@if(session('msg') != null)
    <script>
        $.notify({
            message: '{{ session('msg')}}'
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
    </script>
@endif
{!! get_option('main_js') !!}
</body>
</html>
