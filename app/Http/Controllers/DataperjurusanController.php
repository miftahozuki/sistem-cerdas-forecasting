<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa_jurusan as jurusan;

class DataperjurusanController extends Controller
{
    public function index() {
        $year = jurusan::pluck('tahun');
        $otomotif = jurusan::pluck('otomotif');
        $media_desain = jurusan::pluck('media_desain');
        $tkk = jurusan::pluck('tkk');
        $manajemen_bisnis = jurusan::pluck('manajemen_bisnis');
        $akuntansi_keuangan = jurusan::pluck('akuntansi_keuangan');

        return view('menu.datasiswajurusan', compact('year', 'otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'));
    }
}
