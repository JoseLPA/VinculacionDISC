<?php

namespace App\Http\Controllers;

use App\ActividadExtension;
use App\AprendizajeServicio;
use App\Convenio;
use App\ContadorRegistro;
use App\ActividadExtensionConvenio;
use App\AprendizajeServicioConvenio;

use Illuminate\Support\Facades\Storage;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ConvenioStoreRequest;
use App\Http\Requests\ConvenioUpdateRequest;
class ConvenioController extends Controller
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
        $convenios = Convenio::orderBy('id','DESC')->paginate();

        return view('convenio.index',compact('convenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvenioStoreRequest $request)
    {
        $convenio = Convenio::create($request->all());


        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $convenio->fill(['evidencia' => asset($path)])->save();
        }

        $contador=Convenio::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_convenio = $contador;
        $contadorRegistro->save();

        return redirect()->route('convenio.index')
            ->with('info','Convenio creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convenio = Convenio::find($id);
        $usuario = User::find($convenio->user_id);
        $actividad_extension_convenios = ActividadExtensionConvenio::all();
        $aprendizaje_servicio_convenios = AprendizajeServicioConvenio::all();
        return view('convenio.show',compact('convenio','usuario','actividad_extension_convenios','aprendizaje_servicio_convenios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = Convenio::find($id);

        return view('convenio.edit',compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConvenioUpdateRequest $request, $id)
    {
        $convenio = Convenio::find($id);

        $convenio->fill($request->all())->save();

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $convenio->fill(['evidencia' => asset($path)])->save();
        }

        return redirect()->route('convenio.show',$convenio->id)
            ->with('info','Convenio editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Convenio::find($id)->delete();

        $contador=Convenio::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_convenio = $contador;
        $contadorRegistro->save();

        return back()->with('info','Eliminado correctamente');
    }
}
