@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <div x-data="{ activeTab: 'account' }" class="flex h-screen">
        <x-sidebar active="settings" />

        <div class="pt-16 flex-1 p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Settings</h1>

            <div class="bg-white p-6 rounded-xl shadow-md">
                <!-- Tabs -->
                <div class="border-b flex space-x-6 text-gray-600">
                    <button @click="activeTab = 'account'" :class="activeTab === 'account' ? 'text-blue-600 border-b-2 border-blue-500 font-semibold' : 'hover:text-blue-500'" class="py-3 px-4">Account</button>
                    <button @click="activeTab = 'notifications'" :class="activeTab === 'notifications' ? 'text-blue-600 border-b-2 border-blue-500 font-semibold' : 'hover:text-blue-500'" class="py-3 px-4">Notifications</button>
                    <button @click="activeTab = 'appearance'" :class="activeTab === 'appearance' ? 'text-blue-600 border-b-2 border-blue-500 font-semibold' : 'hover:text-blue-500'" class="py-3 px-4">Appearance</button>
                </div>

                <!-- Account Settings -->
                <div x-show="activeTab === 'account'" class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Account Information</h2>

                    <form action="#" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" class="mt-1 p-3 w-full border rounded-lg focus:ring-blue-300 outline-none" value="John Doe">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" class="mt-1 p-3 w-full border rounded-lg focus:ring-blue-300 outline-none" value="johndoe@email.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">New Password</label>
                            <input type="password" class="mt-1 p-3 w-full border rounded-lg focus:ring-blue-300 outline-none">
                        </div>

                        <button type="submit" class="mt-4 w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600">Save Changes</button>
                    </form>
                </div>

                <!-- Notification Settings -->
                <div x-show="activeTab === 'notifications'" class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Notification Preferences</h2>
                    <div class="space-y-3">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox text-blue-600" checked>
                            <span class="text-gray-700">Receive Email Notifications</span>
                        </label>

                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span class="text-gray-700">Receive SMS Notifications</span>
                        </label>

                        <label class="flex items-center space-x-3">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span class="text-gray-700">Push Notifications</span>
                        </label>
                    </div>
                </div>

                <!-- Appearance Settings -->
                <div x-show="activeTab === 'appearance'" class="mt-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Appearance</h2>
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" class="hidden peer">
                        <div class="w-10 h-5 bg-gray-300 rounded-full peer-checked:bg-blue-500 relative">
                            <div class="w-4 h-4 bg-white rounded-full absolute left-1 top-0.5 peer-checked:translate-x-5 transition"></div>
                        </div>
                        <span class="text-gray-700">Dark Mode</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Prevent Flickering -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
@endsection
