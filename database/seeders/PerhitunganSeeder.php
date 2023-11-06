<?php

namespace Database\Seeders;

use App\Models\perhitungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerhitunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data1 = perhitungan::create([
            'tahun' => '2019',
            'x' => '1',
            'y' => '237',
            'z' => '237',
            'a' => '1',
            'b' => '218,8',
            'c' => '18,2',
        ]);
        $data2 = perhitungan::create([
            'tahun' => '2020',
            'x' => '2',
            'y' => '166',
            'z' => '332',
            'a' => '4',
            'b' => '195,8',
            'c' => '29,8',
        ]);
        $data3 = perhitungan::create([
            'tahun' => '2021',
            'x' => '3',
            'y' => '180',
            'z' => '540',
            'a' => '9',
            'b' => '172,8',
            'c' => '7,2',
        ]);
        $data4 = perhitungan::create([
            'tahun' => '2022',
            'x' => '4',
            'y' => '152',
            'z' => '608',
            'a' => '16',
            'b' => '149,8',
            'c' => '2,2',
        ]);
        $data5 = perhitungan::create([
            'tahun' => '2023',
            'x' => '5',
            'y' => '129',
            'z' => '645',
            'a' => '25',
            'b' => '126,8',
            'c' => '2,2',
        ]);
    }
}
