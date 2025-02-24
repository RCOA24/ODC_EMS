@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    <div class="flex h-screen">
        <x-sidebar active="messages" />

        <div class="pt-16 flex-1 flex flex-col p-6 bg-gray-50">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Messages</h1>

            <div class="flex-1 grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Conversations List -->
                <div class="lg:col-span-1 bg-white shadow-md rounded-xl p-6 overflow-y-auto border-r">
                    <h2 class="text-lg font-medium text-gray-700 mb-4">Chats</h2>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3 p-3 bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-gray-200">
                            <img src="https://i.pravatar.cc/40?img=1" alt="Avatar" class="w-10 h-10 rounded-full">
                            <div class="flex-1">
                                <span class="font-medium text-gray-800">John Doe</span>
                                <p class="text-sm text-gray-600 truncate">Hey! How are you?</p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-3 p-3 bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-gray-200">
                            <img src="https://i.pravatar.cc/40?img=2" alt="Avatar" class="w-10 h-10 rounded-full">
                            <div class="flex-1">
                                <span class="font-medium text-gray-800">Jane Smith</span>
                                <p class="text-sm text-gray-600 truncate">Let’s schedule a meeting.</p>
                            </div>
                        </li>
                        <!-- More conversations dynamically -->
                    </ul>
                </div>

                <!-- Chat Window -->
                <div class="lg:col-span-3 bg-white shadow-md rounded-xl p-6 flex flex-col">
                    <!-- Chat Header -->
                    <div class="p-5 bg-white border-b flex items-center space-x-3">
                        <img src="https://i.pravatar.cc/40?img=1" alt="Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <h2 class="text-lg font-medium text-gray-800">John Doe</h2>
                            <p class="text-sm text-gray-500">Last seen 5 min ago</p>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="flex-1 p-6 overflow-y-auto space-y-4 bg-gray-50">
                        <!-- Incoming Message -->
                        <div class="flex items-start space-x-3">
                            <img src="https://i.pravatar.cc/40?img=1" alt="Avatar" class="w-8 h-8 rounded-full">
                            <div class="bg-gray-200 p-4 rounded-2xl max-w-xs">
                                <p class="text-sm text-gray-700">Hey! How are you?</p>
                            </div>
                        </div>

                        <!-- Outgoing Message -->
                        <div class="flex items-start space-x-3 justify-end">
                            <div class="bg-blue-500 text-white p-4 rounded-2xl max-w-xs">
                                <p class="text-sm">I'm good! How about you?</p>
                            </div>
                            <img src="https://i.pravatar.cc/40?img=3" alt="Avatar" class="w-8 h-8 rounded-full">
                        </div>
                    </div>

                    <!-- Message Input -->
                    <div class="p-4 border-t bg-white flex items-center space-x-3">
                        <input type="text" placeholder="Type a message..."
                            class="flex-1 p-3 border rounded-full focus:ring focus:ring-blue-300 outline-none">
                        <button class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-600 flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-8.486-4.242a2 2 0 00-2.628 2.628l4.242 8.486a2 2 0 003.708-.002l4.242-8.486a2 2 0 00-1.078-2.384z"></path>
                            </svg>
                            <span>Send</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
