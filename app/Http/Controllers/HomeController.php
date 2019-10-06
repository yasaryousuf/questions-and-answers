<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function latestComment()
    {
        return $this->hasOne('Comment')->latest();
    }

    public function index()
    {
        $recentlyAnsweredQuestions = Question::with('latestComment')->get();
        $recentQuestions = Question::orderBy('created_at', 'desc')->take(10)->get();
        return view('front.index', \compact('recentQuestions, recentlyAnsweredQuestions'));
    }


    public function contact()
    {
        return view('front.others.contact');
    }
}
