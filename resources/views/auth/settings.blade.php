@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex">
        <x-sidebar active="settings" />

        
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-semibold">Settings</h1>
            
        </div>
    </div>
@endsection
