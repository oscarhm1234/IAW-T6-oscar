<?php
// Creamos la cookie con el nombre de usuario
setcookie("usuario", "Juan Perez", time()+3600); // expira en 1 hora
// Mostramos el valor de la cookie
echo $_COOKIE["usuario"];
?>
