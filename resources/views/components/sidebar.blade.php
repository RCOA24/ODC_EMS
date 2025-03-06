@props(['active' => 'dashboard'])

@php
    use Illuminate\Support\Facades\Cache;

    $menuItems = Cache::rememberForever('menu_items', function () {
        return [
           
            'employee' => ['label' => 'Employee', 'icon' => 'icon-employee'],
            'messages' => ['label' => 'Messages', 'icon' => 'icon-messages'],
            'appointments' => ['label' => 'Appointments', 'icon' => 'icon-appointments'],
            'projects' => ['label' => 'Projects', 'icon' => 'icon-projects'],
        ];
    });
    $bottomItems = [
        'settings' => ['label' => 'Settings', 'icon' => 'icon-settings'],
        'admin' => ['label' => 'Admin', 'icon' => 'icon-admin'],
    ];

    function activeClass($route, $active) {
        return $active === $route ? 'bg-white text-red-600' : 'hover:bg-[#18475D]';
    }
@endphp

<!-- Include Vite Scripts -->
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div x-data="navMenu()" x-init="init()">
    <script>
    function navMenu() {
        return {
            isMobile: window.matchMedia('(max-width: 1024px)').matches,
            isMenuOpen: false,
            init() {
                const mediaQuery = window.matchMedia('(max-width: 1024px)');
                mediaQuery.addEventListener('change', (e) => {
                    this.isMobile = e.matches;
                    if (!this.isMobile) this.isMenuOpen = false;
                });
            }
        }
    }
    </script>

    <!-- Navbar (Tablet & Mobile) -->
    <nav x-show="isMobile" x-cloak class="bg-gradient-to-b from-[#102B3C] to-[#205375] text-white p-2 fixed w-full top-0 z-50 flex justify-between items-center">
        <span class="text-base font-semibold">Odecci Solutions Inc.</span>
        <button @click="isMenuOpen = !isMenuOpen" class="p-1 bg-gray-800 text-white rounded">
            <x-dynamic-component :component="'icon-navbar'" class="w-5 h-5" loading="lazy" />
        </button>
    </nav>

    <!-- Animated Navbar Menu (Smaller) -->
    <div x-show="isMobile && isMenuOpen" x-cloak 
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 -translate-y-5"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-5"
        class="absolute top-10 left-0 w-full bg-gray-800 text-white z-50 shadow-lg">
        
        <ul class="flex flex-col">
            @foreach($menuItems as $route => $item)
                <li>
                    <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 border-b border-gray-700 hover:bg-gray-700 text-sm">
                        <x-dynamic-component :component="$item['icon']" class="w-4 h-4" loading="lazy" />
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach

            <li class="border-t border-gray-600 my-1"></li>

            @foreach($bottomItems as $route => $item)
                <li>
                    <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 border-b border-gray-700 hover:bg-gray-700 text-sm">
                        <x-dynamic-component :component="$item['icon']" class="w-4 h-4" loading="lazy" />
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach

            <li class="border-t border-gray-600 my-1"></li>

            <!-- Logout Button (Mobile) -->
            <li>
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 p-2 border-b border-gray-700 hover:bg-gray-700 text-sm w-full text-left">
                        <x-dynamic-component :component="'icon-logout'" class="w-4 h-4" loading="lazy" />
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Sidebar (Larger Screens) -->
    <aside x-show="!isMobile" x-cloak class="bg-gradient-to-b from-[#102B3C] to-[#205375] h-screen fixed md:relative text-white flex flex-col w-64 md:w-72 p-6 z-40">
        <div class="flex flex-col items-center mb-6">
            <x-dynamic-component :component="'icon-logo'" class="w-8 h-8 text-white" loading="lazy" />
        </div>

        <nav class="flex-1">
            <ul class="space-y-2">
                @foreach($menuItems as $route => $item)
                    <li>
                        <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ activeClass($route, $active) }}">
                            <x-dynamic-component :component="$item['icon']" class="w-5 h-5" loading="lazy" />
                            <span class="text-sm">{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach

                <li class="border-t border-gray-600 my-2"></li>

                @foreach($bottomItems as $route => $item)
                    <li>
                        <a href="{{ route($route) }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ activeClass($route, $active) }}">
                            <x-dynamic-component :component="$item['icon']" class="w-5 h-5" loading="lazy" />
                            <span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach

                <li class="border-t border-gray-600 my-2"></li>

                <!-- Logout Button (Sidebar) -->
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 hover:bg-[#18475D] w-full text-left">
                            <x-dynamic-component :component="'icon-logout'" class="w-5 h-5" loading="lazy" />
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
</div>
