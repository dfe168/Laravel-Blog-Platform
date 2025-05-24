@props(['active'])

@php
$classes = ($active ?? false)
? 'flex space-x-3 items-center hover:text-cyan-300 text-white duration-200 border-b-2 border-indigo-400 '
: 'flex space-x-3 items-center hover:text-cyan-300 text-white duration-200';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>