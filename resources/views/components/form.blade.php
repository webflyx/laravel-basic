@props(['method' => 'POST'])

<form {{ $attributes }} method="{{ $method }}">

    {{ $slot }}

    @if ($method != 'GET')
        @csrf
    @endif

</form>
