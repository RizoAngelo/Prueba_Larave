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

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required|string|min:2|max:10|unique:users,documento',
            'tipo_documento' => 'required|string|min:2|max:30',
            'nombre' => 'required|string|min:4|max:50',
            'primer_apellido' => 'required|string|min:4|max:50',
            'segundo_apellido' => 'required|string|min:4|max:50',
            'telefono' => 'required|string|min:4|max:50',
            'email' => 'required|string|min:4|max:50',
            'password' => 'required|string|min:4|max:50',
            'id_roles' => 'required|string|min:1|max:5',
        ]);

        User::create([
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
        return view('cliente.create')->with('success', 'Usuario creado correctamente');
        // return redirect()->back()->with('success', 'País creado correctamente');
    }

    public function destroy($id)
    {
        $country = User::find($id);
        $country->delete($id);
        return redirect('cliente.select')->with('success', 'Usuario eliminado correctamente');

    }
}
