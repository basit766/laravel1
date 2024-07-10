<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.services');
    }
    public function work(){
        return view('frontend.work');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function contact(){
        return view('frontend.contact');
    }
        
}
