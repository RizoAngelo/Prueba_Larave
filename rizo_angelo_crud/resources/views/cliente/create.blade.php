@extends('layauts.app')

@section('content')

<div class="container w-50 border p-4 mt-4"> 
  <form action="{{ route('users.store') }}" method="POST" novalidate>
    @csrf
    
    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2" >{{ session('success') }}</h6>   
    @endif

    <div class="mb-3">
      <label for="exampleInputEmail1"class="form-label">
        Documento:
      </label>
      <input
        id="exampleInputEmail1" aria-describedby="emailHelp"
        name="documento"
        type="text"
        class="form-control"
        value="{{ old('documento') }}"
      >
        @error('documento')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror

    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">
        Tipo Documento:
      </label>
      <input
        id="exampleInputPassword1"
        name="tipo_documento"
        type="text" class="form-control"
        @error('tipo_documento')
          value="{{ old('tipo_documento') }}"
        @enderror
      >
        @error('tipo_documento')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            nombre:
        </label>
        <input
          id="exampleInputPassword1"
          name="nombre"
          type="text" class="form-control"
          @error('nombre')
            value="{{ old('nombre') }}"
          @enderror
        >
          @error('nombre')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Primer apellido:
        </label>
        <input
          id="exampleInputPassword1"
          name="primer_apellido"
          type="text" class="form-control"
          @error('primer_apellido')
            value="{{ old('primer_apellido') }}"
          @enderror
        >
          @error('primer_apellido')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>


      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            Segundo Apellido:
        </label>
        <input
          id="exampleInputPassword1"
          name="segundo_apellido"
          type="text" class="form-control"
          @error('segundo_apellido')
            value="{{ old('segundo_apellido') }}"
          @enderror
        >
          @error('segundo_apellido')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            Telefono:
        </label>
        <input
          id="exampleInputPassword1"
          name="telefono"
          type="text" class="form-control"
          @error('telefono')
            value="{{ old('telefono') }}"
          @enderror
        >
          @error('telefono')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            Email:
        </label>
        <input
          id="exampleInputPassword1"
          name="email"
          type="text" class="form-control"
          @error('email')
            value="{{ old('email') }}"
          @enderror
        >
          @error('email')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
          Contraseña:
        </label>
        <input
          id="exampleInputPassword1"
          name="password"
          type="text" class="form-control"
          @error('password')
            value="{{ old('password') }}"
          @enderror
        >
          @error('password')
            <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
          @enderror
      </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            ID Rol:
        </label>
        <input
          id="exampleInputPassword1"
          name="id_roles"
          type="text" class="form-control"
          @error('id_roles')
            value="{{ old('id_roles') }}"
          @enderror
        >
          @error('id_roles')
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