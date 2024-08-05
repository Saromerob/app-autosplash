<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            background: url('img/fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: rgba(22, 36, 71, 0.8);
        }

        .navbar-brand img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .titulo {
            display: inline;
            font-size: 1.8em;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }

        .nav-link {
            color: white !important;
            font-size: 1.2em;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #00a8cc !important;
        }

        .sesion p {
            margin: 0;
            display: inline;
            color: white;
            font-size: 1.2em;
        }

        .user1 {
            height: 25px;
            width: 25px;
            margin-right: 5px;
            vertical-align: middle;
        }

        .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-nav {
            flex-direction: row;
        }
        
        .nav-item {
            margin-left: 20px;
        }

        .dropdown-menu {
            background-color: #162447;
        }

        .dropdown-item {
            color: white !important;
        }

        .dropdown-item:hover {
            background-color: #00a8cc;
            color: white !important;
        }

        @media (max-width: 768px) {
            .titulo {
                font-size: 1.5em;
            }

            .nav-link {
                font-size: 1em;
            }

            .sesion p {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpeg" alt="Logo" id="logo">
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
                        <a class="nav-link active" aria-current="page" href="#">Agendar Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/Nosotros.php">Conócenos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="views/session/sesion.php">
                            <p class="ini">
                                <img src="img/user.png" class="user1">Iniciar Sesión
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
