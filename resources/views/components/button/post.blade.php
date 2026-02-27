@props(['action', 'method' => "post", 'class'])
<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)
    <button type="submit" class="{{ $class }}">{{ $slot }}</button>
</form>