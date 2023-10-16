<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function verificarAdministrador ($id) {
        return Administrador::where("CODADMINISTRADOR",$id)->get();
    }
}
