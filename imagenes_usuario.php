<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">

<?php
// imagenes_usuario.php

// Obtener el nombre de usuario de la URL
$nombre_usuario = $_GET['usuario'];

// Mostrar el nombre del usuario y sus imágenes
echo "<h1>Imágenes de $nombre_usuario</h1>";
/////////////////////////////////////////

?>

<div class="gallery">
    <center>
    <?php
    $ruta_imagenes = "imagenes/"; 
    $imagenes = opendir($ruta_imagenes);
    $hay_imagenes = false;
    if($imagenes){
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                // Agregar enlace a la página de detalles
                echo "<a href='imagen_detalle.php?imagen=$imagen'><img src='$ruta_imagenes$imagen' class='small-image'></a>";
                $hay_imagenes = true;
            } 
        }
        closedir($imagenes);
    } else {
        echo "Error: No se pudo abrir la carpeta de imágenes";
    }
    if(!$hay_imagenes){
        echo "<p>No hay imágenes aún. Sube la primera.</p>";
    }
    ?>
    </center>
    <head>
</div>
