@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div x-data="{ showUsers: false, showSettings: false, showLogs: false }" class="flex h-screen">
        <x-sidebar active="admin" />

        <div class="flex-1 p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Admin Panel</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- User Management -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">User Management</h2>
                    <p class="text-sm text-gray-600 mb-4">Manage users and their roles.</p>
                    <button @click="showUsers = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Manage Users
                    </button>
                </div>

                <!-- System Settings -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">System Settings</h2>
                    <p class="text-sm text-gray-600 mb-4">Configure system preferences.</p>
                    <button @click="showSettings = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Settings
                    </button>
                </div>

                <!-- Activity Logs -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Activity Logs</h2>
                    <p class="text-sm text-gray-600 mb-4">View recent system activities.</p>
                    <button @click="showLogs = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        View Logs
                    </button>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white p-6 rounded-xl shadow-md mt-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Recent Activity</h2>
                <ul class="divide-y divide-gray-200">
                    <li class="py-3 text-gray-700 text-sm">Admin updated user roles.</li>
                    <li class="py-3 text-gray-700 text-sm">New user registered: Jane Doe.</li>
                    <li class="py-3 text-gray-700 text-sm">System settings were changed.</li>
                </ul>
            </div>
        </div>

        <!-- Modals -->
        <!-- Manage Users Modal -->
        <div x-show="showUsers" x-cloak class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-lg font-bold mb-4">Manage Users</h2>
                <p class="text-gray-700 mb-4">Testing Purposes</p>
                <div class="flex justify-end space-x-2">
                    <button @click="showUsers = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Close</button>
                </div>
            </div>
        </div>

        <!-- Settings Modal -->
        <div x-show="showSettings" x-cloak class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-lg font-bold mb-4">System Settings</h2>
                <p class="text-gray-700 mb-4">Testing Purposes</p>
                <div class="flex justify-end space-x-2">
                    <button @click="showSettings = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Close</button>
                </div>
            </div>
        </div>

        <!-- View Logs Modal -->
        <div x-show="showLogs" x-cloak class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                <h2 class="text-lg font-bold mb-4">Activity Logs</h2>
                <p class="text-gray-700 mb-4">Testing Purposes</p>
                <div class="flex justify-end space-x-2">
                    <button @click="showLogs = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Prevent Flickering -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
@endsection
