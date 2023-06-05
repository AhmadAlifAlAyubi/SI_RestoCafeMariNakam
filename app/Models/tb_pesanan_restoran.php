<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pesanan_restoran extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan_restoran';
    protected $guarded = [];
    protected $primaryKey = 'ID_Pesanan_Restoran';
    protected $keyType = 'string';
}
