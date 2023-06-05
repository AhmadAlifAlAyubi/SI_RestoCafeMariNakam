<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kriteria_restoran extends Model
{
    // use HasFactory;
    protected $table = 'kriteria_restoran';
    protected $guarded = [];
    protected $primaryKey = 'ID_Kriteria_Restoran';
    protected $keyType = 'string';
}
