@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Pemetaan SIG</p>
    </header>

    <!-- Section Statistik + Search -->
    <div class="px-1 mt-5 mx-auto w-full">
        <!-- Search -->
            <div class="flex justify-between items-center mb-4">
            <div class="relative w-full md:w-60 lg:w-72">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm">🔍</span>
            <input
            type="text"
            placeholder="Search..."
            class="w-full pl-9 pr-3 py-1.5 rounded-lg border border-[#BBDEFB] focus:ring-2 focus:ring-blue-400 outline-none text-sm bg-white">
            </div>
        </div>
    
    <!-- Grid Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="relative bg-[#E3F2FD] w-full p-4 rounded-xl shadow-sm">
         <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">1.230 km</h2>
        <p class="text-gray-600 text-sm">Panjang Jalan Baru</p>
        </div>

        <!-- Card 2 -->
        <div class="relative bg-[#E3F2FD] w-full p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">78%</h2>
        <p class="text-gray-600 text-sm">Jembatan Baik</p>
        </div>

        <!-- Card 3 -->
        <div class="relative bg-[#E3F2FD] w-full p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">12.000 ha</h2>
        <p class="text-gray-600 text-sm">Luas Lahan Pertanian</p>
        </div>

        <!-- Card 4 -->
        <div class="relative bg-[#E3F2FD] w-full p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">540 unit</h2>
        <p class="text-gray-600 text-sm">Fasilitas Kesehatan</p>
        </div>
    </div>
</div>

<div class="bg-white p-4 rounded-xl shadow mb-6 border border-[#1E88E5]">
    <h2 class="font-semibold mb-4 text-lg">Peta SIG</h2>

    <!-- Container Peta -->
    <div id="map" class="w-full rounded-xl" style="height: 500px;"></div>
</div>

@endsection

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    var map = L.map('map').setView([-0.014, 110.907], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // --- Layer Groups ---
    var layerPertanian = L.layerGroup();
    var layerKesehatan = L.layerGroup();
    var layerJembatan  = L.layerGroup();

    // --- Contoh Icons ---
    var iconPertanian = L.icon({
    iconUrl: `data:image/svg+xml;utf8,
    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect width="50" height="50" fill="#F7F9FB"/>
      <path d="M16.5947 1.52872C15.5682 3.15928 ..." fill="#38B000"/>
    </svg>`,
    iconSize: [40, 40],   // sesuaikan aja
    iconAnchor: [20, 40], // titik bawah icon
    popupAnchor: [0, -40]
});
    var iconKesehatan = L.icon({ iconUrl: '/icons/kesehatan.png', iconSize: [30, 30] });
    var iconJembatan  = L.icon({ iconUrl: '/icons/jembatan.png',  iconSize: [30, 30] });

    // --- Tambah Marker ---
    L.marker([-0.02, 110.90], { icon: iconPertanian }).bindPopup("Area Pertanian").addTo(layerPertanian);
    L.marker([-0.03, 110.92], { icon: iconKesehatan }).bindPopup("Fasilitas Kesehatan").addTo(layerKesehatan);
    L.marker([-0.01, 110.905], { icon: iconJembatan }).bindPopup("Jembatan").addTo(layerJembatan);

    // --- Tambah Semua Layer ---
    layerPertanian.addTo(map);
    layerKesehatan.addTo(map);
    layerJembatan.addTo(map);

    // --- Filter Layer ---
    L.control.layers(null, {
        "Area Pertanian": layerPertanian,
        "Fasilitas Kesehatan": layerKesehatan,
        "Jembatan": layerJembatan,
    }, { collapsed: false }).addTo(map);
</script>
@endpush
