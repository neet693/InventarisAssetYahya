<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasis';

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function assets()
    {
        return $this->hasMany(Asset::class, 'lokasi_id');
    }
}
