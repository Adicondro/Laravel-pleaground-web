<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function startPomodoros(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            @if(isset($pomodoro))
                var pomodoro = {{ $pomodoro }};
                var display = document.querySelector('#countdown');
                startPomodoros(pomodoro, display);
            @endif
        };
    </script>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

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
    <div class="flex-grow flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4 text-center text-indigo-600">Pomodoros</h1>

            <form action="{{ route('pomodoros.start') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="time" class="block text-sm font-medium text-gray-700">Enter time in seconds:</label>
                    <input type="number" id="time" name="time" min="1" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">Start Pomodoros</button>
                </div>
            </form>

            <div class="text-center">
                <h2 class="text-xl font-semibold text-gray-700">Countdown: <span id="countdown">00:00</span></h2>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white text-gray-700 text-center p-4 shadow-md">
        <div class="container mx-auto">
            <p>&copy; 2024 Pleaground. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
