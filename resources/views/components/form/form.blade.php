@props(['action', 'method' => 'POST', 'width' => 'w-[20rem] sm:w-[30rem]', 'center' => true, 'margin' => 'mt-[10rem]'])
<form class="flex flex-col gap-4 {{ $width }} {{ $center ? 'mx-auto' : '' }} {{ $margin }}" action="{{ $action }}" method="{{ $method }}">
    @csrf
    {{ $slot }}
</form>