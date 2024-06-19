<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hover-grow:hover {
            transform: scale(1.05);
        }
    </style>
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
    <div class="container mx-auto p-6 max-w-5xl">
        <h1 class="text-3xl font-extrabold mb-4 text-center text-indigo-600">My Reminders</h1>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-3 px-5 bg-indigo-100 text-indigo-600">Goals</th>
                        <th class="py-3 px-5 bg-indigo-100 text-indigo-600">Who Are You Inspired By</th>
                        <th class="py-3 px-5 bg-indigo-100 text-indigo-600">What's your smallest move</th>
                        <th class="py-3 px-5 bg-indigo-100 text-indigo-600">What Reward You Wanna Get</th>
                        <th class="py-3 px-5 bg-indigo-100 text-indigo-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reminders as $Reminder)
                        <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                            <td class="border px-5 py-3">{{$Reminder -> goals}}</td>
                            <td class="border px-5 py-3">{{$Reminder -> inspiration}}</td>
                            <td class="border px-5 py-3">{{$Reminder -> smallest_move}}</td>
                            <td class="border px-5 py-3">{{$Reminder -> reward}}</td>
                            <td class="border px-5 py-3 flex space-x-2">
                                <a href="/reminders/{{$Reminder->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover-grow">Edit</a>
                                <form action="/reminders/{{$Reminder->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hover-grow">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6 text-center">
            <a href="/reminders/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded hover-grow transition duration-150 ease-in-out">Add Goals</a>
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
