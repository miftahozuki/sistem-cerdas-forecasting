<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswa_jurusan as jurusan;

class DataperjurusanController extends Controller
{
    public function index() {
        $year = Jurusan::select('tahun')->distinct()->pluck('tahun');
        $otomotif = Jurusan::where('id_jurusan', 1)->pluck('jumlah_siswa');
        $media_desain = Jurusan::where('id_jurusan', 2)->pluck('jumlah_siswa');
        $tkk = Jurusan::where('id_jurusan', 3)->pluck('jumlah_siswa');
        $manajemen_bisnis = Jurusan::where('id_jurusan', 4)->pluck('jumlah_siswa');
        $akuntansi_keuangan = Jurusan::where('id_jurusan', 5)->pluck('jumlah_siswa');

        return view('menu.datasiswajurusan', compact('year', 'otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'));
    }
}
