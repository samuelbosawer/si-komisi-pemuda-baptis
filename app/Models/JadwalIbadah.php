<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalIbadah extends Model
{
    use HasFactory;

    public function gereja()
    {
        return $this->belongsTo(Gereja::class, 'gereja_id', 'id');
    }
}
