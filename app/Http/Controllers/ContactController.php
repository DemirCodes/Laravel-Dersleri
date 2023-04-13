<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showForm()
    {
        return view('front.');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
