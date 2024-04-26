<?php
session_start();
if(!isset($_SESSION["usuario"])){
}else{
    header ("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Iniciar sesión</title>
   
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="validar_login.php" method="post">
            <label for="user">Nombre de usuario</label>
            <input type="text" name="user" id="user" required>
            <label for="user">Email</label>
            <input type="text" name="email" id="email" required>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass" required>
            <input type="submit" value="Iniciar Sesión">
            <div class="register-link">
                ¿No tienes una cuenta? <a href="registrate.php">Regístrate aquí</a>.
            </div>
        </form>
    </div>

</body>
</html>


