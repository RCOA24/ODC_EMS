@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex">
        <x-sidebar active="appointments" />

        
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-semibold">Welcome to the Appointments</h1>
            
        </div>
    </div>
@endsection
