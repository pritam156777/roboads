<?php

namespace App\Http\Controllers;

use App\Mail\BuyRobotMail;
use App\Mail\RentInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }

    public function products(){
        return view('pages.products');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }
    public function solutions(){
        return view('pages.solutions');
    }

    public function gallary(){
        return view('pages.gallary');
    }
    public function robotInquiry(Request $request){

        $robot = [];
        $robot['name'] = $request->name;
        $robot['country'] = $request->country;
        $robot['mobile'] = $request->mobile;

        $robot['email'] = $request->email;
        if ($request->company !=null){
            $robot['company'] = $request->company;
        }
        if ($request->event_name!=null){
            $robot['event_name'] = $request->event_name;
        }
        if ($request->start_date !=null){
            $robot['start_date'] = $request->start_date;
        }
        if ($request->end_date !=null){
            $robot['end_date'] = $request->end_date;
        }
        $robot['message'] = $request->message;

        Mail::to('pritam156777@gmail.com')->cc('pritam@roboads.com')->send(new RentInquiry($robot));
        return redirect()->back()->with('success','Mail sent ');
    }
    public function buyRobot(Request $request){
        $robot = [];
        $robot['name'] = $request->name;
        $robot['country'] = $request->country;
        $robot['mobile'] = $request->mobile;

        $robot['email'] = $request->email;
        if ($request->company !=null){
            $robot['company'] = $request->company;
        }

        $robot['message'] = $request->message;

        Mail::to('info@roboads.com')->cc('pritam@roboads.com')->send(new BuyRobotMail($robot));
        return redirect()->back()->with('success','Mail sent ');
    }
}
