@extends('layouts.app')

@section('title', 'Login')

@section('content')
<body class="flex items-center justify-center bg-gray-100 h-screen">
    <div class="flex flex-col md:flex-row w-full h-full">


                <!-- Toast for the user who is not existing-->
       @if (session('error'))
    <div id="toast" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-8 py-4 text-lg w-[400px] text-center rounded-lg shadow-lg opacity-70">
        {{ session('error') }}
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('toast').style.display = 'none';
        }, 3000); // Hide after 3 seconds
    </script>
@endif


        
        <!-- Left Section (Image & Branding) -->
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-6 md:p-10 text-center text-gray-900"
            style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover; background-position: center;">
            
            <h1 class="text-3xl md:text-4xl font-bold mb-4">HRIS</h1>
            <img src="{{ asset('images/logo.svg') }}" alt="Odecci Logo" class="mb-4">
            <img src="{{ asset('images/odecci.svg') }}" alt="Odecci Logo">
        </div>

        <!-- Right Section (Login Form) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center min-h-screen p-6 sm:p-8 md:p-12 lg:p-16 bg-white">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-800">Log In</h2>

            @if (session('status'))
                <div class="bg-red-500 text-white p-3 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="w-full max-w-md space-y-4">
                @csrf
                
                <div>
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <div class="relative">
                        <span id="toggle-password" class="absolute inset-y-0 right-3 flex items-center cursor-pointer"></span>
                        <input id="password" type="password" name="password" class="w-full px-4 py-3 border rounded-lg bg-gray-100 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password" required>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 space-y-2 md:space-y-0">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2"> <span class="font-bold">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-[#102B3C] hover:underline font-bold">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-[#102B3C] text-white py-3 md:py-4 rounded-[35px] hover:bg-[#0D2330] transition text-center block">
                    Log In
                </button>

                <p class="text-center text-sm text-gray-600 mt-4">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-[#102B3C] font-bold hover:underline">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</body>
@endsection
