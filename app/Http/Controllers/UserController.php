<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        dd($request->all());
    }

    public function updateAll(Request $request)
    {
        dd($request->all());
    }

    public function delete(Request $request)
    {
        dd($request->all());
    }

    public function show(Request $request)
    {
        dd($request->all());
    }

    public function showName(Request $request, $fullName)
    {
        $fullName = $request->input('fullName');
        dd($fullName);
    }
}
