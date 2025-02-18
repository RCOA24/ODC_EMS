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

     <!-- Task Management Section (Now with a Border Including Actions) -->
<div class="w-full max-w-4xl bg-white border-2 border-gray-400 shadow-md rounded-md p-6 mt-6 ml-6 md:ml-8 lg:ml-10">
    

    <!-- Wrapper with Border -->
    <div class="border border-gray-300 rounded-md overflow-hidden">
        
        <!-- Header with Gradient Background -->
        <div style="background: linear-gradient(to right, rgb(32, 83, 117), rgb(16, 43, 60));"
            class="text-white px-5 py-3 flex items-center">
            <input type="checkbox" class="w-5 h-5 border border-gray-400 rounded mr-5">
            <span class="font-bold text-sm flex-1">TASKS NAME</span>
            <span class="font-bold text-sm w-28 text-center">STATUS</span>
            <span class="font-bold text-sm w-40 text-center">DEADLINE</span>
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
                <div class="flex items-center px-5 py-4 border-b">
                    <input type="checkbox" class="w-5 h-5 border border-gray-400 rounded mr-5">
                    <span class="flex-1">{{ $task['name'] }}</span>
                    <span class="w-28 flex justify-center">
                        <span style="background-color: {{ $task['color'] }}; padding: 4px 10px; border-radius: 9999px;"
                            class="text-white text-sm font-bold text-center whitespace-nowrap">
                            {{ $task['priority'] }}
                        </span>
                    </span>
                    <span class="w-40 text-center">{{ $task['deadline'] }}</span>
                </div>
            @endforeach
        </div>

        <!-- Actions (Now Inside the Bordered Wrapper) -->
        <div class="flex gap-3 p-4 justify-end w-full bg-gray-100 border-t">
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


<!-- Custom Gradient Styling -->
<style>
    .custom-gradient {
        background: linear-gradient(90deg, #205375 5.08%, #102B3C 92.06%);
    }
</style>
@endsection
