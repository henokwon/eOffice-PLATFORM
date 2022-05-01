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

    <x-sidebar.dropdown title="eService" :active="Str::startsWith(request()->route()->uri(), 'eService')" >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Service Request Form" href="{{ route('eService.customer-form') }}"
            :active="request()->routeIs('eService.customer-form')" />
        <x-sidebar.sublink title="Tour Form" href="{{ route('eService.tour-form') }}"
            :active="request()->routeIs('eService.tour-form')" />
        <x-sidebar.sublink title="Leave Form" href="{{ route('eService.leave-form') }}"
            :active="request()->routeIs('eService.leave-form')" />
    </x-sidebar.dropdown>
{{-- <div id="app"></div>  --}}

{{-- <a href="/customer-form">customer form</a>  --}}

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Departement</div>

    @php
        $links = array_fill(0, 5, '');
    @endphp
    @foreach ($links as $index => $link)
        <x-sidebar.link title="Dummy link {{ $index + 1 }}" href="#" />
    @endforeach
</x-perfect-scrollbar>