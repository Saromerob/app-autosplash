
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/paginaInicioGerente.css">
    <?php
    session_start();
    if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
        header('location: ../../useCase/logOut.php');
        die();
    }
    ?>
</head>
<style>
            /* Contenedor principal centrado con fondo blanco */
        .contenedor-principal {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }

        /* Wrapper del contenido */
        .content-wrapper {
            text-align: center;
        }

        /* Título de la app */
        .app-title {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Descripción del aplicativo */
        .app-description {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            padding: 0 15px;
        }

        /* Wrapper de la imagen */
        .image-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* Imagen de la app */
        .app-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .contenedor-principal {
                padding: 20px;
            }

            .app-title {
                font-size: 24px;
            }

            .app-description {
                font-size: 14px;
                padding: 0 10px;
            }
        }

        @media (max-width: 480px) {
            .contenedor-principal {
                padding: 15px;
            }

            .app-title {
                font-size: 20px;
            }

            .app-description {
                font-size: 13px;
                padding: 0 5px;
            }
        }
</style>

<center><body>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
                <!-- Logo y Título -->
                <a class="navbar-brand" href="paginaInicio.php">
                    <img src="../../img/logo.jpeg" alt="Logo" class="logo">
                    <span class="navbar-title">GLOW-DRIVE</span>
                </a>

                <!-- Botón de menú desplegable para dispositivos móviles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenido del menú -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Menú centralizado -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="citas_pendientes.php">
                                <h6>Citas Pendientes</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registro_autolavado.php">
                                <h6>Registra tu Autolavado</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="agg_servicios.php">
                                <h6>Agrega Servicios</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="perfil_autol.php">
                                <h6>Perfil Autolavado</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../perfil/cambiarcontragerente.php">
                                <h6>Cambiar Contraseña</h6>
                            </a>
                        </li>
                    </ul>

                    <!-- Menú del perfil y sesión -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Dropdown de Perfil -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Perfil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#" id="btn-open-perfil">Ver Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </li>

                        <!-- Cerrar sesión -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../useCase/logOut.php">
                                <img src="../../img/user.png" class="user1"> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br><br><br>
        <div class="contenedor-principal">
        <div class="app-description-container">
            <div class="content-wrapper">
                <h1 class="app-title">¿Qué es este aplicativo?</h1>
                <p class="app-description">
                    Como equipo de desarrollo del SENA, hemos diseñado una aplicación móvil
                    que conecta a usuarios con servicios de lavado de automóviles cercanos.
                    Hemos creado una solución escalable y eficiente que permite a los usuarios
                    encontrar y reservar lavados de manera rápida y sencilla, a la vez que ofrece a
                    los negocios una mayor visibilidad. A través de un proceso de desarrollo ágil,
                    hemos priorizado la experiencia del usuario y la integración de funcionalidades como
                    geolocalización y pagos en línea. Esta aplicación representa una solución innovadora para la
                    industria del lavado de automóviles, facilitando la interacción entre usuarios y negocios locales.
                </p>
                <div class="image-wrapper">
                    <img src="../../img/Carro.jpg" alt="Carro" class="app-image">
                </div>
            </div>
        </div>
    </div>
        <!-- Ventana modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe src="perfil.php" style="width:100%; height: 80vh; border:none;"></iframe>
            </div>
        </div>

        <script>
        // Obtener el modal
        var modal = document.getElementById("myModal");

        // Obtener el botón que abre el modal
        var btn = document.getElementById("btn-open-perfil");

        // Obtener el elemento <span> que cierra el modal
        var span = document.getElementsByClassName("close")[0];

        // Cuando el usuario hace clic en el botón, abrir el modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Cuando el usuario hace clic en <span> (x), cerrar el modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Cuando el usuario hace clic fuera del contenido del modal, cerrar el modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <br><br>
    </div>
    <br><br>
    <br><br>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Logo -->
            <div class="footer-logo">
                <a href="paginaInicio.php">
                    <img src="../../img/logo.jpeg" alt="Logo AutoSplash" class="logo-pie">
                </a>
            </div>

            <!-- Sobre Nosotros -->
            <div class="footer-about">
                <h2>Sobre Nosotros</h2>
                <p>GlowDrive es la aplicación líder en servicios de lavado de automóviles, conectando usuarios con los
                    mejores lavados cercanos.</p>
            </div>

            <!-- Redes Sociales -->
            <div class="footer-social">
                <h2>Síguenos:</h2>
                <div class="social-icons">
                    <a href="https://www.instagram.com" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048C3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7C.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297c.04.852.174 1.433.372 1.942c.205.526.478.972.923 1.417c.444.445.89.719 1.416.923c.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417c.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zM8 1.442h.718c2.136 0 2.389.007 3.232.046c.78.035 1.204.166 1.486.275c.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485c.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598c-.28.11-.704.24-1.485.276c-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598a2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485c-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486c.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276c.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92a.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217a4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334a2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654l.666-2.433l-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931a6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646c-.182-.065-.315-.099-.445.099c-.133.197-.513.646-.627.775c-.114.133-.232.148-.43.05c-.197-.1-.836-.308-1.592-.985c-.59-.525-.985-1.175-1.103-1.372c-.114-.198-.011-.304.088-.403c.087-.088.197-.232.296-.346c.1-.114.133-.198.198-.33c.065-.134.034-.248-.015-.347c-.05-.099-.445-1.076-.612-1.47c-.16-.389-.323-.335-.445-.34c-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992c.47.205.84.326 1.129.418c.475.152.904.129 1.246.08c.38-.058 1.171-.48 1.338-.943c.164-.464.164-.862.114-.944c-.05-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 GlowDrive. Todos los derechos reservados.</p>
        </div>
    </footer>

    </body></center>
</html>