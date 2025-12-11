<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerumahanController extends Controller
{
    public function index()
{
    $json = File::get(public_path('data/perumahan.json'));
    $data = json_decode($json, true);

    $mapped = collect($data)->map(function ($row) {
        return [
            'nama' => $row['nama'],
            'lokasi' => $row['lokasi'],
            'jenis' => $row['jenis'],
            'tahun' => $row['tahun'],
            'status' => $row['status'],
        ];
    });

    return view('data-infrastruktur', compact('mapped'));
}

}
