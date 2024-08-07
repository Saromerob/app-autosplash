<?php

include '../../config/db.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CitasCliente</title>
    <link rel="stylesheet" href="CSS/Estilos4.css">
</head>
<center><body>
    <style>


*
{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
body
{
    background: url('../../img/fondo.jpg');
    font-family: 'calibri';
}

.controls
{
    border-radius: 20px;
    border: 2px solid #000;
    width: 340px;
    height: 50px;
}

.navbar {
    background-color: transparent;
    backdrop-filter: blur(500px);
    box-shadow: 5px 10px 12px #000;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
    background-position: center;
}

.navbar .navbar-brand {
    display: flex;
    align-items: center;
}

.navbar .navbar-brand img {
    height: 90px;
    margin-right: 10px;
    border-radius: 50%;
}

.titulo 
{
    width: 200px;
    text-align: center;
    background-color: rgba(219, 219, 217);
}
.navbar .navbar-brand .titulo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #0d1b2a;
    border: 2px solid white;
    border-radius: 20px;

}

.navbar .nav-link {
    font-size: 1.1rem;
    color: #0d1b2a;
    font-weight: bold;
}

.navbar .nav-link:hover {
    color: gray;
}

.navbar .navbar-nav .nav-item .dropdown-menu {
    background-color: rgba(13, 27, 42, 0.8);
}

.navbar .navbar-nav .nav-item .dropdown-menu .dropdown-item {
    font-size: 1rem;
    color: gray;
}

.navbar .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
    background-color: rgba(13, 27, 42, 0.9);
    color: gray;
}

.navbar .nav-item .nav-link img {
    border-radius: 50%;
}

.navbar .navbar-toggler {
    border-color: gray;
}

.navbar .navbar-toggler:hover {
    background-color: #a9b0ba;
}

.navbar .navbar-toggler-icon {
    color: b;
}

.user
{
    position: relative;
    right: 40px;
    top: 45px;
}

.sesion
{
    background-color: #0d1b2a;
    border-radius: 20px;
    width: 190px;
    border: 2px solid white;
}
.ini
{
    color: black;
    position: relative;
    top: 7px;
    text-align: center;
}
.user1
{
    height: 35px;
    position: relative;
    right: 6px;
}


.ubi
{
    border: 2px solid white;
    text-align: center;
    border-radius: 20px;
    margin: 10px ;
    background-color: #ffffff;
    width: 200px;
}

.citas
{
    text-align: center;
    border-radius: 20px;
    margin: 10px;
    background-color: #ffffff;    
    width: 200px;
}


.conocenos
{
    border: 2px solid white;
    text-align: center;
    border-radius: 20px;
    left: 5px;
    margin: 10px ;
    background-color: #ffffff;    
    width: 200px;
}

.contenedor-principal { /* Nombre del contenedor principal */
    position: relative;
    min-height: 100%; /* Para asegurar que el contenido empuje al footer */
    bottom: 100%;
}


.pie-pagina
{
    width: 100%;
    background-color: rgb(55, 84, 107);
}
.pie-pagina .grupo-1 
{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding: 45px 0px;
}
.pie-pagina .grupo-1  figure
{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.pie-pagina .grupo-1 .BOX figure img
{
    width: 250px;
}
.pie-pagina .grupo-1 .BOX h2
{
    color: black;
    margin-bottom: 25px;
    font-size: 20px;
    text-align: center;

}
.pie-pagina .grupo-1 .BOX p
{
    color: black;
    margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a
{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;
    background-color: black;
    text-align: center; 
    transition: all 300ms ease;  
}
.pie-pagina .grupo-1 .BOX .red-social a:hover
{
color: aqua
}
.pie-pagina .grupo-2{
    background-color:rgb(55, 84, 107);
    padding: 15px 10px;
    text-align: center;
    color: rgb(255, 255, 255);
}
.pie-pagina .grupo-2 small{
    font-size: 15px;
}
@media screen and (max-width: 800px) 
{
    .pie-pagina .grupo-1{
        width: 100%
        grid-template-columns repeat
    }
}
a{
    border-radius: 50%;
    text-align: center;
    align-items: center;
}
img
{
    border-radius: 50%;
}

.tito
{
    position: relative;
    bottom:3px;
    right: 3px;
}

.wha
{
    position: relative;
    bottom: 5px;
    right: 5px;
}


h1
{
    color: #fff;
}


.wrapper
{
    width: 420px;
    background: transparent;
    border: rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 7px 13px 37px #000;
    color: #fff;
    border-radius: 20px;
    padding: 30px 40px;
}
.wrapper h1
{
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box
{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input
{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid black;
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder
{
    color: black;
}

.input-box i
{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}
.wrapper .Recuerdame
{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15 0 15px;    
}

.Recuerdame label input
{
    accent-color: #fff;
    margin-right: 3px;
}
.Recuerdame
{
    color: #fff;
    text-decoration: none;
}

.Recuerdame a{
    text-decoration: underline;
    color: #fff;
}

.wrapper .btn
{
    width: 100%;
    height: 45px;
    background: #99c9bd;
    border: none;
    border-radius: 40px;
    box-shadow: 7px 13px 37px #000;
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;    
}

.wrapper .register-link
{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
} 

.register-link p a
{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.register-link p a:hover
{
    text-decoration: underline;

}
.LogoRegistro
{
    height: 120px;
    border-radius: 50%;
}



    </style>
    <div class="contenedor-principal">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="pag_inicioCliente.html">
                    <img src="../../img/LogoRegistro.jpeg" alt="Logo" id="logo" class="logo">
                    <div class="titulo">AUTO-SPLASH</div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                    <div class="ubi">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Mapa.html">Mapa</a>
                        </li>
                        </div>
                        <div class="conocenos">
                        <li class="nav-item">
                            <a class="nav-link" href="Nosotros.html">Conócenos</a>
                        </li>
                    </div>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="navbar-brand ms-auto" href="Login.html">
                            </a>
                            <div class="sesion">
                                <a class="nav-link" href="paginaInicio.php"><p class="ini"> <img src="../../img/user.png" class="user1">VOLVER</p></a>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
<br><br>

<?php


// Crear una instancia de la clase Database
$db = new Database();
$conn = $db->conectar(); // Obtener la conexión PDO

// Consulta para obtener los autolavados
$sql_autolavados = "SELECT id, nombre FROM autolavados";
$stmt_autolavados = $conn->query($sql_autolavados);

// Consulta para obtener los servicios
$sql_servicios = "SELECT id, nombre, precio FROM servicios";
$stmt_servicios = $conn->query($sql_servicios);
?>

<!--ESCRIBIR DEBAJO DE ESTE DIV-->
<h1>CLIENTE: <br>
    EN ESTE ESPACIO SE VA A ENCONTRAR EL SISTEMA DE LA BASE DE DATOS EN DONDE SE GENERARA LA RESERVACIÓN
    A TRAVES DEL APLICATIVO POR LO CUAL SI LLEGA A INGRESAR UNA CITA LE VA A LLEGAR UN CORREO DE CONFIRMACIÓN DE CITA
    AL CLIENTE Y AL ADMINISTRADOR Y PODRA CONFIRMAR LA COMPRA SI ES TRANSACCIÓN BANCARIA O PAGO EN FISICO, 
    EN ESTE ESPACIO TAMBIEN PUEDE MIRAR LOS HORARIOS EN LOS QUE TRABAJA EL AUTOLAVADO DE PREFERENCIA.
    <br><br>
    <div class="wrapper">
        <form action="enviar_cita.php" method="post">
            <center><img src="../../img/LogoRegistro.jpeg" class="LogoRegistro" alt="Logo"></center>
            <h1>INGRESE DATOS PARA RESERVACIÓN</h1>
            
            <!-- Campo oculto para ID del usuario -->
            <input type="hidden" name="usuario_id" value="<!-- ID del usuario actual -->">
            
            <!-- Selección de autolavado -->
            <label for="autolavado">Autolavado:</label>
            <select name="autolavado_id" class="controls" required>
                <option value="">Seleccione un autolavado</option>
                <?php
                // Verifica si hay resultados
                if ($stmt_autolavados->rowCount() > 0) {
                    // Muestra cada autolavado como una opción
                    while($row = $stmt_autolavados->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay autolavados disponibles</option>';
                }
                ?>
            </select>
    
            <!-- Selección de servicio -->
            <label for="servicio">Servicio:</label>
            <select name="servicio_id" class="controls" required>
                <option value="">Seleccione un servicio</option>
                <?php
                // Verifica si hay resultados
                if ($stmt_servicios->rowCount() > 0) {
                    // Muestra cada servicio como una opción
                    while($row = $stmt_servicios->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay servicios disponibles</option>';
                }
                ?>
            </select>
    
            <!-- Entrada de fecha y hora -->
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="input-box" required>
            <label for="hora">Hora:</label>
            <input type="time" name="hora" class="input-box" required>

            <label for="nombre">Nombre:</label>
            <input class="controls" type="text" id="nombre" name="nombre" required autocomplete="off"
            ><br>
            <label for="apellido">apellido:</label>
            <input class="controls" type="text" id="apellido" name="apellido" required autocomplete="off"
            ><br>
            <label for="placa">placa:</label>
            <input class="controls" type="text" id="placa" name="placa" required autocomplete="off"
            ><br>
            <label for="telefono">telefono:</label>
            <input class="controls" type="number" id="telefono" name="telefono" required autocomplete="off"
            ><br>
            <label for="autolavado">Tipo de vehiculo:</label>
            
            <select name="tipo_vehiculo" class="controls" required>
                <?php                
                // Crear una instancia de la clase Database
                $db = new Database();
                $conn = $db->conectar(); // Obtener la conexión PDO

                // Consulta para obtener los tipozs
                $sql_autolavados = "SELECT id, tipo_vehiculo FROM tipo";
                $stmt_autolavados = $conn->query($sql_autolavados);

                
                ?>
                <option value="">Seleccione su tipo de vehiculo</option>
                <?php
                // Verifica si hay resultados
                if ($stmt_vehiculos->rowCount() > 0) {
                    // Muestra cada autolavado como una opción
                    while($row = $stmt_vehiculos->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $row['id'] . '">' . $row['tipo_vehiculos'] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay tipos de vehiculos</option>';
                }
                ?>
            </select>
    
            <!-- Comentarios -->
            <label for="comentarios">Comentarios:</label>
            <textarea name="comentarios" class="input-box"></textarea>
    
            <!-- Botón de envío -->
            <button type="submit" class="btn">Enviar Cita</button>
        </form>
    </div>

    <?php
    // No es necesario cerrar la conexión explícitamente con PDO,
    // pero puedes hacerlo si lo prefieres.
    $conn = null;
    ?>

</h1>

<!--SIEMPRE ESCRIBIR ENCIMA DE ESTE FOOTER-->
<br><br>
<footer class="pie-pagina">
    <div class="grupo-1"> 
        <div class="BOX">
            <FIGUre>
                <a href="#">
                    <img src="../../img/LogoRegistro.jpeg" alt="Logo AutoSplash" >
                </a>
            </FIGUre>
        </div>
        <div class="BOX">
            <h2 class="nosotros">SOBRE NOSOTROS</h2>
            <p class="nosotros"> TEXTO EJEMPLO</p>
            <p> </p>
        </div>
        <div class="BOX">
        <h2> Siguenos: </h2>
        <div class="red-social">
            <center>
            <a href="#" class="instagram">
                <img src="../../img/instagram.jpg" height="50px" class="insta">
            </a>
            <a href="#" class="tik-tok">
                <img src="../../img/tiktok.png" height="50px" class="tito">
            </a>
            <a href="#" class="whatsapp">
                <img src="../../img/whatsapp.png" height="55px" class="wha">
            </a>
        </center>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2024<b>AutoSplash</b>-Todos Los Derechos Reservados.</small>

    </div>
</footer>
</body></center>
</html>