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
                   
                    
                    <!-- Task Management Table -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-lg font-semibold mb-3">Tasks</h2>
                        <table class="w-full border-collapse border border-gray-200 rounded-lg">
                            <thead>
                                <tr class="bg-blue-900 text-white">
                                    <th class="p-2 text-left">Tasks Name</th>
                                    <th class="p-2 text-center">Status</th>
                                    <th class="p-2 text-center">Deadline</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr class="border-b">
                                    <td class="p-2">Develop a new software feature</td>
                                    <td class="p-2 text-center"><span class="bg-red-500 text-white px-2 py-1 text-sm rounded">Very High</span></td>
                                    <td class="p-2 text-center">February 20, 2025</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-2">Conduct Market Research</td>
                                    <td class="p-2 text-center"><span class="bg-orange-400 text-white px-2 py-1 text-sm rounded">High</span></td>
                                    <td class="p-2 text-center">February 18, 2025</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-2">Improve Website Performance</td>
                                    <td class="p-2 text-center"><span class="bg-yellow-400 text-white px-2 py-1 text-sm rounded">Low</span></td>
                                    <td class="p-2 text-center">February 29, 2025</td>
                                </tr>
                                <tr>
                                    <td class="p-2">Designing Graphic Elements</td>
                                    <td class="p-2 text-center"><span class="bg-green-500 text-white px-2 py-1 text-sm rounded">Normal</span></td>
                                    <td class="p-2 text-center">February 14, 2025</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex justify-end mt-2">
                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg mr-2">Delete</button>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add</button>
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
