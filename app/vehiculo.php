<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $fillable = ['id','marca', 'modelo', 'placa','user_id','estado', 'created_at', 'updated_at'];
}
