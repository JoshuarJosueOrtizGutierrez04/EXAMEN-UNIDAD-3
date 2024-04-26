<?php

function obtenerFechaSubida($imagen) {
    return date("Y-m-d"); 
}
// Obtener el nombre de la imagen de la URL
$imagen = $_GET['imagen'];

// Ruta del archivo de la carpeta
$archivo_contador = 'vistas/' . $imagen . '_vistas.txt';

if (!file_exists($archivo_contador)) {
    file_put_contents($archivo_contador, '0');
}

$vistas = file_get_contents($archivo_contador);
$vistas++;

$fecha_subida = obtenerFechaSubida($imagen);

echo "<img src='imagenes/$imagen'>";

//conectado a la base de datos usuario
session_start();
if (isset($_SESSION["usuario"])) {
    $nombre_usuario = $_SESSION["usuario"];
    echo "<p>Subido por: <a href='imagenes_usuario.php?usuario=$nombre_usuario'>$nombre_usuario</a></p>"; // Enlaza al usuario a la página de imágenes del usuario
}

echo "<p>Fecha de subida: $fecha_subida</p>"; 
echo "<p>Vistas: $vistas</p>"; 
?>
