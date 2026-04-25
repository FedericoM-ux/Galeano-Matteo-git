<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Dejada - Padel Store</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar">
    <div class="container-fluid py-3">
            <div class="col-md-3">
                <a class="navbar-brand d-flex align-items-center" href="/main">
                    <img src="{{ asset('images/Icono.PNG') }}" alt="Logo La Dejada" width="130" class="me-2">
                </a>
            </div>
            
            <div class="col-md-6">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
            
            <a class="navbar-brand ms-auto" href="/user">
                <img src="{{ asset('images/user.svg') }}" height="30">
            </a>
                    <a class="navbar-brand position-relative" href="/shop">
    <img src="{{ asset('images/shopping-cart.svg') }}" height="30">
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
</a>
            </div>
    </div>
</nav>

    <nav class="navbar navbar-expand-lg navbar-light navbar2">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-uppercase fw-semibold">
                    <li class="nav-item"><a class="nav-link px-3" href="/main">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#sobre-nosotros">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/comercialización">Comercialización</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/contacto">Contáctanos</a>
                    <li class="nav-item"><a class="nav-link px-3" href="/términos">Términos y Usos</a></li>
                </ul>
            </div>
        </div>
    </nav>


<div id="carouselPadel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/palas-de-padel-bullpadel-jugadores-profesionales-2022-portada.jpg') }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Palas Bullpadel">
        </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPadel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPadel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div id="beneficiosCarousel" class="carousel slide my-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#beneficiosCarousel" data-bs-slide-to="0" class="active bg-dark"></button>
        <button type="button" data-bs-target="#beneficiosCarousel" data-bs-slide-to="1" class="bg-dark"></button>
        <button type="button" data-bs-target="#beneficiosCarousel" data-bs-slide-to="2" class="bg-dark"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card border-0 mx-auto" style="max-width: 350px;">
                <div class="card-body d-flex align-items-center p-4 border rounded shadow-sm">
                    <div class="icon-circle bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-credit-card fs-3 text-dark"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Cuotas sin interés</h6>
                        <small class="text-muted">Con tarjetas bancarizadas</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card border-0 mx-auto" style="max-width: 350px;">
                <div class="card-body d-flex align-items-center p-4 border rounded shadow-sm">
                    <div class="icon-circle bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-truck fs-3 text-dark"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Envíos a todo el país</h6>
                        <small class="text-muted">Gratis superando los $99.000</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="card border-0 mx-auto" style="max-width: 350px;">
                <div class="card-body d-flex align-items-center p-4 border rounded shadow-sm">
                    <div class="icon-circle bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-shield-lock fs-3 text-dark"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold">Comprá con seguridad</h6>
                        <small class="text-muted">Tus datos siempre protegidos</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center mb-4">
        <div class="col-md-6 text-center border rounded p-4 shadow-sm bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_Color_Logo.svg" alt="Google" width="40" class="mb-2">
            <h3 class="h5 mb-0">Reviews</h3>
            <div class="display-6 fw-bold">4.8 <span class="text-warning">★★★★★</span></div>
            <p class="text-muted small">293 reviews</p>
            <a href="#" class="btn btn-primary rounded-pill px-4">Write a review</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm bg-light text-center p-4 position-relative">
                <button class="btn position-absolute top-50 start-0 translate-middle-y border-0"><i class="bi bi-chevron-left"></i></button>
                <button class="btn position-absolute top-50 end-0 translate-middle-y border-0"><i class="bi bi-chevron-right"></i></button>

                <div class="card-body">
                    <div class="rounded-circle bg-secondary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                        S
                    </div>
                    <h5 class="card-title mb-0">Soledad Spangaro</h5>
                    <p class="text-muted small mb-2">January 14</p>
                    <div class="text-warning mb-3">★★★★★</div>
                    <p class="card-text italic">"Excelente compra! Pero más me sorprendió la rapidez con la que llegó! Voy a volver a comprar"</p>
                    <div class="mt-3">
                        <small class="text-muted">Posted on</small>
                        <br>
                        <strong class="text-primary">Google</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
        <div class="card-body">
            <h1 id="sobre-nosotros" class="card-title">Sobre Nosotros</h1>
            <p>Somos una tienda dedicada a la venta de artículos de pádel, donde podés encontrar una amplia variedad de productos como grips, pelotas, paletas y accesorios esenciales para mejorar tu juego. Trabajamos con productos de calidad para jugadores de todos los niveles, desde principiantes hasta más avanzados.<br><br>Realizamos envíos a toda la provincia de Corrientes, buscando que tu compra llegue de forma rápida y segura hasta tu domicilio. Además, ofrecemos atención personalizada para ayudarte a elegir el equipamiento que mejor se adapte a tus necesidades.<br><br>Podés hacer consultas, pedir recomendaciones o coordinar compras a través de nuestro Instagram o WhatsApp, donde respondemos de manera ágil para brindarte la mejor experiencia posible. Nuestro objetivo es acompañarte dentro y fuera de la cancha, ofreciéndote todo lo necesario para disfrutar al máximo del pádel.</p>        
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark navbar2">
    <a class="navbar-brand mx-auto">
        <p><br>Copyright La Dejada Padel - Tel: 3989821394 - 2026</p>
    </a>
</nav>
</body>
</html>