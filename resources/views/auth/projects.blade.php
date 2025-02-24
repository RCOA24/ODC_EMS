@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="flex h-screen">
        <x-sidebar active="projects" />

        <div class="pt-16 flex-1 p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Project Management</h1>

            <!-- Project Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md flex flex-col">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Total Projects</h2>
                    <span class="text-4xl font-bold text-blue-600">12</span>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md flex flex-col">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Ongoing</h2>
                    <span class="text-4xl font-bold text-yellow-500">5</span>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md flex flex-col">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Completed</h2>
                    <span class="text-4xl font-bold text-green-500">7</span>
                </div>
            </div>

            <!-- Project List -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Projects</h2>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">+ New Project</button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200 text-gray-700">
                                <th class="p-3 text-left">Project</th>
                                <th class="p-3 text-left">Status</th>
                                <th class="p-3 text-left">Deadline</th>
                                <th class="p-3 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            <tr>
                                <td class="p-3">CRM System Upgrade</td>
                                <td class="p-3">
                                    <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm">In Progress</span>
                                </td>
                                <td class="p-3">March 15, 2025</td>
                                <td class="p-3">
                                    <button class="text-blue-600 hover:underline">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">Marketing Automation</td>
                                <td class="p-3">
                                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Completed</span>
                                </td>
                                <td class="p-3">Feb 20, 2025</td>
                                <td class="p-3">
                                    <button class="text-blue-600 hover:underline">View</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">Client Portal Development</td>
                                <td class="p-3">
                                    <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Delayed</span>
                                </td>
                                <td class="p-3">April 5, 2025</td>
                                <td class="p-3">
                                    <button class="text-blue-600 hover:underline">View</button>
                                </td>
                            </tr>
                            <!-- More projects dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
