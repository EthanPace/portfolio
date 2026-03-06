<nav class="flex flex-col justify-between bg-gray-900 h-screen sm:w-[16rem] border-r border-gray-700 p-2 sm:p-6 text-white">
    <div class="flex flex-col gap-2 mb-6">
        {{-- <x-nav.link href="/home">
            <x-heroicon-o-home class="w-5 h-5 mr-2"/>
            Home
        </x-nav.link> --}}

        <x-nav.link href="/projects">
            <x-heroicon-o-briefcase class="w-5 h-5 sm:mr-2"/>
            <h3 class="hidden sm:flex">Projects</h3>
        </x-nav.link>

        <x-nav.link href="/resume">
            <x-heroicon-o-document-text class="w-5 h-5 sm:mr-2"/>
            <h3 class="hidden sm:flex">Resume</h3>
        </x-nav.link>

@auth 
        <x-nav.link href="/tasks">
            <x-heroicon-o-pencil-square class="w-5 h-5 sm:mr-2"/>
            <h3 class="hidden sm:flex">Tasks</h3>
        </x-nav.link>


        <x-nav.link href="/stats">
            <x-heroicon-o-chart-bar class="w-5 h-5 sm:mr-2"/>
            <h3 class="hidden sm:flex">Stats</h3>
        </x-nav.link>
@endauth
    </div>
    
@guest
    <x-nav.link href="/login">
        <x-heroicon-o-lock-open class="w-5 h-5 sm:mr-2"/>
        <h3 class="hidden sm:flex">Login</h3>
    </x-nav.link>
@endguest

@auth
    <x-nav.post href="/sessions" method="DELETE">
        <x-heroicon-o-lock-closed class="w-5 h-5 sm:mr-2"/>
        <h3 class="hidden sm:flex">Logout</h3>
    </x-nav.post>
@endauth
</nav>
