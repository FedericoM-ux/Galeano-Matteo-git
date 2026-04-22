<!DOCTYPE html>
<html>

<head>
    <title>Comercialización</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar">
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
    <h1>Comercialización:</h1>
</div>

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
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.046359516641!2d-58.8188166!3d-27.4678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca3c37652bd%3A0xc397b2ed77ab41f7!2sRafaela%20%26%20Professor%20Pedro%20Crespo%2C%20W3400%20Corrientes!5e0!3m2!1ses-419!2sar!4v1714000000000!5m2!1ses-419!2sar" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="text-center mt-3">
                <p class="text-muted small">
                    <i class="bi bi-geo-alt-fill"></i> Professor Pedro Crespo y Rafaela, Corrientes
                </p>
            </div>
        </div>

    </div>
</div>
</body>

</html>