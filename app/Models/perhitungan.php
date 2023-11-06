<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perhitungan extends Model
{
    // use HasFactory;
    protected $table = 'perhitungans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tahun','x','y','z','a','b','c'
    ];
}
