<div style="scrollbar-width: none;" class="flex flex-col gap-4 overflow-x-scroll p-4 bg-black/50 rounded-2xl w-full">
    <x-h.section margin="m-2">{{ $heading }}</x-h.section>
    <div class="flex flex-col sm:flex-row gap-4">
        {{ $slot }}
    </div>
</div>