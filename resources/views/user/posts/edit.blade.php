@extends('layouts.base')

@section('page.title', 'Edit Post')

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>Edit Post</h1>
                <x-link href="{{ route('user.posts') }}">{{ __('<- Back') }}</x-link>
            </div>

            <x-form method="POST" action="{{ route('user.posts.update', $post->id) }}">
                @method('PUT')
                <div class="mb-3">
                    <label for="title">{{ __('Post Title') }}</label>
                    <x-input type="title" name="title" value="{{ $post->title ?? '' }}" />
                </div>
                <div class="mb-3">
                    <label for="content">{{ __('Post Cintent') }}</label>
                    <x-trix name="content" value="{{ $post->content ?? '' }}" />
                </div>
                <x-button>{{ __('Update Post') }}</x-button>
            </x-form>

        </x-container>
    </section>

@endsection
