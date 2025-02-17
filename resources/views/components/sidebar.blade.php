@props(['active' => 'dashboard'])

<aside class="bg-gradient-to-b from-[#102B3C] to-[#205375] h-screen w-64 flex flex-col p-4 text-white">
    <!-- Logo -->
   <!-- Logo -->
<div class="flex items-center justify-center gap-2 mb-6">
    <x-icon-logo class="w-8 h-8 text-white" /> <!-- Blade component for the logo -->
    
</div>


    <!-- Menu Items -->
    <nav class="flex-1">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ $active === 'dashboard' ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    <x-icon-dashboard class="w-5 h-5" />
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('clients') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ $active === 'clients' ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    <x-icon-clients class="w-5 h-5" />
                    <span class="text-sm">Clients</span>
                </a>
            </li>
            <li>
                <a href="{{ route('messages') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ $active === 'messages' ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    <x-icon-messages class="w-5 h-5" />
                    <span class="text-sm">Messages</span>
                </a>
            </li>
            <li>
                <a href="{{ route('appointments') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ $active === 'appointments' ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    <x-icon-appointments class="w-5 h-5" />
                    <span class="text-sm">Appointments</span>
                </a>
            </li>
            <li>
                <a href="{{ route('projects') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 {{ $active === 'projects' ? 'bg-white text-red-600' : 'hover:bg-[#18475D]' }}">
                    <x-icon-projects class="w-5 h-5" />
                    <span class="text-sm">Projects</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Settings & Admin -->
    <div class="mt-auto space-y-2">
        <a href="{{ route('settings') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 hover:bg-[#18475D]">
            <x-icon-settings class="w-5 h-5" />
            <span class="text-sm">Settings</span>
        </a>
        <a href="{{ route('admin') }}" class="flex items-center gap-2 p-2 rounded-lg transition-all duration-300 hover:bg-[#18475D]">
            <x-icon-admin class="w-5 h-5" />
            <span class="text-sm">Admin</span>
        </a>
    </div>
</aside>
