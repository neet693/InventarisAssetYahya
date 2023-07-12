<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    public function lokasi()
    {
        return $this->hasMany(Lokasi::class, 'unit_id');
    }
}
