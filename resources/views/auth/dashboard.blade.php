@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex">
        <x-sidebar /> <!-- Sidebar Component -->
        
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-semibold">Welcome to the Dashboard</h1>
            
        </div>
    </div>
@endsection
