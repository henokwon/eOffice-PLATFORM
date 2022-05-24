<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="eFile" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Inbox" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Physical File" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Electronic File" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown>

    <x-sidebar.link title="Messaging" href="{{ route('chat') }}" :isActive="request()->routeIs('chat')">
        <x-slot name="icon">
            <x-icons.message class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Video Conference" href="{{ route('video-Conference') }}" :isActive="request()->routeIs('video-Conference')">
        <x-slot name="icon">
            <x-icons.video class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>


    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Services</div>
    <x-sidebar.link title="Knowledge Management" href="{{ route('chat') }}" :isActive="request()->routeIs('chat')">
        <x-slot name="icon">
            <x-icons.video class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
     <x-sidebar.link title="eLeave" href="{{ route('chat') }}" :isActive="request()->routeIs('chat')">
        <x-slot name="icon">
            <x-icons.video class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
     <x-sidebar.link title="eTour" href="{{ route('chat') }}" :isActive="request()->routeIs('chat')">
        <x-slot name="icon">
            <x-icons.video class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
     <x-sidebar.link title="Employee Services" href="{{ route('chat') }}" :isActive="request()->routeIs('chat')">
        <x-slot name="icon">
            <x-icons.video class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
   
</x-perfect-scrollbar>