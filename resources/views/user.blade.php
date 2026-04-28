<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Dejada Padel Store / Perfil de Usuario</title>
    <link rel="icon" type="image/png" href="images/pelota.png">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body><nav class="navbar navbar-dark navbar">
    <div class="container-fluid">

    <div class="row w-100 align-items-center">

    <div class="col-12 col-md-3 text-center text-md-start mb-2 mb-md-0">
        <a href="/main">
            <img src="{{ asset('images/Icono.PNG') }}" class="img-fluid" style="max-height:60px;">
        </a>
    </div>

    <div class="col-12 col-md-6 mb-2 mb-md-0">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar productos...">
            <button class="btn btn-outline-light">Buscar</button>
        </form>
    </div>

    <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end gap-3">
    
        <a href="/user">
            <img src="{{ asset('images/user.svg') }}" height="28">
        </a>

        <a href="/shop" class="position-relative">
            <img src="{{ asset('images/shopping-cart.svg') }}" height="28">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
        </a>
        </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light navbarW">
    <div class="container">

        <input type="checkbox" id="menu-toggle">

        <label for="menu-toggle" class="navbar-toggler">
        <img src="{{ asset('images/menu.svg') }}" width="40" alt="Menú">
        </label>

        <div class="menu-mobile">
        <ul class="navbar-nav mx-auto text-uppercase fw-semibold">

        <li class="nav-item"><a class="nav-link px-3" href="/main">Inicio</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/productos">Productos</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/ofertas">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/ventaMayorista">Venta Mayorista</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/sobre-nosotros">Sobre Nosotros</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/comercialización">Comercialización</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/contacto">Contáctanos</a></li>
        <li class="nav-item"><a class="nav-link px-3" href="/términos">Términos y Usos</a></li>
        </ul>
        </div>
    </div>
</nav>

<div class="separadorG"></div>

<div class="separador"></div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> <div class="card shadow border-0 p-4">
                <div class="card-body">
                    <h3 class="text-center mb-4 fw-bold">Iniciar Sesión</h3>
                    
                    <form>
                        <div class="mb-3">
                            <label class="form-label text-secondary">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="nombre@ejemplo.com">
                            <div class="form-text text-muted">
                                Nosotros nunca compartiremos tu email con nadie más.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-secondary">Contraseña</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                            <a href="#" class="text-decoration-none small-link">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="recordar">
                            <label class="form-check-label" for="recordar">Recuérdame</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="linea-end"></div>

<nav class="navbar navbar-dark navbarW">
<div class="container text-center py-4">

<p class="mb-3 text-dark">Seguinos en nuestras redes sociales:</p>

<div class="d-flex justify-content-center gap-3 mb-3">
    <img src="{{ asset('images/brand-whatsapp.svg') }}" width="40">
    <img src="{{ asset('images/brand-facebook.svg') }}" width="40">
    <img src="{{ asset('images/brand-instagram.svg') }}" width="40">
</div>

<p class="text-dark small mb-0">© 2026 - La Dejada Padel - Todos los derechos reservados</p>

</div>
</nav>

</body>
</html>