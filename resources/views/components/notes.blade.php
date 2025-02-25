<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>

<div class="w-full sm:w-full md:w-2/3 lg:w-1/2 flex justify-center p-3 overflow-hidden" x-data="{ showModal: false }">
  

    {{-- Notes Card --}}
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-[#1B3A5B] p-2 flex justify-between items-center">
            <div class="flex items-center gap-1">
                <h2 class="text-lg font-bold text-white tracking-wide p-3">Notes</h2>
                <span class="text-base text-gray-300">(2)</span>
            </div>
            <button @click="showModal = true" class="text-white text-base hover:bg-slate-700 w-6 h-6 flex items-center justify-center rounded-lg border border-white/30">
                +
            </button>
        </div>

        {{-- Filters --}}
        <div class="p-2 flex flex-wrap gap-1">
            <button class="bg-[#0080D6] text-white px-2 py-1 rounded-md text-sm">All</button>
            <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm">Management</button>
            <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm">Ideas</button>
        </div>
        
        {{-- Notes List --}}
        <div class="p-3 space-y-3 table-auto">
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
                <div class="flex gap-3 relative">
                    <img src="{{ $note['avatar'] }}" alt="Avatar" class="w-8 h-8 rounded-full" />
                    <div class="flex-1 pb-3">
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

    {{-- Modal --}}
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-lg font-bold text-gray-800 mb-4">Notes Modal</h2>
            <p class="text-gray-600 text-sm">Testing Purposes</p>
            <button @click="showModal = false" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md">Close</button>
        </div>
    </div>
</div>