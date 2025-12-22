<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfrastructureController extends Controller
{
    public function telecommunication()
    {
        // === Telecommunication Data (CHART) ===
        $districtLabels = [
            "Nanga Mahap",
            "Nanga Taman",
            "Sekadau Hulu",
            "Sekadau Hilir",
            "Belitang Hilir",
            "Belitang",
            "Belitang Hulu"
        ];

        $telecommunicationData2022 = [16, 13, 13, 47, 9, 11, 15];
        $telecommunicationData2023 = [16, 13, 13, 48, 9, 11, 15];

        // === Housing Data (load from JSON) ===
        $housingjson = File::get(public_path('data/perumahan.json'));
        $housingData = json_decode($housingjson, true);

        return view('data-infrastruktur', compact(
            'districtLabels',
            'telecommunicationData2022',
            'telecommunicationData2023',
            'housingData'));
    }
}
