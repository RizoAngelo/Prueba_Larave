<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersControllers extends Controller
{
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $users=DB::table('users')
            ->select('id','documento','tipo_documento','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','telefono','email','email_verified_at','password','remenber_token','id_roles','created_at','updated_at')
            ->where('documento','LIKE','%'.$texto.'%')
            ->orWhere('primer_nombre','LIKE','%'.$texto.'%')
            ->orderBy('primer_nombre','asc')
            -paginate(10);
        return view('users.index', compact('users','texto'));
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('users.update', compact('users'));
    }

        public function update(Request $request, $id)
     {
         $request->validate(Country::$rules);

        Country::where('id', $id)->update($request->except('_token', '_method'));

         return redirect('#')->with('success', 'Usuario actualizado correctamente');
     }

    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required|string|min:2|max:10|unique:countries,country_code',
            'country_name' => 'required|string|min:4|max:50'
        ]);

        Country::create([
            'country_code' => $request->country_code,
            'country_name' => $request->country_name,
        ]);

        return redirect()->back()->with('success', 'País creado correctamente');
    }

    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete($id);
        return redirect('/country')->with('success', 'Usuario eliminado correctamente');
        // return view('destroy.{id}.countrys.index');

    }
}
