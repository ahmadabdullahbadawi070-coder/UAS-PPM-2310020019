<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    
    protected $fillable = [
        'id_keranjang',
        'status',
        'waktu_pesan',
        'waktu_bayar'
    ];

    protected $casts = [
        'waktu_pesan' => 'datetime',
        'waktu_bayar' => 'datetime',
    ];

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
    }
}
