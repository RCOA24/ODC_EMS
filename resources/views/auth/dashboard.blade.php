@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="flex flex-col md:flex-row min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-6 space-y-6">
        <!-- Welcome Message -->
        <h1 class="text-2xl font-semibold">Welcome to the Dashboard</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                ['title' => 'Total Users', 'value' => '1,250'],
                ['title' => 'Total Sales', 'value' => '$24,500'],
                ['title' => 'New Orders', 'value' => '87'],
                ['title' => 'Pending Tasks', 'value' => '15'],
            ] as $stat)
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <p class="text-gray-600">{{ $stat['title'] }}</p>
                    <h2 class="text-xl font-bold">{{ $stat['value'] }}</h2>
                </div>
            @endforeach
        </div>

        <!-- Chart Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Sales Overview</h2>
                <div class="relative w-full h-64">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Customer Distribution</h2>
                <div class="relative w-full h-64">
                    <canvas id="customerChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales ($)',
                data: [1200, 1500, 1800, 2200, 2600, 3000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    const customerCtx = document.getElementById('customerChart').getContext('2d');
    new Chart(customerCtx, {
        type: 'pie',
        data: {
            labels: ['Enterprise', 'SMEs', 'Freelancers', 'Individuals'],
            datasets: [{
                data: [30, 40, 20, 10],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                borderWidth: 1
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    }); 
});
</script>
@endsection
