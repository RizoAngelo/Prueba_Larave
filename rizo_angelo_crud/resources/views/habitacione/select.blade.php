@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de habitacion</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('users.select')}}" method="get">
                    {{-- <a href="{{route('users.store',$users->id)}}" class="btn btn-warning btn-sm">Crear Un Cliente</a> --}}
                    <div class="form-row">
                        <a href="{{route('habitacion.create')}}" class="btn btn-warning btn-sm">Crear Un Cliente</a>
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
                            <th>Numero de habitacion</th>
                            <th>tipo de habitacion</th>
                            <th>precio</th>
                            <th>estado</th>
                            <th>cantidad de personas</th>
                        </tr>
                </thead>
                <tbody>
                @if(count($habitaciones)<=0)
                    <tr>
                        <td colspan="8">No hay resultado</td>
                    </tr>
                @else
                @foreach ($habitaciones as $habitaciones )
                    <tr>
                        <td>{{$habitaciones->id_habitacion}}</td>
                        <td>{{$habitaciones->nombre_tipo}}</td>
                        <td>{{$habitaciones->precio}}</td>
                        <td>{{$habitaciones->estado}}</td>
                        <td>{{$habitaciones->cantidad_personas}}</td>
                        <td><a href="{{route('habitacion.update',$habitaciones->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <a href="{{route('habitacion.destroy',$habitaciones->id)}}" method="post" class="btn btn-danger btn-sm">Eliminar</a>
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
