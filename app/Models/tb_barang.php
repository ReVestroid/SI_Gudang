<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;
    protected $table='tb_barangs';
    protected $guarded =['id_barang'];
    protected $dates =['created_at'];
    public $incrementing = false;
}
