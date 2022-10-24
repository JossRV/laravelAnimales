<?php
namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;
class animales extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $titulo = 'Agregar animal';
        return view('inicio',compact('titulo'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function muestra()
    {
        $titulo = 'Animales';
        $animales = animal::all();
        return view('mostrarAnimales',compact('titulo','animales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new animal();
        $animal->nombre_animal = $request->nombre;
        $animal->tipo_habitat = $request->habitat;
        $animal->localizacion = $request->localizacion;
        $animal->peligro_extincion = $request->extincion;
        $animal->save();
        return redirect()->route('animales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Editar animal';
        $item = animal::find($id);
        return view('editarAnimales',compact('titulo','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animales = animal::find($id);
        $animales->nombre_animal = $request->nombre;
        $animales->tipo_habitat = $request->habitat;
        $animales->localizacion = $request->localizacion;
        $animales->peligro_extincion = $request->extincion;
        $animales->save();
        return redirect()->route('animales.muestra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animales = animal::find($id);
        $animales->delete();
        return redirect()->route('animales.muestra');
    }
}
