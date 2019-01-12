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

    public function check($rut) {

        $cleanedRut = $this->clean($rut);

        if (! $cleanedRut)
            return false;

        list($numero, $digitoVerificador) = explode('-', $cleanedRut);

        //Validamos requisitos mínimos
        if ((($digitoVerificador != 'K') && (! is_numeric($digitoVerificador))) || (count(str_split($numero)) > 11))
            return false;

        //Validamos que todos los caracteres del número sean dígitos
        foreach(str_split($numero) as $chr) {
            if (! is_numeric($chr))
                return false;
        }

        //Calculamos el digito verificador
        $digit = $this->digitoVerificador($numero);

        //Comparamos el digito verificador calculado con el entregado
        if($digit == $digitoVerificador)
            return true;

        return false;
    }

    public function clean($originalRut, $incluyeDigitoVerificador = true) {

        //Eliminamos espacios al principio y final
        $originalRut = trim($originalRut);
        //En caso de existir, eliminamos ceros ("0") a la izquierda
        $originalRut = ltrim($originalRut, '0');
        $input		= str_split($originalRut);
        $cleanedRut	= '';
        foreach ($input as $key => $chr) {
            //Digito Verificador
            if ((($key + 1) == count($input)) && ($incluyeDigitoVerificador)){
                if (is_numeric($chr) || ($chr == 'k') || ($chr == 'K'))
                    $cleanedRut .= '-'.strtoupper($chr);
                else
                    return false;
            }
            //Números del RUT
            elseif (is_numeric($chr))
                $cleanedRut .= $chr;
        }

        if (strlen($cleanedRut) < 3)
            return false;

        return $cleanedRut;
    }

    public function digitoVerificador($rut) {
        //Preparamos el RUT recibido
        $numero = $this->clean($rut, false);
        //Calculamos el dígito verificador
        $txt		= array_reverse(str_split($numero));
        $sum		= 0;
        $factors	= array(2,3,4,5,6,7,2,3,4,5,6,7);
        foreach($txt as $key => $chr) {
            $sum += $chr * $factors[$key];
        }

        $a			= $sum % 11;
        $b			= 11-$a;

        if($b == 11)
            $digitoVerificador	= 0;
        elseif($b == 10)
            $digitoVerificador	= 'K';
        else
            $digitoVerificador = $b;
        //Convertimos el número a cadena para efectos de poder comparar
        $digitoVerificador = (string)$digitoVerificador;
        return $digitoVerificador;
    }


    public function store(TituladoStoreRequest $request)
    {
        $titulado = Titulado::create($request->all());

        $rut_verificar = $titulado->rut_titulado;
        if($this->check($rut_verificar)==false){
            $this->destroy($titulado->id);
            return redirect()->route('titulado.create')
                ->with('info','Rut mal ingresado');
        }


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

        $rut_verificar = $titulado->rut_titulado;
        if($this->check($rut_verificar)==false){
            $this->destroy($titulado->id);
            return redirect()->route('titulado.index')
                ->with('info','Rut mal ingresado');
        }

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
