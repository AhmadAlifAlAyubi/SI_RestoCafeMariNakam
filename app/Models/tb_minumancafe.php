<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_minumancafe extends Model
{
    // use HasFactory;
    protected $table = 'tb_minuman';
    protected $guarded = [];
    protected $primaryKey = 'ID_Minuman';
    protected $keyType = 'string';
}
