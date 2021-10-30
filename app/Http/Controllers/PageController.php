<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function about(){
        return view('web.default.view.pages.about');
    }

    public function contact(){
        return view('web.default.view.pages.contact');
    }
    public function privacyPolicy(){
        return view('web.default.view.pages.privacy');
    }
    public function termsCondition(){
        return view('web.default.view.pages.condition');
    }
    public function faq(){
        return view('web.default.view.pages.faq');
    }
    public function career(){
        return view('web.default.view.pages.career');
    }
}
