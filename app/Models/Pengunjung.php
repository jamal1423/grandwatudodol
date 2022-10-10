<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = 'pengunjung';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ip', 
        'negara', 
        'kd_negara',
        'prov',
        'kota',
        'alamat',
        'latitude',
        'longitude'
    ];
}
