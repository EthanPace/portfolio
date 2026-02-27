<nav class="flex flex-col justify-between bg-gray-900 h-screen w-[16rem] border-r border-gray-700 p-6 text-white">
    <div class="flex flex-col gap-2 mb-6">
        <x-nav.link href="/home">
            <x-heroicon-o-home class="w-5 h-5 mr-2"/>
            Home
        </x-nav.link>

        <x-nav.link href="/projects">
            <x-heroicon-o-briefcase class="w-5 h-5 mr-2"/>
            Projects
        </x-nav.link>

        <x-nav.link href="/resume">
            <x-heroicon-o-document-text class="w-5 h-5 mr-2"/>
            Resume
        </x-nav.link>

@auth 
        <x-nav.link href="/tasks">
            <x-heroicon-o-pencil-square class="w-5 h-5 mr-2"/>
            Tasks
        </x-nav.link>
@endauth
    </div>
    
@guest
    <x-nav.link href="/login">
        <x-heroicon-o-lock-open class="w-5 h-5 mr-2"/>
        Login
    </x-nav.link>
@endguest

@auth
    <x-nav.post href="/sessions" method="DELETE">
        <x-heroicon-o-lock-closed class="w-5 h-5 mr-2"/>
        Logout
    </x-nav.post>
@endauth
</nav>
