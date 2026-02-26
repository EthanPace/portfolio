@props(['field', 'title', 'type' => "text"])
<div>
    <label for="{{ $field }}" class="sr-only">{{ $title }}</label>
    <input 
        type="{{ $type }}"
        class="w-full h-full bg-gray-600 font-['Bungee'] border border-gray-400 text-gray-500 focus:outline-gray-500 rounded-lg px-4 py-2 text-white text-start" 
        id="{{ $field }}" 
        name="{{ $field }}" 
        placeholder="{{ $title }}" 
    >
</div>