@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de roles</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('users.select')}}" method="get">
                    {{-- <a href="{{route('users.store',$users->id)}}" class="btn btn-warning btn-sm">Crear Un Cliente</a> --}}
                    <div class="form-row">
                        <a href="{{route('users.create')}}" class="btn btn-warning btn-sm">Crear Un Cliente</a>
                        {{-- <div class="col-sm-4 my-11">
                             <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-11">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div> --}}
                    </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tipo Documento</th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                        </tr>
                </thead>
                <tbody>
                @if(count($users)<=0)
                    <tr>
                        <td colspan="8">No hay resultado</td>
                    </tr>
                @else
                @foreach ($users as $users )
                    <tr>
                        <td>{{$users->tipo_documento}}</td>
                        <td>{{$users->documento}}</td>
                        <td>{{$users->nombre}}</td>
                        <td>{{$users->primer_apellido}}</td>
                        <td>{{$users->segundo_apellido}}</td>
                        <td>{{$users->telefono}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->password}}</td>
                        <td>{{$users->roles->role_nombre}}</td>
                        <td><a href="{{route('users.update',$users->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <a href="{{route('users.destroy',$users->id)}}" method="post" class="btn btn-danger btn-sm">Eliminar</a>
                            {{-- <form action="{{route('users.destroy',$users->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
