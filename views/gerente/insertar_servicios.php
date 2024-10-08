<?php 
include_once '../../config/db.php';

// Verificar si la sesión está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario tiene el rol correcto para acceder a esta página
if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
    header('Location: ../../useCase/logOut.php');
    exit();
}

// Conectar a la base de datos
$database = new Database();
$conn = $database->conectar();

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario_id = filter_var($_POST['usuario_id'], FILTER_SANITIZE_NUMBER_INT);
    $nombre = filter_var($_POST['nombre']);
    $descripcion = filter_var($_POST['descripcion']);
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $autolavado_id = filter_var($_POST['autolavado_id'], FILTER_SANITIZE_NUMBER_INT);

    // Validar los datos (opcional, pero recomendable)
    if (!empty($autolavado_id) && !empty($nombre) && !empty($descripcion) && !empty($precio)) {
        // Preparar la consulta de inserción
        $query = "INSERT INTO servicios (nombre, descripcion, precio, autolavado_id, usuario_id) VALUES (:nombre, :descripcion, :precio, :autolavado_id, :usuario_id)";
        $stmt = $conn->prepare($query);

        // Vincular los parámetros
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_STR);
        $stmt->bindParam(':autolavado_id', $autolavado_id, PDO::PARAM_INT);
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            header ('Location: agg_servicios.php');
            echo "Servicio agregado exitosamente.";
        } else {
            echo "Error al agregar el servicio.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>