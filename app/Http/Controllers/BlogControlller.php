<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogControlller extends Controller
{
    public function index()
    {
        return view('blog');
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->with('category')->firstOrfail();
        $postsCategory = Post::where('category_id',$post->category_id)->get();
        return view('show-post',compact('post','postsCategory'));
    }
}
