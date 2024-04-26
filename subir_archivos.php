<?php
$carpeta = "imagenes/";

if(!empty($_FILES["img"]["name"])){
    $archivo = $_FILES["img"]["name"];
    $ruta_temporal = $_FILES["img"]["tmp_name"];
    $tipo_archivo = $_FILES["img"]["type"];
    $tamano_archivo = $_FILES["img"]["size"];
    if($tipo_archivo != "image/jpeg" && $tipo_archivo != "image/png" && $tipo_archivo != "image/gif"){
        echo "Error: solo se permiten imagenes jpg, png y gif";
        return;
    }
    if($tamano_archivo > 1000000){
        echo "Error: El archivo es demasiado grande-";
        return;
    }
    move_uploaded_file($ruta_temporal,$carpeta . $archivo);
        echo "Se ha enviado el archivo al servidor";
}else{
    echo "no se ha enviado nada";
    }
?>