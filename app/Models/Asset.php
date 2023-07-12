<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'assets';

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $casts = ['tanggal_pembelian' => 'datetime'];

    public function jenisAsset()
    {
        return $this->belongsTo(JenisAsset::class, 'jenis_asset_id');
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function informasiKeuangan()
    {
        return $this->hasOne(InformasiKeuangan::class, 'asset_id');
    }

    public function informasiPemeliharaan()
    {
        return $this->hasOne(InformasiPemeliharaan::class, 'asset_id');
    }

    public function informasiPeminjaman()
    {
        return $this->hasOne(InformasiPeminjaman::class, 'asset_id');
    }
}
