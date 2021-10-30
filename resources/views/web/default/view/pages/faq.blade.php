@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
           integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}



    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h1 class="display-4 text-center p-4">How Can We Help You? </h1>
                <p class=" text-muted mb-0 leading-loose">
                    Please find answers to several FAQs below. If you still need help, feel free to reach out to us at
                    info@tutoringschool.com or 415-814-3744 for assistance. We welcome your questions and feedback.
                    Selling Energy is here to help!
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5">WHY IS SALES TRAINING IMPORTANT?</h3>
                <p style="line-height: 30px">
                    TutoringSchool is a community of millions of learners. When you sign up for the Site, you agree to
                    the
                    following rules:

                </p>
                <ul style="line-height: 30px;">
                    <li><i class="fas fa-check mr-2"></i> You will accept all of the terms and conditions including the
                        cancellation policy listed in the Service when you agree to enroll in or access a class on
                        TutoringSchool.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You will follow all reasonable rules set by a teacher with
                        respect to a class, and you will not take any actions to interfere with the teacher or any other
                        students in the class.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You may access class content for your information and personal
                        use only.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>You will not copy any materials or techniques for purposes of
                        your own or others’ classes, or for interfering with any class or the teacher’s ongoing
                        relationship with any students participating in such class.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> TutoringSchool reserves the right to delete or suspend your
                        account if you violate any of our rules, or at any time and for any reason.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You agree that you will not engage in any behavior that
                        constitutes unauthorized or unsolicited advertising, junk or bulk email (also known as
                        “spamming”), chain letters, any other form of unauthorized solicitation, or any form of lottery
                        or gambling.
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('assets/default/images/Questions-amico.png')}}" alt="" class="img-fluid">
            </div>

        </div>
    </div>

@endsection
