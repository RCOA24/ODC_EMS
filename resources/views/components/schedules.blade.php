<div class="w-full md:w-3/4 p-4 flex justify-end">
    {{-- Schedules Card --}}
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-[#1B3A5B] p-3 flex justify-between items-center">
            <h2 class="text-xl font-bold text-white tracking-wide">Schedules</h2>
            <button class="text-white text-lg hover:bg-blue-800/50 w-7 h-7 flex items-center justify-center rounded-lg border-2 border-white/30">
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
    <div class="flex relative items-stretch">
        <!-- Date Section with Vertical Border -->
        <div class="w-16 text-2xl font-bold text-gray-800 flex items-center justify-center relative">
            {{ $schedule['date'] }}
            @if ($index !== count($schedules) - 1)
            <div class="absolute left-0 bottom-0 w-full h-[2px] bg-black"></div> 
            @endif
        </div>
        
        <!-- Event Details with Horizontal & Vertical Borders -->
        <div class="flex-1 py-4 border-l-2 border-black pl-4 relative">
            <p class="text-gray-800 text-sm mb-1">{{ $schedule['event'] }}</p>
            <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Pending</span>
            
            @if ($index !== count($schedules) - 1)
                <div class="absolute left-0 bottom-0 w-full h-[2px] bg-black"></div> 
            @endif
        </div>
    </div>
@endforeach

        
        
        </div>
    </div>
</div>


