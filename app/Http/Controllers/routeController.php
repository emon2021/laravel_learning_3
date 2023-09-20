<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
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

    //__working on view in laravel__//
    public function laravel()
    {
        return view('pages.laravel',['name' => 'Infinity']);
    }

    //__for validation using php laravel__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:255',
            'password' => 'required|min:8|max:100'
        ]);
        dd($request->all());
    }
}
