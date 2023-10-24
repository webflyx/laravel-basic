<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet consectetur.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, recusandae?'
        ];

        $posts = array_fill(0, 10, $post);
        

        return view('user.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {

        alert(__('Your post success posted!'));

        return redirect()->route('user.posts.show', 123);
    }

    public function show(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet consectetur.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, recusandae?'
        ];

        return view('user.posts.show', ['post' => $post]);
    }

    public function edit(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet consectetur.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, recusandae?'
        ];
        
        return view('user.posts.edit', ['post' => $post]);
    }

    public function update(Request $request, string $post)
    {
        alert(__('Your post not updated!'), 'danger');
        
        return redirect()->back();
    }

    public function delete(string $post)
    {
        //
    }

    public function like(string $id)
    {
        //
    }

}
