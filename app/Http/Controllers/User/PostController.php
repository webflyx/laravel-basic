<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::query()->latest('published_at')->paginate(12, ['id', 'title', 'published_at']);

        return view('user.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {

        // $validated = validate($request->all(), [
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ]);

        // if(true){
        //     throw ValidationException::withMessages([
        //         'permission' => __('Not enough permissions')
        //     ]);
        // }

        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published' => ['nullable', 'boolean'],
            'published_at' => ['required', 'string', 'date'],
        ]);

        $post = Post::query()->create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published' => $validated['published'] ?? false,
            'published_at' => $validated['published_at'],
        ]);


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
