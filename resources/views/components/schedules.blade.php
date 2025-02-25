<head>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="w-full sm:w-full md:w-2/3 lg:w-1/2 flex justify-center p-3 overflow-hidden" x-data="{ showModal: false }">
    

    {{-- Schedules Card --}}
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-[#1B3A5B] p-2 flex justify-between items-center">
            <h2 class="text-lg font-bold text-white tracking-wide p-3">Schedules</h2>
            <button @click="showModal = true" class="text-white text-base hover:bg-blue-800/50 w-6 h-6 flex items-center justify-center rounded-lg border border-white/30">
                +
            </button>
        </div>

        <div class="p-3">
            @php
                $schedules = [
                    ['date' => '23', 'event' => 'Meeting at 9:00 PM with manager'],
                    ['date' => '25', 'event' => 'Meeting Strategy Solution Seminar'],
                    ['date' => '26', 'event' => 'JS Staff Annual Dinner 2018'],
                    ['date' => '28', 'event' => 'JS Program 2019 - 2020']
                ];
            @endphp

            @foreach ($schedules as $index => $schedule)
                <div class="flex items-stretch relative">
                    <!-- Date Section -->
                    <div class="w-12 text-lg font-bold text-gray-800 flex items-center justify-center">
                        {{ $schedule['date'] }}
                    </div>

                    <!-- Event Details -->
                    <div class="flex-1 py-3 border-l-2 border-black pl-3 relative">
                        <p class="text-gray-800 text-xs mb-1">{{ $schedule['event'] }}</p>
                        <span class="bg-red-500 text-white text-[10px] px-2 py-0.5 rounded-full">Pending</span>
                    </div>
                </div>

                <!-- Divider (Avoids overflow issues) -->
                @if ($index !== count($schedules) - 1)
                    <div class="w-full h-[1px] bg-black my-2"></div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Modal --}}
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Schedules Modal</h2>
            <p class="text-gray-600 text-sm">Testing Purposes</p>
            <button @click="showModal = false" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
        </div>
    </div>
</div>
