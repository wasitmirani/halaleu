<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

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

    public function contactStore(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required|min:10',
        ]);
        $email ="wasitmirani32@gmail.com";
        $ip = request()->ip();
        if($ip="127.0.0.1"){
            $ip = "2400:adc1:47d:5201:e839:6b69:a318:39ec";
        }

        $geo = unserialize(file_get_contents("http://ip-api.com/php/" . $ip));
        $body = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'business'=>$request->business,
            'position'=>$request->position,
            'company'=>$request->company,
            'site'=>$request->site,
            'fax'=>$request->fax,
            'message'=>$request->message,
            'footprints'=>(object)[
                'country' => $geo['country'] ?? null,
                'ip'=>$ip,
                'status' => $geo['status'] ?? null,
                'countryCode' => $geo['countryCode'] ?? null,
                'city' => $geo['city'] ??  null,
                'zip' => $geo['zip'] ?? null,
                'lat' => $geo['lat'] ?? null,
                'log' => $geo['lon'] ?? null,
                'timezone' => $geo['timezone'] ?? null,
                'isp' => $geo['isp'] ?? null,
                'org' => $geo['org'] ?? null,
                'query' => request()->ip(),
                'region'=>$geo['region'],
                'as' => $geo['as'] ?? null,
            ],
        ];



        Mail::to($email)->send(new InquiryMail($body));

        return back()->with('message','message has been sended successfully');
    }
}
