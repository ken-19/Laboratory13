<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome, {{ auth()->user()->name }}!</h1>
        <p class="text-gray-600 mb-6">You are logged in as <span class="font-medium text-blue-600">{{ auth()->user()->email }}</span>.</p>

        <form method="POST" action="/logout" class="mt-6">
            @csrf
            <button type="submit"
                class="px-6 py-2 bg-red-500 text-white font-semibold rounded hover:bg-red-600 transition duration-200">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
