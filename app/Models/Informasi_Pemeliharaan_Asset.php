<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi_Pemeliharaan_Asset extends Model
{
    use HasFactory;

    protected $table = 'informasi__pemeliharaan__assets';

    protected $casts = ['jadwal_pemeliharaan' => 'datetime'];

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id');
    }
}
