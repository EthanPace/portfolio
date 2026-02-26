@props(['src' => asset('images/placeholder.png'), 'alt' => 'a placeholder image', 'href' => '#'])
<a class="h-[14rem] w-[25rem] bg-gray-700 rounded-3xl overflow-hidden relative border border-black"
    href="{{ $href }}">
    <img src="{{ $src }}" alt="{{ $alt }}" class="object-cover">

    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 via-60% to-transparent"></div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 via-25% to-transparent 
                opacity-0 hover:opacity-100 transition-opacity duration-300"></div>

    <x-h.card>{{ $slot }}</x-h.card>
</a>