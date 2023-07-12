<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAsset extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'jenis_assets_id');
    }
}
