<?php

namespace App\Http\Controllers;

use App\Http\Requests\TituladoStoreRequest;
use App\Http\Requests\TituladoUpdateRequest;
use App\ContadorRegistro;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Titulado;

class TituladoController extends Controller
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
        $titulados = Titulado::orderBy('id','DESC')->paginate();


        return view('titulado.index',compact('titulados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('titulado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TituladoStoreRequest $request)
    {
        $titulado = Titulado::create($request->all());

        //Evidencia

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $titulado->fill(['evidencia' => asset($path)])->save();
        }

        $contador=Titulado::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_titulado = $contador;
        $contadorRegistro->save();

        return redirect()->route('titulado.index')
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
        $titulado = Titulado::find($id);
        return view('titulado.show',compact('titulado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulado = Titulado::find($id);

        return view('titulado.edit',compact('titulado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TituladoUpdateRequest $request, $id)
    {
        $titulado = Titulado::find($id);

        $titulado->fill($request->all())->save();

        if($request->file('evidencia')){
            $path = Storage::disk('public')->put('evidencia',$request->file('evidencia'));
            $titulado->fill(['evidencia' => asset($path)])->save();
        }

        return redirect()->route('titulado.show',$titulado->id)
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
        Titulado::find($id)->delete();

        $contador=Titulado::count();
        $contadorRegistro=ContadorRegistro::find('1');
        $contadorRegistro->contador_titulado = $contador;
        $contadorRegistro->save();

        return back()->with('info','Eliminado correctamente');
    }
}
