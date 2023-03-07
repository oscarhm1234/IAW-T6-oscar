<?php
// bienvenida.php
// Verificamos si se han enviado los datos del formulario
if (isset($_POST["nombre"]) && isset($_POST["apellido"])) {
    // Creamos las cookies con el nombre y el apellido del usuario
    setcookie("nombre", $_POST["nombre"], time()+3600); // expira en 1 hora
    setcookie("apellido", $_POST["apellido"], time()+3600); // expira en 1 hora
    // Mostramos un mensaje de bienvenida
    echo "Bienvenido, " . $_POST["nombre"] . " " . $_POST["apellido"];
} else {
    echo "No se han recibido los datos del formulario";
}
?>
