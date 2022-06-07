<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // store new comment 
    public function store($id, Request $request)
    {
        $post_id = Post::find($id)->id;

        $user_id = Auth::user()->id;

        $validFields = $request->validate(['comment' => 'required']);
        unset($validFields['_token']);


        $validFields['user_id'] = $user_id;
        $validFields['post_id'] = $post_id;

        Comment::create($validFields);

        return back();
    }
}