@extends('layouts.base')

@section('page.title', 'Create Post')

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>Create Post</h1>
                <x-link href="{{ route('user.posts') }}">{{ __('<- Back') }}</x-link>
            </div>

            <x-errors />

            <x-form method="POST" action="{{ route('user.posts.store') }}">
                <div class="mb-3">
                    <label for="title">{{ __('Post Title') }}</label>
                    <x-input type="title" name="title" />
                    <x-error name="title" />
                </div>
                <div class="mb-3">
                    <label for="content">{{ __('Post Cintent') }}</label>
                    <x-trix name="content" />
                    <x-error name="content" />
                </div>
                <x-button>{{ __('Create Post') }}</x-button>
            </x-form>

        </x-container>
    </section>

@endsection
