<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poblacion extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;




    protected $table = 'poblacion';

    protected $primaryKey = 'CODSIS'; // Ajusta la clave primaria según tus necesidades

    protected $fillable = [
        'COD_CANDIDATO',
        'CODCOMITE',
        'NOMBRE',
        'APELLIDO',
        'CARNETIDENTIDAD',
        'APELLIDOS',
        'ESTUDIANTE',
        'DOCENTE'
    ];



    protected $guarded = [];
}
