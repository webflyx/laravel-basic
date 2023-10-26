<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        //$posts = Post::query()->get(['id', 'title', 'published_at']);
        //$posts = Post::query()->limit(12)->get(['id', 'title', 'published_at']);
        //$posts = Post::query()->limit(12)->offset(12)->get();

        //$posts = Post::query()->orderBy('published_at', 'desc')->paginate(12, ['id', 'title', 'published_at']);

        //$posts = Post::query()->latest('published_at')->paginate(12, ['id', 'title', 'published_at']);

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50']
        ]);

        $query = Post::query();

        if ($search = $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
        }

        $posts = $query->latest('published_at')->paginate(12, ['id', 'title', 'published_at']);

        //dd( $posts );

        return view('blog.index', ['posts' => $posts]);
    }

    public function show(Request $request, Post $post)
    {

        // $post = Cache::remember(
        //     key: "posts.{$post}",
        //     ttl: now()->addHour(),
        //     callback: function () use ($post) {
        //         return Post::query()->findOrFail($post);
        //     }
        // );


        //$post = Post::query()->findOrFail($post);

        return view('blog.show', compact('post'));
    }

    public function like()
    {
    }
}
