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
//         $recentlyAnsweredQuestions = Question::get()->sortBy(function($question)
// {
//     return $question->comments->latest();
// });
        $recentlyAnsweredQuestions = \DB::table('questions')
            ->join('comments', 'comments.question_id', '=', 'questions.id')
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->select('questions.*', 'comments.*', 'users.name', 'users.avatar')
            ->orderBy('comments.created_at', 'desc')
            ->get();
//             $recentlyAnsweredQuestions = $sorted = $reservations->sortBy(function ($reservation) {
//     return $reservation->booking->plot_id;
// });

        $popularQuestions = Question::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->get();
        // return $recentlyAnsweredQuestions;
        $recentQuestions = Question::orderBy('created_at', 'desc')->take(10)->get();
        $noAnswers = Question::doesntHave('comments')->get();

        return view('front.index', [
                'recentQuestions'           => $recentQuestions, 
                'recentlyAnsweredQuestions' => $recentlyAnsweredQuestions,
                'noAnswers' => $noAnswers,
                'popularQuestions'          => $popularQuestions
            ]
        );
    }


    public function contact()
    {
        return view('front.others.contact');
    }
}
