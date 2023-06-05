<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_cafe extends Model
{
    // use HasFactory;
    protected $table='tb_cafe';
    protected $guarded=[];
    protected $primaryKey = 'ID_Cafe';
    protected $keyType = 'string';
}
