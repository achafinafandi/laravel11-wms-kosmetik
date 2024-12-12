<?php

// 2. Model untuk tabel tb_barang
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Barang extends Model
{
    use HasFactory;

    protected $table = 'tb_barang';
    protected $fillable = ['id_kategori', 'id_supplier', 'nama_barang', 'harga_beli', 'stok_minimum', 'created_at', 'updated_at'];

    // Relasi ke kategori
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    // Relasi ke supplier
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }

    public function raks()
    {
        return $this->hasMany(Rak::class, 'id_barang');
    }
}


