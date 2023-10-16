<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $table = 'eleccion';
    protected $primaryKey = 'CODELECCION';
    //protected $fillable=['MOTIVO_ELECCION','FECHA_INI_CONVOCATORIA','FECHA_FIN_CONVOCATORIA','FECHA_ELECCION']; //añadir en todos los modelos
    protected $guarded = []; //añadir en todos los modelos

     // Nombre de la tabla en la base de datos



    protected $fillable = [
        'CODELECCION',
        'CODCOMITE',
        'CODADMINISTRADOR',
        'MOTIVOELECCION',
        'FECHAELECCION',
        'ELECCIONACTIVA',
        // Agrega otros campos aquí
    ];
}
