<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <p class="text-black text-lg font-bold">Pleaground</p>
            <div class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-gray-900">Pomodoro</a>
                <a href="/products" class="text-gray-700 hover:text-gray-900">Products</a>
                <a href="/reminders" class="text-gray-700 hover:text-gray-900">Reminders</a>
                <a href=" " class="text-gray-700 hover:text-gray-900">Login</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-6 max-w-5xl">
        @yield('container')
    </div>

    <!-- Footer -->
    <footer class="bg-white text-gray-700 text-center p-4 shadow-md mt-8">
        <div class="container mx-auto">
            <p>&copy; 2024 Pleaground. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
