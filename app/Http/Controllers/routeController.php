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

    //middleware function
    function country(){
        return view("country");
    }

    //__student store with csrf token__//
    function studentStore(Request $request){
        $name = $request->name;
        $email = $request->email;
        $pwd = $request->pwd;
        dd($request->url());
    }
}
