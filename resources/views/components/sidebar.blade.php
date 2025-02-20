@props(['active' => 'dashboard'])

<!-- Include Alpine.js & Turbo.js for Smooth Navigation -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
<script src="https://cdn.tailwindcss.com"></script>

<div x-data="{
    open: localStorage.getItem('sidebarOpen') === 'true',
    toggle() {
        this.open = !this.open;
        localStorage.setItem('sidebarOpen', this.open);
    }
}" x-init="$watch('open', value => localStorage.setItem('sidebarOpen', value))">
    
    <!-- Mobile Toggle Button -->
    <button @click="toggle()" class="md:hidden fixed top-4 right-4 z-50 p-2 bg-gray-800 text-white rounded">
        <x-dynamic-component :component="'icon-navbar'" class="w-6 h-6" />
    </button>
    
    <aside :class="{'-translate-x-full': !open, 'translate-x-0': open}" 
        class="bg-gradient-to-b from-[#102B3C] to-[#205375] h-screen fixed md:relative transform md:translate-x-0 transition-all duration-300 ease-in-out text-white flex flex-col w-64 md:w-72 p-6 z-40">
        
        <!-- Toggle Button & Logo -->
        <div class="flex flex-col items-center mb-6">
            
            
            <!-- Logo -->
            <div>
                <x-dynamic-component :component="'icon-logo'" class="w-8 h-8 text-white" />
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
                            
                            <span class="text-sm">{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <!-- Settings & Admin -->
        <div class="mt-auto space-y-2 pt-4">
            @php
                $bottomItems = [
                    'settings' => ['label' => 'Settings', 'icon' => 'icon-settings'],
                    'admin' => ['label' => 'Admin', 'icon' => 'icon-admin'],
                ];
            @endphp
            
            @foreach($bottomItems as $route => $item)
                <a href="{{ route($route) }}" data-turbo-action="replace"
                    class="flex items-center gap-2 p-2 rounded-lg transition-all duration-9000 
                    {{ $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    
                    <!-- Dynamic Icon -->
                    <span class="w-5 h-5 flex items-center justify-center">
                        <x-dynamic-component :component="$item['icon']" class="w-5 h-5" />
                    </span>
                    
                    <span class="text-sm">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </aside>
</div>
