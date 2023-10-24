@extends('layouts.base')

@section('page.title', 'My Posts')

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>My Posts</h1>
                <x-link href="{{ route('user.posts.create') }}" >{{ __('Create new post') }}</x-link>
            </div>
            @if (!empty($posts))
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="mb-4">
                                <x-post.card :post="$post" />
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div>{{ __('Posts not find') }}</div>
            @endif

        </x-container>
    </section>

@endsection
