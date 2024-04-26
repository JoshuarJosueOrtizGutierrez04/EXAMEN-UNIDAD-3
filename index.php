<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Mi galería de imágenes</title>
</head>
<body>

<header>
    <div class="header-content">
        <div class="header-left">
            <img src="fondo/camara2.png" alt="Imagen de ejemplo">
        </div>
        <div class="header-right">
            <h1>Mi galería de imágenes</h1>
        </div>
    </div>
</header>
<div class="buttons">
    <a href="CambiarContra.php" class="button">Cambiar Datos</a>
    <a href="upload.php" class="button">Subir imagen</a>
    <a href="registrate.php" id="registerButton" class="button" onclick="changeButton()">Registrar</a>
    <a href="cerrar_sesion.php" class="button">Cerrar sesión</a>
</div>
<br><br><br>

<div class="gallery">
    <center>
    <?php
$ruta_imagenes = "imagenes/"; 
$imagenes = opendir($ruta_imagenes);
$hay_imagenes = false;
if ($imagenes) {
    while ($imagen = readdir($imagenes)) {
        if (is_file($ruta_imagenes . $imagen) && @getimagesize($ruta_imagenes . $imagen)) {
            // Agregar enlace a la página de detalles
            echo "<a href='imagen_detalle.php?imagen=$imagen'><img src='$ruta_imagenes$imagen' class='small-image'></a>";
            $hay_imagenes = true;
        } 
    }
    closedir($imagenes);
    if (!$hay_imagenes) {
        echo "<p>No hay imágenes aún. Sube la primera.</p>";
    }
} else {
    echo "Error: No se pudo abrir la carpeta de imágenes";
}
?>

    </center>

</div>

</body>
</html>
