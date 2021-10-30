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
                <h1 class="display-4 text-center p-4">Privacy Policy </h1>
                <p class=" text-muted mb-0 leading-loose">
                    Welcome to The Tutoring School, a community marketplace to learn anything from anyone. The Tutoring
                    School website
                    and service including (without limitation) www.tutoringschool.com (the “Site”), other interactive
                    properties through which the service is delivered
                    (collectively, the “Services”) are owned, operated and distributed by The Tutoring School.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('assets/default/images/privacy.jpg')}}" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6">
                <h3 class="mt-5 mb-5"> What is a Privacy Policy? </h3>
                <p style="line-height: 30px">
                    A Privacy Policy is a statement or a legal document that states how a company or website collects,
                    handles and processes data of its customers and visitors. It explicitly describes whether that
                    information is kept confidential, or is shared with or sold to third parties.

                    Personal information about an individual may include the following:
                </p>
                <ul style="line-height: 30px;list-style: disc">
                    <li><i class="fas fa-check mr-2"></i> Name</li>
                    <li><i class="fas fa-check mr-2"></i> Address</li>
                    <li><i class="fas fa-check mr-2"></i> Email</li>
                    <li><i class="fas fa-check mr-2"></i> Phone number</li>
                    <li><i class="fas fa-check mr-2"></i> Age</li>
                    <li><i class="fas fa-check mr-2"></i> Sex</li>
                </ul>

            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4"> General </h3>
                <p class="text-justify leading-loose">
                    Your privacy is very important to us. Accordingly, we have developed this Privacy Policy in order
                    for you to understand how we collect, use,
                    communicate and disclose and make use of Personal Data (as defined below). The following outlines
                    our privacy policy.
                </p>

                <h3 class="mt-4 mb-4">
                    Personal Data
                </h3>
                <p class="text-justify leading-loose">

                    When your register with us and become a TutoringSchool Member, when you choose to teach or attend a
                    class, we will ask you for Personal Data. “Personal Data” refers to information about you that can
                    be used to contact or individually identify you. This includes, but is not limited to, your name,
                    email address, but does not include your credit card number or billing information. Transactions on
                    TutoringSchool involving your billing and payment information are processed by PayPal and Stripe and are
                    subject to their privacy policies. We do not store any of the credit card or banking information
                    that you provide to these payment processors.

                    In order to send you email from TutoringSchool, we need your email address. To provide you with
                    additional services, we may also request your name, general location, and telephone number. We may
                    give some or all of this information to the teachers for classes that you sign up for so that they
                    can coordinate their classes. We will not give your name, email, or other Personal Data to
                    unaffiliated third parties except with your consent or as otherwise set forth in this privacy
                    policy. Though we employ industry standard measures to preserve user privacy, we may need to
                    disclose Personal Data when required by law or when we have a good faith belief that such action is
                    necessary to comply with a current judicial proceeding, a court order or legal process that we
                    receive or to protect our interests or the safety of others. In addition, we may provide Personal
                    Data to employees, consultants or other business or persons for the purpose of processing such
                    information on our behalf. In such circumstances, we require that these parties agree to protect the
                    confidentiality of such information and to comply with the terms of this Privacy Policy. We may use
                    your Personal Data to operate, improve, understand and personalize our Services.
                </p>

                <h3 class="mt-4 mb-4">
                    Information About Cookies
                </h3>
                <p class="text-justify leading-loose">
                    We use your IP address to help diagnose problems with our server, to administer our Services, and to
                    analyze traffic patterns on the Services. The Services also use cookies and similar technologies
                    such as pixel tags, web beacons, clear GIFs, and JavaScript (collectively, “Cookies”) to enable our
                    servers to recognize your web browser and tell us how and when you visit and use our Site and
                    Services, to analyze trends, learn about our user base and operate and improve our Services. For
                    example, we use Cookies to deliver content specific to your interests, to save your password so you
                    don't have to re-enter it each time you visit, and to track whether emails we send you have been
                    viewed. Cookies are small files – usually consisting of letters and numbers – placed on your
                    computer, tablet, phone, or similar device when you use that device to visit our Site. We sometimes
                    combine information collected through Cookies that is not Personal Data with Personal Data that we
                    have about you, for example, to tell us who you are or whether you have an account with us. We may
                    also supplement the information we collect from you with information received from third parties.

                    Cookies can either be “session Cookies” or “persistent Cookies”. Session Cookies are temporary
                    Cookies that are stored on your device while you are visiting our Site or using our Services,
                    whereas “persistent Cookies” are stored on your device for a period of time after you leave our Site
                    or Services. The length of time a persistent Cookie stays on your device varies from Cookie to
                    Cookie. We use persistent Cookies to store your preferences so that they are available for the next
                    visit, and to keep a more accurate account of how often you visit our Services, how often you
                    return, how your use of the Services may vary over time. We also use persistent Cookies to measure
                    the effectiveness of advertising efforts. Through these Cookies, we may collect information about
                    your online activity after you leave our Services. Your browser may offer you a “Do Not Track” or
                    “DNT” option, which allows you to signal to operators of websites, and web applications, and
                    services that you do not wish such operators to track certain of your online activities over time
                    and across different websites. Because we collect browsing and persistent identifier data, the
                    Services do not support Do Not Track requests at this time, which means that we may collect
                    information about your online activity both while you are using the Services and after you leave our
                    properties.
                </p>

                <h3 class="mt-4 mb-4">
                    Third Party Advertising
                </h3>
                <p class="text-justify leading-loos">

                    We use third party providers, including Facebook and Google AdWords, to advertise the Services
                    across the internet. These providers may use cookies, web beacons, and other storage technologies to
                    collect or receive information from the Services and elsewhere on the internet and use that
                    information to provide measurement services and display targeted ads to you. We only work with
                    providers who undertake not to provide advertising to persons under 18 years of age.

                    A cookie is used to indicate to other websites that you visited a particular page, and allows us to
                    tailor our marketing to better suit your needs and only display ads that are relevant to you. This
                    cookie does not in any way give access to your computer or mobile device.

                    If you do not wish to see ads from us, you can opt out in several ways:

                    Opt out of Google’s use of cookies by visiting Google’s Ads Settings.
                    Opt out of a third-party vendor’s use of cookies by visiting the Network Advertising Initiative
                    opt-out page.
                </p>
            </div>
        </div>
    </div>



@endsection
