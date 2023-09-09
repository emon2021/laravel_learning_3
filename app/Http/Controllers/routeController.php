<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    function aboutPage(){
        return view('about');
    }
    function contactPage(){
        return view('contact');
    }
}
