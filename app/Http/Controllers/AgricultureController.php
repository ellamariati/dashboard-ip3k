<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class AgricultureController extends Controller
{
    public function index()
    {
        // Load agriculture JSON data
        $json = File::get(public_path('data/pertanian.json'));
        $agricultureData = json_decode($json, true);

        // Split data by category (root)
        $fruitHarvestProduction = $agricultureData['fruitHarvestProduction'] ?? [];
        $vegetableHarvestProduction = $agricultureData['vegetableHarvestProduction'] ?? [];
        $vegetableProductivity = $agricultureData['vegetableProductivity'] ?? [];

        // Send data to agriculture blade
        return view('data-pertanian', compact(
            'fruitHarvestProduction',
            'vegetableHarvestProduction',
            'vegetableProductivity'
        ));
    }
}
