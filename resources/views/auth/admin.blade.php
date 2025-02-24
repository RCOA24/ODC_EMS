@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="flex h-screen">
        <x-sidebar active="admin" />

        <div class="flex-1 p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Admin Panel</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- User Management -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">User Management</h2>
                    <p class="text-sm text-gray-600 mb-4">Manage users and their roles.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Manage Users</a>
                </div>

                <!-- System Settings -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">System Settings</h2>
                    <p class="text-sm text-gray-600 mb-4">Configure system preferences.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Settings</a>
                </div>

                <!-- Activity Logs -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Activity Logs</h2>
                    <p class="text-sm text-gray-600 mb-4">View recent system activities.</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">View Logs</a>
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
    </div>
@endsection
