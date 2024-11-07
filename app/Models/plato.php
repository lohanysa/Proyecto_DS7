<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plato extends Model
{
    protected $fillable =["id","nombre_plato","descripcion_plato","precio_plato","foto_plato","id_categoria","id_usuario"];
}
