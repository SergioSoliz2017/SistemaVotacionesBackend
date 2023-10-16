<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = "administrador";
    protected $primaryKey = "CODADMINISTRADOR";
    protected $fillable = [
        "CODADMINISTRADOR",
        "NOMBREADMINISTRAOR",
        "CONTRASENAADMINISTRADOR",
        "CORREO", "TELEFONO"
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
