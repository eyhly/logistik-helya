<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;

    protected $table = 'stok_barangs';

    protected $fillable = [
        'no_barang',
        'nama_barang',
        'kode_barang',
        'detail_barang',
        'quantity',
    ];

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'kode_barang', 'kode_barang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'kode_barang', 'kode_barang');
    } 
}
