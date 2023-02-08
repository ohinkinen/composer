<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $comment = new Comment;

        $comment->product_id = $request->product_id;
        $comment->comment = $request->comment;

        $comment->save();

        return back();
    }
}
