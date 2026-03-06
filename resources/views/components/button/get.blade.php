@props(['href', 'color' => 'green'])
<a href="{{ $href }}" class="bg-{{ $color }}-300 hover:bg-{{ $color }}-200 
        border-2 border-{{ $color }}-500 
        text-{{ $color }}-500 hover:text-{{ $color }}-400 
        items-center rounded-full p-1">
    {{ $slot }}
</a>