<?php

namespace App\Http\Controllers;

use App\Academico;
use App\ActividadExtension;
use App\AcademicoActividadExtension;
use App\ActividadExtensionConvenio;
use App\Convenio;
use App\Http\Requests\ActividadExtensionStoreRequest;
use App\Http\Requests\ActividadExtensionUpdateRequest;
use App\User;
use App\ContadorRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActividadExtensionController extends Controller
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
        $actividadesExtension = ActividadExtension::orderBy('id','DESC')->paginate();


        return view('actividadExtension.index',compact('actividadesExtension'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convenios = Convenio::orderBy('id','ASC')->get();
        $academicos = Academico::orderBy('nombre_academico','ASC')->get();
        return view('actividadExtension.create', compact('convenios','academicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadExtensionStoreRequest $request)
    {
        $actividadExtension = ActividadExtension::create($request->all());

        $actividad_extension_convenios = $request->input('convenios');
        if($actividad_extension_convenios != null){
            foreach ($actividad_extension_convenios as $valor) {
                $actividadExtensionConvenio = new ActividadExtensionConvenio();
                $actividadExtensionConvenio->fill($request->only('actividad_extension_id', 'convenio_id'));
                $actividadExtensionConvenio->actividad_extension_id = $actividadExtension->id;
                $actividadExtensionConvenio->convenio_id= $valor;
                $actividadExtensionConvenio->save();
            }
        }

        $actividad_extension_academicos = $request->input('academicos');
        if($actividad_extension_academicos != null){
            foreach ($actividad_extension_academicos as $valor) {
                $actividadExtensionAcademico = new AcademicoActividadExtension();
                $actividadExtensionAcademico->fill($request->only('actividad_extension_id', 'academico_id'));
                $actividadExtensionAcademico->actividad_extension_id = $actividadExtension->id;
                $actividadExtensionAcademico->academico_id = $valor;
                $actividadExtensionAcademico->save();
            }
        }

        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $actividadExtension->fill(['evidencia' => asset($path)])->save();
        }

        $contador=ActividadExtension::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_extension = $contador;
        $contadorRegistro->save();


        return redirect()->route('actividadExtension.index')
            ->with('info','Actividad de extensión creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividadExtension = ActividadExtension::find($id);
        $usuario = User::find($actividadExtension->user_id);
        $actividad_extension_convenios = ActividadExtensionConvenio::all();
        $academico_actividad_extensions = AcademicoActividadExtension::all();
        return view('actividadExtension.show',compact('actividadExtension','usuario','actividad_extension_convenios','academico_actividad_extensions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenios = Convenio::orderBy('nombre_empresa','ASC')->get();
        $academicos = Academico::orderBy('nombre_academico','ASC')->get();
        $actividadExtension = ActividadExtension::find($id);

        return view('actividadExtension.edit',compact('actividadExtension','convenios','academicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadExtensionUpdateRequest $request, $id)
    {
        $actividadExtension = ActividadExtension::find($id);

        $actividadExtension->fill($request->all())->save();

        /**
         * Se deben eliminar las actividades
         * antes de poder actualizar los datos.
         * Si no se eliminan, los datos no cambiaran.
         */

        //elimina las actividades de Extensión
        $actiExtencionConvenios = ActividadExtensionConvenio::all();
        foreach ($actiExtencionConvenios as $actiExtencionConvenio) {
            if ($actiExtencionConvenio->actividad_extension_id == $actividadExtension->id) {
                $actiExtencionConvenio->delete();
            }
        }

        $academicoActividadExts = AcademicoActividadExtension::all();
        foreach ($academicoActividadExts as $academicoActividadExt) {
            if ($academicoActividadExt->actividad_extension_id == $actividadExtension->id) {
                $academicoActividadExt->delete();
            }
        }

        $actividad_extension_convenios = $request->input('convenios');
        if($actividad_extension_convenios != null){
            foreach ($actividad_extension_convenios as $valor) {
                $actividadExtensionConvenio = new ActividadExtensionConvenio();
                $actividadExtensionConvenio->fill($request->only('actividad_extension_id', 'convenio_id'));
                $actividadExtensionConvenio->actividad_extension_id = $actividadExtension->id;
                $actividadExtensionConvenio->convenio_id= $valor;
                $actividadExtensionConvenio->save();
            }
        }

        $actividad_extension_academicos = $request->input('academicos');
        if($actividad_extension_academicos != null){
            foreach ($actividad_extension_academicos as $valor) {
                $actividadExtensionAcademico = new AcademicoActividadExtension();
                $actividadExtensionAcademico->fill($request->only('actividad_extension_id', 'academico_id'));
                $actividadExtensionAcademico->actividad_extension_id = $actividadExtension->id;
                $actividadExtensionAcademico->academico_id = $valor;
                $actividadExtensionAcademico->save();
            }
        }

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $actividadExtension->fill(['evidencia' => asset($path)])->save();
        }

        return redirect()->route('actividadExtension.show',$actividadExtension->id)
            ->with('info','Actividad de extensión editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActividadExtension::find($id)->delete();

        $contador=ActividadExtension::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_extension = $contador;
        $contadorRegistro->save();


        return back()->with('info','Eliminado correctamente');
    }
}
