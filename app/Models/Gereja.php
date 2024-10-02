<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Gereja extends Model
{
    use HasFactory;

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id', 'id');
    }

    public Function pemuda()
    {
        return $this->hasMany(Pemuda::class, 'gereja_id','id');
    }
}
