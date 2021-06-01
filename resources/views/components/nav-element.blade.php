@props(['active','href'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-900 text-white px-3 py-2 rounded-md ml-3'
            :'text-gray-200 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md ml-3' ;

@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{$href}}">
        {{ $slot }}
    </a>
</li>