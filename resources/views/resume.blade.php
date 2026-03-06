<x-layout>
    <div class="flex flex-col gap-4 2xl:w-[60rem] 2xl:mx-auto mt-6">
        <x-h.title>Ethan Pace</x-h.title>
        <x-h.subtitle>Software Quality Assurance Engineer</x-h.subtitle>

        <x-h.section>Skills</x-h.section>

        <x-h.item>Laravel / PHP Development</x-h.item>
        <x-b.text>Building web applications with Laravel, RESTful APIs, and modern PHP practices.</x-b.text>
@auth
        <x-h.item>Playwright Test Automation</x-h.item>
        <x-b.text>Writing and maintaining automated test suites using Playwright.</x-b.text>
@endauth
        <x-h.item>Web Infrastructure</x-h.item>
        <x-b.text>Hands-on experience with web hosting, DNS, cPanel, networking, and server configuration.</x-b.text>

        <x-h.item>Version Control & CLI</x-h.item>
        <x-b.text>Git, GitHub, and command-line tooling for development and automation.</x-b.text>


        <x-h.section>Projects</x-h.section>

        <x-h.item>D&D Character Sheet Tool</x-h.item>
        <x-b.text>A web-based tool for creating and managing D&D character sheets.</x-b.text>

        <x-h.item>Personal Portfolio Website</x-h.item>
        <x-b.text>This site — built with Laravel, Livewire, and Tailwind CSS.</x-b.text>
@auth
        <x-h.item>Playwright Repo</x-h.item>
        <x-b.text>Internal test automation suite.</x-b.text>
@endauth


        <x-h.section>Experience</x-h.section>

        <x-h.item>Software Quality Assurance Engineer — Nexigen Digital</x-h.item>
        <x-b.text>Writing automated tests and maintaining quality across the software development lifecycle.</x-b.text>

        <x-h.item>Technical Support Analyst — Nexigen Digital · Aug 2023</x-h.item>
        <x-b.text>Supported customers across web hosting infrastructure, developing deep practical knowledge of the environments where software runs in production.</x-b.text>


        <x-h.section>Education</x-h.section>

        <x-h.item>Diploma of IT: Networking — TAFE QLD · 2021–2022</x-h.item>
        <x-b.text>Network protocols, routing, security, and infrastructure configuration.</x-b.text>

        <x-h.item>Diploma of IT: Advanced Programming — TAFE QLD · 2022–2023</x-h.item>
        <x-b.text>Software development in Python, Django, C#, .NET, and Java. Database management and API development.</x-b.text>
    </div>
</x-layout>