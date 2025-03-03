<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Odecci Dashboard')</title>
    
    <!-- Include Tailwind with Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    @yield('content')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        {{-- <button type="submit" class="text-red-500 hover:text-red-700">Logout</button> --}}
    </form>
    
</body>
</html>
