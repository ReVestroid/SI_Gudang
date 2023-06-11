<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_sopir extends Model
{
    use HasFactory;
    protected $table='tb_sopir';
    protected $guarded =['id_sopir'];
    protected $dates =['created_at'];
    public $incrementing = false;
}
