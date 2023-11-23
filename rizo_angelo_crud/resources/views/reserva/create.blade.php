@extends('layauts.app')

@section('content')

<div class="container w-50 border p-4 mt-4"> 
  <form action="{{ route('reserva.index') }}" method="POST" novalidate>
    @csrf
    
    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>   
    @endif

     <div class="mb-3">
      <label for="exampleInputEmail1"class="form-label">
        Numero de Reserva:
      </label>
      <input
        id="exampleInputEmail1" aria-describedby="emailHelp"
        name="id_reservas"
        type="text"
        class="form-control"
        value="{{ old('id_reservas') }}"
      >
        @error('id_reservas')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
            documento:
      </label>
      <input
        id="exampleInputPassword1"
        name="documento"
        type="text" class="form-control"
        @error('documento')
          value="{{ old('documento') }}"
        @enderror
      >
        @error('documento')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            Numero de la Habitacion:
        </label>
        <input
          id="exampleInputPassword1"
          name="id_habitacion"
          type="text" class="form-control"
          @error('id_habitacion')
            value="{{ old('id_habitacion') }}"
          @enderror
        >
          @error('id_habitacion')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Cantidad de persona:
        </label>
        <input
          id="exampleInputPassword1"
          name="cabtidad_perosnas"
          type="text" class="form-control"
          @error('cabtidad_perosnas')
            value="{{ old('cabtidad_perosnas') }}"
          @enderror
        >
          @error('cabtidad_perosnas')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>



      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            fecha inicio:
        </label>
        <input
          id="exampleInputPassword1"
          name="fecha_inicio"
          type="date" class="form-control"
          @error('fecha_inicio')
            value="{{ old('fecha_inicio') }}"
          @enderror
        >
          @error('fecha_inicio')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            fecha final:
        </label>
        <input
          id="exampleInputPassword1"
          name="fecha_final"
          type="text" class="form-control"
          @error('fecha_final')
            value="{{ old('fecha_final') }}"
          @enderror
        >
          @error('fecha_final')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            dias:
        </label>
        <input
          id="exampleInputPassword1"
          name="dias"
          type="text" class="form-control"
          @error('dias')
            value="{{ old('dias') }}"
          @enderror
        >
          @error('dias')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Cantidad Personas:
        </label>
        <input
          id="exampleInputPassword1"
          name="cantida_personas"
          type="text" class="form-control"
          @error('cantida_personas')
            value="{{ old('cantida_personas') }}"
          @enderror
        >
          @error('cantida_personas')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

    <button
      type="submit" class="btn btn-primary">
        Enviar
    </button>
  </form>
</div>

@endsection  