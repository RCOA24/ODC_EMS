<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="flex items-center justify-center bg-gray-100 h-screen">

    <div class="flex flex-col md:flex-row w-full h-full">
        
        <!-- Left Section (Image & Branding) -->
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-6 md:p-10 text-center text-gray-900"
            style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover; background-position: center;">
            
            <h1 class="text-3xl md:text-4xl font-bold mb-4">HRIS</h1>
            <img src="{{ asset('images/logo.svg') }}" alt="Odecci Logo">
            <img src="{{ asset('images/odecci.svg') }}" alt="Odecci Logo">
        </div>

        <!-- Right Section (Login Form) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center min-h-screen p-6 sm:p-8 md:p-12 lg:p-16 bg-white">

            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-800">Log In</h2>
            
            <div class="w-full max-w-md space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold">Username</label>
                    <input type="text" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500" placeholder="Enter your username">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <div class="relative">
                        <input id="password" type="password" class="w-full px-4 py-3 border rounded-lg bg-gray-100 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password">
                        <span id="toggle-password" class="absolute inset-y-0 right-3 flex items-center cursor-pointer"></span>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-600 space-y-2 md:space-y-0">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2"> <span class="font-bold">Remember me</span>
                    </label>
                    <a href="#" class="text-[#102B3C] hover:underline font-bold">Forgot Password?</a>
                </div>
                
                <a href="{{ route('dashboard') }}" class="w-full bg-[#102B3C] text-white py-3 md:py-4 rounded-[35px] hover:bg-[#0D2330] transition text-center block">
                    Log In
                </a>
                
            </div>
        </div>
    </div>

</body>
</html>