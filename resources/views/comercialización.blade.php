<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Dejada Padel Store / Comercialización</title>
    <link rel="icon" type="image/png" href="images/pelota.png">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
<nav class="navbar navbar-dark navbar">
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

<div class="container my-5">
    <h2 class="text-center fw-bold mb-4 text-uppercase">Métodos de Pago</h2>

    <div class="row g-4 justify-content-center">
        
        <div class="col-12 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <img src="{{ asset('images/efectivo.png') }}" class="card-img-top p-4" alt="efectivo" style="object-fit: contain; height: 200px;">
                <div class="card-body">
                    <p class="text-muted fw-bold mb-1">Efectivo</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <img src="{{ asset('images/tarjeta.png') }}" class="card-img-top p-4" alt="tarjeta" style="object-fit: contain; height: 200px;">
                <div class="card-body">
                    <p class="text-muted fw-bold mb-1">Tarjetas de Débito/Crédito</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <img src="{{ asset('images/transferencia.png') }}" class="card-img-top p-4" alt="transferencia" style="object-fit: contain; height: 200px;">
                <div class="card-body">
                    <p class="text-muted fw-bold mb-1">Transferencia Bancaria</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center justify-content-center g-5">
        
        <div class="col-12 col-md-5 col-lg-4">
            <h2 class="text-center fw-bold mb-4 text-uppercase">Métodos de Envío</h2>
            <div class="card h-100 border-0 shadow-sm text-center">
                <img src="{{ asset('images/envios.png') }}" class="card-img-top p-4" alt="envio" style="object-fit: contain; height: 200px;">
                <div class="card-body">
                    <p class="text-muted fw-bold mb-1 small">Envíos a domicilio o a todo el país a través de Correo Argentino</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7 col-lg-6">
            <h2 class="text-center fw-bold mb-4 text-uppercase">Nuestra Ubicación</h2>
            <div class="ratio ratio-16x9 shadow-sm rounded border overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3539.1196500133583!2d-58.831813274683974!3d-27.49665412630397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1777390430012!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="text-center mt-3">
                <p class="text-muted small">
                    <i class="bi bi-geo-alt-fill"></i> Professor Pedro Crespo y Rafaela, Corrientes
                </p>
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