@props(['href', 'method' => "POST"])
<form action="{{ $href }}" method="POST">
    @csrf
    @method($method)
    <button type="submit" class="flex items-center px-3 py-1 rounded-xl font-medium font-['Bungee']
        bg-gray-900 hover:bg-gray-800 transition-colors duration-100 w-full">
        {{ $slot }}
    </button>
</form>