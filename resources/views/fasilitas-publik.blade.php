@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Fasilitas Publik</p>
    </header>

    <!-- Section Statistik + Search -->
    <div class="px-1 mt-5 max-w-[1400px] min-w-[945px] mx-auto w-full">
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

<h2 class="font-semibold text-lg mb-4 w-full ">Pantau kondisi dan detail data fasilitas wilayah Anda </h2>

        <!-- Filter -->
        <div class="mb-4 w-full">
            <button id="dropdownButton" class="w-70 flex items-center justify-between border border-blue-400 px-4 py-2 rounded-lg bg-[#F8FBFF]">
            <!-- Icon kiri -->
            <div class="flex items-center gap-3">
                <svg width="26" height="26" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.7286 23.6842L35.8189 4.26316C36.188 3.71455 36.3545 3.0191 36.2821 2.32876C36.2097 1.63843 35.9043 1.00933 35.4326 0.578947C35.0511 0.223805 34.5808 0.0207517 34.0917 0H2.27513C1.76251 0.00344317 1.26595 0.207472 0.86611 0.578947C0.394395 1.00933 0.088972 1.63843 0.01658 2.32876C-0.0558121 3.0191 0.110713 3.71455 0.479766 4.26316L13.6382 23.6842V39.1316C13.5971 39.5297 13.6351 39.9335 13.7493 40.3121C13.8635 40.6906 14.0509 41.0339 14.2973 41.3158L18.8425 46.5789C19.2683 47.0691 19.8443 47.3442 20.4447 47.3442C21.0451 47.3442 21.6211 47.0691 22.0469 46.5789C22.2972 46.2995 22.4889 45.9573 22.6071 45.5786C22.7253 45.2 22.7669 44.7949 22.7286 44.3947V23.6842ZM27.2739 36.8421L38.6369 50L50 36.8421H27.2739Z" fill="#006400"/>
                </svg>
                <span class="font-semibold text-gray-700">Filter Perfasilitas</span>
            </div>
            <!-- Panah kanan -->
                <svg id="dropdownArrow" width="26" height="26" viewBox="0 0 24 24" fill="black" 
                    class="transition-transform duration-200">
                    <path d="M7 10l5 5 5-5H7z"/>
                </svg>
            </button>
            <!-- Menu dropdown -->
            <div id="dropdownMenu" class="hidden absolute left-112 right-0 mt-1 border border-blue-400 rounded-lg bg-white shadow-md max-w-sm w-30">
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Sekolah</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Rumah Sakit</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Ruang Hijau</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Jembatan</button>
            </div>
        </div>

        <script>
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu   = document.getElementById("dropdownMenu");
            const dropdownArrow  = document.getElementById("dropdownArrow");

            dropdownButton.addEventListener("click", () => {
                dropdownMenu.classList.toggle("hidden");
                dropdownArrow.classList.toggle("rotate-180");
            });
        </script>

    <!-- Tabel Data Fasilitas Publik -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.66536 9.88889C10.6109 9.88889 12.9987 7.89904 12.9987 5.44444C12.9987 2.98985 10.6109 1 7.66536 1C4.71985 1 2.33203 2.98985 2.33203 5.44444C2.33203 7.89904 4.71985 9.88889 7.66536 9.88889Z" fill="#2F88FF" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M31.6654 9.88889C34.6109 9.88889 36.9987 7.89904 36.9987 5.44444C36.9987 2.98985 34.6109 1 31.6654 1C28.7198 1 26.332 2.98985 26.332 5.44444C26.332 7.89904 28.7198 9.88889 31.6654 9.88889Z" fill="#2F88FF" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M1 16.5555H14.3333L11.6667 41H3.66667L1 16.5555Z" fill="#2F88FF" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M24.9987 16.5555H38.332L40.9987 28.7778H36.9987L35.6654 41H27.6654L26.332 28.7778H22.332L24.9987 16.5555Z" fill="#2F88FF" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h3 class="font-semibold">Tabel Fasilitas Publik</h3>
        </div>

            <table class="w-full text-sm">
            
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <th class="py-2">Nama Fasilitas</th>
                    <th>Lokasi</th>
                    <th>Jenis Infrastruktur</th>
                    <th>Tahun Pembangunan</th>
                    <th>Kondisi</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                <tr>
                    <td class="py-2">RSUD Sekadau</td>
                    <td>Sekadau Hilir</td>
                    <td>Rumah Sakit</td>
                    <td>2021</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">
                            Baik
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">SMPN 1 Sekadau</td>
                    <td>Sekadau Hilir</td>
                    <td>Sekolah Menengah Pertama</td>
                    <td>2022</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">
                            Perlu Renovasi
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Taman Kota Hijau</td>
                    <td>Sekadau Hulu</td>
                    <td>Ruang Terbuka</td>
                    <td>2023</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">
                            Baik
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Jembatan Kapuas</td>
                    <td>Belitang Hulu</td>
                    <td>Infrastruktur</td>
                    <td>2024</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-yellow-200 text-[#FF9800] font-semibold">
                            Sedang Diperbaiki
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Jumlah Fasilitas Publik Perjenis -->
     <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <h2 class="font-semibold mb-4 text-lg">Jumlah Fasilitas Publik Perjenis Kabupaten Sekadau</h2>
        <div class="w-full flex justify-center">
        <canvas id="jumlahFasilitasPublikPerjenisKabupatenSekadauChart" class="max-h-[380px] w-[380px]"></canvas>
        </div>
    </div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
    <!-- Distribusi Kondisi Fasilitas Publik -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
    <h2 class="font-semibold mb-4 text-lg">Distribusi Kondisi Fasilitas Publiki</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="donutFasilitasPublik" class="max-h-[220px] w-[220px] mr-10"></canvas>
        </div>
    </diV>
    <!-- Pemetaan Fasilitas Publik Kabupaten Sekadau -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
    <h2 class="font-semibold mb-4 text-lg">Pemetaan Fasilitas Publik Kabupaten Sekadau</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="pemetaanFasilitasPublikChart" class="max-h-[220px] w-[220px] mr-10"></canvas>
        </div>
    </diV>
</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

        // Chart 1 - Batang
        const ctx1 = document.getElementById('jumlahFasilitasPublikPerjenisKabupatenSekadauChart');
        new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['2020','2021','2022','2023','2024','2025','2026','2027'],
            datasets: [
                {
                    label: 'Sekolah',
                    data: [1500, 2000, 2600, 3200, 3500, 3800, 4300, 4800],
                    backgroundColor: '#FF9800', 
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Rumah Sakit',
                    data: [1800, 2100, 2400, 3000, 3400, 3900, 4200, 4600],
                    backgroundColor: '#F44336',
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Ruang Hijau',
                    data: [1700, 2300, 2900, 3300, 3700, 4300, 4600, 4800],
                    backgroundColor: '#4CAF50',
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Jembatan',
                    data: [1600, 2500, 3000, 3500, 3800, 4200, 4600, 5000],
                    backgroundColor: '#5BC7E6',
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Jalan',
                    data: [1600, 2500, 3000, 3500, 3800, 4200, 4600, 5000],
                    backgroundColor: '#FFD400',
                    barThickness: 15,
                    borderRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'right',
                    labels:{
                        usePointStyle: true,
                        pointStyle: "rect",
                        padding: 12
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

        // Chart 2 - Donut
        const ctx2 = document.getElementById('donutFasilitasPublik');
        new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Baik', 'Sedang Diperbaiki', 'Perlu Renovasi'],
            datasets: [{
                data: [25, 25, 25],
                backgroundColor: [
                    '#DBFADD', // Baik
                    '#F5BCBF', // Sedang Diperbaiki
                    '#EEE698'  // Perlu Renovasi
                ],
                hoverOffset: 8
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,   // HILANGKAN LEGEND DEFAULT
                    position: 'right',
                    labels:{
                    usePointStyle: true,   // pakai style point (lingkaran)
                    pointStyle: "circle",  // bentuk bulat
                    padding: 12            // jarak antar item
                    }
                }
            },
            cutout: '1%'
        }
    });

});
</script>
@endpush
@endsection