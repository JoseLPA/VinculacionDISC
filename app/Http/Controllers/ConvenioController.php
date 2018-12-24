<?php

namespace App\Http\Controllers;

use App\ActividadExtension;
use App\AprendizajeServicio;
use App\Convenio;

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
        $actividadesExtension = ActividadExtension::orderBy('id','ASC')->get();
        $aprendizajeServicios = AprendizajeServicio::orderBy('nombre_asignatura', 'ASC')->get();
        return view('convenio.create', compact('actividadesExtension','aprendizajeServicios'));
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

        $actividad_extension_convenios = $request->input('actividadesExtension');
        if($actividad_extension_convenios != null){
            foreach ($actividad_extension_convenios as $valor) {
                $actividadExtensionConvenio = new ActividadExtensionConvenio();
                $actividadExtensionConvenio->fill($request->only('actividad_extension_id', 'convenio_id'));
                $actividadExtensionConvenio->actividad_extension_id = $valor;
                $actividadExtensionConvenio->convenio_id= $convenio->id;
                $actividadExtensionConvenio->save();
            }
        }
        $aprendizaje_servicio_convenios = $request->input('aprendizajeServicios');
        if($aprendizaje_servicio_convenios != null){
            foreach ($aprendizaje_servicio_convenios as $valor) {
                $aprendizajeServicioConvenio = new AprendizajeServicioConvenio();
                $aprendizajeServicioConvenio->fill($request->only('aprendizaje_servicio_id', 'convenio_id'));
                $aprendizajeServicioConvenio->aprendizaje_servicio_id = $valor;
                $aprendizajeServicioConvenio->convenio_id= $convenio->id;
                $aprendizajeServicioConvenio->save();
            }
        }
        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $convenio->fill(['evidencia' => asset($path)])->save();
        }

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
        $actividadesExtension = ActividadExtension::orderBy('titulo_actividad','ASC')->get();
        $aprendizajeServicios = AprendizajeServicio::orderBy('nombre_asignatura', 'ASC')->get();
        $convenio = Convenio::find($id);

        return view('convenio.edit',compact('convenio','actividadesExtension','aprendizajeServicios'));
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

        /**
         * Se deben eliminar las actividades
         * antes de poder actualizar los datos.
         * Si no se eliminan, los datos no cambiaran.
         */

        //elimina las actividades de Extensión
        $actiExtencionConvenios = ActividadExtensionConvenio::all();
        foreach ($actiExtencionConvenios as $actiExtencionConvenio) {
            if ($actiExtencionConvenio->convenio_id == $convenio->id) {
                $actiExtencionConvenio->delete();
            }
        }

        //elimina las actividades A+S asociadas
        $aprenServicioConvenios = AprendizajeServicioConvenio::all();
        foreach ($aprenServicioConvenios as $aprenServicioConvenio) {
            if ($aprenServicioConvenio->convenio_id == $convenio->id) {
                $aprenServicioConvenio->delete();
            }
        }

        $actividad_extension_convenios = $request->input('actividadesExtension');
        if($actividad_extension_convenios != null){
            foreach ($actividad_extension_convenios as $valor) {
                $actividadExtensionConvenio = new ActividadExtensionConvenio();
                $actividadExtensionConvenio->fill($request->only('actividad_extension_id', 'convenio_id'));
                $actividadExtensionConvenio->actividad_extension_id = $valor;
                $actividadExtensionConvenio->convenio_id= $convenio->id;
                $actividadExtensionConvenio->save();
            }
        }
        $aprendizaje_servicio_convenios = $request->input('aprendizajeServicios');
        if($aprendizaje_servicio_convenios != null){
            foreach ($aprendizaje_servicio_convenios as $valor) {
                $aprendizajeServicioConvenio = new AprendizajeServicioConvenio();
                $aprendizajeServicioConvenio->fill($request->only('aprendizaje_servicio_id', 'convenio_id'));
                $aprendizajeServicioConvenio->aprendizaje_servicio_id = $valor;
                $aprendizajeServicioConvenio->convenio_id= $convenio->id;
                $aprendizajeServicioConvenio->save();
            }
        }
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

        return back()->with('info','Eliminado correctamente');
    }
}
