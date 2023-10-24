@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>{{ $post->title }}</h1>
                <x-link href="{{ route('user.posts.edit', $post->id) }}" >{{ __('Edit post') }}</x-link>
            </div>
            <div class="small text-muted">{{ now()->format('d.m.Y') }}</div>
            <p>{{ $post->content }}</p>
        </x-container>
    </section>

@endsection
