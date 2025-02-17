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

                 <!-- Main Content -->
                 <div class="p-4 md:p-6 flex-1 overflow-auto">
                    <!-- Responsive Content Goes Here -->
                    <p class="text-sm md:text-base text-gray-700">This is a responsive employee profile section.</p>
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