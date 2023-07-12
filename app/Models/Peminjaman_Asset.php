<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman_Asset extends Model
{
    use HasFactory;

    protected $table = 'peminjaman__assets';
    protected $casts = ['tanggal_peminjaman' => 'datetime'];

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
