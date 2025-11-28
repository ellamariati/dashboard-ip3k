@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Proyek Pembangunan</p>
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

 <!-- Jumlah Proyek -->
     <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <h2 class="font-semibold mb-4 text-lg">Jumlah Proyek</h2>
        <div class="w-full flex justify-center">
        <canvas id="jumlahProyekChart" class="max-h-[380px] w-[380px]"></canvas>
        </div>
    </div>

    <!-- Proporsi Jumlah Proyek per Sektor -->
     <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5] max-w-xl">
        <h2 class="font-semibold mb-4 text-lg">Proporsi Jumlah Proyek per Sektor</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="donutLahan" class="max-h-[220px] w-[220px] mr-10"></canvas>
        </div>
    </div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

        // Chart 1 - Batang
        const ctx1 = document.getElementById('jumlahProyekChart');
        new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['2020','2021','2022','2023','2024','2025','2026','2027'],
            datasets: [
                {
                    label: 'Pendidikan',
                    data: [1500, 2000, 2600, 3200, 3500, 3800, 4300, 4800],
                    backgroundColor: '#FF9800', 
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Kesehatan',
                    data: [1800, 2100, 2400, 3000, 3400, 3900, 4200, 4600],
                    backgroundColor: '#F44336',
                    barThickness: 15,
                    borderRadius: 6
                },
                {
                    label: 'Pertanian',
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