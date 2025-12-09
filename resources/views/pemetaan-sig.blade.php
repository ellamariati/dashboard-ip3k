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
    <h2 class="font-semibold mb-4 text-lg">Pemetaan SIG Infrastruktur & Area Pertanian</h2>

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

    // --- Icons ---
  var iconPertanian = L.icon({
    iconUrl: "data:image/svg+xml;utf8,<svg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'><path d='M9.09668 0C8.48074 0.97834 7.78465 1.99559 6.65402 2.9574C6.68098 2.98359 6.70875 3.00955 6.73635 3.03568L8.11623 3.01189L7.90957 3.63885C7.87985 3.72885 7.84705 3.81781 7.81125 3.90557C7.98124 4.02358 8.15459 4.13667 8.33109 4.24471L9.79898 5.14295L7.10426 5.09648C6.98977 5.24145 6.86637 5.38359 6.73482 5.52275C7.25045 6.19758 8.02652 6.85359 9.00094 7.44264L8.27414 7.42125L8.27326 7.75395C8.77307 8.12648 9.31576 8.48332 9.86479 8.83676C10.9259 8.15895 11.7275 7.40121 12.1798 6.6327L8.8193 6.6907L10.2872 5.79246C10.8128 5.4709 11.2555 5.14119 11.6396 4.80416C11.3409 4.48336 11.1123 4.16186 10.9801 3.82623L10.7433 3.22588L12.486 3.11906C11.1604 2.27086 9.83027 1.3275 9.09668 0ZM22.8431 0.774785C22.46 1.53428 22.0298 2.47494 21.458 3.38982C22.0983 4.46602 22.8894 5.49902 24.1986 6.45908L25.3951 7.33623L22.3184 7.27266C22.7259 7.98375 23.4865 8.84637 24.3445 9.61916C25.467 10.6301 26.7427 11.5277 27.5031 11.9579L28.1676 12.3339C28.1679 12.09 28.1679 11.9014 28.1685 11.5153C27.1621 10.8158 26.4243 10.0038 26.0402 9.0426L25.7991 8.4392L28.3541 8.28803C27.7734 8.03268 27.197 7.80387 26.6711 7.58139C26.1732 7.3708 25.7201 7.16496 25.3396 6.92338C24.9591 6.68186 24.6305 6.39873 24.469 5.98922L24.2388 5.40551L26.3527 5.2193C24.932 4.03418 23.5857 2.3625 22.8431 0.774785ZM4.06389 1.11129C3.33029 2.43879 2.00021 3.38221 0.674648 4.23047L2.41711 4.33723L2.18057 4.93746C1.90049 5.64791 1.19531 6.35092 0.236309 7.09799C0.219023 7.75482 0.21334 8.13275 0.21375 8.13697C0.214043 8.13955 0.224883 8.20142 0.230742 8.32019C0.232969 8.36367 0.233086 8.50635 0.234609 8.57555L1.04484 8.62225L1.04461 8.65447L0.815742 9.2274C0.746602 9.40055 0.669375 9.58307 0.571992 9.76834L1.24729 9.35525C3.43729 8.01521 4.20158 6.5332 5.19621 4.97051L5.18256 5.34352L5.44471 5.23365C5.37026 5.07666 5.30559 4.91522 5.25105 4.75025L5.04434 4.1233L6.60188 4.15025C5.41395 3.16441 4.69723 2.11729 4.06389 1.11129ZM14.5541 2.6591C13.9208 3.66504 13.2041 4.71223 12.0162 5.69777L13.5737 5.67094L13.3671 6.29789C12.977 7.48078 12.0328 8.51801 10.7377 9.39809L11.7875 10.0762L12.8582 10.1165L12.6163 10.7317C12.4813 11.0753 12.3026 11.3997 12.0884 11.7073L12.6004 11.3446C13.6499 10.6011 14.755 9.73359 15.6355 8.911C16.223 8.36227 16.6889 7.82584 16.988 7.3926L14.0269 7.17492L14.9937 6.4265C15.6013 5.95617 16.2226 5.49252 16.8056 5.00982C15.898 4.35088 15.0752 3.60223 14.5541 2.6591ZM20.0074 2.69895C19.2598 4.26955 17.8847 5.3966 16.5441 6.42L18.3834 6.55512L18.1962 7.125C17.9324 7.92773 17.2011 8.73117 16.2754 9.59601C15.6429 10.1868 14.9133 10.7849 14.1721 11.3495L17.0595 11.5542L16.8684 12.1273C16.2079 14.1081 14.1236 15.4627 12.4261 16.5568C13.2163 17.0288 14.0474 17.4615 14.7589 17.8645C18.7632 18.9672 23.407 18.273 26.5318 16.927C25.7589 16.4844 25.1347 16.0746 24.6129 15.579C23.9212 14.9218 23.4369 14.1165 23.0674 12.9901L22.8906 12.4506L25.9358 12.0633C25.24 11.5822 24.461 10.9857 23.717 10.3157C22.5387 9.25441 21.4673 8.08898 21.1438 6.91336L20.9771 6.30738L22.61 6.34119C21.3693 5.16521 20.6446 3.91037 20.0074 2.69895ZM5.51426 6.22184C4.88104 7.22777 4.16438 8.27496 2.97639 9.26051L4.53393 9.23379L4.32709 9.86057C3.84428 11.3253 2.51221 12.5668 0.71625 13.5628L3.8182 13.6794L3.57645 14.2944C2.92898 15.9415 1.8327 17.3984 0 18.4888C4.3292 19.8111 9.17426 20.3385 13.5693 18.2796C12.8129 17.8662 11.9931 17.421 11.2062 16.8991C10.1474 16.197 9.18322 15.3911 8.76223 14.3378L8.52105 13.7343L11.357 13.5664C10.6639 13.1197 9.98502 12.6594 9.39076 12.1963C8.43891 11.4544 7.68803 10.7851 7.3974 10.0481L7.16068 9.44766L8.90326 9.34084C7.57787 8.49264 6.24797 7.54922 5.51426 6.22184ZM3.14004 10.1954L0.268008 10.2449C0.258164 10.2577 0.249258 10.2707 0.23918 10.2833C0.223008 11.5428 0.21293 12.2394 0.209766 12.7665C1.57746 12.0015 2.60408 11.1061 3.14004 10.1954ZM9.33188 10.9222C9.53697 11.1082 9.74893 11.2865 9.96733 11.4568C10.1818 11.6232 10.3994 11.7855 10.6201 11.9436C10.9388 11.6402 11.2109 11.3257 11.4223 11.0007L9.33188 10.9222ZM11.7728 12.1191C11.6616 12.2506 11.5454 12.3778 11.4243 12.5002C11.9691 12.8631 12.5236 13.2112 13.0872 13.5441L14.1211 14.155C14.7855 13.6031 15.3595 13.017 15.7157 12.3988L11.7728 12.1191ZM28.1675 12.7246L24.1607 13.2343C24.4341 13.9052 24.7494 14.3915 25.1732 14.8158L25.1609 14.2533C26.1836 14.195 27.1944 14.0569 28.1726 13.8219C28.1688 13.4016 28.1677 13.0942 28.1675 12.7246ZM13.8729 14.3566L9.98268 14.5867C10.2114 14.8907 10.515 15.1918 10.8673 15.484C11.2458 15.56 11.6259 15.6285 12.0072 15.6894C12.6305 15.2722 13.2799 14.8273 13.8729 14.3566ZM0.997324 14.5113L0.980332 16.5983C1.60998 15.9906 2.07557 15.311 2.43521 14.5654L0.997324 14.5113ZM25.252 18.4097C24.4164 18.6779 23.5225 18.9017 22.593 19.0673L22.9182 26.8122H25.4365L25.252 18.4097ZM14.5979 18.82C14.4427 18.9018 14.2861 18.9808 14.1281 19.0571L14.0738 25.7528H17.1606L17.0185 19.2785C16.2013 19.1875 15.3904 19.0369 14.5979 18.82ZM21.6608 19.2122C20.7769 19.3289 19.8689 19.3909 18.955 19.3876L18.9323 27.5756H22.012L21.6608 19.2122ZM0.954961 19.7481L0.90082 26.4301H3.49453L3.61025 20.313C2.71014 20.1687 1.82262 19.9762 0.954961 19.7481ZM11.1925 20.1155C10.5142 20.2836 9.83156 20.4046 9.14766 20.4837L9.37705 24.3623H11.3145L11.1925 20.1155ZM4.54541 20.4452L4.39846 28.2124L8.65775 28.0784L8.21338 20.5661C6.98467 20.6417 5.75619 20.5909 4.54541 20.4452Z' fill='%2338B000'/></svg>",
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -40]
});

    var iconKesehatan = L.icon({
    iconUrl: "data:image/svg+xml;utf8,<svg width='30' height='30' viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path d='M22.5 17.5H17.5V22.5H12.5V17.5H7.5V12.5H12.5V7.5H17.5V12.5H22.5' fill='%23F44336'/></svg>",
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -40]
});

    var iconJembatan = L.icon({
    iconUrl: "data:image/svg+xml;utf8,<svg width='30' height='30' viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path d='M0 13.684V22H4V20C4.03494 18.9502 4.46758 17.953 5.21029 17.2103C5.95299 16.4676 6.95024 16.0349 8 16C9.04976 16.0349 10.047 16.4676 10.7897 17.2103C11.5324 17.953 11.9651 18.9502 12 20V22H18V20C18.0349 18.9502 18.4676 17.953 19.2103 17.2103C19.953 16.4676 20.9502 16.0349 22 16C23.0498 16.0349 24.047 16.4676 24.7897 17.2103C25.5324 17.953 25.9651 18.9502 26 20V22H30V13.684C28.2869 11.3072 26.0336 9.37149 23.4256 8.03641C20.8177 6.70134 17.9298 6.00511 15 6.00511C12.0702 6.00511 9.18231 6.70134 6.57436 8.03641C3.96642 9.37149 1.71306 11.3072 0 13.684ZM19 7.468C20.0274 7.71268 21.0313 8.0473 22 8.468V14H19V7.468ZM18 7.268V14H15V7.012C16.008 7.012 17.008 7.09733 18 7.268ZM7 8.954C7.96267 8.45667 8.96267 8.05267 10 7.742V14H7V8.954ZM11 14V7.46C11.9861 7.23259 12.9897 7.08875 14 7.03V14H11ZM6 9.488V14H1C2.36068 12.1882 4.05843 10.6561 6 9.488ZM23 14V9L22.894 8.894C25.2965 10.1014 27.3865 11.8491 29 14H23Z' fill='%23FFD400'/></svg>",
    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -40]
});


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
