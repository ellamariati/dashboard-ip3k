@extends('Layouts.app')

@section('content')
<div class="p-6">
    <!-- HEADER -->
    <div class="bg-[#1565D8] text-white rounded-2xl p-6 mb-6">
        <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
        <p class="text-sm opacity-90">Data Infrastruktur</p>
    </div>

    <!-- CARD SUMMARY -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-2xl font-bold">1.250</p>
            <p class="text-sm text-gray-600">Total Infrastruktur</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-2xl font-bold">78</p>
            <p class="text-sm text-gray-600">Butuh Perbaikan</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-2xl font-bold">Jalan</p>
            <p class="text-sm text-gray-600">Tipe Terbanyak</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow text-center">
            <p class="text-2xl font-bold">540</p>
            <p class="text-sm text-gray-600">Dalam Kondisi Baik</p>
        </div>
    </div>

    <h2 class="font-semibold text-lg mb-4">Pantau kondisi dan detail infrastruktur wilayah Anda</h2>

    <!-- ================= SECTION 1 TRANSPORTASI ================= -->
    <div class="bg-white p-6 rounded-xl shadow mb-6 border border-blue-200">
        <div class="flex items-center gap-2 mb-3">
            <img src="/icons/transport.png" class="w-6" alt="">
            <h3 class="font-semibold">Transportasi & Jalan</h3>
        </div>

        <table class="w-full text-sm">
            <thead class="text-left border-b">
                <tr>
                    <th class="py-2">Nama Infrastruktur</th>
                    <th>Lokasi</th>
                    <th>Jenis Infrastruktur</th>
                    <th>Tahun Pembangunan</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <tr>
                    <td class="py-2">Jalan Nasional 1</td>
                    <td>Sekadau Hilir</td>
                    <td>Jalan Raya</td>
                    <td>2021</td>
                    <td><span class="px-3 py-1 text-xs rounded-lg bg-green-200 text-green-700">Baik</span></td>
                </tr>
                <tr>
                    <td>Jembatan Sungai Kapuas</td>
                    <td>Sekadau Hilir</td>
                    <td>Jembatan Baja</td>
                    <td>2022</td>
                    <td><span class="px-3 py-1 text-xs rounded-lg bg-red-200 text-red-700">Perlu Perbaikan</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ================= SECTION 2 ENERGI & UTILITAS ================= -->
    <div class="bg-white p-6 rounded-xl shadow mb-6 border border-blue-200">
        <h3 class="font-semibold mb-3">Energi & Utilitas</h3>
        <table class="w-full text-sm">
            <thead class="border-b">
                <tr>
                    <th class="py-2">Nama Infrastruktur</th>
                    <th>Lokasi</th>
                    <th>Jenis Infrastruktur</th>
                    <th>Tahun Pembangunan</th>
                    <th>Kondisi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <tr>
                    <td>PLTU Sungai Asik</td>
                    <td>Nanga Mahap</td>
                    <td>Pembangkit Listrik</td>
                    <td>2021</td>
                    <td><span class="px-3 py-1 text-xs rounded-lg bg-green-200 text-green-700">Aktif</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
