<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    //
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('front.about');
    }
    public function contact(){
        return view('front.contact');
    }
    public function services(){
        return view('front.services');
    }

}
