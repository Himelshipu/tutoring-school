@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
           integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}
    <!-- Header -->

    <div class="bg-light">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4">About us </h1>
                    <p class="lead text-muted mb-0">
                        The Tutoring School is here to make things easier and more convenient for students and
                        professionals around the world.
                        We exist to radically improve learning for the world’s large number of students.Discover the
                        fastest, most effective way to gain job-ready expertise for the careers of the future.

                    </p>

                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{asset('assets/default/images/about.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row align-items-center mb-5">

                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                    <img src="{{asset('assets/default/images/online-class.jpg')}}" alt=""  class="img-fluid mb-4 mb-lg-0">
                </div>

                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Take control of your education and start learning with Us!</h2>
                    <p class="font-italic text-muted mb-4">
                        We are The Tutoring School. The Tutoring School believes every individual is entitled to
                        knowledge, and we strive to make it easier for people to upgrade their personal knowledge-base
                        and skill levels, for advancing their careers or for growing their minds.

                        We realize that sifting through millions of online courses, certifications, and degrees being
                        offered by institutions globally is a daunting and challenging task.

                        Students often fail to find the right course that perfectly matches their requirements and must
                        make do with learning paths that simply do not reach their goals.

                    </p>
                </div>

            </div>
            <div class="row align-items-center">

                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">The perfected learning model</h2>
                    <p class="font-italic text-muted mb-4">
                        Our learning methodology developed over 10 years blends the flexibility of online learning with
                        the benefits of human instruction, making it ideal for the current state of digital work. We
                        continuously evolve our high-touch, hands-on system of projects, mentors, and quizzes so skills
                        are always pertinent.
                    </p>
                </div>

                <div class="col-lg-5 px-5 mx-auto">
                    <img src="{{asset('assets/default/images/Online-Education-PNG-Transparent-Image.png')}}"  alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <h2 class="display-4 font-weight-light">Our team</h2>
                    <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-md-3 mb-5  ">
                    <div class="bg-white rounded shadow py-5 px-4">
                        <img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Samuel Hardy</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5 ">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Tom Sunderland</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5 ">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">John Tarly</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
    </div>

    <!-- Carousel -->

    <div class="container-fluid">
        <div class="row">
            <div class="parts-slider"
                 style="background:url('{{ get_option('main_page_slide','/assets/default/images/view/sample/slider-sample.png') }}');
                     ">
                <div class="col-xs-12 col-md-4 col-md-offset-4 parts-slider-container">
                    <h2>Who we are</h2>
                    <span>{{ get_option('main_page_slide_text','') }}</span>

                </div>
                <i class="fa fa-angle-down down-flesh"></i>
            </div>
        </div>
    </div>

@endsection
