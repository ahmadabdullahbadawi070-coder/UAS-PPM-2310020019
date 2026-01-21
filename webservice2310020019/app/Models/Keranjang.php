<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjangs';
    
    protected $fillable = [
        'meja',
        'nama_pelanggan',
        'kode_pupuk',
        'nama_pupuk',
        'jumlah'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_keranjang');
    }
}
