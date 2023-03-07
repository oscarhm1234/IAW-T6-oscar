<?php
// Creamos la cookie con el nombre de usuario si no existe
if (!isset($_COOKIE["usuario"])) {
    setcookie("usuario", "Juan Perez", time()+3600); // expira en 1 hora
}
// Mostramos un mensaje de bienvenida
if (isset($_COOKIE["usuario"])) {
    echo "Bienvenido " . $_COOKIE["usuario"];
} else {
    echo "No se ha encontrado la cookie 'usuario'";
}
?>
