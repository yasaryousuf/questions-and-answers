<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $recentQuestions = Question::orderBy('created_at', 'desc')->take(10)->get();
        return view('front.index', \compact('recentQuestions'));
    }


    public function contact()
    {
        return view('front.others.contact');
    }
}
