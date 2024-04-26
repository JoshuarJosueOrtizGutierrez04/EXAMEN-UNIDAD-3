<?php
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión o a cualquier otra página que desees
header("Location: login.php");

exit;
?>
