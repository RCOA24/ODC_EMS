@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="flex h-screen">
        <!-- Sidebar Component -->
        <x-sidebar active="projects" />

        <div class="pt-16 flex-1 p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Project Management</h1>

            <!-- Project Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ([
                    ['title' => 'Total Projects', 'count' => 12, 'color' => 'blue-600'],
                    ['title' => 'Ongoing', 'count' => 5, 'color' => 'yellow-500'],
                    ['title' => 'Completed', 'count' => 7, 'color' => 'green-500']
                ] as $stat)
                <div class="bg-white p-6 rounded-xl shadow-md flex flex-col">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">{{ $stat['title'] }}</h2>
                    <span class="text-4xl font-bold text-{{ $stat['color'] }}">{{ $stat['count'] }}</span>
                </div>
                @endforeach
            </div>

            <!-- Project List -->
            <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Projects</h2>
                    
                    <div x-data="{ showModal: false }">
                        <button @click="showModal = true" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            + New Project
                        </button>
                        
                        <!-- Modal -->
                        <template x-if="showModal">
                            <div class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                                    <h2 class="text-lg font-bold mb-4">Create New Project</h2>
                                    <label class="block text-sm font-medium text-gray-700">Project Name</label>
                                    <input type="text" class="form-input mb-4" placeholder="Enter project name">
                                    <label class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea class="form-input mb-4" rows="3" placeholder="Enter project details"></textarea>
                                    <div class="flex justify-end space-x-2">
                                        <button @click="showModal = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Cancel</button>
                                        <button @click="alert('Project created successfully!')" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save</button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
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
                            @foreach ([
                                ['name' => 'CRM System Upgrade', 'status' => 'In Progress', 'color' => 'yellow', 'deadline' => 'March 15, 2025'],
                                ['name' => 'Marketing Automation', 'status' => 'Completed', 'color' => 'green', 'deadline' => 'Feb 20, 2025'],
                                ['name' => 'Client Portal Development', 'status' => 'Delayed', 'color' => 'red', 'deadline' => 'April 5, 2025']
                            ] as $project)
                            <tr>
                                <td class="p-3">{{ $project['name'] }}</td>
                                <td class="p-3">
                                    <span class="bg-{{ $project['color'] }}-100 text-{{ $project['color'] }}-600 px-3 py-1 rounded-full text-sm">{{ $project['status'] }}</span>
                                </td>
                                <td class="p-3">{{ $project['deadline'] }}</td>
                                <td class="p-3">
                                    <button class="text-blue-600 hover:underline">View</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
