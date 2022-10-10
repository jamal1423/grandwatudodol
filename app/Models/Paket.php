<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Paket extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'paket';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'title', 
        'slug', 
        'harga', 
        'fasilitas', 
        'userlog'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
