<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_penilaian_cafe extends Model
{   
    use HasFactory;
    protected $table = 'tb_penilaian_cafe';
    protected $guarded = [];
    protected $primaryKey = 'ID_Penilaian_Cafe';
    protected $keyType = 'string';
}
