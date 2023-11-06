<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart()
    {
    $years = ['2019','2020','2021','2022','2023'];
        $jurusanData = [];

        foreach ($years as $year) {
            $data = datasiswa::whereYear('tahun', $year)
                ->select('jurusan')
                ->get()
                ->groupBy('jurusan')
                ->map(function ($group) {
                    return count($group);
                });

            $jurusanData[] = [
                'year' => $year,
                'data' => $data,
            ];

        // $chart = datasiswa::selectRaw('YEAR(your_date_column) as year, COUNT(*) as count')
        //     ->groupBy('year')
        //     ->orderBy('year')
        //     ->get()
        
        // where('jurusan','jurusan')->where('tahun','tahun')->sum('jumlahsiswa');
        return view('beranda',compact('jurusanData'));
        }
    }
}
