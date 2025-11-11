<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css') <!-- kalau pakai Tailwind + Vite -->
</head>
<body class="bg-gray-100">
    <header class="p-4 bg-blue-600 text-white">
        <h1>Dashboard IP3K</h1>
    </header>

    <main class="p-4">
        @yield('content')
    </main>
</body>
</html>
