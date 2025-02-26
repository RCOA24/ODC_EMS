@extends('layouts.app')

@section('title', 'Appointments')

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar Component -->
        <x-sidebar active="appointments" />

        <div class="pt-16 flex-1 flex flex-col p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Appointments</h1>

            <div class="flex-1 grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Upcoming Appointments List -->
                <div class="lg:col-span-2 bg-white shadow rounded-xl p-6 flex flex-col h-full">
                    <h2 class="text-lg font-medium text-gray-700 mb-4">Upcoming Appointments</h2>
                    
                    <div class="flex-1 overflow-y-auto">
                        <ul class="divide-y divide-gray-200">
                            <li class="py-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-md font-semibold text-gray-800">John Doe</h3>
                                    <p class="text-sm text-gray-500">March 5, 2025 - 2:00 PM</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-sm bg-blue-100 text-blue-600">Confirmed</span>
                            </li>
                            <li class="py-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-md font-semibold text-gray-800">Jane Smith</h3>
                                    <p class="text-sm text-gray-500">March 7, 2025 - 10:30 AM</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-sm bg-yellow-100 text-yellow-600">Pending</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- New Appointment Form -->
                <div class="bg-white shadow rounded-xl p-6 flex flex-col h-full">
                    <h2 class="text-lg font-medium text-gray-700 mb-4">Schedule an Appointment</h2>

                    <form action="#" method="POST" class="flex flex-col flex-1">
                        @csrf
                        
                        <!-- Client Name Input -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Client Name</label>
                            <input type="text" name="client_name" class="form-input" required>
                        </div>

                        <!-- Date & Time Input -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Date & Time</label>
                            <input type="datetime-local" name="appointment_date" class="form-input" required>
                        </div>

                        <!-- Status Dropdown -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" class="form-input" required>
                                <option value="confirmed">Confirmed</option>
                                <option value="pending">Pending</option>
                                <option value="canceled">Canceled</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="mt-auto w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600">
                            Book Appointment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
