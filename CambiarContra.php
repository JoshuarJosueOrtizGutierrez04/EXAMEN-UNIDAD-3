<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    
    <link rel="stylesheet" href="CSS/Formularioestilo.css">

    <title>Cambiar Contraseña</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/balon.jpg"> 
</head>
<body>
    <section class="form-register">
        <center>
            <h4>CAMBIAR DATOS</h4>
        </center>

        <!-- El formulario apunta al script de actualización de usuario -->
        <form action="validar2.php" method="post">
            
            <input class="controls" type="text" name="id_usuario" id="id_usuario" for="id_usuario" placeholder="ID">
            <input class="controls" type="text" name="email" id="email" for="email" placeholder="Nuevo Correo">
            <input class="controls" type="text" name="user" id="user" for="user" placeholder="Nuevo Usuario">
            <input class="controls" type="password" name="pass" id="pass" for="pass" placeholder="Nueva Contraseña">
           
            <br>
            <p><input type="checkbox" name="Politicas">Acepto las condiciones de esta página</p>
                
            <input class="botons" type="submit" value="Enviar" id="boton">
            <input class="botons" type="reset" value="Borrar" id="boton">
        </form>
    </section>
     <!-- Campo oculto para enviar el ID del usuario -->

    <br><br><br><br>
</body>
</html>
