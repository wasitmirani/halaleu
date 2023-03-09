<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //

    public function index(Request $request){
        return view('frontend.pages.index');
    }

    public function halal(){
        return view('frontend.pages.halal');
    }
    public function about(Request $request){
        return view('frontend.pages.about');
    }

    public function services(Request $request){
        return view('frontend.pages.services');
    }
    public function contact(Request $request){
        return view('frontend.pages.contact');
    }
}
