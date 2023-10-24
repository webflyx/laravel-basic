@extends('layouts.base')

@section('page.title', 'Blog')

@section('content')

    <section>
        <x-container>
            <h1>Blog</h1>
            @if (!empty($posts))
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="mb-4">
                                <x-card :post="$post">
                                    {{ $post }}
                                </x-card>
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
