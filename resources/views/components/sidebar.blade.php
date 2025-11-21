<aside class="bg-[#1565C0] text-white w-64 min-h-screen flex flex-col p-4 space-y-6">
    {{-- LOGO --}}
   <div class="flex flex-col items-center">
    <img src="{{ asset('images/logo-ip3k.png') }}" alt="Logo Sekadau" class="w-20 mb-3">
</div>

<div class="flex flex-col items-center">
    <img src="{{ asset('images/logo-skd.png') }}" alt="Logo IP3K" class="w-20 mb-3">
</div>
    {{-- Menu --}}
    <nav class="flex-1 space-y-2 mt-6">
        <a href="#" class="flex items-center gap-3 bg-secondary text-white rounded-lg px-4 py-2 font-bold">
            <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
        <a href="{{ route('data.infrastruktur') }}"
        class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-database"></i> <span>Data Infrastruktur</span>
        </a>

        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-leaf"></i> <span>Data Pertanian</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-hospital"></i> <span>Fasilitas Publik</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-map"></i> <span>Pemetaan SIG</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-tasks"></i> <span>Proyek Pembangunan</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-info-circle"></i> <span>Tentang Dashboard</span>
        </a>
    </nav>
</aside>
