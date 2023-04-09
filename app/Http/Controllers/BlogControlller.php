<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogControlller extends Controller
{
    public function index()
    {
        return view('blog');
    }
}
