@extends('layouts.app')

@section('content')
    <header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Data Infrastruktur</p>
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

<h2 class="font-semibold text-lg mb-4 w-full">Pantau kondisi dan detail data infrastruktur wilayah Anda</h2>

<!-- ================= SECTION 1 TRANSPORTASI ================= -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M35.1229 6.55143C34.5872 6.01557 33.8606 5.71445 33.1029 5.71429H21.4286V0H18.5714V14.2857H6.89714C6.13944 14.2859 5.41284 14.587 4.87714 15.1229L0 20L4.87714 24.8771C5.41284 25.413 6.13944 25.7141 6.89714 25.7143H18.5714V40H21.4286V17.1429H33.1029C33.8606 17.1427 34.5872 16.8416 35.1229 16.3057L40 11.4286L35.1229 6.55143ZM6.89714 22.8571L4.04 20L6.89714 17.1429H18.5714V22.8571H6.89714ZM33.1029 14.2857H21.4286V8.57143H33.1029L35.96 11.4286L33.1029 14.2857Z" fill="#F44336"/>
        </svg>
        <h3 class="font-semibold">Transportasi & Jalan</h3>
        </div>

        <table class="w-full text-sm">
            <thead class="text-left border-b border-[#1E88E5]">
                <tr>
                    <th class="py-2 w-1/4">Nama Infrastruktur</th>
                    <th class="w-1/5">Lokasi</th>
                    <th class="w-1/5">Jenis Infrastruktur</th>
                    <th class="w-1/5">Tahun Pembangunan</th>
                    <th class="w-1/5">Kondisi</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b border-[#1E88E5]">
                    <td class="py-2">Jalan Nasional 1</td>
                    <td>Sekadau Hilir</td>
                    <td>Jalan Raya</td>
                    <td>2021</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Baik</span></td>
                </tr>

                <tr class="border-b border-[#1E88E5]">
                    <td class="py-2">Jembatan Sungai Kapuas</td>
                    <td>Sekadau Hilir</td>
                    <td>Jembatan Baja</td>
                    <td>2022</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">Perlu Perbaikan</span></td>
                </tr>

                <tr class="border-b border-[#1E88E5]">
                    <td class="py-2">Jalan Desa Sungai Durian</td>
                    <td>Nanga Taman</td>
                    <td>Jalan Desa</td>
                    <td>2023</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Baik</span></td>
                </tr>

                <tr class="border-b border-[#1E88E5]">
                    <td class="py-2">Jembatan Sekadau-Sintang</td>
                    <td>Nanga Mahap</td>
                    <td>Jembatan Gantung</td>
                    <td>2024</td>
                    <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-yellow-200 text-[#FF9800] font-semibold">Sedang Diperbaiki</span></td>
                   </tr>
            </tbody>
        </table>

    </div>

<!-- ================= SECTION 2 ENERGI & UTILITAS ================= -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
         <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 36L28.72 16.54H22V4L12 23.46H19V36ZM20 0C25.5 0 30.2 2 34.1 5.9C38 9.8 40 14.5 40 20C40 25.5 38 30.2 34.1 34.1C30.2 38 25.5 40 20 40C14.5 40 9.8 38 5.9 34.1C2 30.2 0 25.5 0 20C0 14.5 2 9.8 5.9 5.9C9.8 2 14.5 0 20 0Z" fill="#FFD400"/>
        </svg>
            <h3 class="font-semibold">Energi & Utilitas</h3>
        </div>

        <table class="w-full text-sm">
                <thead class="text-left border-b border-[#1E88E5]">
                    <tr>
                        <th class="py-2 w-1/4">Nama Infrastruktur</th>
                        <th class="w-1/5">Lokasi</th>
                        <th class="w-1/5">Jenis Infrastruktur</th>
                        <th class="w-1/5">Tahun Pembangunan</th>
                        <th class="w-1/5">Kondisi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b border-[#1E88E5]">
                        <td class="py-2">PLTU Sungai Ayak</td>
                        <td>Nanga Mahap</td>
                        <td>Pembangkit Listrik</td>
                        <td>2021</td>
                        <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Aktif</span></td>
                    </tr>

                    <tr class="border-b border-[#1E88E5]">
                        <td class="py-2">PLTA Sekadau Kota</td>
                        <td>Nanga Taman</td>
                        <td>Pembangkit Listrik</td>
                        <td>2022</td>
                        <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">Perlu Perbaikan</span></td>
                    </tr>

                    <tr class="border-b border-[#1E88E5]">
                        <td class="py-2">PDAM Sekadau Kota</td>
                        <td>Ensali</td>
                        <td>Air Bersih</td>
                        <td>2023</td>
                        <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#DBFADD] text-[#38B000] font-semibold">Baik</span></td>
                    </tr>

                    <tr class="border-b border-[#1E88E5]">
                        <td class="py-2">SPAM Rawak</td>
                        <td>Sekadau Hulu</td>
                        <td>Air Bersih</td>
                        <td>2024</td>
                        <td><span class="inline-block w-36 text-center py-1 text-xs rounded-lg bg-[#F9AEB0] text-[#F44336] font-semibold">Gangguan</span></td>
                    </tr>
                </tbody>
            </table>
    </div>

<!-- ================= SECTION 3 TELEKOMUNIKASI ================= -->
 <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.306 36.9831C18.2352 35.1765 15.8516 32.4308 14.5204 29.1665H17.9132C18.3631 29.1665 18.7946 28.9909 19.1128 28.6784C19.4309 28.3658 19.6096 27.9419 19.6096 27.4999C19.6096 27.0579 19.4309 26.6339 19.1128 26.3214C18.7946 26.0088 18.3631 25.8332 17.9132 25.8332H13.4007C12.9374 23.9226 12.7095 21.9641 12.7222 20C12.7149 18.3213 12.8797 16.6462 13.2141 15H37.7952C38.0687 14.9907 38.3359 14.9165 38.5739 14.7837C38.8118 14.651 39.0136 14.4637 39.1619 14.2377C39.3103 14.0118 39.4007 13.7539 39.4257 13.4862C39.4506 13.2184 39.4092 12.9487 39.305 12.7001C37.8052 8.94155 35.1828 5.71692 31.7825 3.4502C28.3823 1.18347 24.3634 -0.019231 20.2543 0.000232555C7.49721 0.816889 0.62672 10.1501 0.0499376 18.6C-0.145593 21.3375 0.234419 24.0853 1.16633 26.6724C2.09823 29.2594 3.56209 31.6303 5.46682 33.6376C7.37154 35.6449 9.67637 37.2457 12.2379 38.3402C14.7994 39.4347 17.5628 39.9996 20.3561 39.9997C20.7553 40.0069 21.1444 39.8754 21.4547 39.6284C21.765 39.3815 21.9767 39.0349 22.0525 38.6497C22.106 38.3307 22.0639 38.0033 21.9314 37.7074C21.7989 37.4115 21.5816 37.1598 21.306 36.9831ZM9.92309 25.8332H4.47759C3.14376 22.3577 3.03623 18.5428 4.17223 15H9.8213C9.53232 16.6514 9.39042 18.3244 9.3972 20C9.37513 21.9567 9.55129 23.9108 9.92309 25.8332ZM20.3561 3.61685C23.203 5.61749 25.358 8.42677 26.531 11.6668H14.1641C15.3378 8.42249 17.4997 5.61188 20.3561 3.61685ZM35.047 11.6668H30.1783C29.3222 8.97426 27.9392 6.47191 26.1069 4.30018C29.8919 5.61919 33.066 8.23461 35.047 11.6668ZM14.69 4.33351C12.8458 6.49013 11.451 8.98174 10.5847 11.6668H5.68204C7.69488 8.27474 10.8513 5.68071 14.6052 4.33351H14.69ZM6.20793 29.1665H10.8561C11.7022 31.53 12.9719 33.7257 14.6052 35.6498C11.1686 34.4333 8.22354 32.1595 6.20793 29.1665Z" fill="#70E000"/>
            <path d="M31.5172 18.3335C29.2677 18.3335 27.1102 19.2115 25.5195 20.7742C23.9288 22.337 23.0352 24.4566 23.0352 26.6667C23.0352 31.95 30.6012 39.4332 30.9235 39.7499C31.0801 39.9069 31.2935 39.9968 31.5172 39.9999C31.6309 40.0005 31.7435 39.9787 31.8484 39.9358C31.9533 39.8929 32.0484 39.8296 32.128 39.7499C32.4333 39.4332 39.9993 31.95 39.9993 26.6667C39.9993 24.4566 39.1057 22.337 37.515 20.7742C35.9243 19.2115 33.7668 18.3335 31.5172 18.3335ZM31.5172 23.7501C32.1013 23.7632 32.6685 23.9454 33.1477 24.2737C33.6269 24.6021 33.9968 25.062 34.2111 25.596C34.4255 26.13 34.4747 26.7142 34.3526 27.2755C34.2305 27.8368 33.9425 28.3502 33.5247 28.7515C33.107 29.1528 32.578 29.424 32.0041 29.5312C31.4301 29.6385 30.8367 29.577 30.2982 29.3544C29.7597 29.1318 29.3 28.7581 28.9767 28.28C28.6533 27.8019 28.4808 27.2407 28.4807 26.6667C28.4806 26.278 28.5595 25.8932 28.7129 25.535C28.8664 25.1767 29.0911 24.8521 29.374 24.5804C29.6569 24.3087 29.9923 24.0953 30.3603 23.9527C30.7284 23.8101 31.1217 23.7412 31.5172 23.7501Z" fill="#FF0000"/>
        </svg>
            <h3 class="font-semibold">Telekomunikasi</h3>
        </div>
  <canvas id="btsChart" height="120"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
<script>
    const ctx = document.getElementById('btsChart').getContext('2d');

    const labels = [
        "Nanga Mahap",
        "Nanga Taman",
        "Sekadau Hulu",
        "Sekadau Hilir",
        "Belitang Hilir",
        "Belitang",
        "Belitang Hulu"
    ];

    const data2022 = [16, 13, 13, 47, 9, 11, 15];
    const data2023 = [16, 13, 13, 48, 9, 11, 15];

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Tahun 2022",
                    data: data2022,
                    backgroundColor: "#4CAF50"
                },
                {
                    label: "Tahun 2023",
                    data: data2023,
                    backgroundColor: "#FF9800"
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    stacked: false,
                    ticks: {
                        maxRotation: 0,
                        minRotation: 0
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: "Jumlah Menara BTS"
                    }
                }
            }
        }
    });

</script>



<!-- ================= SECTION 4 PERUMAHAN & LINGKUNGAN ================= -->
    <div class="bg-white w-full p-6 rounded-xl shadow mb-6 border border-[#1E88E5]">
        <div class="flex items-center gap-2 mb-3 font-semibold">
        <svg width="26" height="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_191_2489)">
            <path d="M39.9261 35.5831C39.9265 36.1465 39.8159 36.7045 39.6007 37.2251C39.3854 37.7458 39.0697 38.2189 38.6715 38.6175C38.2734 39.0162 37.8006 39.3324 37.2802 39.5483C36.7598 39.7642 36.202 39.8754 35.6386 39.8756H4.42172C2.05547 39.8756 0.136719 37.9544 0.136719 35.5831V4.37252C0.136719 2.00377 2.05547 0.0825195 4.42172 0.0825195H35.6386C38.0073 0.0825195 39.9261 2.00377 39.9261 4.37252V35.5831Z" fill="#81D4EA"/>
            <path d="M11.0898 27.2556L8.15107 24.2181C8.1167 24.1812 8.07795 24.1744 8.04107 24.1862C8.0067 24.1737 7.96795 24.1812 7.93357 24.2181L6.8992 25.2869V24.6337H6.94357C7.0117 24.6337 7.06545 24.5681 7.06545 24.4862C7.06545 24.4044 7.0117 24.3387 6.94357 24.3387H6.21482C6.1442 24.3387 6.09045 24.4044 6.09045 24.4862C6.09045 24.5681 6.1442 24.6337 6.21482 24.6337H6.24295V25.9637L5.65045 26.5756L3.36732 24.2181C3.33295 24.1812 3.2942 24.1744 3.25732 24.1862C3.22295 24.1737 3.1842 24.1812 3.14982 24.2181L2.11545 25.2869V24.6337H2.15982C2.2267 24.6337 2.2842 24.5681 2.2842 24.4862C2.2842 24.4044 2.2267 24.3387 2.15982 24.3387H1.43107C1.36045 24.3387 1.3042 24.4044 1.3042 24.4862C1.3042 24.5681 1.36045 24.6337 1.43107 24.6337H1.46045V25.9637L0.21045 27.2544C0.179791 27.2919 0.159598 27.3369 0.151915 27.3847C0.144232 27.4326 0.149332 27.4816 0.1667 27.5269C0.188575 27.5769 0.22795 27.6012 0.267325 27.6L0.264825 27.6037H0.87545V33.6225H0.7392V34.4475H2.14232C2.10045 34.4706 2.06857 34.5112 2.06857 34.56C2.06857 34.6294 2.13232 34.6881 2.21045 34.6881H4.42545C4.50357 34.6881 4.56732 34.6294 4.56732 34.56C4.56732 34.5112 4.53545 34.4706 4.49108 34.4475H6.92858C6.88482 34.4706 6.85295 34.5112 6.85295 34.56C6.85295 34.6294 6.9167 34.6881 6.99482 34.6881H9.2092C9.28732 34.6881 9.35107 34.6294 9.35107 34.56C9.35107 34.5112 9.3192 34.4706 9.27483 34.4475H10.5805V33.6225H10.4436V27.6037H11.0348L11.0323 27.6C11.0742 27.6025 11.113 27.5794 11.1373 27.5269C11.1556 27.4818 11.1609 27.4327 11.1529 27.3848C11.1448 27.3369 11.1237 27.2922 11.0917 27.2556M39.6048 22.5125L36.6642 17.4375C36.6298 17.3787 36.5898 17.3644 36.5536 17.385C36.5192 17.3644 36.4804 17.3787 36.4461 17.4375L35.4123 19.2219V18.1312H35.4561C35.5242 18.1312 35.5804 18.0212 35.5804 17.8844C35.5804 17.75 35.5242 17.6387 35.4561 17.6387H34.728C34.6598 17.6387 34.603 17.75 34.603 17.8844C34.603 18.0212 34.6598 18.1312 34.728 18.1312H34.7573V20.3531L34.1636 21.3762L31.8829 17.4369C31.8461 17.3781 31.8073 17.3637 31.7729 17.3831C31.7355 17.3637 31.6967 17.3781 31.6623 17.4369L30.6286 19.2212V18.1312H30.6723C30.7404 18.1312 30.7967 18.0212 30.7967 17.8844C30.7967 17.75 30.7404 17.6387 30.6723 17.6387H29.9442C29.8761 17.6387 29.8192 17.75 29.8192 17.8844C29.8192 18.0212 29.8761 18.1312 29.9442 18.1312H29.9736V20.3531L28.7236 22.5106C28.6623 22.6181 28.643 22.8206 28.6798 22.9656C28.7017 23.05 28.7411 23.0887 28.7798 23.0875L28.7773 23.0937H29.3892V33.15H29.2517V34.5269H30.6573C30.6324 34.5511 30.6129 34.5802 30.5998 34.6123C30.5868 34.6445 30.5806 34.679 30.5817 34.7137C30.5817 34.8325 30.6455 34.9306 30.7236 34.9306H32.9386C33.0167 34.9306 33.0804 34.8331 33.0804 34.7137C33.0818 34.6792 33.076 34.6448 33.0635 34.6126C33.0509 34.5805 33.0318 34.5513 33.0073 34.5269H35.4417C35.4168 34.5511 35.3972 34.5802 35.3842 34.6123C35.3712 34.6445 35.365 34.679 35.3661 34.7137C35.3661 34.8325 35.4298 34.9306 35.5079 34.9306H37.7229C37.8011 34.9306 37.8648 34.8331 37.8648 34.7137C37.8659 34.679 37.8597 34.6445 37.8467 34.6123C37.8337 34.5802 37.8141 34.5511 37.7892 34.5269H39.0948V33.15H38.958V23.0937H39.5492L39.5467 23.0875C39.588 23.0912 39.6298 23.0519 39.6517 22.9656C39.6873 22.8212 39.6679 22.6181 39.6067 22.5125" fill="#7BC4D6"/>
            <path d="M0.128906 32.675V35.5825C0.128906 37.9538 2.04766 39.875 4.41391 39.875H35.6308C37.9995 39.875 39.9183 37.9538 39.9183 35.5825V32.675H0.130781" fill="#00A79D"/>
            <path d="M17.4805 16.1538H19.9805L20.3448 13.1875L19.2667 13.6312L18.3692 14.67L17.4805 16.1538Z" fill="#992C3E"/>
            <path d="M2.70703 34.575H20.5302V36.5112H2.70703V34.575Z" fill="#BBBCBE"/>
            <path d="M5.25391 5.38379H7.56391V10.965H5.25391V5.38379Z" fill="#633D19"/>
            <path d="M2.70703 33.6056H20.5302V35.5456H2.70703V33.6056Z" fill="#F0CA93"/>
            <path d="M1.03906 16.1538H3.53906L3.90344 13.1875L2.82531 13.6312L1.93094 14.67L1.03906 16.1538ZM22.1347 16.1538H19.6347L19.2709 13.1875L20.3441 13.6312L21.2434 14.67L22.1347 16.1538Z" fill="#992C3E"/>
            <path d="M20.0514 33.925H3.19141V13.9832L11.6158 4.64941L20.0514 13.9832V33.925Z" fill="#D7E5BE"/>
            <path d="M11.7989 4.96254L6.27016 13.8313V33.925H3.19141V13.6825L11.3977 4.64941L11.7989 4.96254Z" fill="#CCD8B2"/>
            <path d="M11.8452 4.3606C11.9821 4.66122 11.909 5.08997 11.689 5.31747L1.33398 16.0175C1.11398 16.2462 0.827732 16.185 0.695857 15.8843C0.563982 15.5812 0.632107 15.1525 0.854607 14.9275L11.2096 4.22747C11.4296 4.00185 11.7159 4.06435 11.8452 4.36497" fill="#DF394C"/>
            <path d="M11.3442 4.3606C11.2098 4.66122 11.283 5.08997 11.503 5.31747L21.8555 16.0175C22.0773 16.2462 22.3636 16.185 22.498 15.8843C22.6298 15.5812 22.5567 15.1525 22.3367 14.9275L11.9823 4.22747C11.7623 4.00185 11.4736 4.06435 11.3442 4.36497M8.15672 5.1681C8.15672 5.45497 7.96172 5.68872 7.71922 5.68872H5.15234C4.91047 5.68872 4.71484 5.45497 4.71484 5.1681C4.71484 4.88247 4.91047 4.64935 5.15234 4.64935H7.71922C7.96109 4.64935 8.15672 4.88247 8.15672 5.1681Z" fill="#DF394C"/>
            <path d="M14.9867 34.3481C15.2436 34.3481 15.4511 34.5906 15.4511 34.8888C15.4511 35.1869 15.243 35.4288 14.9867 35.4288H7.69484C7.43547 35.4288 7.23047 35.1863 7.23047 34.8888C7.23047 34.59 7.43609 34.3481 7.69484 34.3481H14.9867Z" fill="#BBBCBE"/>
            <path d="M15.4552 35.4293C15.5974 35.4311 15.7331 35.4892 15.8326 35.5909C15.932 35.6926 15.9871 35.8296 15.9858 35.9718C15.9868 36.1138 15.9316 36.2505 15.8321 36.3519C15.7327 36.4533 15.5972 36.5113 15.4552 36.5131H7.14642C7.00397 36.5119 6.86781 36.4543 6.76785 36.3528C6.66788 36.2513 6.6123 36.1143 6.61329 35.9718C6.61329 35.6731 6.85267 35.4293 7.14642 35.4293H15.4552Z" fill="#999999"/>
            <path d="M15.9813 36.5125C16.3063 36.5125 16.5731 36.7575 16.5731 37.055C16.5731 37.3512 16.3063 37.595 15.9813 37.595H6.71625C6.39125 37.595 6.125 37.3506 6.125 37.055C6.125 36.7568 6.39125 36.5125 6.71625 36.5125H15.9813Z" fill="#7C7D7E"/>
            <path d="M13.7733 34.4312V30.3781C13.7733 28.9431 12.7152 27.7812 11.412 27.7812C10.107 27.7812 9.05078 28.9431 9.05078 30.3781V34.4312H13.7733Z" fill="#4E6B78"/>
            <path d="M12.1759 27.9243C11.9333 27.8314 11.6757 27.7837 11.4159 27.7837C10.1109 27.7837 9.05469 28.9456 9.05469 30.3806V34.4337H10.5728V30.3806C10.5728 29.2393 11.2422 28.2699 12.1759 27.9243Z" fill="#405967"/>
            <path d="M34.3359 16.155H36.8359L37.1997 13.1875L36.1228 13.6325L35.2247 14.67L34.3359 16.155Z" fill="#992C3E"/>
            <path d="M19.5625 34.575H37.3831V36.5112H19.5625V34.575Z" fill="#BBBCBE"/>
            <path d="M36.4258 34.575H39.8039V36.5112H36.4258V34.575Z" fill="#BBBCBE"/>
            <path d="M22.1133 5.3844H24.4233V10.9663H22.1133V5.3844Z" fill="#633D19"/>
            <path d="M19.5625 33.6069H37.3831V35.5469H19.5625V33.6069Z" fill="#F0CA93"/>
            <path d="M39.9252 33.6069H36.4258V35.5463L39.9252 35.5832V33.6069Z" fill="#F0CA93"/>
            <path d="M38.9894 16.155H36.4894L36.125 13.1875L37.2019 13.6325L38.1 14.67L38.9894 16.155Z" fill="#992C3E"/>
            <path d="M36.8992 33.925H20.043V13.9831L28.4686 4.65002L36.8992 13.9831V33.925Z" fill="#F7B55E"/>
            <path d="M28.6492 4.96315L23.1242 13.8313V33.925H20.043V13.6825L28.2492 4.65002L28.6492 4.96315Z" fill="#F79F63"/>
            <path d="M28.6973 4.3613C28.5655 4.06068 28.2792 3.99818 28.0617 4.22443L19.2617 13.3182C19.5036 13.5953 19.7589 13.8604 20.0267 14.1126L28.5411 5.3188C28.7611 5.09068 28.8317 4.6613 28.6973 4.3613Z" fill="#DF394C"/>
            <path d="M28.1914 4.36136C28.0595 4.66198 28.1327 5.09073 28.3502 5.31823L38.7052 16.0182C38.927 16.2457 39.2114 16.1845 39.3452 15.8839C39.4777 15.582 39.4039 15.1532 39.1839 14.9282L28.832 4.22823C28.6095 4.00198 28.3233 4.06511 28.1914 4.36573M25.0102 5.16886C25.0102 5.45573 24.8152 5.68948 24.5733 5.68948H22.0064C21.762 5.68948 21.5664 5.45573 21.5664 5.16886C21.5664 4.88323 21.762 4.65011 22.0064 4.65011H24.5733C24.8145 4.65011 25.0102 4.88323 25.0102 5.16886Z" fill="#DF394C"/>
            <path d="M32.1117 34.1125C32.3661 34.1125 32.5761 34.3532 32.5761 34.6513C32.5761 34.9507 32.3661 35.1913 32.1117 35.1913H24.8198C24.5611 35.1913 24.3555 34.9507 24.3555 34.6513C24.3555 34.3525 24.5611 34.1125 24.8198 34.1125H32.1117Z" fill="#BBBCBE"/>
            <path d="M32.5816 35.1937C32.8753 35.1937 33.1147 35.4387 33.1147 35.7362C33.1154 35.8069 33.1021 35.8769 33.0757 35.9424C33.0492 36.0079 33.0101 36.0676 32.9606 36.118C32.9111 36.1684 32.8521 36.2085 32.7871 36.2361C32.7221 36.2637 32.6522 36.2782 32.5816 36.2787H24.2753C24.2047 36.2782 24.1349 36.2637 24.0698 36.2361C24.0048 36.2085 23.9458 36.1684 23.8963 36.118C23.8468 36.0676 23.8077 36.0079 23.7813 35.9424C23.7548 35.8769 23.7416 35.8069 23.7422 35.7362C23.7422 35.4381 23.9816 35.1937 24.2753 35.1937H32.5816Z" fill="#999999"/>
            <path d="M33.1031 36.2812C33.4306 36.2812 33.6975 36.5262 33.6975 36.8244C33.6975 37.12 33.4306 37.3644 33.1031 37.3644H23.8388C23.5131 37.3644 23.25 37.1194 23.25 36.8244C23.25 36.5256 23.5138 36.2812 23.8388 36.2812H33.1031Z" fill="#7C7D7E"/>
            <path d="M30.9008 34.1994V30.1482C30.9008 28.7132 29.842 27.5507 28.5395 27.5507C27.2339 27.5507 26.1758 28.7132 26.1758 30.1482V34.1994H30.9008Z" fill="#4E6B78"/>
            <path d="M29.2995 27.6937C29.057 27.6006 28.7994 27.5527 28.5395 27.5525C27.2339 27.5525 26.1758 28.715 26.1758 30.15V34.2012H27.6939V30.15C27.6939 29.0069 28.3633 28.0387 29.2995 27.6937Z" fill="#405967"/>
            <path d="M4.69922 16.9062H10.0967V23.8375H4.69922V16.9062Z" fill="#28A6DE"/>
            <path d="M6.98438 16.9062H7.81313V23.8375H6.98438V16.9062Z" fill="#D7E5BE"/>
            <path d="M4.69922 19.955H10.0942V20.7837H4.69922V19.955Z" fill="#D7E5BE"/>
            <path d="M13.0039 16.9062H18.4014V23.8375H13.0039V16.9062ZM21.6208 16.9062H27.0189V23.8375H21.6208V16.9062ZM29.9277 16.9062H35.3252V23.8375H29.9277V16.9062Z" fill="#28A6DE"/>
            <path d="M15.2852 16.9062H16.1139V23.8375H15.2852V16.9062Z" fill="#D7E5BE"/>
            <path d="M13.0039 19.955H18.4014V20.7837H13.0039V19.955Z" fill="#D7E5BE"/>
            <path d="M23.9062 16.9062H24.7325V23.8375H23.9062V16.9062Z" fill="#F7B55E"/>
            <path d="M21.6211 19.955H27.0192V20.7838H21.6211V19.955ZM32.2117 16.9062H33.0405V23.8375H32.2117V16.9062Z" fill="#F7B55E"/>
            <path d="M29.9297 19.955H35.3247V20.7838H29.9297V19.955ZM39.9178 10.6438L36.9072 13.9832V33.925H39.9178V10.6438Z" fill="#F7B55E"/>
            <path d="M39.9169 10.3676L36.9062 13.6826V33.9251H39.9169V10.3676Z" fill="#CCD8B2"/>
            <path d="M39.9187 9.39996L36.125 13.3206C36.43 13.685 36.89 14.115 36.89 14.115L39.9194 10.9837V9.39746" fill="#DF394C"/>
            <path d="M0.277344 34.575H3.65547V36.5112H0.277344V34.575Z" fill="#BBBCBE"/>
            <path d="M0.15625 33.6069H3.65687V35.5463L0.15625 35.5832V33.6069Z" fill="#F0CA93"/>
            <path d="M0.160156 10.3676L3.17203 13.6826V33.9251H0.160156V10.3676Z" fill="#F7B55E"/>
            <path d="M0.160156 9.39996L3.95391 13.3206C3.64891 13.685 3.18891 14.115 3.18891 14.115L0.160156 10.9837V9.39746" fill="#DF394C"/>
            </g>
            <defs>
            <clipPath id="clip0_191_2489">
            <rect width="40" height="40" fill="white"/>
            </clipPath>
            </defs>
            </svg>

            <h3 class="font-semibold">Perumahan & Lingkungan</h3>
        </div>

          <table class="w-full text-sm">
    <thead class="text-left border-b border-[#1E88E5]">
        <tr>
            <th class="py-2 w-1/4">Nama Infrastruktur</th>
            <th class="w-1/5">Lokasi</th>
            <th class="w-1/5">Jenis Infrastruktur</th>
            <th class="w-1/5">Tahun Pembangunan</th>
            <th class="w-1/5">Kondisi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($perumahan as $item)
            @php
                $bgClass = match ($item['status']) {
                    'Sudah Terhuni' => 'bg-[#DBFADD] text-[#38B000]',
                    'Proses Pembangunan' => 'bg-yellow-200 text-[#FF9800]',
                    default => 'bg-gray-200 text-gray-700',
                };
            @endphp

            <tr class="border-b border-[#1E88E5]">
                <td class="py-2">{{ $item['nama'] }}</td>
                <td>{{ $item['lokasi'] }}</td>
                <td>{{ $item['jenis'] }}</td>
                <td>{{ $item['tahun'] }}</td>
                <td>
                    <span class="inline-block w-36 text-center py-1 text-xs rounded-lg font-semibold {{ $bgClass }}">
                        {{ $item['status'] }}
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
