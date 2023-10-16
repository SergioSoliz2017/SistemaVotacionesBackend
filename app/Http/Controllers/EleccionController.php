<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Eleccion;
use Illuminate\Support\Facades\DB;

class EleccionController extends Controller
{
    public function index()
    {
        $elecciones = Eleccion::all();

        return response()->json($elecciones);
    }
}
/*

use App\Http\Requests\validarEleccion;
use Illuminate\Http\Request;
use App\Models\Eleccion;

class EleccionController extends Controller
{

    public function index()
    {
        $elecciones = Eleccion::all();

        if($elecciones->isEmpty()){
            return response()->json(['error' => 'No se encontraron procesos electorales.'], 404);
        }

        return response()->json($elecciones);
    }


    public function store(Request $request)
    {
        $eleccion = new Eleccion([
            'COD_ADMIN' => $request->COD_ADMIN,
            'COD_FRENTE' => $request->COD_FRENTE,
            'COD_TEU' => $request->COD_TEU,
            'COD_COMITE' => $request->COD_COMITE,
            'MOTIVO_ELECCION' => $request->MOTIVO_ELECCION,
            'FECHA_INI_CONVOCATORIA' => $request->FECHA_INI_CONVOCATORIA,
            'FECHA_FIN_CONVOCATORIA' => $request->FECHA_FIN_CONVOCATORIA,
            'FECHA_ELECCION' => $request->FECHA_ELECCION,
        ]);

        $eleccion->save();


        return response()->json(['message' => 'Proceso electoral creado correctamente.']);
    }


    public function show($id)
    {
        $eleccion = Eleccion::find($id);

        if(!$eleccion){
            return response()->json(['error' => 'El proceso electoral no se encontró.', 404]);
        }

        return response()->json($eleccion);
    }

    public function update(Request $request, $id)
    {
        $eleccion = Eleccion::find($id);

        if(!$eleccion){
            return response()->json(['error' => 'El proceso electoral no se encontró.'], 404);
        }


        $eleccion->update([
        'MOTIVO_ELECCION' => $request->MOTIVO_ELECCION,
        'FECHA_INI_CONVOCATORIA' => $request->FECHA_INI_CONVOCATORIA,
        'FECHA_FIN_CONVOCATORIA' => $request->FECHA_FIN_CONVOCATORIA,
        'FECHA_ELECCION' => $request->FECHA_ELECCION,
        ]);

        return response()->json(['message' => 'Proceso electoral actualizado correctamente.']);
    }

    public function destroy($id)
    {
        //
    }

}
*/
