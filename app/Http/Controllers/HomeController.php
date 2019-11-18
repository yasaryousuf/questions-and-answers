<?php

namespace App\Http\Controllers;

use App\Question;
use App\Comment;

class HomeController extends Controller {
	public function __construct() {

	}

	public function latestComment() {
		return $this->hasOne('Comment')->latest();
	}

	public function index() {

		$recentlyAnsweredQuestionsIdCollection = \DB::table('questions')
			->join('comments', 'comments.question_id', '=', 'questions.id')
			->select('questions.id')
            ->orderBy('comments.created_at', 'desc')
            ->get();

            $recentlyAnsweredQuestionsIdArray = $recentlyAnsweredQuestionsIdCollection->unique()->take(10)->toArray();
            $ids = array_map(function($v) {return $v->id;}, $recentlyAnsweredQuestionsIdArray) ;
                                                        // echo '<pre>';
                                                        //     print_r($recentlyAnsweredQuestionsIdArray);
                                                        //     print_r($ids);
                                                        // echo '</pre>'; dd();
        $recentlyAnsweredQuestions = Question::findMany($ids);

		$popularQuestions = Question::withCount('comments')
			->orderBy('comments_count', 'desc')
			->get();

		$recentQuestions = Question::orderBy('created_at', 'desc')->take(10)->get();
		$noAnswers = Question::doesntHave('comments')->get();

		return view('front.index', [
			'recentQuestions' => $recentQuestions,
			'recentlyAnsweredQuestions' => $recentlyAnsweredQuestions,
			'noAnswers' => $noAnswers,
			'popularQuestions' => $popularQuestions,
		]
		);
	}

	public function contact() {
		return view('front.others.contact');
	}
}
