@extends('layouts.app')

@section('content')

<header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
    <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
    <p class="text-sm">Tentang Dashboard</p>
    </header>

<!-- Deskripsi Pembuka -->
 <p class="text-justify font-bold leading-relaxed mb-4 max-w-[945px]">
    Dashboard ini dibuat untuk memantau perkembangan program IP3K (Infrastruktur, Perkebunan, Pertanian, dan Perikanan) di Kabupaten Sekadau. Informasi yang ditampilkan mencakup data pembangunan, pemetaan SIG, fasilitas publik, serta sektor pertanian dan infrastruktur.
</p>

 <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    
    <!-- BOX 1 -->
    <div class="bg-white p-6 rounded-xl shadow w-[260px] mx-auto text-center">
        <div class="flex justify-center mb-3">
        <svg class="w-[50px] h-[50px] md:w-[55px] md:h-[55px] mx-auto mb-3"
            viewBox="0 0 115 115" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.5" cx="57.5" cy="57.5" r="57.5" fill="#38B000" fill-opacity="0.5"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M58.0833 75.3333C69.8492 75.3333 80.5008 68.7708 86.2233 58.4167C80.5008 48.0625 69.8492 41.5 58.0833 41.5C46.3175 41.5 35.6658 48.0625 29.9433 58.4167C35.6658 68.7708 46.3175 75.3333 58.0833 75.3333ZM58.0833 38C72.1067 38 84.2517 46.3067 90.1667 58.4167C84.2517 70.5267 72.1067 78.8333 58.0833 78.8333C44.06 78.8333 31.915 70.5267 26 58.4167C31.915 46.3067 44.06 38 58.0833 38ZM58.0833 66.5833C60.2493 66.5833 62.3265 65.7229 63.858 64.1914C65.3896 62.6598 66.25 60.5826 66.25 58.4167C66.25 56.2507 65.3896 54.1735 63.858 52.642C62.3265 51.1104 60.2493 50.25 58.0833 50.25C55.9174 50.25 53.8402 51.1104 52.3086 52.642C50.7771 54.1735 49.9167 56.2507 49.9167 58.4167C49.9167 60.5826 50.7771 62.6598 52.3086 64.1914C53.8402 65.7229 55.9174 66.5833 58.0833 66.5833ZM58.0833 70.0833C54.9891 70.0833 52.0217 68.8542 49.8338 66.6662C47.6458 64.4783 46.4167 61.5109 46.4167 58.4167C46.4167 55.3225 47.6458 52.355 49.8338 50.1671C52.0217 47.9792 54.9891 46.75 58.0833 46.75C61.1775 46.75 64.145 47.9792 66.3329 50.1671C68.5208 52.355 69.75 55.3225 69.75 58.4167C69.75 61.5109 68.5208 64.4783 66.3329 66.6662C64.145 68.8542 61.1775 70.0833 58.0833 70.0833Z" fill="#38B000"/>
        </svg>
        </div>
        <h3 class="font-semibold text-lg">Transparansi</h3>
        <p class="text-sm mt-1">
            Memberikan akses informasi pembangunan daerah
        </p>
    </div>

    <!-- BOX 2 -->
    <div class="bg-white p-6 rounded-xl shadow w-[260px] mx-auto text-center">
        <div class="flex justify-center mb-3">
        <svg class="w-[50px] h-[50px] md:w-[55px] md:h-[55px] mx-auto mb-3"
            viewBox="0 0 115 115"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.5" cx="57.5" cy="57.5" r="57.5" fill="#DBB471"/>
            <path d="M23 92V84.2222L30.7778 76.4444V92H23ZM38.5556 92V68.6667L46.3333 60.8889V92H38.5556ZM54.1111 92V60.8889L61.8889 68.7639V92H54.1111ZM69.6667 92V68.7639L77.4444 60.9861V92H69.6667ZM85.2222 92V53.1111L93 45.3333V92H85.2222ZM23 71.875V60.8889L50.2222 33.6667L65.7778 49.2222L93 22V32.9861L65.7778 60.2083L50.2222 44.6528L23 71.875Z" fill="#FF9800"/>
        </svg>
        </div>
        <h3 class="font-semibold text-lg">Monitoring</h3>
        <p class="text-sm mt-1">
            Memudahkan pemerintah dan masyarakat memantau progress
        </p>
    </div>

    <!-- BOX 3 -->
    <div class="bg-white p-6 rounded-xl shadow w-[260px] mx-auto text-center">
        <div class="flex justify-center mb-3">
        <svg class="w-[50px] h-[50px] md:w-[55px] md:h-[55px] mx-auto mb-3"
            viewBox="0 0 115 115"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.5" cx="57.5" cy="57.5" r="57.5" fill="#42ADE2"/>
            <path d="M58 23C38.75 23 23 38.75 23 58C23 77.25 38.75 93 58 93C77.25 93 93 77.25 93 58C93 38.75 77.25 23 58 23ZM51 75.5L33.5 58L38.435 53.065L51 65.595L77.565 39.03L82.5 44L51 75.5Z" fill="#1E88E5"/>
        </svg>
        </div>
        <h3 class="font-semibold text-lg">Evaluasi</h3>
        <p class="text-sm mt-1">
            Menjadi dasar dalam pengambilan keputusan
        </p>
    </div>
</div>

    <div class="max-w-[945px] mx-auto mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- BOX 1 -->
            <div class="rounded-xl p-6 shadow bg-white">
                <h3 class="text-xl font-bold mb-3">Sumber Data</h3>
                <ul class="list-disc ml-5 space-y-1">
                    <li>Dinas PUPR</li>
                    <li>Dinas Pertanian</li>
                    <li>Bappeda</li>
                    <li>Data lapangan & survei masyarakat</li>
                </ul>
            </div>

            <!-- BOX 2 -->
            <div class="rounded-xl p-6 shadow bg-white">
                <h3 class="text-xl font-bold">Program IP3K</h3>
                <p class="mb-4">Pembangunan 2021-2026</p>

                <!-- garis timeline -->
                <div class="flex items-center gap-4 mb-4">
                    <span>2021</span>
                    <div class="flex-1 h-1 bg-blue-400 relative">
                        <span class="absolute -top-1 left-0 w-3 h-3 rounded-full bg-blue-300"></span>
                        <span class="absolute -top-1 left-1/2 w-3 h-3 rounded-full bg-blue-500"></span>
                        <span class="absolute -top-1 right-0 w-3 h-3 rounded-full bg-blue-700"></span>
                    </div>
                    <span>2026</span>
                </div>

                <h3 class="text-lg font-bold">Kontak</h3>
                <p>bappeda@sekadau.go.id<br>+62857-0908-5762</p>
            </div>
    </div>
</div>

@endsection