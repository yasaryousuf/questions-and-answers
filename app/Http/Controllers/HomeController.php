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
        $recentlyAnsweredQuestions = Question::with(['comments' => function ($c) {
            $c->latest()->limit(5);
        }
        ])->get();
        $recentQuestions = Question::orderBy('created_at', 'desc')->take(10)->get();
        return view('front.index', ['recentQuestions' => $recentQuestions, 'recentlyAnsweredQuestions' => $recentlyAnsweredQuestions]);
    }


    public function contact()
    {
        return view('front.others.contact');
    }
}
