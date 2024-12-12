<?php

// 5. Model untuk tabel tb_masuk
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Masuk extends Model
{
    use HasFactory;

    protected $table = 'tb_masuk';
    protected $fillable = ['id_barang', 'id_lokasi', 'jumlah_masuk', 'harga_beli_per_pcs', 'asal_barang', 'deskripsi_masuk', 'id_user', 'created_at', 'updated_at'];

    // Relasi ke barang
     // Relasi ke barang
     public function barang(): BelongsTo
     {
         return $this->belongsTo(Barang::class, 'id_barang');
     }
 
     // Relasi ke lokasi
     public function lokasi(): BelongsTo
     {
         return $this->belongsTo(Rak::class, 'id_lokasi');
     }
 
     // Relasi ke user
     public function user(): BelongsTo
     {
         return $this->belongsTo(User::class, 'id_user');
     }
}
