<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    // use HasFactory;
    protected $table="usuarios";
    protected $primarykey="id";
    protected $fillable=[
        'nombre', 'descripcion', 'nombre_usuario','fecha_inicio','fecha_vencimiento'
    ];

    public $timestamps = false;
}
