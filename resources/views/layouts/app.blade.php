<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Admin Panel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-700 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg">{{ config('app.name', 'Admin Panel') }}</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
