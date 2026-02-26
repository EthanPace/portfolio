<x-layout>
    <x-form action="/sessions" method="POST">
        <x-form.input field="username" title="username" />
        <x-form.input field="password" title="password" type="password" />
        <x-form.submit title="Login"/>
    </x-form>
</x-layout>