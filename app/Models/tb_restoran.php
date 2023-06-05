<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_restoran extends Model
{
    // use HasFactory;
    protected $table='tb_restoran';
    protected $guarded=[];
    protected $primaryKey = 'ID_Restoran';
    protected $keyType = 'string';
}
