@props(['active' => 'dashboard'])

<!-- Include Alpine.js & Turbo.js for Smooth Navigation -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
<script src="https://cdn.tailwindcss.com"></script>

<div x-data="{
    isMobile: window.innerWidth < 1024,
    isMenuOpen: false,
    updateScreenSize() {
        this.isMobile = window.innerWidth < 1024;
        if (!this.isMobile) this.isMenuOpen = false;
    }
}" x-init="updateScreenSize(); window.addEventListener('resize', () => updateScreenSize());">

   <!-- Navbar (Tablet & Mobile) -->
<nav x-show="isMobile" class="bg-gradient-to-b from-[#102B3C] to-[#205375] text-white p-2 fixed w-full top-0 z-50 flex justify-between items-center">
    <span class="text-base font-semibold">Odecci Solutions Inc.</span>
    <button @click="isMenuOpen = !isMenuOpen" class="p-1 bg-gray-800 text-white rounded">
        <x-dynamic-component :component="'icon-navbar'" class="w-5 h-5" />
    </button>
</nav>

<!-- Animated Navbar Menu (Smaller) -->
<div x-show="isMobile && isMenuOpen" 
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 -translate-y-5"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-5"
    class="absolute top-10 left-0 w-full bg-gray-800 text-white z-50 shadow-lg">
    
    <ul class="flex flex-col">
        @php
            $menuItems = [
                'dashboard' => ['label' => 'Dashboard', 'icon' => 'icon-dashboard'],
                'employee' => ['label' => 'Employee', 'icon' => 'icon-employee'],
                'messages' => ['label' => 'Messages', 'icon' => 'icon-messages'],
                'appointments' => ['label' => 'Appointments', 'icon' => 'icon-appointments'],
                'projects' => ['label' => 'Projects', 'icon' => 'icon-projects'],
            ];
            $bottomItems = [
                'settings' => ['label' => 'Settings', 'icon' => 'icon-settings'],
                'admin' => ['label' => 'Admin', 'icon' => 'icon-admin'],
            ];
        @endphp

        @foreach($menuItems as $route => $item)
            <li>
                <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 border-b border-gray-700 hover:bg-gray-700 text-sm">
                    <x-dynamic-component :component="$item['icon']" class="w-4 h-4" />
                    <span>{{ $item['label'] }}</span>
                </a>
            </li>
        @endforeach

        <li class="border-t border-gray-600 my-1"></li>

        @foreach($bottomItems as $route => $item)
            <li>
                <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 border-b border-gray-700 hover:bg-gray-700 text-sm">
                    <x-dynamic-component :component="$item['icon']" class="w-4 h-4" />
                    <span>{{ $item['label'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>

    <!-- Sidebar (Larger Screens) -->
    <aside x-show="!isMobile" class="bg-gradient-to-b from-[#102B3C] to-[#205375] h-screen fixed md:relative text-white flex flex-col w-64 md:w-72 p-6 z-40">
        <div class="flex flex-col items-center mb-6">
            <x-dynamic-component :component="'icon-logo'" class="w-8 h-8 text-white" />
        </div>

        <nav class="flex-1">
            <ul class="space-y-2">
                @foreach($menuItems as $route => $item)
                    <li>
                        <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 
                            {{ $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                            <x-dynamic-component :component="$item['icon']" class="w-5 h-5" />
                            <span class="text-sm">{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach

                <li class="border-t border-gray-600 my-2"></li>

                @foreach($bottomItems as $route => $item)
                    <li>
                        <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 
                        {{ $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                            <x-dynamic-component :component="$item['icon']" class="w-5 h-5" />
                            <span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </aside>

</div>
