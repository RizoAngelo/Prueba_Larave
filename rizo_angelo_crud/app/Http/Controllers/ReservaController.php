<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas=Reserva::all();
        return view('reserva.select',['reservas'=>$reservas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva.create');
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
            'id_reservas' => 'required|string|min:2|max:10|unique:reservas,id_reservas',
            'documento' => 'required|string|min:2|max:30',
            'id_habitacion' => 'required|string|min:4|max:50',
            'cantidad_persona' => 'required|string|min:4|max:50',
            'fecha_inicio' => 'required|string|min:4|max:50',
            'fecha_final' => 'required|string|min:4|max:50',
            'dias' => 'required|string|min:4|max:50',
            'cantida_personas' => 'required|string|min:4|max:50',
        ]);

        Reserva::create([
            'id_reservas' => $request->id_reservas,
            'documento' => $request->documento,
            'id_habitacion' => $request->id_habitacion,
            'cantidad_persona' => $request->cantidad_persona,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_final' => $request->fecha_final,
            'dias' => $request->dias,
            'cantida_personas' => $request->cantida_personas,
        ]);
        return view('reserva.create')->with('success', 'Usuario creado correctamente');
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
        $reservas = Reserva::find($id);
        $reservas->delete($id);
        return redirect('')->route('reserva.select')->with('success', 'reserva eliminado correctamente');
    }
}
