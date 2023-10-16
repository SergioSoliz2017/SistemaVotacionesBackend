<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Poblacion;
use App\Models\Eleccion;
use App\Models\AsociarTitularSuplente;
use Illuminate\Support\Facades\DB;

class AsociarTitularSuplenteController extends Controller
{
    public function store(Request $request)
    {
        // Valida y guarda los datos en la tabla asociar_titularSuplente
        $data = $request->validate([
            'ID_TS' => 'required',
            'COD_SIS' => 'required',
            'COD_COMITE' => 'required',
            'COD_TITULAR_SUPLENTE' => 'required',
        ]);

        AsociarTitularSuplente::create($data);

        return response()->json(['message' => 'Registro creado con éxito'], 201);
    }

    public function verListaComite($idComite)
    {
        // Filtrar registros con codTitular_Suplente = 1
        $titulares = DB::table('asocialtitularsuplente')
        ->join('poblacion', 'asocialtitularsuplente.COD_SIS', '=', 'poblacion.CODSIS')
        ->select('poblacion.CARNETIDENTIDAD', 'poblacion.NOMBRE', 'poblacion.APELLIDO')
        ->where('asocialtitularsuplente.COD_COMITE', $idComite)
        ->where('asocialtitularsuplente.COD_TITULAR_SUPLENTE', "1")
        ->get();

    // Consulta para los suplentes (codTitular_Suplente = 2)
    $suplentes = DB::table('asocialtitularsuplente')
        ->join('poblacion', 'asocialtitularsuplente.COD_SIS', '=', 'poblacion.CODSIS')
        ->select('poblacion.CARNETIDENTIDAD', 'poblacion.NOMBRE', 'poblacion.APELLIDO')
        ->where('asocialtitularsuplente.COD_COMITE', $idComite)
        ->where('asocialtitularsuplente.COD_TITULAR_SUPLENTE', "2")
        ->get();

        // Puedes pasar los datos a una vista o devolverlos en formato JSON según tus necesidades
        //return view('lista_comite', compact('titulares', 'suplentes'));
        // O puedes devolver una respuesta JSON con los datos
         return response()->json(['titulares' => $titulares, 'suplentes' => $suplentes]);
    }


}
