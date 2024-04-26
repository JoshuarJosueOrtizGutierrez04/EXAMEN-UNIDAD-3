<?php
session_start();

// Verificar si se recibió el ID de usuario correctamente
if(isset($_POST["id_usuario"])) {
    // Obtener datos del formulario
    $id_usuario = $_POST["id_usuario"];
    $usuario = $_POST["user"];
    $contraseña = $_POST["pass"];
    $email = $_POST["email"];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "galeria");

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta para actualizar los datos del usuario
    $consulta_actualizar = "UPDATE usuarios SET nombre='$usuario', contrasena='$contraseña', email='$email' WHERE id='$id_usuario'";

    if ($conexion->query($consulta_actualizar) === TRUE) {
        echo "Datos actualizados exitosamente";
    } else {
        echo "Error al actualizar datos: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
} else {
    echo "Error: No se recibió el ID de usuario correctamente.";
}
?>
