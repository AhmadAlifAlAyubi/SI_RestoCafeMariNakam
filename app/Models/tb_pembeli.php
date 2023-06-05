<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pembeli extends Model
{
    // use HasFactory;
    protected $table='tb_pelanggan';
    protected $guarded=[];
    protected $primaryKey = 'ID_Pelanggan';
    protected $keyType = 'string';
}
