<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable=["id", "usuario", "correo","password","nombre_contacto", "nombre_restaurante","imagen_fondo", "logo_empresa","tipo_usuario","status"];
}
