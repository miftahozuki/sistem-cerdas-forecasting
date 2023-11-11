<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa_jurusan as jurusan;

class DashboardController extends Controller
{
    public function index() {
        $year = jurusan::pluck('tahun');
        $otomotif = jurusan::pluck('otomotif');
        $a = $otomotif->sum();
        $media_desain = jurusan::pluck('media_desain');
        $b = $media_desain->sum();
        $tkk = jurusan::pluck('tkk');
        $c = $tkk->sum();
        $manajemen_bisnis = jurusan::pluck('manajemen_bisnis');
        $d = $manajemen_bisnis->sum();
        $akuntansi_keuangan = jurusan::pluck('akuntansi_keuangan');
        $e = $akuntansi_keuangan->sum();

        return view('beranda', compact('year', 'otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan', 'a', 'b', 'c', 'd', 'e'));
    }
}
