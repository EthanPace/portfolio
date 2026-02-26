@props(['href'])
@php
    $active = request()->is(ltrim($href, '/'));
@endphp
<a href="{{ $href }}" class="flex items-center px-3 py-1 rounded-xl font-medium font-['Bungee'] transition-colors duration-100
    {{ 
        $active ? 'bg-gray-700 text-white hover:bg-gray-600' : 
        'text-gray-300 hover:bg-gray-700 hover:text-white' 
    }}">
    {{ $slot }}
</a>