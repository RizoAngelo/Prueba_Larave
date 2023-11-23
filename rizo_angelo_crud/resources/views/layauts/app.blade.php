<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Gestion de personas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.select') }}">Gestionar Cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('empleado.index') }}">Gestianar Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('roles.index') }}">Gestianar Roles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('habitacion.index') }}">Gestianar Habitaciones</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ route('metodopago.index') }}">Gestianar metodos de pagos</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reserva.index') }}">Gestianar Reserva</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  @yield('content')

</body>
</html>