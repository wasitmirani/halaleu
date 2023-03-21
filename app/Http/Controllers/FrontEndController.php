<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontEndController extends Controller
{
    //

    public function index(Request $request){
        return view('frontend.pages.index');
    }

    public function halalExplained(){
        return view('frontend.pages.halalExplained');
    }

    public function halalProduction(){
        return view('frontend.pages.halalProduction');
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

    public function changeLang(Request $request){
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }

    public function contactsend(Request $request){
    }
}
