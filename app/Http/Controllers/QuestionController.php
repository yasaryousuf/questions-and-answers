<?php

namespace App\Http\Controllers;

use Auth;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
    protected $validationRule = [
            'title'   => 'bail|required|max:255',
            'content' => 'required',
    ];

    public function index()
    {
        $questions = Question::all();
        return view('front.question.index', compact('questions'));
    }

    public function create()
    {
        return view('front.question.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->validationRule);

        $question = Question::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return back()->with('message', 'Question is saved successfully.');
    }

    public function show(Question $question)
    {
        //
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }
}
