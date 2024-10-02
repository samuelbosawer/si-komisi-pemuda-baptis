<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;


    public Function gereja()
    {
        return $this->hasMany(Gereja::class, 'wilayah_id','id');
    }

    public Function pemuda()
    {
        return $this->hasManyThrough(Pemuda::class, Gereja::class);
    }
}
