<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa_jurusan extends Model
{
    use HasFactory;
    protected $table = 'data_siswa_jurusan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tahun','otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'
    ];
}
