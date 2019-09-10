<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        $user = \Auth::user();
        return view('front.user.edit', \compact('user'));
    }

    public function dashboard()
    {
        return view('front.user.dashboard');
    }

    public function questions()
    {
        return view('front.user.questions');
    }
}
