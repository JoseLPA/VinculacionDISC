<?php

namespace App\Http\Controllers;

use App\Academico;
use App\AcademicoAprendizajeServicio;
use App\AprendizajeServicioConvenio;
use App\Asignatura;
use App\Convenio;
use App\Http\Requests\AprendizajeServicioStoreRequest;
use App\Http\Requests\AprendizajeServicioUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\AprendizajeServicio;
use Illuminate\Support\Facades\Storage;
use App\ContadorRegistro;

class AprendizajeServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $asignaturas = Asignatura::orderBy('id','DESC')->paginate();
        $AprendizajesServicios = AprendizajeServicio::orderBy('id', 'DESC')->paginate();
        return view('aprendizaje_servicio.index', compact('AprendizajesServicios','asignaturas'));
    }


    public function create()
    {
        $convenios = Convenio::orderBy('id','ASC')->get();
        $academicos = Academico::orderBy('nombre_academico','ASC')->get();
        $asignaturas = Asignatura::all();
        return view('aprendizaje_servicio.create', compact('convenios','academicos','asignaturas'));
    }


    public function show($id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);
        $actividad_aprendizaje_convenios = AprendizajeServicioConvenio::all();
        $academico_aprendizaje_servicios = AcademicoAprendizajeServicio::all();

        return view('aprendizaje_servicio.show', compact('aprendizajeServicio','actividad_aprendizaje_convenios', 'academico_aprendizaje_servicios'));
    }


    public function store(AprendizajeServicioStoreRequest $request)
    {
        $aprendizajeServicio = AprendizajeServicio::create($request->all());

        $actividad_servicio_convenios = $request->input('convenios');
        if($actividad_servicio_convenios != null){
            foreach ($actividad_servicio_convenios as $valor) {
                $actividadServicioConvenio = new AprendizajeServicioConvenio();
                $actividadServicioConvenio->fill($request->only('aprendizaje_servicio_id', 'convenio_id'));
                $actividadServicioConvenio->aprendizaje_servicio_id = $aprendizajeServicio->id;
                $actividadServicioConvenio->convenio_id= $valor;
                $actividadServicioConvenio->save();
            }
        }

        $aprendizaje_servicio_academicos = $request->input('academicos');
        if($aprendizaje_servicio_academicos != null){
            foreach ($aprendizaje_servicio_academicos as $valor) {
                $aprendizajeServicioAcademico = new AcademicoAprendizajeServicio();
                $aprendizajeServicioAcademico->fill($request->only('aprendizaje_servicio_id', 'academico_id'));
                $aprendizajeServicioAcademico->aprendizaje_servicio_id = $aprendizajeServicio->id;
                $aprendizajeServicioAcademico->academico_id = $valor;
                $aprendizajeServicioAcademico->save();
            }
        }
        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $aprendizajeServicio->fill(['evidencia' => asset($path)])->save();
        }

        $contador= AprendizajeServicio::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_aprendizaje_servicio = $contador;
        $contadorRegistro->save();

        return redirect()->route('aprendizajeServicio.index')
            ->with('info','Actividad A+S creado con éxito');
    }


    public function edit($id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);
        $asignaturas = Asignatura::all();
        $academicos = Academico::orderBy('nombre_academico','ASC')->get();
        $convenios = Convenio::orderBy('nombre_empresa','ASC')->get();
        return view('aprendizaje_servicio.edit', compact('aprendizajeServicio','convenios','asignaturas','academicos'));
    }


    public function update(AprendizajeServicioUpdateRequest $request, $id)
    {
        $aprendizajeServicio = AprendizajeServicio::find($id);

        $aprendizajeServicio->fill($request->all())->save();

        /**
         * Se deben eliminar las actividades
         * antes de poder actualizar los datos.
         * Si no se eliminan, los datos no cambiaran.
         */

        //elimina los convenios
        $actiAprendizajeConvenios = AprendizajeServicioConvenio::all();
        foreach ($actiAprendizajeConvenios as $actiAprendizajeConvenio) {
            if ($actiAprendizajeConvenio->aprendizaje_servicio_id == $aprendizajeServicio->id) {
                $actiAprendizajeConvenio->delete();
            }
        }

        $actiAprendizajeAcademicos = AcademicoAprendizajeServicio::all();
        foreach ($actiAprendizajeAcademicos as $actiAprendizajeAcademico) {
            if ($actiAprendizajeAcademico->aprendizaje_servicio_id == $aprendizajeServicio->id) {
                $actiAprendizajeAcademico->delete();
            }
        }

        $actividad_aprendizaje_convenios = $request->input('convenios');
        if($actividad_aprendizaje_convenios != null){
            foreach ($actividad_aprendizaje_convenios as $valor) {
                $actividadAprendizajeConvenio = new AprendizajeServicioConvenio();
                $actividadAprendizajeConvenio->fill($request->only('aprendizaje_servicio_id', 'convenio_id'));
                $actividadAprendizajeConvenio->aprendizaje_servicio_id = $aprendizajeServicio->id;
                $actividadAprendizajeConvenio->convenio_id= $valor;
                $actividadAprendizajeConvenio->save();
            }
        }

        $aprendizaje_servicio_academicos = $request->input('academicos');
        if($aprendizaje_servicio_academicos != null){
            foreach ($aprendizaje_servicio_academicos as $valor) {
                $aprendizajeServicioAcademico = new AcademicoAprendizajeServicio();
                $aprendizajeServicioAcademico->fill($request->only('aprendizaje_servicio_id', 'academico_id'));
                $aprendizajeServicioAcademico->aprendizaje_servicio_id = $aprendizajeServicio->id;
                $aprendizajeServicioAcademico->academico_id = $valor;
                $aprendizajeServicioAcademico->save();
            }
        }

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $aprendizajeServicio->fill(['evidencia' => asset($path)])->save();
        }

        return redirect()->route('aprendizajeServicio.show',$aprendizajeServicio->id)
            ->with('info','Actividad de A+S editada con éxito');
    }


    public function destroy($id)
    {
        AprendizajeServicio::find($id)->delete();

        $contador= AprendizajeServicio::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_aprendizaje_servicio = $contador;
        $contadorRegistro->save();

        return back()->with('info', 'Eliminado correctamente');
    }
}