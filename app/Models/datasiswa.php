<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasiswa extends Model
{
    // use HasFactory;
    protected $table = 'datasiswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jurusan','tahun','jumlahsiswa'
    ];
}
