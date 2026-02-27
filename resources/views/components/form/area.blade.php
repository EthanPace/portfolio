@props(['field', 'title', 'height' => "[16rem]"])
<div class="w-full h-{{ $height }}">
    <label for="{{ $field }}" class="sr-only">{{ $title }}</label>
    <textarea
        class="w-full h-full bg-gray-600 font-['Inter'] border border-gray-400 text-gray-500 focus:outline-gray-500 rounded-lg px-4 py-2 text-white text-start" 
        id="{{ $field }}" 
        name="{{ $field }}" 
        placeholder="{{ $title }}" 
    ></textarea>
</div>