@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Data Pertanian</p>
    </header>

    <!-- Section Statistik + Search -->
    <div class="px-1 mt-5 max-w-[1400px] mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="relative bg-[#E3F2FD] p-4 rounded-xl shadow-sm">
         <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">1.230 km</h2>
        <p class="text-gray-600 text-sm">Panjang Jalan Baru</p>
        </div>

        <!-- Card 2 -->
        <div class="relative bg-[#E3F2FD] p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">78%</h2>
        <p class="text-gray-600 text-sm">Jembatan Baik</p>
        </div>

        <!-- Card 3 -->
        <div class="relative bg-[#E3F2FD] p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">12.000 ha</h2>
        <p class="text-gray-600 text-sm">Luas Lahan Pertanian</p>
        </div>

        <!-- Card 4 -->
        <div class="relative bg-[#E3F2FD] p-4 rounded-xl shadow-sm">
        <!-- Icon panah -->
        <a href="#" class="absolute top-3 right-3">
        <!-- Heroicons Arrow Top Right -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h9m0 0v9m0-9L6 18" /></svg></a>
        <h2 class="text-xl font-bold">540 unit</h2>
        <p class="text-gray-600 text-sm">Fasilitas Kesehatan</p>
        </div>

        <!-- Search -->
        <div class="flex items-center justify-end">
      <div class="relative w-full md:w-60 lg:w-72">
        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm">🔍</span>
        <input
          type="text"
          placeholder="Search..."
          class="w-full pl-9 pr-3 py-1.5 rounded-lg border border-[#BBDEFB] focus:ring-2 focus:ring-blue-400 outline-none text-sm bg-white">
        </div>
    </div>
</div>

<div class="w-full">
    <h2 class="font-semibold text-lg mb-4">Pantau kondisi dan Detail Data Pertanian Wilayah Anda </h2>

    <!-- Filter -->
    <div class="mb-4">
        <select class="border rounded px-3 py-2">
            <option value="">Filter Pertahun</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
        </select>
    </div>

    <!-- Tabel Data Pertanian -->
    <div class="bg-white p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M26.6658 2.22222C26.6658 0.994444 23.3458 0 19.9991 0C16.6525 0 13.3325 0.994444 13.3325 2.22222L12.3858 5.37889C12.778 5.43889 13.2102 5.50222 13.6669 5.56556C15.6625 5.84333 18.1002 6.11111 19.9991 6.11111C21.8991 6.11111 24.3358 5.84222 26.3314 5.56667C26.788 5.50222 27.2202 5.43889 27.6125 5.37889L26.6658 2.22222ZM28.4291 7.50111C27.9091 7.58333 27.2991 7.67556 26.6358 7.76778C24.6214 8.04556 22.058 8.33333 19.9991 8.33333C17.9391 8.33333 15.3769 8.04667 13.3625 7.76667C12.7639 7.68375 12.1661 7.59523 11.5691 7.50111C7.92691 8.30889 5.55469 9.62444 5.55469 11.1111C5.55469 13.5667 12.0214 15.5556 19.9991 15.5556C27.9769 15.5556 34.4436 13.5667 34.4436 11.1111C34.4436 9.62444 32.0714 8.30889 28.4291 7.50111Z" fill="#FFD400"/>
        <path d="M11.1133 14.6159C11.1584 16.9431 12.1145 19.1598 13.7763 20.7897C15.438 22.4196 17.6728 23.3326 20.0005 23.3326C22.3282 23.3326 24.563 22.4196 26.2247 20.7897C27.8865 19.1598 28.8427 16.9431 28.8877 14.6159C28.144 14.7926 27.3939 14.9409 26.6388 15.0603C26.4872 16.7163 25.7222 18.2557 24.4939 19.3767C23.2656 20.4976 21.6628 21.119 19.9999 21.119C18.3371 21.119 16.7342 20.4976 15.506 19.3767C14.2777 18.2557 13.5127 16.7163 13.3611 15.0603C12.6064 14.9409 11.8566 14.7926 11.1133 14.6159Z" fill="#F0CA93"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4403 32.2222C11.6448 33.5977 10.3855 34.645 8.88811 35.1767V38.8889C8.88811 39.2778 8.82144 39.6522 8.69922 40H39.9992V33.3333C39.9992 27.3144 26.6748 25.5555 19.9992 25.5555C17.7695 25.5664 15.5427 25.72 13.3326 26.0155V32.2222H12.4403ZM19.9992 33.3333C18.505 33.3318 17.0152 33.1716 15.5548 32.8555V28C17.1848 27.8467 18.7192 27.7778 19.9992 27.7778C21.8503 27.7778 24.2314 27.9211 26.6659 28.2578V32.2222C26.6514 32.2278 23.877 33.3333 19.9992 33.3333ZM31.8914 29.3244C31.2766 29.1496 30.6459 28.9907 29.9992 28.8478V32.2222H32.2214C32.5161 32.2222 32.7987 32.3393 33.0071 32.5476C33.2155 32.756 33.3326 33.0386 33.3326 33.3333V37.7778H37.777V33.3333C37.777 32.7711 37.5014 32.12 36.4825 31.3589C35.4381 30.5789 33.857 29.8867 31.8914 29.3244Z" fill="#38B000"/>
        <path d="M2.22222 21.1111C2.22222 20.8164 2.10516 20.5338 1.89679 20.3254C1.68841 20.1171 1.4058 20 1.11111 20C0.816426 20 0.533811 20.1171 0.325437 20.3254C0.117063 20.5338 0 20.8164 0 21.1111V28.8889C0 30.0676 0.468252 31.1981 1.30175 32.0316C2.13524 32.8651 3.2657 33.3333 4.44444 33.3333V38.8889C4.44444 39.1836 4.56151 39.4662 4.76988 39.6746C4.97825 39.8829 5.26087 40 5.55556 40C5.85024 40 6.13286 39.8829 6.34123 39.6746C6.5496 39.4662 6.66667 39.1836 6.66667 38.8889V33.3333C7.84541 33.3333 8.97587 32.8651 9.80936 32.0316C10.6429 31.1981 11.1111 30.0676 11.1111 28.8889V21.1111C11.1111 20.8164 10.994 20.5338 10.7857 20.3254C10.5773 20.1171 10.2947 20 10 20C9.70531 20 9.4227 20.1171 9.21433 20.3254C9.00595 20.5338 8.88889 20.8164 8.88889 21.1111V28.8889C8.88889 29.4783 8.65476 30.0435 8.23801 30.4602C7.82127 30.877 7.25604 31.1111 6.66667 31.1111V21.1111C6.66667 20.8164 6.5496 20.5338 6.34123 20.3254C6.13286 20.1171 5.85024 20 5.55556 20C5.26087 20 4.97825 20.1171 4.76988 20.3254C4.56151 20.5338 4.44444 20.8164 4.44444 21.1111V31.1111C3.85507 31.1111 3.28984 30.877 2.8731 30.4602C2.45635 30.0435 2.22222 29.4783 2.22222 28.8889V21.1111Z" fill="black"/>
        </svg><h3 class="font-semibold">Tabel Data Pertanian</h3>
        </div>

        <table class="w-full text-sm">
            <thead class="text-left border-b">
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <th class="py-2">Nama Infrastruktur</th>
                    <th>Lokasi</th>
                    <th>Jenis Infrastruktur</th>
                    <th>Tahun Pembangunan</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            </thead>
            <tbody class="divide-y">
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <td class="py-2">Jalan Nasional 1</td>
                    <td>Sekadau Hilir</td>
                    <td>Jalan Raya</td>
                    <td>2021</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Baik</span></td>
                </tr>
            </thead>
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <td class="py-2">Jembatan Sungai Kapuas</td>
                    <td>Sekadau Hilir</td>
                    <td>Jembatan Baja</td>
                    <td>2022</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">Perlu Perbaikan</span></td>
                </tr>
            </thead>
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <td class="py-2">Jalan Desa Sungai Durian</td>
                    <td>Nanga Taman</td>
                    <td>Jalan Desa</td>
                    <td>2023</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Baik</span></td>
                </tr>
            </thead>
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <td class="py-2">Jembatan Sekadau-Sintang</td>
                    <td>Nanga Mahap</td>
                    <td>Jembatan Gantung</td>
                    <td>2024</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-yellow-200 text-[#FF9800] font-semibold">Sedang Diperbaiki</span></td>
                </tr>
            </thead>
            </tbody>
        </table>
    </div>

@endsection
