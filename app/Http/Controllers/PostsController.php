<?php

namespace App\Http\Controllers;

use App\Post;
use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        $favoritePosts = Favorite::whereUserId(Auth::id())->get();

        return view('posts.index', compact('posts', 'favoritePosts'));
    }

    /**
     * Favorite a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function favoritePost(Post $post)
    {
        Auth::user()->favorites()->attach($post->id);

        return back();
    }

    /**
     * Unfavorite a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function unFavoritePost(Post $post)
    {
        Auth::user()->favorites()->detach($post->id);

        return back();
    }
}
