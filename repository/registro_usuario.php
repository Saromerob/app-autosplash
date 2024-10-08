<?php
include_once '../config/db.php';

session_start();

$db = new Database(); // Llamada
$conn = $db->conectar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Todos estos datos se están enviando a la base de datos.
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $num_documento = isset($_POST['num_documento']) ? $_POST['num_documento'] : '';
    $tipo_documento_id = isset($_POST['tipo_documento_id']) ? $_POST['tipo_documento_id'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
    $localidad_id = isset($_POST['localidad_id']) ? $_POST['localidad_id'] : '';

    // Rol quemado: explícito en una variable creada por uno mismo
    $id_rol = 2;
    $status = true;

    // Verificar si todos los campos requeridos tienen valores.
    if ($nombre && $apellido && $num_documento && $tipo_documento_id && $telefono && $correo && $contrasena && $fecha_nacimiento && $localidad_id) {
        try {
            $verificar_sql = "SELECT COUNT(*) FROM usuarios WHERE num_documento = :num_documento";
            $verificar_stmt = $conn->prepare($verificar_sql);
            $verificar_stmt->bindParam(':num_documento', $num_documento);
            $verificar_stmt->execute();
            $num_filas = $verificar_stmt->fetchColumn();

            if ($num_filas > 0) {
                $_SESSION['error'] = 'Error: El número de documento ya está registrado.';
                header("Location:../views/session/sesion.php");
                exit();
            }

            // Hashear la contraseña antes de guardarla en la base de datos.
            $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

            // Insertar los datos usando una sentencia preparada.
            $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, telefono, num_documento, tipo_documento_id, localidad_id, fecha_nacimiento, role_id, estado)
                    VALUES (:nombre, :apellido, :correo, :contrasena, :telefono, :num_documento, :tipo_documento_id, :localidad_id, :fecha_nacimiento, :role_id, :estado)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':contrasena', $hashed_password); // Usar la contraseña hasheada.
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':num_documento', $num_documento);
            $stmt->bindParam(':tipo_documento_id', $tipo_documento_id);
            $stmt->bindParam(':localidad_id', $localidad_id);
            $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $stmt->bindParam(':role_id', $id_rol);
            $stmt->bindParam(':estado', $status, PDO::PARAM_BOOL);

            // Ejecutar la consulta.
            if ($stmt->execute()) {
                header("Location:../views/session/sesion.php");
                exit();
            } else {
                $_SESSION['error'] = 'Error: No se pudo registrar el usuario.';
                header("Location:../views/session/sesion.php");
                exit();
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = 'Error: ' . $e->getMessage();
            header("Location:../views/session/sesion.php");
            exit();
        }
    } else {
        $_SESSION['error'] = 'Error: Todos los campos son requeridos.';
        header("Location:../views/session/sesion.php");
        exit();
    }
}
?>
