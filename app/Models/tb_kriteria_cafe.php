<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kriteria_cafe extends Model
{
    // use HasFactory;
    protected $table = 'kriteria_cafe';
    protected $guarded = [];
    protected $primaryKey = 'ID_Kriteria_Cafe';
    protected $keyType = 'string';
}
