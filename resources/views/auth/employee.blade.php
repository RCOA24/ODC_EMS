@extends('layouts.app')

@section('title', 'Employee Profile')

@section('content')
  

    <head>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <div class="flex flex-col md:flex-row h-screen">
        {{-- Sidebar --}}
        <x-sidebar active="employee" />

        <div class="p-2 md:p-3 w-full md:h-screen overflow-auto md:overflow-hidden md:pr-4">

            {{-- Main Content --}}
        <div class="pt-16 flex-1 p-4 md:p-6 bg-gray-100 flex flex-col overflow-hidden">
        <div class="bg-white rounded-lg shadow-md border flex flex-col h-full max-w-full">
                
<div class="custom-gradient text-white p-4 rounded-t-lg flex items-center">
    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <x-icon-employeeMain class="w-5 h-5"></x-icon-employeeMain>
    </svg>
    <h1 class="text-lg font-semibold">Employee Profile</h1>
</div>


            @if (session()->has('success'))
                <div class="bg-green-500 text-white p-3 rounded-lg mb-4 text-center">
                    {{ session('success') }}
                </div>
            @endif
    

            {{-- Load Livewire Employee Profile Component --}}
            @livewire('employee-profile')
            {{-- @livewire('tasklist') --}}
            
        </div>
    </div>
    


    
                    
            