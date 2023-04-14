<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $age = 25;
        return view('front.index')->with('age',$age)->with('dmrcode','Vakif');
//        return view('front.index',['age'=>$age]);
//        return view('front.index',compact('age'));

    }

    public function about()
    {
        return redirect()->route('contact');
//        return Redirect::route('contact');
//        return redirect(route('contact'));
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function user(Request $request)
    {
        dd($request->all());
    }
}
