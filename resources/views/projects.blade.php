<x-layout>
    <x-card.carousel>
        <x-slot:heading>LARAVEL</x-slot:heading>

        <x-card.image :src="asset('images/sheets.png')"
            alt="Image of a web-based D&D Character Sheet"
            href="https://sheets.epace.au">
            Sheets
        </x-card.image>

        <x-card.image :src="asset('images/placeholder.png')"
            alt="Image of a personal portfolio website"
            href="https://epace.au">
            Portfolio
        </x-card.image>

    </x-card.carousel>

    @auth
    <x-card.carousel>
        <x-slot:heading>TYPESCRIPT</x-slot:heading>

        <x-card.image :src="asset('images/placeholder.png')"
            alt="Image of a GitHub repository for Playwright test scripts"
            href="https://github.com/epace/playwright-scripts">
            Playwright Scripts
        </x-card.image>
    </x-card.carousel>
    @endauth
</x-layout>