<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones=Habitacion::all();
        return view('habitacione.select',['habitaciones'=>$habitaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitacione.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_habitacion' => 'required|string|min:2|max:10|unique:habitaciones,id_habitacion',
            'nombre_tipo' => 'required|string|min:2|max:30',
            'precio' => 'required|string|min:4|max:50',
            'estado' => 'required|string|min:4|max:50',
            'cantidad_personas' => 'required|string|min:4|max:50',
        ]);

        Habitacion::create([
            'id_habitacion' => $request->id_habitacion,
            'nombre_tipo' => $request->nombre_tipo,
            'precio' => $request->precio,
            'estado' => $request->estado,
            'cantidad_personas' => $request->cantidad_personas,
        ]);
        return view('habitacione.create')->with('success', 'habitacion creado correctamente');
        // return redirect()->back()->with('success', 'País creado correctamente');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitaciones = Habitacion::find($id);
        $habitaciones->delete($id);
        return redirect('')->route('habitacione.select')->with('success', 'habitacion eliminado correctamente');
    }
}
