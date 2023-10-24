<div class="card p-4">
    <h4>{{ $post->title }}</h4>
    <div class="small text-muted">{{ now()->format('d.m.Y') }}</div>
    <p>{{ $post->content }}</p>
    <a href="{{ route('user.posts.show', $post->id) }}">{{ __('Read More') }}</a>
</div>
