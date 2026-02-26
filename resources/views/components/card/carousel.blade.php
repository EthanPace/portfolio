<div class="flex flex-col gap-4 overflow-x-scroll scrollbar-hide p-4 bg-black/50 rounded-2xl w-full">
    <x-h.section margin="m-2">{{ $heading }}</x-h.section>
    <div class="flex gap-4">
        {{ $slot }}
    </div>
</div>