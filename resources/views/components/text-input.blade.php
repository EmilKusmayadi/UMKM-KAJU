@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'outline-none border-t-transparent border-s-transparent border-e-transparent border-b-black bg-transparent']) !!}>
