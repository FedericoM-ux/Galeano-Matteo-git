<!DOCTYPE html>
<html>

<head>
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark mi-navbar">
    <div class="container-fluid px-0">

        <a class="navbar-brand ms-2" href="/main">
            <img src="{{ asset('images/icono.PNG') }}" alt="Icono" height="40">
        </a>

        <a class="navbar-brand ms-auto" href="/user">
        <img src="{{ asset('images/user.svg') }}" height="30">
        </a>
        
        <a class="navbar-brand" href="/shop">
        <img src="{{ asset('images/shopping-cart.svg') }}" height="30">
        </a>
    </div>
</nav>

<div style="text-align:center; margin-top:50px;">
    <h1>Perfil de Usuario</h1>
</div>

<div class="separador"></div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nosotros nunca compartiremos tu email con nadie mas.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>

</body>

</html>