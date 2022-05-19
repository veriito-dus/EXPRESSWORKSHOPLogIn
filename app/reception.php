<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reception extends Model
{
    protected $fillable = ['id','id_cliente', 'id_vehiculo', 'fecha','id_mantenimiento','id_estado', 'id_recepcionista','created_at', 'updated_at'];

}
