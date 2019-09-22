<?php

namespace App\Http\Controllers;

use Auth;
use App\Question;
use App\Tag;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
    protected $validationRule = [
            'title'   => 'bail|required|max:255',
            'content' => 'required',
    ];

    public function index()
    {
        $questions = Question::paginate('5');
        return view('front.question.index', compact('questions'));
    }

    public function create()
    {
        return view('front.question.create');
    }

    public function store(Request $request)
    {
        $submitted_tags = [];
        if (!empty($request->tags)) {
            $submitted_tags = explode(",", $request->tags);
        }

        $request->validate($this->validationRule);

        $question = Question::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => Question::slug($request->title),
            'content' => Question::sanitizeHtml($request->content),
        ]);

        $question->tags()->detach([]);
        foreach ($submitted_tags as $submitted_tag ) {
            $submitted_tag = strtolower(trim($submitted_tag));
            $tag = Tag::where('title', $submitted_tag)->first();
            if (!$tag) {
                $tag = Tag::create(['title' => $submitted_tag]);
                $question->tags()->attach($tag->id);
            }
        }

        return back()->with('message', 'Question is saved successfully.');
    }

    public function show(Question $question)
    {
        return view('front.question.show', \compact('question'));
    }

    public function edit(Question $question)
    {
        return view('front.question.edit', \compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $submitted_tags = [];
        if (!empty($request->tags)) {
            $submitted_tags = explode(",", $request->tags);
        }

        $request->validate($this->validationRule);

        Question::where('id', $question->id)
          ->update([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => Question::slug($request->title),
            'content' => Question::sanitizeHtml($request->content),
        ]);

        $question->tags()->detach([]);
        foreach ($submitted_tags as $submitted_tag ) {
            $submitted_tag = strtolower(trim($submitted_tag));
            $tag = Tag::where('title', $submitted_tag)->first();
            if (!$tag) {
                $tag = Tag::create(['title' => $submitted_tag]);
                $question->tags()->attach($tag->id);
            }
        }

        return redirect('/')->with('message', 'Question is updated successfully.');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return back()->with('message', 'Question is deleted successfully.');
    }
}
