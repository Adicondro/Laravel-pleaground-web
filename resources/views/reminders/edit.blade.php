<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reminder</title>
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
                <a href="/login" class="text-gray-700 hover:text-gray-900">Login</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto p-6 max-w-lg">
        <h1 class="text-3xl font-extrabold mb-4 text-center text-indigo-600">Edit Reminder</h1>

        <form action="/reminders/{{$Reminder->id}}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="goals" class="block text-sm font-medium text-gray-700">Goals</label>
                <input type="text" name="goals" id="goals" value="{{$Reminder->goals}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="inspiration" class="block text-sm font-medium text-gray-700">Who Are You Inspired By</label>
                <input type="text" name="inspiration" id="inspiration" value="{{$Reminder->inspiration}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="smallest_move" class="block text-sm font-medium text-gray-700">What's your smallest move</label>
                <input type="text" name="smallest_move" id="smallest_move" value="{{$Reminder->smallest_move}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="reward" class="block text-sm font-medium text-gray-700">What Reward You Wanna Get</label>
                <input type="text" name="reward" id="reward" value="{{$Reminder->reward}}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            
            <div class="flex justify-end">
                <input type="submit" value="Save" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-gray-700 text-center p-4 shadow-md mt-8">
        <div class="container mx-auto">
            <p>&copy; 2024 Pleaground. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
