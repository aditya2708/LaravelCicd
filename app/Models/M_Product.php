<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Product extends Model
{
    protected $table = "product";
    protected $fillable = [
        'kd_produk',
        'nama_produk',
        'harga',
        'kd_kategori',
        'active'
    ];
}
