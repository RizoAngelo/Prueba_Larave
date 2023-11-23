@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de reserva</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('reserva.index')}}" method="get">
                    {{-- <a href="{{route('users.store',$users->id)}}" class="btn btn-warning btn-sm">Crear Un Cliente</a> --}}
                    <div class="form-row">
                        <a href="{{route('reserva.create')}}" class="btn btn-warning btn-sm">Crear Un Cliente</a>
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
                            <th>id reserva</th>
                            <th>Documento</th>
                            <th>id habitacion</th>
                            <th>cantidad persona</th>
                            <th>fecha inicio</th>
                            <th>fecha final</th>
                            <th>dias</th>

                        </tr>
                </thead>
                <tbody>
                @if(count($reservas)<=0)
                    <tr>
                        <td colspan="8">No hay resultado</td>
                    </tr>
                @else
                @foreach ($reservas as $reservas )
                    <tr>
                        <td>{{$reservas->tipo_documento}}</td>
                        <td>{{$reservas->documento}}</td>
                        <td>{{$reservas->nombre}}</td>
                        <td>{{$reservas->primer_apellido}}</td>
                        <td>{{$reservas->segundo_apellido}}</td>
                        <td>{{$reservas->telefono}}</td>
                        <td>{{$reservas->email}}</td>
                        <td>{{$reservas->password}}</td>
                        <td>{{$reservas->roles->role_nombre}}</td>
                        <td><a href="{{route('reserva.update',$reservas->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <a href="{{route('reserva.destroy',$reservas->id)}}" method="post" class="btn btn-danger btn-sm">Eliminar</a>
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
