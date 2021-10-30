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
                <h1 class="display-4 text-center p-4">Terms of Service </h1>
                <p class=" text-muted mb-0 leading-loose">
                    Welcome to The Tutoring School, a community marketplace to learn anything from anyone. The Tutoring
                    School website
                    and service including (without limitation) www.tutoringschool.com (the “Site”), other interactive
                    properties through which the service is delivered
                    (collectively, the “Services”) are owned, operated and distributed by The Tutoring School. <br>

                    We may, at our sole discretion, modify these Terms of Service at any time. By accessing the Service
                    at any time after such modifications, you are agreeing to such modifications.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5">Specific Rules for Students</h3>
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
                <img src="{{asset('assets/default/images/terms.jpg')}}" alt="" class="img-fluid">
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6">
                <h3 class="mt-5 mb-5"> Rules for All Users</h3>
                <p style="line-height: 30px">
                    TutoringSchool is a community of millions of learners. When you sign up for the Site, you agree to
                    the
                    following rules:

                </p>
                <ul style="line-height: 30px;">
                    <li><i class="fas fa-check mr-2"></i> You will use the Service only for lawful purposes and agree to
                        not use the Service in any way that will infringe upon the use or rights of any other user.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> Your use of the Service is subject to all applicable laws and
                        regulations, and you are solely responsible for the substance of your communications through the
                        Service.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You will not upload any copyrighted, trademarked, or
                        proprietary materials on the Service without the expressed permission of the owner. You will not
                        post any content that infringes on any patent, trademark, trade secret, copyright, right of
                        publicity, or other intellectual property or proprietary right of any party.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>You assume full responsibility for the content of the Service
                        offered.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You understand that classes posted are publicly available to
                        be viewed and accessed by any student.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You agree that you will not engage in any behavior that
                        constitutes unauthorized or unsolicited advertising, junk or bulk email (also known as
                        “spamming”), chain letters, any other form of unauthorized solicitation, or any form of lottery
                        or gambling.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You will not share software viruses or any other computer
                        code, files, or programs that are designed or intended to disrupt, damage, or limit the
                        functioning of any software, hardware, or telecommunications equipment or to damage or obtain
                        unauthorized access to any data or other information of any third party.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You will not impersonate any person or entity, including any
                        of our employees or representatives.
                    </li>
                </ul>

            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5"> Specific Rules for Teachers</h3>
                <p style="line-height: 30px">
                    TutoringSchool is a community of millions of learners. When you sign up for the Site, you agree to
                    the
                    following rules:

                </p>
                <ul style="line-height: 30px;list-style: disc">
                    <li><i class="fas fa-check mr-2"></i> You will honor any enrollments through TutoringSchool.com at
                        the
                        price and time listed in the Service, and not to refuse enrollments or participation by any
                        student for any discriminatory or other illegal reason.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>You grant us the right to place advertisements on your content
                        at our sole discretion.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> Any content you submit to the Service will not contain third
                        party copyrighted material, or material that is subject to other third party proprietary rights,
                        unless you have permission from the rightful owner of the material.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>You represent and warrant to TutoringSchool that you are
                        qualified
                        to teach the classes that you list with the Service and that you will at all times conduct
                        yourself in a professional manner and in compliance with all applicable laws.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You understand that, if you teach a class, your students will
                        have the ability to post a review of this class. We cannot control the contents of any such
                        review and will not be held responsible for any information or opinions that a user may include
                        in any such review.
                    </li>
                    <li><i class="fas fa-check mr-2"></i> You may choose to remove content from your class and will
                        continue to own such content, but we will continue to have the right to use that content and to
                        provide it to students who have paid for or enrolled in your class.
                    </li>

                    <li><i class="fas fa-check mr-2"></i>
                        You grant us full ownership of any video content that we have filmed for you. It is at our sole
                        discretion to remove, add, or edit that video content.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>
                        You agree that you will not submit content to TutoringSchool that violates the TutoringSchool
                        Community
                        and Class Guidelines, which may be occasionally updated.
                    </li>
                    <li><i class="fas fa-check mr-2"></i>
                        TutoringSchool reserves the right to, but is under no obligation, to delete the listing of any
                        class
                        at any time and for any reason.
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4"> Description of Service </h3>
                <p class="text-justify leading-loose">
                    The TutoringSchool Service allows students to find classes that they are interested in taking, and
                    allows teachers to find students interested in taking their classes.

                    We reserve the right to refuse to provide the Service to any person for any reason and/or to
                    discontinue the Service in whole or in part at any time, with or without prior notice.
                </p>

                <h3 class="mt-4 mb-4">
                    Copyright, Licenses and User Submissions
                </h3>
                <p class="text-justify leading-loose">

                    The entire contents of the Service are protected by international copyright and trademark laws and
                    other proprietary rights. The owners of the copyrights and trademarks are TutoringSchool, its
                    affiliates
                    and/or other third party licensors. YOU MAY NOT MODIFY, COPY, REPRODUCE, REPUBLISH, UPLOAD, POST,
                    TRANSMIT, OR DISTRIBUTE, IN ANY MANNER, THE MATERIAL ON THE SERVICE, INCLUDING TEXT, GRAPHICS, CODE
                    AND/OR SOFTWARE. You may print and download portions of material from the different areas of the
                    Service solely for your own non-commercial use provided that you agree not to change or delete any
                    copyright or proprietary notices from the materials, and not to share any material that you paid for
                    with anyone else who has not also purchased a license for that material.

                    You may not use any robots, spiders, or similar data mining, data gathering or extraction tools or
                    manual processes to collect, gather or copy any content or data on or related to the Service in a
                    manner not authorized by TutoringSchool in writing. You may not engage in practices of “screen
                    scraping,” “database scraping” or any other practice or activity the purpose of which is to obtain
                    lists of users, portions of a database, or other lists or information from the Service, in any
                    manner and any quantities not authorized by TutoringSchool in writing. You may not frame or utilize
                    framing techniques to enclose any trademark, logo or other proprietary information (including
                    images, text, page layout or form) of TutoringSchool or its affiliates without express written
                    consent.
                    You may not use meta tags or any other “hidden text” utilizing the TutoringSchool name or trademarks
                    without the express written consent of TutoringSchool.

                    Content submitted by users for inclusion on the Service (including, without limitation, any
                    information submitted on message boards, forums or other public areas of the Service) is sometimes
                    referred to in these Terms of Service as “User Submissions.” Whether or not any User Submission is
                    published, it will be subject to these Terms of Service. TutoringSchool does not guarantee any
                    confidentiality with respect to a User Submission, regardless of whether or not it is published. You
                    are solely responsible for your own User Submissions and the consequences of posting or publishing
                    them. You represent and warrant that you own or have the necessary licenses, rights, consents and
                    permissions to your User Submissions (and all content included therein), including the right to
                    authorize TutoringSchool to use the User Submissions in the manner contemplated by the Service and
                    these
                    Terms of Service.

                    You hereby grant to TutoringSchool a non-exclusive, royalty-free, worldwide, perpetual license, with
                    the
                    right to sub-license, to reproduce, distribute, transmit, create derivative works of, publicly
                    display and publicly perform any User Submissions or any other materials or information (including,
                    without limitation, ideas for new or improved products or services) you communicate to
                    TutoringSchool by
                    all means and in any media now known or hereafter developed. You also grant to TutoringSchool the
                    right
                    to use your name in connection with the submitted materials and other information as well as in
                    connection with all advertising, marketing and promotional material related thereto. You agree that
                    you shall have no recourse against TutoringSchool for any alleged or actual infringement or
                    misappropriation of any proprietary right in your communications to TutoringSchool.

                    We neither endorse nor assume any liability for the contents of any User Submission. We generally do
                    not pre-screen, monitor, or edit User Submissions. However, we and our agents have the right at
                    their sole discretion to remove any User Submission or other content that, in our judgment, does not
                    comply with these Terms of Service and any other rules of user conduct for the Service, or is
                    otherwise harmful, objectionable, or inaccurate. We are not responsible for any failure or delay in
                    removing any such User Submission or other content. You hereby consent to such removal and waive any
                    claim against us arising out of such removal of any User Submission, whether it is your own or
                    another user’s. See “Copyrights, Licenses and User Submissions” above for a description of the
                    procedures to be followed in the event that any party believes that a User Submission infringes on
                    any patent, trademark, trade secret, copyright, right of publicity, or other proprietary right of
                    any party.
                </p>

                <h3 class="mt-4 mb-4">
                    If You See Something That Infringes Your Copyright
                </h3>
                <p class="text-justify leading-loose">
                    In accordance with the Digital Millennium Copyright Act (“DMCA”), we’ve adopted the following policy
                    toward copyright infringement. We reserve the right to (1) block access to or remove material that
                    we believe in good faith to be copyrighted material that has been illegally copied and distributed
                    by any of our advertisers, affiliates, content providers, members or users and (2) remove and
                    discontinue service to repeat offenders.

                    1. Procedure for Reporting Copyright Infringements. If you believe that material or content residing
                    on
                    or accessible through the Service infringes your copyright (or the copyright of someone whom you are
                    authorized to act on behalf of), please send a notice of copyright infringement containing the
                    following information to TutoringSchool’s Designated Agent to Receive Notification of Claimed
                    Infringement (our “Designated Agent,” whose contact details are listed below):
                </p>
                <ul class="leading-loose">
                   <li><i class="fas fa-check mr-2"></i>
                        A physical or electronic signature of a person authorized to act on behalf of the owner of the
                        copyright that has been allegedly infringed;
                    </li>
                    <li><i class="fas fa-check mr-2"></i>Identification of works or materials being infringed;</li>
                    <li><i class="fas fa-check mr-2"></i> Identification of the material that is claimed to be infringing including information regarding
                        the
                        location of the infringing materials that the copyright owner seeks to have removed, with
                        sufficient
                        detail so that TutoringSchool is capable of finding and verifying its existence;
                    </li>
                   <li><i class="fas fa-check mr-2"></i> Contact information about the notifier including address, telephone number and, if available,
                        email
                        address;
                    </li>
                    <li><i class="fas fa-check mr-2"></i>
                        A statement that the notifier has a good faith belief that the material identified in (1)(c) is
                        not
                        authorized by the copyright owner, its agent, or the law;
                    </li>
                    <li><i class="fas fa-check mr-2"></i>
                        A statement made under penalty of perjury that the information provided is accurate and the
                        notifying party is authorized to make the complaint on behalf of the copyright owner.
                    </li>
                </ul>

                2. Once Proper Bona Fide Infringement Notification is Received by the Designated Agent. Upon receipt of
                a proper notice of copyright infringement, we reserve the right to:
                <ul class="leading-loose">
                    <li><i class="fas fa-check mr-2"></i> remove or disable access to the infringing material;</li>
                    <li><i class="fas fa-check mr-2"></i>notify the content provider who is accused of infringement that we have removed or disabled
                        access
                        to the applicable material;
                    </li>
                    <li><i class="fas fa-check mr-2"></i>terminate such content provider's access to the Service if he or she is a repeat offender.</li>
                </ul>




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
