@props(['options' => [], 'selected' => null])

<select {{ $attributes->class([
    'form-control'
]) }}>
    @foreach ($options as $value => $name)
        <option {{ $selected == $value ? 'selected' : '' }} value="{{ $value }}">{{ $name }}</option>
    @endforeach
</select>