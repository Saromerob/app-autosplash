<?php
include '../../config/db.php';  // Incluye el archivo de conexión PDO

// Crear una instancia de la clase Database
$db = new Database();
$conn = $db->conectar(); // Obtener la conexión PDO

// Obtén los datos del formulario
$usuario_id = $_POST['usuario_id'];
$autolavado_id = $_POST['autolavado_id'];
$servicio_id = $_POST['servicio_id'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$placa = $_POST['placa'];
$telefono = $_POST['telefono'];
$tipovehiculo = $_POST['tipo_vehicilo'];
$comentarios = $_POST['comentarios'];

// Prepara la sentencia SQL para prevenir inyección SQL
$sql = "INSERT INTO citas (usuario_id, autolavado_id, servicio_id, fecha, hora, nombre, apellido, placa, telefono, tipo_vehiculo, comentarios) VALUES ('$usuario_id', '$autolavado_id', '$servicio_id', '$fecha', '$hora', '$nombre', '$apellido', 'placa', '$telefono', '$tipovehiculo', '$comentarios')";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $usuario_id, PDO::PARAM_INT);
$stmt->bindParam(2, $autolavado_id, PDO::PARAM_INT);
$stmt->bindParam(3, $servicio_id, PDO::PARAM_INT);
$stmt->bindParam(4, $fecha);
$stmt->bindParam(5, $hora);
$stmt->bindParam(6, $comentarios);

// Ejecuta la sentencia
if ($stmt->execute()) {
    echo "Cita enviada exitosamente";
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}

// Cierra la conexión
$conn = null;
?>
