@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-pink']) }}>
    {{ $value ?? $slot }}
</label>
