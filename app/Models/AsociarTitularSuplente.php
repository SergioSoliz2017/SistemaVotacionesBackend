<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsociarTitularSuplente extends Model
{
    use HasFactory;

    protected $table = 'asocialtitularsuplente';

    protected $fillable = [
        'ID_TS',
        'COD_SIS',
        'COD_COMITE',
        'COD_TITULAR_SUPLENTE',
    ];
    public $timestamps = false;
}
