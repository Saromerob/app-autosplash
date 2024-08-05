<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/Estilos3x.css">
</head>
<body>
   
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/LogoRegistro.jpeg" alt="Logo" id="logo" class="logo" style="height: 50px;">
                    <span class="titulo">AUTO-SPLASH</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AgendarCita.html">Agendar Citas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Mapa.html">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Nosotros.html">Conócenos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <br><br>

        <section class="banner container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="info">¿Qué es este aplicativo?</h2>
                    <p class="info">Como equipo de desarrollo del SENA, hemos diseñado una aplicación móvil 
                        que conecta a usuarios con servicios de lavado de automóviles cercanos. 
                        Hemos creado una solución escalable y eficiente que permite a los usuarios 
                        encontrar y reservar lavados de manera rápida y sencilla, a la vez que ofrece 
                        a los negocios una mayor visibilidad. A través de un proceso de desarrollo ágil, 
                        hemos priorizado la experiencia del usuario y la integración de funcionalidades 
                        como geolocalización y pagos en línea. Esta aplicación representa una solución 
                        innovadora para la industria del lavado de automóviles, facilitando la interacción 
                        entre usuarios y negocios locales.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/Carro.jpg" class="img-fluid" alt="Carro">
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="pie-pagina pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <figure>
                        <a href="pag_inicioCliente.html">
                            <img src="img/LogoRegistro.jpeg" alt="Logo AutoSplash" class="img-fluid" style="height: 100px;">
                        </a>
                    </figure>
                </div>
                <div class="col-md-4">
                    <h5>SOBRE NOSOTROS</h5>
                    <p> TEXTO EJEMPLO</p>
                </div>
                <div class="col-md-4 text-center">
                    <h5>SÍGUENOS:</h5>
                    <div class="red-social d-flex justify-content-center">
                        <a href="https://www.instagram.com" class="instagram mx-2">
                            <img src="img/instagram.jpg" class="img-fluid" style="height: 40px;">
                        </a>
                        <a href="#" class="tik-tok mx-2">
                            <img src="img/tiktok.png" class="img-fluid" style="height: 40px;">
                        </a>
                        <a href="#" class="whatsapp mx-2">
                            <img src="img/whatsapp.png" class="img-fluid" style="height: 40px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center pt-3">
                    <small>&copy; 2024 <b>AutoSplash</b> - Todos Los Derechos Reservados.</small>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
