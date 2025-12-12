<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfrastructureController extends Controller
{
    public function telekomunikasi()
    {
        // === DATA TELEKOMUNIKASI (CHART) ===
        $labels = [
            "Nanga Mahap",
            "Nanga Taman",
            "Sekadau Hulu",
            "Sekadau Hilir",
            "Belitang Hilir",
            "Belitang",
            "Belitang Hulu"
        ];

        $data2022 = [16, 13, 13, 47, 9, 11, 15];
        $data2023 = [16, 13, 13, 48, 9, 11, 15];

        // === DATA PERUMAHAN (load dari JSON) ===
        $json = File::get(public_path('data/perumahan.json'));
        $perumahan = json_decode($json, true);

        return view('data-infrastruktur', compact('labels', 'data2022', 'data2023', 'perumahan'));
    }
}
