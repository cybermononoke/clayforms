@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-pink-400 rounded-md shadow-sm bg-transparent focus:border-pink-500 focus:outline-none focus:ring-0', 'style' => $disabled ? 'color: #F8C8DC; background-color: #1b1c1e;' : 'color: #F8C8DC; background-color: #1b1c1e;']) !!}>
