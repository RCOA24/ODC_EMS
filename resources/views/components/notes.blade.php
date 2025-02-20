<script src="https://cdn.tailwindcss.com"></script>

<div class="w-full md:w-3/4 p-4 flex justify-end">
    {{-- Notes Card --}}
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-[#1B3A5B] p-3 flex flex-wrap justify-between items-center">
            <div class="flex items-center gap-2">
                <h2 class="text-xl font-bold text-white tracking-wide">Notes</h2>
                <span class="text-xl text-gray-400">(2)</span>
            </div>
            <button class="text-white text-lg hover:bg-slate-700 w-7 h-7 flex items-center justify-center rounded-lg border-2 border-white/30">
                +
            </button>
        </div>

            {{-- Filters --}}
            <div class="p-3 flex flex-wrap gap-2">
                <button class="bg-[#0080D6] text-[#FFFFFF] px-3 py-1 rounded-md">All</button>
                <button class="bg-[#EEEEEE] text-[#6F6F6F] px-3 py-1 rounded-md">Management</button>
                <button class="bg-[#EEEEEE] text-[#6F6F6F] px-3 py-1 rounded-md">Ideas</button>
            </div>

        <div class="p-3 space-y-4">
            @php
                $notes = [
                    [
                        'category' => 'Management',
                        'title' => 'Design Tools',
                        'content' => 'Design Notes is an easy way to add notes in Figma files that complement comments.',
                        'author' => 'Rodney',
                        'date' => 'Feb. 18, 2025',
                        'avatar' => asset('images/austria.jpg')

                    ],
                    [
                        'category' => 'Meeting',
                        'title' => 'Meeting Recap',
                        'content' => 'Summary of the latest team meeting and key points discussed.',
                        'author' => 'Rodney',
                        'date' => 'Feb. 5, 2025',
                        'avatar' => asset('images/austria.jpg')

                    ]
                ];
            @endphp

            @foreach ($notes as $index => $note)
                <div class="flex gap-4 relative">
                    <img src="{{ $note['avatar'] }}" alt="Avatar" class="w-10 h-10 rounded-full" />
                    <div class="flex-1 pb-4">
                        <h2 class="text-gray-800 font-semibold text-sm">{{ $note['title'] }}</h2>
                        <p class="text-gray-600 text-xs mb-1">{{ $note['content'] }}</p>
                        <span class="text-gray-500 text-xs">{{ $note['date'] }} • {{ $note['author'] }}</span>

                        @if ($index !== count($notes) - 1)
                        <div class="absolute left-10 top-0 w-[2px] h-[calc(100%+100%)] bg-black"></div>
                    @endif
                    
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
