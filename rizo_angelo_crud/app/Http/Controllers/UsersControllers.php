<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersControllers extends Controller
{
    public function index(Request $request)
    {

        $users=User::all();
        return view('cliente.select',['users'=>$users]);

        // $texto=trim($request->get('texto'));
        // $users=DB::table('users')
        //     ->select('documento','tipo_documento','nombre','primer_apellido','segundo_apellido','telefono','email','password','id_roles')
        //     ->where('documento','LIKE','%'.$texto.'%')
        //     ->orWhere('nombre','LIKE','%'.$texto.'%')
        //     ->orderBy('nombre','asc')
        //     ->paginate(10);
        // return view('cliente/select', compact('users','texto'));

    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('users.update', compact('users'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate(User::$rules);

        // Crea un nuevo usuario
        User::create($request->all());

        return redirect('')->with('success', 'Usuario creado correctamente');
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required|string|min:2|max:10|unique:countries,country_code',
            'country_name' => 'required|string|min:4|max:50'
        ]);

        User::create([
            'country_code' => $request->country_code,
            'country_name' => $request->country_name,
        ]);

        return redirect()->back()->with('success', 'País creado correctamente');
    }

    public function destroy($id)
    {
        $country = User::find($id);
        $country->delete($id);
        return redirect('cliente.select')->with('success', 'Usuario eliminado correctamente');

    }
}
