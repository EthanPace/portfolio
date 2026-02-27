<x-layout>
    <x-form action="{{ route('tasks.store') }}">
        <x-form.input field="title" title="Title" />
        <x-form.area field="description" title="Description" />
        <x-form.submit title="Save" />
    </x-form>
</x-layout>