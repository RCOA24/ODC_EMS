<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex w-3/4 bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Left Section (Image & Branding) -->
        <div class="w-1/2 bg-gray-200 flex flex-col items-center justify-center p-10" style="background-image: url('your-background-image.jpg'); background-size: cover; background-position: center;">
            <h1 class="text-3xl font-bold text-gray-900">HRIS</h1>
            <h2 class="text-4xl font-extrabold text-gray-900">Odacci Solutions Inc.</h2>
            <p class="text-gray-700 text-center mt-4">Software Development, Creative, and Continuous Integration</p>
        </div>
        
        <!-- Right Section (Login Form) -->
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-6">Log in</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-700">Username</label>
                    <input type="text" class="w-full px-4 py-2 border rounded-lg bg-gray-100" placeholder="Username">
                </div>
                <div>
                    <label class="block text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" class="w-full px-4 py-2 border rounded-lg bg-gray-100" placeholder="Password">
                        <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
                            👁️
                        </span>
                    </div>
                </div>
                <div class="flex justify-between items-center text-sm text-gray-600">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#" class="text-blue-600 hover:underline">Forgot Password?</a>
                </div>
                <button class="w-full bg-blue-900 text-white py-2 rounded-lg">Log In</button>
                <p class="text-center text-gray-600 mt-4">Sign Up</p>
            </form>
        </div>
    </div>
</body>
</html>
