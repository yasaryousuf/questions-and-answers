<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Question;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store($question_id, Request $request)
    {
        $comment = new Comment();
        if ($request->parent_id) {
            $comment->parent_id = $request->parent_id;
        }
        $comment->content       = $request->content;
        $comment->question_id   = $question_id;
        $comment->user_id       = auth()->id();
        $comment->save();
        return back()->with('message', 'comment saved');
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
