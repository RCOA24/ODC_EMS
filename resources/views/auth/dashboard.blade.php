@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <div class="flex-1 p-6 space-y-6">
        <!-- Welcome Message -->
        <h1 class="text-2xl font-semibold">Welcome to the Dashboard</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-600">Total Users</p>
                <h2 class="text-xl font-bold">1,250</h2>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-600">Total Sales</p>
                <h2 class="text-xl font-bold">$24,500</h2>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-600">New Orders</p>
                <h2 class="text-xl font-bold">87</h2>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-600">Pending Tasks</p>
                <h2 class="text-xl font-bold">15</h2>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Sales Overview</h2>
            <div class="relative w-full h-64"> <!-- Fixed height for chart -->
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <!-- Customer Distribution Chart -->
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-lg font-semibold mb-4">Customer Distribution</h2>
    <div class="relative w-full h-64">
        <canvas id="customerChart"></canvas>
    </div>
</div>


</div>
</div>

<!-- Chart.js Script -->

<script>
document.addEventListener("DOMContentLoaded", function () {
// Line Chart (Sales Overview)
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
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

// Pie Chart (Customer Distribution)
const customerCtx = document.getElementById('customerChart').getContext('2d');
new Chart(customerCtx, {
    type: 'pie',
    data: {
        labels: ['Enterprise', 'SMEs', 'Freelancers', 'Individuals'],
        datasets: [{
            data: [30, 40, 20, 10], // Dummy data (Fetch from DB)
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
            borderWidth: 1
        }]
    },
    options: { responsive: true, maintainAspectRatio: false }
});


});

</script>
@endsection
