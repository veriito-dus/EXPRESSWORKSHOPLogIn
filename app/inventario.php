<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $fillable = ['id','producto', 'marca', 'cantidad','tiempo_de_uso','user_id_inventario','created_at', 'updated_at'];
}
