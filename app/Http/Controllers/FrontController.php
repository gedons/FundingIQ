<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function plans(){
        return view('front.plans');
    }

    public function faq(){
        return view('front.faq');
    }

    public function legal(){
        return view('front.legal');
    }

    public function contact(){
        return view('front.contact');
    }


}
