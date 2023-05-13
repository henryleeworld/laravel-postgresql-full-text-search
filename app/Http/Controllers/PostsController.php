<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->has('phrases')) {
            $posts = Post::search($request->phrases)->usingPhraseQuery()->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }
        return view('posts', compact('posts'));
    }
}
