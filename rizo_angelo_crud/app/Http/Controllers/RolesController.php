<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Roles::all();
        return view('roles.select',['Roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
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
            'role_nombre' => 'required|string|min:2|max:20|unique:roles,role_nombre',
            'tipo_documento' => 'required|string|min:2|max:30',
            'nombre' => 'required|string|min:4|max:50',
            'primer_apellido' => 'required|string|min:4|max:50',
            'segundo_apellido' => 'required|string|min:4|max:50',
            'telefono' => 'required|string|min:4|max:50',
            'email' => 'required|string|min:4|max:50',
            'password' => 'required|string|min:4|max:50',
            'id_roles' => 'required|string|min:1|max:5',
        ]);

        roles::create([
            'documento' => $request->documento,
            'nombre' => $request->nombre,
            'tipo_documento' => $request->tipo_documento,
            'primer_apellido' => $request->primer_apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => $request->password,
            'id_roles' => $request->id_roles,
        ]);
        return view('roles.create')->with('success', 'Usuario creado correctamente');
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
        $roles = User::find($id);
        $roles->delete($id);
        return redirect('')->route('roles.select')->with('success', 'role eliminado correctamente');
    }
}
