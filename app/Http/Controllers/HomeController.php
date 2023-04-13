<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.front');
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
