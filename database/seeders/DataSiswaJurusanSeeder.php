<?php

namespace Database\Seeders;
use App\Models\data_siswa_jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSiswaJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = data_siswa_jurusan::create([
            'tahun' => '2019',
            'otomotif' => 135,
            'media_desain' => 38,
            'tkk' => 35,
            'manajemen_bisnis' => 14,
            'akuntansi_keuangan' => 15 
        ]);

        $data2 = data_siswa_jurusan::create([
            'tahun' => '2020',
            'otomotif' => 99,
            'media_desain' => 14,
            'tkk' => 35,
            'manajemen_bisnis' => 11,
            'akuntansi_keuangan' => 7 
        ]);

        $data3 = data_siswa_jurusan::create([
            'tahun' => '2021',
            'otomotif' => 105,
            'media_desain' => 11,
            'tkk' => 36,
            'manajemen_bisnis' => 17,
            'akuntansi_keuangan' => 11 
        ]);

        $data4 = data_siswa_jurusan::create([
            'tahun' => '2022',
            'otomotif' => 76,
            'media_desain' => 30,
            'tkk' => 26,
            'manajemen_bisnis' => 7,
            'akuntansi_keuangan' => 13
        ]);

        $data5 = data_siswa_jurusan::create([
            'tahun' => '2023',
            'otomotif' => 70,
            'media_desain' => 16,
            'tkk' => 26,
            'manajemen_bisnis' => 11,
            'akuntansi_keuangan' => 6
        ]);
    }
}
