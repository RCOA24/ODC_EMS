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

            <!-- Employee Details -->
            <div class="p-4 md:p-6 flex-1 overflow-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                   <!-- Task Management Section -->
                    <div class="w-full max-w-[656px] bg-white border border-gray-300 shadow-md rounded-md p-4">
                        <h2 class="text-lg font-semibold mb-3">Tasks</h2>

                        <!-- Task Table Header -->
                        <div class="bg-gradient-to-r from-[#205375] to-[#102B3C] text-white px-4 py-2 rounded-t-md flex items-center">
                            <input type="checkbox" class="w-4 h-4 border border-gray-400 rounded mr-4">
                            <span class="font-bold text-sm flex-1">TASKS NAME</span>
                            <span class="font-bold text-sm w-24 text-center">DEADLINE</span>
                        </div>

                        <!-- Task List -->
                        <div class="divide-y divide-gray-300">
                            @php
                                $tasks = [
                                    ["name" => "Develop a new software feature", "deadline" => "Feb 20, 2025", "status" => "bg-red-500", "priority" => "Very High"],
                                    ["name" => "Conduct Market Research", "deadline" => "Feb 18, 2025", "status" => "bg-orange-500", "priority" => "High"],
                                    ["name" => "Improve Website Performance", "deadline" => "Feb 29, 2025", "status" => "bg-yellow-400", "priority" => "Low"],
                                    ["name" => "Designing Graphic Elements", "deadline" => "Feb 14, 2025", "status" => "bg-green-500", "priority" => "Normal"]
                                ];
                            @endphp

                            @foreach ($tasks as $task)
                                <div class="flex items-center px-4 py-3 space-x-3">
                                    <input type="checkbox" class="w-4 h-4 border border-gray-400 rounded">
                                    <span class="text-sm text-gray-800 flex-1">{{ $task['name'] }}</span>
                                    <span class="px-2 py-1 text-xs text-white rounded-full {{ $task['status'] }}">{{ $task['priority'] }}</span>
                                    <span class="w-24 text-sm text-gray-700 text-center">{{ $task['deadline'] }}</span>
                                </div>
                            @endforeach
                        </div>

                        <!-- Actions -->
                        <div class="flex justify-end gap-2 mt-4">
                            <button class="bg-[#EC1C24] text-white px-3 py-1 rounded-md text-xs font-bold">Delete</button>
                            <button class="bg-[#102B3C] text-white px-3 py-1 rounded-md text-xs font-bold">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Gradient Border -->
            <div class="custom-gradient h-10 rounded-b-lg w-full"></div>
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
