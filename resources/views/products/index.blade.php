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
        <h1 class="text-2xl font-bold mb-4">List Products</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($products as $Product)
                <div class="bg-white p-4 rounded shadow-md">
                    <img src="{{$Product->image_url}}" alt="{{$Product->name}}" class="w-full h-48 object-cover rounded mb-4">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold text-gray-900">{{$Product->name}}</h2>
                        <p class="text-gray-700 mt-2">{{$Product->description}}</p>
                        <p class="text-gray-900 font-bold mt-2">{{$Product->price}}</p>
                    </div>
                    <div class="mt-4 flex justify-center space-x-2">
                        <a href="/products/{{$Product->id}}/edit" class="bg-transparent border border-gray-300 text-gray-900 py-2 px-4 rounded hover:bg-gray-300">Edit</a>
                        <form action="/products/{{$Product->id}}" method="POST" class="inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-transparent border border-gray-300 text-gray-900 py-2 px-4 rounded hover:bg-gray-300 cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            <a href="/products/create" class="bg-transparent border border-gray-300 text-gray-900 py-2 px-4 rounded hover:bg-gray-300">Add Products</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-gray-700 text-center p-4 shadow-md mt-8">
        <div class="container mx-auto">
            <p>&copy; 2024 Pleaground. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
