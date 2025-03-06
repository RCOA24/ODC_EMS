<head>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('vendor/livewire/livewire.js') }}" defer></script>

    <style>
        [x-cloak] { display: none !important; }
        .custom-gradient {
            background: linear-gradient(90deg, #205375 5.08%, #102B3C 92.06%);
        }
    </style>
</head>


<script>
    window.addEventListener('refreshPage', () => {
        location.reload();
    });
</script>

<body>

    <div class="p-2 md:p-4 flex-1 overflow-hidden flex flex-col">
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Employee Details Card (Left Side) -->
            <div class="w-full md:w-2/6 shadow-xl rounded-md p-3">
                <div class="flex items-center gap-3">  
                    <img src="/images/austria.jpg" alt="Employee Photo" class="rounded-full w-24 h-24 md:w-28 md:h-28 lg:w-32 lg:h-32 border-2 border-black object-cover max-w-full">
                    <div class="space-y-2">
                        <h1 class="text-2xl font-bold text-gray-900">{{ $fname }} {{ $mname }} {{ $lname }}</h1>
                        {{-- <p class="text-gray-600">{{ $department }}</p> --}}
    
                        <!-- Alpine.js Email Modal -->
                        <div x-data="{ showEmailModal: false }">
                            <!-- Send Email Button -->
                            <button @click="showEmailModal = true" 
                                class="bg-[#102B3C] text-white px-1 py-0.5 rounded flex items-center text-[10px] font-semibold shadow-sm hover:bg-[#183d54] transition">
                                <span class="p-0.5">Send Email</span>
                                <x-icon-email class="w-2.5 h-2.5"></x-icon-email>
                            </button>
                            
                            <!-- Email Modal -->
                            <div x-show="showEmailModal" x-cloak 
                                class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                                <div @click.away="showEmailModal = false" class="bg-white p-4 rounded-lg shadow-lg w-80">
                                    <h2 class="text-lg font-semibold mb-3">Send Email</h2>
                                    
                                    <label class="block text-sm font-medium text-gray-700">Recipient Email</label>
                                    <input type="email" class="w-full p-2 border rounded mt-1 text-sm" 
                                        placeholder="Enter email..." value="{{ $email }}">
                                    
                                    <label class="block text-sm font-medium text-gray-700 mt-3">Message</label>
                                    <textarea class="w-full p-2 border rounded mt-1 text-sm" placeholder="Type your message..."></textarea>
                                    
                                    <div class="mt-4 flex justify-end space-x-2">
                                        <button @click="showEmailModal = false" class="bg-gray-300 px-3 py-1 rounded text-sm">Cancel</button>
                                        <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700 transition">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                @if(session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('error') }}
                </div>
            @endif
    
           <!-- Employee Details -->
<div class="flex items-center justify-between mt-4">
    <h1 class="text-2xl font-bold text-gray-900">Employee Details</h1>

    <!-- Alpine.js Edit Modal -->
    <div x-data="{ showEditModal: false }">
        <button 
        @click="showEditModal = true"
        wire:click="loadEmployee({{ $employee_id }})"
        class="bg-[#102B3C] text-white px-2 py-1 rounded flex items-center text-xs font-semibold shadow-sm hover:bg-[#183d54] transition">
        <span class="p-0.5">Edit Details</span>
        <x-icon-edit class="w-3 h-3"></x-icon-edit>
    </button>
        
        <!-- Edit Modal -->
        <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div @click.away="showEditModal = false" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-xl font-semibold mb-4">Edit Employee Details</h2>
    
                <form wire:submit.prevent="loadEmployee">
                    <div class="space-y-2">
                        <label class="block text-sm">First Name:</label>
                        <input type="text" wire:model.defer="fname" class="w-full border rounded px-2 py-1">
                        
                        <label class="block text-sm">Middle Name:</label>
                        <input type="text" wire:model.defer="mname" class="w-full border rounded px-2 py-1">
    
                        <label class="block text-sm">Last Name:</label>
                        <input type="text" wire:model.defer="lname" class="w-full border rounded px-2 py-1">
    
                        <label class="block text-sm">Gender:</label>
                        <select wire:model.defer="gender" class="w-full border rounded px-2 py-1">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
    
                        <label class="block text-sm">Phone:</label>
                        <input type="text" wire:model.defer="cno" class="w-full border rounded px-2 py-1">
    
                        <label class="block text-sm">Address:</label>
                        <input type="text" wire:model.defer="address" class="w-full border rounded px-2 py-1">
    
                        <label class="block text-sm">Email:</label>
                        <input type="email" wire:model.defer="email" class="w-full border rounded px-2 py-1">
                    </div>
    
                    <div class="flex justify-end space-x-2 mt-4">
                        <button type="button" @click="showEditModal = false" class="bg-gray-500 text-white px-3 py-1 rounded">Cancel</button>
                        <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', function () {
        // Close modal when update is successful
        Livewire.on('closeEditModal', () => {
            Alpine.store('editModal').__x.$data.showEditModal = false;
        });

        // Refresh component when employee is updated
        Livewire.on('refreshComponent', () => {
            Livewire.dispatch('$refresh');
        });
    });
</script>


<hr class="shrink-0 mt-6 w-full h-px border border-solid border-black border-opacity-50" aria-hidden="true"/>

<!-- Employee Details Table -->
<div class="pt-2">
    <table class="w-full text-xs text-gray-900 table-auto break-words">
        <tbody>
            <tr><td class="text-gray-500 font-medium pr-4">First Name:</td><td class="font-semibold">{{ $fname }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Middle Name:</td><td class="font-semibold">{{ $mname }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Last Name:</td><td class="font-semibold">{{ $lname }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Gender:</td><td class="font-semibold">{{ $gender }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Phone Number:</td><td class="font-semibold">{{ $cno }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Address:</td><td class="font-semibold">{{ $address }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Employee ID:</td><td class="font-semibold">{{ $employeeId }}</td></tr>
            <tr><td class="text-gray-500 font-medium pr-4">Email:</td><td class="text-blue-600 underline cursor-pointer font-semibold">{{ $email }}</td></tr>
        </tbody>
    </table>
    
    <hr class="shrink-0 mt-6 w-full h-px border border-solid border-black border-opacity-50 mb-2" aria-hidden="true"/>
</div>

   
            


            <!-- Recent Activities -->
            <h2 class="text-xl font-bold text-gray-900 mb-2">Recent Activities</h2>
            <div class="flex flex-col gap-3">
                <div class="flex items-start gap-2"> 
                    <x-icon-clock class="w-4 h-4 text-gray-500"></x-icon-clock>
                    <div class="flex flex-col">
                        <p class="text-xs font-medium text-gray-900">
                            <strong class="font-semibold">Mervin</strong>
                            <span class="text-gray-500">updated this client information</span>
                        </p>
                        <time datetime="2024-01-24T12:00:00" class="text-xs text-gray-500">30 seconds ago</time>
                    </div>
                </div>

                <div class="flex items-start gap-2">
                    <x-icon-clock class="w-4 h-4 text-gray-500"></x-icon-clock>
                    <div class="flex flex-col">
                        <p class="text-xs font-medium text-gray-900">
                            <strong class="font-semibold">Mervin</strong>
                            <span class="text-gray-500">updated this client information</span>
                        </p>
                        <time datetime="2024-01-24T12:00:00" class="text-xs text-gray-500">30 seconds ago</time>
                    </div>
                </div>
            </div>
        </div>

        <!-- Task List (Right Side) -->
        <div class="w-full md:w-3/4 bg-white shadow-lg rounded-md p-4 flex flex-col relative">
            <div class="border border-gray-300 rounded-md overflow-hidden">
                <!-- Header with Gradient Background -->
                <div class="text-white px-3 py-2 flex items-center text-xs font-bold" 
                    style="background: linear-gradient(to right, rgb(32, 83, 117), rgb(16, 43, 60));">
                    <input type="checkbox" class="w-4 h-4 border border-gray-400 rounded mr-3">
                    <span class="flex-1 px-3">TASKS</span>
                    <span class="text-center" style="width: 110px;">STATUS</span>
                    <span class="text-left px-3" style="width: 110px;">DEADLINE</span>
                </div>

                <!-- Task List -->
                <div class="divide-y divide-gray-300 bg-white h-60 overflow-y-auto min-h-0">
                    @php
                        $tasks = [
                            ["name" => "Develop a new software feature", "deadline" => "Feb 20, 2025", "color" => "rgb(236, 28, 36)", "priority" => "Very High"],
                            ["name" => "Conduct Market Research", "deadline" => "Feb 18, 2025", "color" => "rgb(255, 165, 0)", "priority" => "High"],
                            ["name" => "Improve Website Performance", "deadline" => "Feb 29, 2025", "color" => "rgb(255, 193, 7)", "priority" => "Low"],
                            ["name" => "Designing Graphic Elements", "deadline" => "Feb 14, 2025", "color" => "rgb(40, 167, 69)", "priority" => "Normal"],
                            ["name" => "Testing and QA", "deadline" => "Mar 5, 2025", "color" => "rgb(102, 51, 153)", "priority" => "Medium"],
                            ["name" => "Documentation Update", "deadline" => "Mar 10, 2025", "color" => "rgb(0, 123, 255)", "priority" => "Low"],
                        ];
                    @endphp

                    @foreach ($tasks as $task)
                    <div class="flex flex-col md:flex-row items-center px-3 py-3 text-xs">
                        <input type="checkbox" class="w-4 h-4 border border-gray-400 rounded mr-3">
                        
                        <!-- Task Name -->
                        <span class="flex-1 px-3">{{ $task['name'] }}</span>
                    
                        <!-- Centered Status -->
                        <div class="flex justify-center items-center w-20"> 
                            <span class="text-white font-bold text-center px-2 py-1 rounded-full w-full flex justify-center items-center"
                                style="background-color: {{ $task['color'] }};">
                                {{ $task['priority'] }}
                            </span>
                        </div>
                    
                        <!-- Deadline -->
                        <span class="w-28 text-center px-2">{{ $task['deadline'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-between p-3 w-full bg-gray-100 border-t">
                <div class="flex-1"></div> <!-- Spacer -->
                <div class="flex gap-2">
                    <div x-data="{ showModal: false }">
                        <!-- Delete Button -->
                        <button @click="showModal = true" class="text-white px-4 py-1.5 rounded-md text-xs font-bold transition" 
                                style="background-color: rgb(236, 28, 36);">
                            Delete
                        </button>
                    
                        <!-- Delete Confirmation Modal -->
                        <div x-show="showModal" x-cloak 
                            class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                                <h2 class="text-lg font-bold mb-4">Confirm Deletion</h2>
                                <p class="text-gray-700 mb-4">Are you sure you want to delete this item? This action cannot be undone.</p>
                                <div class="flex justify-end space-x-2">
                                    <button @click="showModal = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Cancel</button>
                                    <button @click="deleteTask()" class="px-4 py-2 bg-red-600 text-white rounded-md">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function deleteTask() {
                            alert('Task deleted successfully!'); // Replace this with an actual delete function
                        }
                    </script>
                    
                    <div x-data="{ open: false }">
                        <!-- Add Button -->
                        <button @click="open = true" class="text-white px-4 py-1.5 rounded-md text-xs font-bold transition" 
                                style="background-color: rgb(16, 43, 60);">
                            Add
                        </button>
                    
                        <!-- Modal -->
                        <div x-show="open" x-cloak class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                                <h2 class="text-lg font-bold mb-4">Add New Task</h2>
                        
                                <!-- Task Name -->
                                <label class="block text-sm font-medium text-gray-700">Task Name</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-md mb-3">
                        
                                <!-- Deadline -->
                                <label class="block text-sm font-medium text-gray-700">Deadline</label>
                                <input type="date" class="w-full px-3 py-2 border rounded-md mb-3 relative z-50">
                        
                                <!-- Status Dropdown -->
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <select class="w-full px-3 py-2 border rounded-md mb-3">
                                    <option value="very_high" class="text-red-600 font-bold">Very High</option>
                                    <option value="high" class="text-orange-500 font-bold">High</option>
                                    <option value="medium" class="text-purple-600 font-bold">Medium</option>
                                    <option value="normal" class="text-green-600 font-bold">Normal</option>
                                    <option value="low" class="text-blue-600 font-bold">Low</option>
                                </select>

                                <!-- Buttons -->
                                <div class="flex justify-end gap-2">
                                    <button @click="open = false" class="px-4 py-2 bg-gray-400 text-white rounded-md">Cancel</button>
                                    <button @click="open = false" class="px-4 py-2 bg-gray-400 text-white rounded-md">Cancel</button>
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedules Card - Positioned Bottom Right -->
            <div class="flex justify-end mt-4">
                <x-schedules/>
                <x-notes/>
            </div>
        </div>
        <!-- End Task List -->
    </div> <!-- End Employee Details and Task List Container -->
    
    <!-- Bottom Gradient Border -->
    <div class="custom-gradient text-white p-6 rounded-b-lg flex items-center">
    </div>
</div>
@livewireScripts
</body>