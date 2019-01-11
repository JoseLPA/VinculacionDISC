<?php

namespace App\Http\Controllers;

use App\Academico;
use App\ActividadTitulacion;
use App\Convenio;
use App\Http\Requests\ActividadTitulacionStoreRequest;
use App\Http\Requests\ActividadTitulacionUpdateRequest;
use App\User;
use App\ContadorRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActividadTitulacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadesTitulacion = ActividadTitulacion::orderBy('id','DESC')->paginate();


        return view('actividadTitulacion.index',compact('actividadesTitulacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convenios = Convenio::orderBy('id','ASC')->get();
        $academicos = Academico::orderBy('id','ASC')->get();
        return view('actividadTitulacion.create', compact('convenios','academicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadTitulacionStoreRequest $request)
    {
        $actividadTitulacion = ActividadTitulacion::create($request->all());

        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $actividadTitulacion->fill(['evidencia' => asset($path)])->save();
        }

        $contador=ActividadTitulacion::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_actividad_titulacion = $contador;
        $contadorRegistro->save();

        return redirect()->route('actividadTitulacion.index')
            ->with('info','Titulado creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividadTitulacion = ActividadTitulacion::find($id);
        return view('actividadTitulacion.show',compact('actividadTitulacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividadTitulacion = ActividadTitulacion::find($id);
        $academicos = Academico::orderBy('id','ASC')->get();
        $convenios = Convenio::orderBy('id','ASC')->get();

        return view('actividadTitulacion.edit',compact('actividadTitulacion','convenios','academicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadTitulacionUpdateRequest $request, $id)
    {
        $actividadTitulacion = ActividadTitulacion::find($id);

        $actividadTitulacion->fill($request->all())->save();

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $actividadTitulacion->fill(['evidencia' => asset($path)])->save();
        }

        return redirect()->route('actividadTitulacion.show',$actividadTitulacion->id)
            ->with('info','Titulado editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActividadTitulacion::find($id)->delete();

        $contador=ActividadTitulacion::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_actividad_titulacion = $contador;
        $contadorRegistro->save();

        return back()->with('info','Eliminado correctamente');
    }
}
