@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de Empleados</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('empleados.select')}}" method="get">
                    <div class="form-row">
                        <a href="{{route('empleado.create')}}" class="btn btn-warning btn-sm">Crear Un Cliente</a>
                    </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Salario</th>
                            <th>Contraseña</th>
                        </tr>
                </thead>
                <tbody>
                @if(count($empleados)<=0)
                    <tr>
                        <td colspan="8">No hay resultado</td>
                    </tr>
                @else
                @foreach ($empleados as $empleados )
                    <tr>
                        <td>{{$empleados->documento}}</td>
                        <td>{{$empleados->salario}}</td>
                        <td>{{$empleados->password}}</td>
                        <td><a href="{{route('empleado.update',$empleados->id)}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <a href="{{route('empleado.destroy',$empleados->id)}}" method="post" class="btn btn-danger btn-sm">Eliminar</a>
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
