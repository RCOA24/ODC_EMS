<div class="w-full sm:w-full md:w-2/3 lg:w-1/2 flex justify-center p-3">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Schedules Card --}}
    <div class="w-full max-w-sm bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-[#1B3A5B] p-2 flex justify-between items-center">
            <h2 class="text-lg font-bold text-white tracking-wide p-3">Schedules</h2>
            <button class="text-white text-base hover:bg-blue-800/50 w-6 h-6 flex items-center justify-center rounded-lg border border-white/30">
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
                    <div class="w-12 text-lg font-bold text-gray-800 flex items-center justify-center relative">
                        {{ $schedule['date'] }}
                        @if ($index !== count($schedules) - 1)
                        <div class="absolute left-0 bottom-0 w-full h-[2px] bg-black"></div> 
                        @endif
                    </div>

                    <!-- Event Details -->
                    <div class="flex-1 py-3 border-l-2 border-black pl-3 relative">
                        <p class="text-gray-800 text-xs mb-1">{{ $schedule['event'] }}</p>
                        <span class="bg-red-500 text-white text-[10px] px-2 py-0.5 rounded-full">Pending</span>

                        @if ($index !== count($schedules) - 1)
                            <div class="absolute left-0 bottom-0 w-full h-[2px] bg-black"></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
