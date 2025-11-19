<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IP3K</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex">
        {{-- Sidebar --}}
        <aside class="w-64 bg-blue-900 text-white min-h-screen p-4">
    <div class="flex items-center justify-start gap-1 mb-2">
    <img src="{{ asset('images/logo-skd.png') }}" alt="Logo Sekadau" class="w-15 ml-4">
    <img src="{{ asset('images/logo-ip3k.png') }}" alt="Logo IP3K" class="w-24">
    </div>
            <nav class="space-y-2">
                <a href="/" class="block py-2 px-3 rounded hover:bg-blue-700">🏠 Beranda</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">📊 Data Infrastruktur</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🌾 Data Pertanian</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🏥 Fasilitas Publik</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🗺️ Pemetaan SIG</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🏗️ Proyek Pembangunan</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">ℹ️ Tentang Dashboard</a>
            </nav>
        </aside>

        {{-- Konten utama --}}
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
@stack('scripts')
</body>
</html>
