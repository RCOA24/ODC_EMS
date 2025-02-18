@extends('layouts.app')

@section('title', 'Employee Profile')

@section('content')
<div class="flex flex-col md:flex-row h-screen">
    <!-- Sidebar -->
    <x-sidebar active="employee" class="w-full md:w-64 lg:w-72" />

    <!-- Main Content -->
    <div class="flex-1 p-4 md:p-6 bg-gray-100 flex flex-col overflow-hidden">
        <div class="bg-white rounded-lg shadow-md border flex flex-col h-full max-w-full">
            <!-- Top Gradient Border -->
            <div class="custom-gradient text-white p-4 rounded-t-lg flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <x-icon-employeeMain class="w-5 h-5"></x-icon-employeeMain>
                </svg>
                <h1 class="text-lg font-semibold">Employee Profile</h1>
            </div>

            <!-- Employee Details and Task List Container -->
            <div class="p-4 md:p-6 flex-1 overflow-auto flex flex-col md:flex-row gap-6">
                <!-- Employee Details (Left Side) -->
                <div class="w-full md:w-1/3 bg-white border-2 border-gray-400 shadow-md rounded-md p-6">
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/150" alt="Employee Photo" class="w-16 h-16 rounded-full">
                            <div class="ml-4">
                                <h2 class="text-xl font-semibold">John Doe</h2>
                                <p class="text-gray-600">Software Engineer</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p><strong>Email:</strong> john.doe@example.com</p>
                            <p><strong>Phone:</strong> +1 234 567 890</p>
                            <p><strong>Department:</strong> Engineering</p>
                            <p><strong>Join Date:</strong> Jan 1, 2020</p>
                        </div>
                    </div>
                </div>

                <!-- Task List (Right Side) -->
                <div class="w-full md:w-2/3 bg-white border-2 border-gray-400 shadow-md rounded-md p-6">
                    <div class="border border-gray-300 rounded-md overflow-hidden">
                        <!-- Header with Gradient Background -->
                        <div class="text-white px-5 py-3 flex items-center"style="background: linear-gradient(to right, rgb(32, 83, 117), rgb(16, 43, 60));">
                            <input type="checkbox" class="w-5 h-5 border border-gray-400 rounded mr-5">
                            <span class="font-bold text-sm flex-1 px-5">TASKS NAME</span>
                            <span class="font-bold text-sm text-center" style="width: 120px; margin-right: 70px; display: inline-block;">STATUS</span>
                            <span class="font-bold text-sm text-left px-5">DEADLINE</span>
                        </div>

                        <!-- Task List -->
                        <div class="divide-y divide-gray-300 bg-white">
                            @php
                                $tasks = [
                                    ["name" => "Develop a new software feature", "deadline" => "Feb 20, 2025", "color" => "rgb(236, 28, 36)", "priority" => "Very High"],
                                    ["name" => "Conduct Market Research", "deadline" => "Feb 18, 2025", "color" => "rgb(255, 165, 0)", "priority" => "High"],
                                    ["name" => "Improve Website Performance", "deadline" => "Feb 29, 2025", "color" => "rgb(255, 193, 7)", "priority" => "Low"],
                                    ["name" => "Designing Graphic Elements", "deadline" => "Feb 14, 2025", "color" => "rgb(40, 167, 69)", "priority" => "Normal"]
                                ];
                            @endphp

                            @foreach ($tasks as $task)
                            <div class="flex flex-col md:flex-row items-center px-5 py-4 border border-gray-300">
                                <input type="checkbox" class="w-5 h-5 border border-gray-400 rounded mr-5">
                                <span class="flex-1 px-5 text-sm">{{ $task['name'] }}</span>
                                <span class="text-white text-xs font-bold text-center whitespace-nowrap"
                                    style="background-color: {{ $task['color'] }}; padding: 7px 20px; border-radius: 9999px; margin: 13px 0; min-width: 100px; margin-right: 90px;">
                                    {{ $task['priority'] }}
                                </span>
                                <span class="w-40 text-left px-2 text-sm">{{ $task['deadline'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    
                    <div class="flex justify-between p-4 w-full bg-gray-100 border-t">
                        <div class="flex-1"></div> <!-- Spacer -->
                        <div class="flex gap-3">
                            <!-- Delete Button -->
                            <button style="background-color: rgb(236, 28, 36);" 
                                    class="text-white px-5 py-2 rounded-md text-sm font-bold hover:bg-red-700 transition">
                                Delete
                            </button>
                    
                            <!-- Add Button -->
                            <button style="background-color: rgb(16, 43, 60);" 
                                    class="text-white px-5 py-2 rounded-md text-sm font-bold hover:bg-blue-800 transition">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Gradient Styling -->
<style>
    .custom-gradient {
        background: linear-gradient(90deg, #205375 5.08%, #102B3C 92.06%);
    }

   
</style>
@endsection
