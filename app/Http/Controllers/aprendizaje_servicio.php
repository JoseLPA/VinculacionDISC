<?php

namespace App\Http\Controllers;

use App\Http\Requests\aprendizajeFormRequest;
use Illuminate\Http\Request;
use VinculacionDISC\Http\Requests;
use App\AprendizajeServicio;
use Illuminate\Support\Facades\Redirect;
use VinculacionDISC\Http\Requests\apredinzajeFormRequest;
use DB;

class aprendizaje_servicio extends Controller
{

    public function __constructor()
    {

        $this->middleware('auth');
    }

    public function index()
    {

        $AprendizajesServicios = AprendizajeServicio::orderBy('id', 'DESC')->paginate();
        return view('aprendizaje_servicio.index', compact('AprendizajesServicios'));

    }

    public function create()
    {

        return view('aprendizaje_servicio.create');
    }

    public function show($id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);
        return view('aprendizaje_servicio.show', compact('aprendizajeServicio'));

    }

    public function store(AprendizajeServicioStoreRequest $request)
    {
        $aprendizajeServicio = AprendizajeServicio::create($request->all());

        //Evidencia
        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $aprendizajeServicio->fill(['evidencia' => asset($path)])->save();
        }
        return redirect()->route('aprendizaje_servicio.index')
            ->with('info','Aprendizaje más servicio creado con éxito');
    }

    public function edit($id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);
        return view('aprendizaje_servicio.edit', compact('aprendizajeServicio'));
    }


    public function update(AprendizajeServicioUpdateRequest $request, $id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);
        $aprendizajeServicio->fill($request->all())->save();

        if ($request->file('evidencia')) {
            $path = Storage::disk('public')->put('evidencia', $request->file('evidencia'));
            $aprendizajeServicio->fill(['evidencia' => asset($path)])->save();
        }
        return redirect()->route('aprendizaje_servicio.show', $aprendizajeServicio->id)
            ->with('info', 'Aprendizaje más Servicio editado con éxito');
    }

    public function destroy($id)
    {
        AprendizajeServicio::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');


    }
}