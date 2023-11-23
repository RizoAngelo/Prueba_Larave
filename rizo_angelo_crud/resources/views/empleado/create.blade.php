@extends('layauts.app')

@section('content')

<div class="container w-50 border p-4 mt-4"> 
  <form action="{{ route('empleado.store') }}" method="POST" novalidate>
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
        salario:
      </label>
      <input
        id="exampleInputPassword1"
        name="salario"
        type="text" class="form-control"
        @error('salario')
          value="{{ old('salario') }}"
        @enderror
      >
        @error('salario')
          <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
            contraseña:
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

    <button
      type="submit" class="btn btn-primary">
        Enviar
    </button>
  </form>
</div>

@endsection  