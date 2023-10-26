@extends('layouts.base')

@section('page.title', 'Blog')

@section('content')

    <section>
        <x-container>
            <h1>Blog</h1>
            
            <x-form class="mb-4 d-flex gap-4 " action="{{ route('blog') }}" method="GET">
                <x-input name="search" value="{{ request('search') ?? '' }}" placeholder="Search..." />
                {{-- <x-select name="category_id" selected="{{request('category_id')}}" :options="[null => __('All Categories'), 1 => __('First Cat'), 2 => __('Sec Cat')]" /> --}}
                <x-button>{{ __('Apply') }}</x-button>
            </x-form>

            @unless ($posts->isEmpty())
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="mb-4">
                                <x-post.card :post="$post" />
                            </div>
                        </div>
                    @endforeach
                </div>

                {{ $posts->links() }}
            @else
                <div>{{ __('Posts not find') }}</div>
            @endunless

        </x-container>
    </section>

@endsection
