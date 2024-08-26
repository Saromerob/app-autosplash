<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Autolavados</title>
    <!-- Incluye Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/estilomapa.css">

    <style>
    #map {
        height: 400px;
        width: 100%;
        margin-top: 20px;
    }
    </style>

    <!-- Incluye Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <?php
    session_start();
    if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 2) {
        header('location: ../../useCase/logOut.php');
        die();
    }
    ?>
</head>

<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="Mapa.php">
                <img src="../../img/logo.jpeg" alt="Logo" id="logo" class="logo">
                <div class="titulo">AUTO-SPLASH</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="agendar_cita.php">Agendar Citas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-4">
        <center>
            <h1 class="display-4">Autolavados</h1>
            <p class="lead">En este espacio se ubicarán todos los puntos de Autolavados que estén vinculados a nosotros.
            </p>
        </center>

        <!-- Mapa Leaflet -->
        <div id="map"></div>

        <!-- Contenido adicional de la página -->
        <h1 class="info mt-4 text-center">Autolavados afiliados</h1>
        <div class="text-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9459.180121425268!2d-74.12985637784054!3d4.576897484993817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98cd4271de4f%3A0xb851b08f62587206!2sAutolavado%20Dacar's!5e0!3m2!1ses-419!2sco!4v1723236096105!5m2!1ses-419!2sco"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9459.18516375047!2d-74.12243075148108!3d4.576515941230433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98e781923d61%3A0x257a165c8a818641!2sMoto%20lavado%20y%20Auto%20lavado%20Agua%20Car!5e0!3m2!1ses-419!2sco!4v1723236534231!5m2!1ses-419!2sco"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9459.259751372729!2d-74.13083035574209!3d4.570868316673751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f33623e7eff%3A0xee2c681d23f857ff!2sAuto%20Lavado%20Carwasn!5e0!3m2!1ses-419!2sco!4v1723236571849!5m2!1ses-419!2sco"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Footer -->
    <footer class="pie-pagina mt-5">
        <div class="grupo-1">
            <div class="BOX">
                <figure>
                    <a href="#">
                        <img src="../../img/logo.jpeg" alt="Logo AutoSplash">
                    </a>
                </figure>
            </div>
            <div class="BOX">
                <h2>SOBRE NOSOTROS</h2>
                <p>TEXTO EJEMPLO</p>
            </div>
            <div class="BOX">
                <h2>Síguenos:</h2>
                <div class="red-social">
                    <a href="#" class="instagram"><img src="../../img/instagram.jpg" height="50px" class="insta"></a>
                    <a href="#" class="tik-tok"><img src="../../img/tiktok.png" height="50px" class="tito"></a>
                    <a href="#" class="whatsapp"><img src="../../img/whatsapp.png" height="55px" class="wha"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>AutoSplash</b> - Todos los derechos reservados.</small>
        </div>
    </footer>

    <!-- Scripts de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    // Ejemplo de datos de autolavados (estos deberían ser generados dinámicamente desde PHP)
    var autolavados = [{
            id: 1,
            nombre: "AutoSplash",
            lat: 4.60971,
            lng: -74.08175,
            direccion: "Carrera 10 #20-30",
            horario: "8:00 am - 6:00 pm",
            telefono: "3001234567",
            gerente: "Juan Pérez"
        },
        {
            id: 2,
            nombre: "Lavadero Los Andes",
            lat: 4.61234,
            lng: -74.07589,
            direccion: "Calle 45 #10-20",
            horario: "9:00 am - 7:00 pm",
            telefono: "3012345678",
            gerente: "María García"
        },
        // Agrega más autolavados aquí...
    ];

    // Inicializa el mapa
    var map = L.map('map').setView([4.60971, -74.08175], 13);

    // Añade el mapa de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Añade marcadores al mapa
    autolavados.forEach(function(lavado) {
        var marker = L.marker([lavado.lat, lavado.lng]).addTo(map);
        marker.bindPopup('<b>' + lavado.nombre + '</b><br>' + lavado.direccion + '<br>' + lavado.horario +
            '<br>Tel: ' + lavado.telefono + '<br>Gerente: ' + lavado.gerente);
    });
    </script>

</body>

</html>