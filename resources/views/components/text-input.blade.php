@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 rounded-md shadow-sm bg-transparent', 'style' => $disabled ? 'color: #F8C8DC; background-color: #1b1c1e;' : 'color: #F8C8DC; background-color: #1b1c1e;']) !!}>
