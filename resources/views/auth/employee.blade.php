@extends('layouts.app')

@section('title', 'Employee Profile')

@section('content')

<div class="flex flex-col md:flex-row h-screen">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Sidebar --}}   
    <x-sidebar active="employee"/>

    {{-- Main Content --}}
    <div class="flex-1 p-4 md:p-6 bg-gray-100 flex flex-col overflow-hidden">
        <div class="bg-white rounded-lg shadow-md border flex flex-col h-full max-w-full">

            {{-- Top Gradient Border --}}
            <div class="custom-gradient text-white p-2 rounded-t-lg flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <x-icon-employeeMain class="w-5 h-5"></x-icon-employeeMain>
                </svg>
                <h1 class="text-lg font-semibold">Employee Profile</h1>
            </div>

            {{-- Employee Details and Task List Container --}}
            <div class="p-2 md:p-4 flex-1 overflow-auto flex flex-col md:flex-row gap-4">

                {{-- Employee Details (Left Side) --}}
                <div class="w-full md:w-2/6 shadow-xl rounded-md p-3">
                    <div class="flex items-center gap-3">  
                        <img src="/images/austria.jpg" alt="Employee Photo"
                        class="rounded-full w-24 h-24 md:w-28 md:h-28 lg:w-32 lg:h-32 border-2 border-black object-cover max-w-full">
                    
                        <div class="space-y-2">
                            <h1 class="text-2xl font-bold text-gray-900">Rodney Austria</h1>
                            <p class="text-gray-600">Software Engineer</p>

                            <button class="bg-[#102B3C] text-white px-1 py-0.5 rounded flex items-center text-[10px] font-semibold shadow-sm hover:bg-[#183d54] transition overflow-auto">
                                <span class="p-0.5">Send Email</span>
                                <x-icon-email class="w-2.5 h-2.5"></x-icon-email>
                            </button>
                        </div>
                    </div>

                    {{-- Top Header --}}
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-bold text-gray-900">Employee Details</h1>

                        <button class="bg-[#102B3C] text-white px-1 py-0.5 rounded flex items-center text-[10px] font-semibold shadow-sm hover:bg-[#183d54] transition">
                            <span class="p-0.5">Edit Details</span>
                            <x-icon-edit class="w-2.5 h-2.5"></x-icon-edit>
                        </button>
                    </div>

                    <hr class="shrink-0 mt-6 w-full h-px border border-solid border-black border-opacity-50" aria-hidden="true"/>
                    {{-- Employee Details --}}
                    <div class="pt-2 overflow-hidden">
                        <table class="w-full text-xs text-gray-900 table-auto">
                            <tbody>
                                @foreach ([
                                    'First Name:' => 'Rodney Charles',
                                    'Middle Name:' => 'Oliva',
                                    'Last Name:' => 'Austria',
                                    'Gender:' => 'Male',
                                    'Phone Number:' => '(+63) 921-716-7659',
                                    'Address:' => 'Poblacion, Guiguinto, Bulacan',
                                    'Employee ID:' => '010525',
                                    'Email:' => 'rodneycharlesaustria1124@gmail.com',
                                    'Company:' => 'Odecci Solutions Inc.'
                                ] as $label => $value)
                                <tr>
                                    <td class="text-gray-500 font-medium pr-4">{{ $label }}</td>
                                    <td class="font-semibold {{ $label == 'Email' ? 'text-blue-600 underline cursor-pointer' : '' }}">{{ $value }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr class="shrink-0 mt-6 w-full h-px border border-solid border-black border-opacity-50 mb-2" aria-hidden="true"/>
                    </div>
                    {{-- End of the Employee Details --}}

                    <h2 class="text-xl font-bold text-gray-900 mb-2">Recent Activities</h2>
                    <div class="flex flex-col gap-3">
                        {{-- Activity Item 1 --}}
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

                        {{-- Activity Item 2 --}}
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

                {{-- Task List (Right Side) --}}
<div class="w-full md:w-3/4 bg-white shadow-lg rounded-md p-4 flex flex-col relative">
    <div class="border border-gray-300 rounded-md overflow-hidden">
        {{-- Header with Gradient Background --}}
        <div class="text-white px-3 py-2 flex items-center text-xs font-bold" 
            style="background: linear-gradient(to right, rgb(32, 83, 117), rgb(16, 43, 60));">
            <input type="checkbox" class="w-4 h-4 border border-gray-400 rounded mr-3">
            <span class="flex-1 px-3">TASKS</span>
            <span class="text-center" style="width: 80px;">STATUS</span>
            <span class="text-left px-3" style="width: 110px;">DEADLINE</span>
        </div>

        {{-- Task List --}}
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
        <div class="flex-1"></div> {{-- Spacer --}}
        <div class="flex gap-2">
            {{-- Delete Button --}}
            <button class="text-white px-4 py-1.5 rounded-md text-xs font-bold transition" 
                    style="background-color: rgb(236, 28, 36);">
                Delete
            </button>
            {{-- Add Button --}}
            <button class="text-white px-4 py-1.5 rounded-md text-xs font-bold transition" 
                    style="background-color: rgb(16, 43, 60);">
                Add
            </button>
        </div>
    </div>

    {{-- Schedules Card - Positioned Bottom Right --}}
    <div class="flex justify-end mt-4">
        <x-schedules/>
        <x-notes/>
    </div>
</div>
{{-- End Task List --}}
</div> {{-- End Employee Details and Task List Container --}}

            
            {{-- Bottom Gradient Border --}}
            <div class="custom-gradient text-white p-3 rounded-b-lg flex items-center">
            </div>
        </div>
    </div> {{-- End Main Content --}}   
</div>

{{-- Custom Gradient Styling --}}
<style>
  .custom-gradient {
        background: linear-gradient(90deg, #205375 5.08%, #102B3C 92.06%);
    }
</style>

@endsection