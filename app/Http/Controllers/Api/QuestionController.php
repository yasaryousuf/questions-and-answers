<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Question;
use App\Tag;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')->with(['comments', 'tags', 'user'])->paginate('5');
        return response()->json($questions);
    }

}
