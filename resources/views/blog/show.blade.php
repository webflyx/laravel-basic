@extends('layouts.base')

@section('page.title', 'Single Blog')

@section('content')
    <section>
        <x-container>
            <h1>{{ $post->title }}</h1>
            <div>{{ $post->content }}</div>
        </x-container>
    </section>
@endsection
