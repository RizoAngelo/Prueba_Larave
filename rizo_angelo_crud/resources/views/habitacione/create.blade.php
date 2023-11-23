@extends('layauts.app')

@section('content')

<div class="container w-50 border p-4 mt-4"> 
  <form action="{{ route('habitacion.store') }}" method="POST" novalidate>
    @csrf
    
    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>   
    @endif

     <div class="mb-3">
      <label for="exampleInputEmail1"class="form-label">
        Numero de habitacion:
      </label>
      <input
        id="exampleInputEmail1" aria-describedby="emailHelp"
        name="id_habitacion"
        type="text"
        class="form-control"
        value="{{ old('id_habitacion') }}"
      >
        @error('id_habitacion')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
        Tipo de habitacion:
      </label>
      <input
        id="exampleInputPassword1"
        name="nombre_tipo"
        type="text" class="form-control"
        @error('nombre_tipo')
          value="{{ old('nombre_tipo') }}"
        @enderror
      >
        @error('nombre_tipo')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            Precio:
        </label>
        <input
          id="exampleInputPassword1"
          name="precio"
          type="text" class="form-control"
          @error('precio')
            value="{{ old('precio') }}"
          @enderror
        >
          @error('precio')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Estado:
        </label>
        <input
          id="exampleInputPassword1"
          name="estado"
          type="text" class="form-control"
          @error('estado')
            value="{{ old('estado') }}"
          @enderror
        >
          @error('estado')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>



      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            cantidad persona:
        </label>
        <input
          id="exampleInputPassword1"
          name="cantidad_personas"
          type="text" class="form-control"
          @error('cantidad_personas')
            value="{{ old('cantidad_personas') }}"
          @enderror
        >
          @error('cantidad_personas')
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