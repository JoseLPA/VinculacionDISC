<?php

namespace App\Http\Controllers;

use App\ActividadExtension;
use Illuminate\Http\Request;

class ControllerActividadExtension extends Controller
{
    //
    public function index(){

        return view('ActividadExtension');
    }

    public function opcion(){

        $opcion = $_POST['opcion'];

        if($opcion == 'Agregar'){
            return view('ActividadExtensionAgregar');
        }
        if($opcion == 'Editar'){

            return view('ActividadExtensionBuscar',compact('opcion'));
        }
        if($opcion == 'Eliminar'){
            return view('ActividadExtensionBuscar',compact('opcion'));
        }
        if($opcion == 'Mostrar'){

            return view('ActividadExtensionBuscar',compact('opcion'));
        }


        return $opcion;
    }

    public function agregar(Request $request)
    {
        if($request->hasFile('evidencia')){

            $file = request('evidencia');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/archivos/', $name);

        }

        $ActividadExtension = new ActividadExtension;

        $ActividadExtension->titulo_actividad = request('titulo');
        $ActividadExtension->nombre_expositor = request('nombre_expositor');
        $ActividadExtension->fecha = request('fecha');
        $ActividadExtension->ubicacion = request('ubicacion');
        $ActividadExtension->cantidad_asistentes = request('cantidad');
        $ActividadExtension->organizador_actividad = request('nombre_organizador');
        $ActividadExtension->evidencia = request('evidencia');
        $ActividadExtension->user_id ='1';

        $ActividadExtension->save();

        return redirect('ActividadExtension' );
    }

    public function buscar(){

        $numero = request('id');
        $extension = ActividadExtension::find($numero);


        return view('ActividadExtensionVer',compact('extension'));

    }

    public function editar(Request $request)
    {
        $numero = request('id');
        $extension = ActividadExtension::find($numero);

        return view('ActividadExtensionEditar',compact('extension'));
    }

    public function eliminar()
    {
        $numero = request('id');
        $extension = ActividadExtension::find($numero);
        $extension-> delete();

        return view('ActividadExtension');
    }
}

