@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Proyek Pembangunan</p>
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

 <!-- Jumlah Proyek -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> 
     <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <h2 class="font-semibold mb-4 text-lg">Jumlah Proyek</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="jumlahProyekChart" class="max-h-[220px] w-[220px]"></canvas>
        </div>
    </div>

    <!-- Proporsi Jumlah Proyek per Sektor -->
     <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <h2 class="font-semibold mb-4 text-lg">Proporsi Jumlah Proyek per Sektor</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="donutLahan" class="max-h-[220px] w-[220px] mr-10"></canvas>
        </div>
    </div>
</div>

<h2 class="font-semibold text-lg mb-4 w-full ">Pantau kondisi dan detail data proyek wilayah Anda </h2>

        <!-- Filter -->
        <div class="mb-4 w-full">
            <button id="dropdownButton" class="w-70 flex items-center justify-between border border-blue-400 px-4 py-2 rounded-lg bg-[#F8FBFF]">
            <!-- Icon kiri -->
            <div class="flex items-center gap-3">
                <svg width="26" height="26" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.7286 23.6842L35.8189 4.26316C36.188 3.71455 36.3545 3.0191 36.2821 2.32876C36.2097 1.63843 35.9043 1.00933 35.4326 0.578947C35.0511 0.223805 34.5808 0.0207517 34.0917 0H2.27513C1.76251 0.00344317 1.26595 0.207472 0.86611 0.578947C0.394395 1.00933 0.088972 1.63843 0.01658 2.32876C-0.0558121 3.0191 0.110713 3.71455 0.479766 4.26316L13.6382 23.6842V39.1316C13.5971 39.5297 13.6351 39.9335 13.7493 40.3121C13.8635 40.6906 14.0509 41.0339 14.2973 41.3158L18.8425 46.5789C19.2683 47.0691 19.8443 47.3442 20.4447 47.3442C21.0451 47.3442 21.6211 47.0691 22.0469 46.5789C22.2972 46.2995 22.4889 45.9573 22.6071 45.5786C22.7253 45.2 22.7669 44.7949 22.7286 44.3947V23.6842ZM27.2739 36.8421L38.6369 50L50 36.8421H27.2739Z" fill="#006400"/>
                </svg>
                <span class="font-semibold text-gray-700">Filter Perproyek</span>
            </div>
            <!-- Panah kanan -->
                <svg id="dropdownArrow" width="26" height="26" viewBox="0 0 24 24" fill="black" 
                    class="transition-transform duration-200">
                    <path d="M7 10l5 5 5-5H7z"/>
                </svg>
            </button>
            <!-- Menu dropdown -->
            <div id="dropdownMenu" class="hidden absolute left-112 right-0 mt-1 border border-blue-400 rounded-lg bg-white shadow-md max-w-sm w-30">
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Pendidikan</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Kesehatan</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Pertanian</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Jembatan</button>
                <button class="block w-full text-left px-2 py-2 hover:bg-blue-100">Jalan</button>
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

    <!-- Tabel Data Proyek -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.305 9.42L15.695 8.08C15.2459 7.7055 14.6798 7.50026 14.095 7.5H5C4.33696 7.5 3.70107 7.76339 3.23223 8.23223C2.76339 8.70107 2.5 9.33696 2.5 10V30C2.5 30.663 2.76339 31.2989 3.23223 31.7678C3.70107 32.2366 4.33696 32.5 5 32.5H35C35.663 32.5 36.2989 32.2366 36.7678 31.7678C37.2366 31.2989 37.5 30.663 37.5 30V12.5C37.5 11.837 37.2366 11.2011 36.7678 10.7322C36.2989 10.2634 35.663 10 35 10H18.905C18.3202 9.99974 17.7541 9.7945 17.305 9.42Z" fill="#1E88E5"/>
        <path d="M34.1925 26.0888L40 31.6788L36.575 34.9587L30.8087 29.37V28.4488L33.2425 26.0888H34.1925ZM35.1312 23.56L34.1313 22.6L29.19 27.3988V29.37L23.3825 35L20 31.6788L25.765 26.0888H27.7975L28.6025 25.3088L24.64 21.4587H23.3013L20.4012 18.62L23.1037 16L25.9925 18.8V20.11L30.005 23.95L32.7475 21.29L31.7587 20.28L33.0988 18.9688H30.3538L29.6838 18.3187L33.1 15L33.7812 15.6588V18.32L35.1325 16.9987L38.5163 20.28C38.7824 20.5386 38.9939 20.848 39.1383 21.1898C39.2828 21.5316 39.3572 21.8989 39.3572 22.27C39.3572 22.6411 39.2828 23.0084 39.1383 23.3502C38.9939 23.692 38.7824 24.0014 38.5163 24.26L36.4825 22.2487L35.1312 23.56Z" fill="#BBDEFB"/>
        </svg>
        <h3 class="font-semibold">Tabel Data Proyek</h3>
        </div>

            <table class="w-full text-sm">
            
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <th class="py-2">Nama Proyek</th>
                    <th>Lokasi</th>
                    <th>Anggaran</th>
                    <th>Realisasi</th>
                    <th>Progress</th>
                    <th>Kondisi</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                <tr>
                    <td class="py-2">Poyek A</td>
                    <td>Nanga Taman</td>
                    <td>Rp 500 jt</td>
                    <td>Rp 300 jt</td>
                    <td>70%</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-yellow-200 text-[#FF9800] font-semibold">
                            Sedang Dibangun
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Proyek B</td>
                    <td>Sekadau Hilir</td>
                    <td>Rp 1 M</td>
                    <td>Rp 1 M</td>
                    <td>100%</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">
                            Selesai
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Proyek C</td>
                    <td>Sekadau Hulu</td>
                    <td>Rp 750 jt</td>
                    <td>Rp 700 jt</td>
                    <td>90%</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-yellow-200 text-[#FF9800] font-semibold">
                            Sedang Dibangun
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Proyek D</td>
                    <td>Nanga Mahap</td>
                    <td>Rp 150 jt</td>
                    <td>Rp 50 jt</td>
                    <td>60%</td>
                    <td>
                        <span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">
                            Tertunda
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

        // Chart 1 - Batang
        const ctx1 = document.getElementById('jumlahProyekChart');
        new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Pendidikan','Kesehatan','Pertanian','Jembatan','Jalan'],
            datasets: [{
                label: 'Jumlah Proyek',
                data: [10, 20, 40, 50, 30],
                backgroundColor: [
                        '#FF9800', // Pendidikan
                        '#F44336', // Kesehatan
                        '#4CAF50', // Pertanian
                        '#5BC7E6', // Jembatan
                        '#FFD400'  // Jalan
                ],
                borderRadius: 6,               // rounded bar
                barThickness: 25               // ketebalan bar
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { beginAtZero: true }
            },
            plugins: {
                legend: {
                    display: false   // sembunyikan legend
                }
            }
        }
    });

    // Chart 2 - Donut
        const ctx2 = document.getElementById('donutLahan');
        const textInsidePlugin = {
        id: 'textInsidePlugin',
        afterDraw(chart) {
        const {ctx, data} = chart;
        const dataset = data.datasets[0];

        chart.getDatasetMeta(0).data.forEach((slice, index) => {
            const {x, y} = slice.tooltipPosition();
            const value = dataset.data[index];

            ctx.save();
            ctx.fillStyle = "#000";
            ctx.font = "bold 14px sans-serif";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.fillText(value + "%", x, y);
            ctx.restore();
        });
    }
};

    new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Pendidikan', 'Kesehatan', 'Pertanian', 'Jembatan', 'Jalan'],
                datasets: [{
                    data: [25, 10, 15, 30, 20],
                    backgroundColor: [
                        '#FF9800', // Pendidikan
                        '#F44336', // Kesehatan
                        '#4CAF50', // Pertanian
                        '#5BC7E6', // Jembatan
                        '#FFD400'  // Jalan
                    ],
                    //borderWidth: 10,
                    hoverOffset: 8
                }]
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'right',
                        labels:{
                            usePointStyle: true,
                            pointStyle: "circle",
                            padding: 12
                        }
                    }
                },
                cutout: '1%'
            },
            plugins: [textInsidePlugin]
        });
});
</script>
@endpush
@endsection