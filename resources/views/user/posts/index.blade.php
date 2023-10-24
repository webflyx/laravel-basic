@extends('layouts.base')

@section('page.title', 'My Posts')

@section('content')

    <section>
        <x-container>
            <div class="d-flex justify-content-between mb-4 align-items-center">
                <h1>My Posts</h1>
                <x-link href="{{ route('user.posts.create') }}">{{ __('Create new post') }}</x-link>
            </div>
            <x-form class="mb-4 d-flex gap-4 " action="{{ route('user.posts') }}" method="GET">
                <x-input name="search" value="{{ request('search') ?? '' }}" placeholder="Search..." />
                <x-select name="category_id" selected="{{request('category_id')}}" :options="[null => __('All Categories'), 1 => __('First Cat'), 2 => __('Sec Cat')]" />
                <x-button>{{ __('Apply') }}</x-button>
            </x-form>
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
