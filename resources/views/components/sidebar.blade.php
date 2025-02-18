@props(['active' => 'dashboard'])

<!-- Include Alpine.js & Turbo.js for Smooth Navigation -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>

<aside 
x-data="{
    open: localStorage.getItem('sidebarOpen') === 'true',
    toggle() {
        this.open = !this.open;
        localStorage.setItem('sidebarOpen', this.open);     
    }
}"
x-init="$watch('open', value => localStorage.setItem('sidebarOpen', value))"    
:class="open ? 'w-64 md:w-64 lg:w-72 p-6' : 'w-16 p-2'"
class="bg-gradient-to-b from-[#102B3C] to-[#205375] h-screen fixed md:relative transform md:translate-x-0 transition-all duration-3000 ease-in-out text-white flex flex-col"
style="transition-property: width, transform;"
>



    <!-- Toggle Button & Logo -->
    <div class="flex flex-col items-center mb-6">
        <!-- Sidebar Icon (Shows when collapsed) -->
        <button @click="toggle()" class="p-2 focus:outline-none transition-opacity duration-300 ease-in-out" 
            x-show="!open" 
            x-transition.opacity>
            <x-dynamic-component :component="'icon-sidebar'" class="w-6 h-6 text-white" />
        </button>

        <!-- Logo (Centered when expanded) -->
        <div x-show="open" 
            x-transition.opacity 
            x-transition:enter="transform scale-75 opacity-0" 
            x-transition:enter-end="transform scale-100 opacity-100">
            <button @click="toggle()" class="flex items-center justify-center gap-2 mb-6">
                <x-dynamic-component :component="'icon-logo'" class="w-8 h-8 text-white" />
            </button>
        </div>
    </div>

    <!-- Menu Items -->
    <nav class="flex-1">
        <ul class="space-y-2">
            @php
                $menuItems = [
                    'dashboard' => ['label' => 'Dashboard', 'icon' => 'icon-dashboard'],
                    'employee' => ['label' => 'Employee', 'icon' => 'icon-employee'],
                    'messages' => ['label' => 'Messages', 'icon' => 'icon-messages'],
                    'appointments' => ['label' => 'Appointments', 'icon' => 'icon-appointments'],
                    'projects' => ['label' => 'Projects', 'icon' => 'icon-projects'],
                ];
            @endphp

            @foreach($menuItems as $route => $item)
                <li>
                    <a href="{{ route($route) }}" data-turbo-action="replace"
                        class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 
                        {{ $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                        
                        <!-- Dynamic Icon -->
                        <span class="w-5 h-5 flex items-center justify-center">
                            <x-dynamic-component :component="$item['icon']" class="w-5 h-5" />
                        </span>

                        <!-- Text Label -->
                        <span x-show="open" x-transition 
                            x-transition:enter="transform scale-90 opacity-0" 
                            x-transition:enter-end="transform scale-100 opacity-100" 
                            class="text-sm">
                            {{ $item['label'] }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <!-- Settings & Admin moved to bottom -->
    <div class="mt-auto space-y-2 pt-4">
        @php
            $bottomItems = [
                'settings' => ['label' => 'Settings', 'icon' => 'icon-settings'],
                'admin' => ['label' => 'Admin', 'icon' => 'icon-admin'],
            ];
        @endphp

        @foreach($bottomItems as $route => $item)
            <a href="{{ route($route) }}" data-turbo-action="replace"
                class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 
                {{ $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                
                <!-- Dynamic Icon -->
                <span class="w-5 h-5 flex items-center justify-center">
                    <x-dynamic-component :component="$item['icon']" class="w-5 h-5" />
                </span>

                <!-- Text Label -->
                <span x-show="open" x-transition 
                    x-transition:enter="transform scale-90 opacity-0" 
                    x-transition:enter-end="transform scale-100 opacity-100" 
                    class="text-sm">
                    {{ $item['label'] }}
                </span>
            </a>
        @endforeach
    </div>
</aside>
