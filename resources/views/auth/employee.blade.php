@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex">
        <x-sidebar active="employee" />

        
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-semibold">Employee Profile</h1>
            
        </div>
    </div>
@endsection
