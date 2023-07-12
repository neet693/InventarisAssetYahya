<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi_Keuangan_Asset extends Model
{
    use HasFactory;

    // protected $table = 'informasi_keuangan_assets';
    protected $table = 'informasi__keuangan__assets';

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id');
    }
}
