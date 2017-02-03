<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', compact('posts', $posts));
    }
}
