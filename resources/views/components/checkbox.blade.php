<input {{ $attributes->class([
    'form-check-input'
])->merge([
    'type' => 'checkbox',
    'checked' => old($attributes->get('name')),
    'value' => '1'
]) }} >
