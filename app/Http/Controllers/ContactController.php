<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;

class ContactController extends Controller
{

    public function showForm()
    {
        return view('front.contact');
    }

    public function contact()
    {

    }


}
