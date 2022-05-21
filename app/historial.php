<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    protected $fillable = ['id','user_id_mecanico', 'reserva_id', 'observaciones'];
}
