<?php

namespace Database\Seeders;
use App\Models\data_siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSiswaTahunanSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data1 = data_siswa::create([
            'tahun' => '2019',
            'jumlahsiswa' => '237',
            'n' => '1'
        ]);

        $data2 = data_siswa::create([
            'tahun' => '2020',
            'jumlahsiswa' => '166',
            'n' => '2'
        ]);

        $data3 = data_siswa::create([
            'tahun' => '2021',
            'jumlahsiswa' => '180',
            'n' => '3'
        ]);

        $data4 = data_siswa::create([
            'tahun' => '2022',
            'jumlahsiswa' => '152',
            'n' => '4'
        ]);

        $data5 = data_siswa::create([
            'tahun' => '2023',
            'jumlahsiswa' => '129',
            'n' => '5'
        ]);
    }
}
