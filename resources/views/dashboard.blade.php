@extends('layouts.app')

@section('content')
    <header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Beranda</p>
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

    <!-- Gird Card -->
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

    <!-- BOX Data -->
   <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> 
     <!-- Tren Panjang Jalan -->
    <div class="bg-[#E3F2FD] w-full p-6 rounded-xl shadow mb-6">
        <h2 class="font-semibold mb-4 text-lg">Tren Panjang Jalan</h2>
        <canvas id="trenJalanChart" class="max-h-[220px] w-[220px] mr-10"></canvas>
    </div>
    <!--Status Jembatan-->
    <div class="bg-[#E3F2FD] w-full p-6 rounded-xl shadow mb-6">
    <h2 class="font-semibold mb-4 text-lg">Status Jembatan</h2>
        <div class="flex items-start gap-6 h-full justify-end">
        <canvas id="statusJembatanChart" class="max-h-[220px] w-[220px]"></canvas>
    </div>
</div>
</div>
    <!-- Hasil Panen-->
    <div class="bg-[#dff0ff] w-full p-6 rounded-xl shadow mb-6 h-80">
    <h2 class="text-lg font-semibold mb-4">Hasil Panen</h2>
    <canvas id="hasilPanenChart" class="max-h-[220px] w-[220px]"></canvas>
</div>


    <!-- Daftar Proyek -->
<div class="bg-[#E3F2FD] w-full p-6 rounded-xl shadow mb-6 h-80">
  <h2 class="text-lg font-semibold mb-4">Daftar Proyek</h2>

  <div class="overflow-x-auto">
    <table class="w-full text-sm border-collapse">
      <thead class="bg-blue-50">
        <tr class="text-left">
          <th class="px-4 py-2 font-medium border border-gray-300">Nama Proyek</th>
          <th class="px-4 py-2 font-medium border border-gray-300">OPD</th>
          <th class="px-4 py-2 font-medium border border-gray-300">Status</th>
          <th class="px-4 py-2 font-medium border border-gray-300">Capaian</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-4 py-2 border border-gray-300">Pembangunan Jalan A</td>
          <td class="px-4 py-2 border border-gray-300">Panaga</td>
          <td class="px-4 py-2 border border-gray-300 text-yellow-600 font-semibold">Sedang Berjalan</td>
          <td class="px-4 py-2 border border-gray-300 font-semibold">78.00%</td>
        </tr>
        <tr>
          <td class="px-4 py-2 border border-gray-300">Rehebilitasi Jembatan X</td>
          <td class="px-4 py-2 border border-gray-300">Gafas</td>
          <td class="px-4 py-2 border border-gray-300 text-green-600 font-semibold">Selesai</td>
          <td class="px-4 py-2 border border-gray-300 font-semibold">65.00%</td>
        </tr>
        <tr>
          <td class="px-4 py-2 border border-gray-300">Pengembangan Lahan Y</td>
          <td class="px-4 py-2 border border-gray-300">Banu</td>
          <td class="px-4 py-2 border border-gray-300 text-red-600 font-semibold">Tertunda</td>
          <td class="px-4 py-2 border border-gray-300 font-semibold">30.00%</td>
        </tr>
        <tr>
          <td class="px-4 py-2 border border-gray-300">Pembangunan Klinik Z</td>
          <td class="px-4 py-2 border border-gray-300">Cinric</td>
          <td class="px-4 py-2 border border-gray-300 text-yellow-600 font-semibold">Sedang Berjalan</td>
          <td class="px-4 py-2 border border-gray-300 font-semibold">38.00%</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<!-- Pemetaan SIG -->
<div class="bg-[#E3F2FD] p-6 rounded-xl shadow mb-6 h-80">🗺️ Pemetaan SIG</div>
</div>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    // Chart 1 - Batang
    
    const dataJalan = [
      { tahun: '2020', panjang: 852.85 },
      { tahun: '2021', panjang: 856.50 },
      { tahun: '2022', panjang: 852.79 }
    ];

    const ctx1 = document.getElementById('trenJalanChart');

    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: dataJalan.map(d => d.tahun),
        datasets: [{
          label: 'Panjang Jalan (KM)',
          data: dataJalan.map(d => d.panjang),
          backgroundColor: [
            '#4CAF50', // 2020
            '#F44336', // 2021
            '#FF9800'  // 2022
          ],
          borderRadius: 6,
          barThickness: 30
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
            display: false
          }
        }
      }
});

// Chart 2 - Donut
const ctx2 = document.getElementById('statusJembatanChart');
new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Baik', 'Rusak Ringan', 'Rusak Berat'],
        datasets: [{
            data: [75, 15, 10],
            backgroundColor: [
                '#4CAF50', // Baik
                '#FF9800', // Rusak Ringan
                '#F44336'  // Rusak Berat
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
        cutout: '65%'
    }
});

// Chart 3 - Line
const ctx = document.getElementById('hasilPanenChart').getContext('2d');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["2020", "2021", "2022", "2023", "2024", "2025", "2026", "2027"],
    datasets: [{
      label: "Hasil Panen",
      data: [1000, 1200, 2000, 3200, 3500, 4200, 4500, 4400],
      borderColor: "#000",              
      borderWidth: 1,
      tension: 0.3,                      
      pointRadius: 6,                    
      pointBackgroundColor: [
        "#4CAF50", "#FFC107", "#F44336", "#4CAF50",
        "#F44336", "#4CAF50", "#FFC107", "#4CAF50"
      ]                                 
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      legend: { display: false }         // sembunyikan legend
    }
  }
});

});
</script>

@endpush

@endsection
