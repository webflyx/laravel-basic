<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [1,2,3,4];

        return view('blog.index', compact('posts'));
    }
    
    public function show()
    {
        return view('blog.show');
    }

    public function like()
    {

    }
}
