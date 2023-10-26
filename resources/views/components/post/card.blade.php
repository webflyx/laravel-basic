<div class="card p-4">
    <h4>{{ $post->title }}</h4>
    <div class="small text-muted mb-2">{{ $post->published_at->diffForHumans() }}</div>
    <a href="{{ route('user.posts.show', $post->id) }}">{{ __('Read More') }}</a>
    {{$post->id}}
</div>
