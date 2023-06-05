<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pesanan_cafe extends Model
{
    // use HasFactory;
    protected $table='tb_pesanan_cafe';
    protected $guarded=[];
    protected $primaryKey = 'ID_Pesanan_Cafe';
    protected $keyType = 'string';
}
