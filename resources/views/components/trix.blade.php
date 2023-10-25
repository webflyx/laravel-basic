@props(['name' => ''])

<input id="{{ $name }}" type="hidden" name="{{ $name }}" value="{{ old($name) }}">
<trix-editor input='{{ $name }}'></trix-editor>


@push('plugins')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endpush