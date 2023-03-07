<?php
// Creamos la cookie con la fecha actual
setcookie("ultima_visita", date("d/m/Y H:i:s"), time()+3600); // expira en 1 hora
// Mostramos un mensaje con la fecha de la última visita
if (isset($_COOKIE["ultima_visita"])) {
    echo "Tu última visita fue el " . $_COOKIE["ultima_visita"];
} else {
    echo "Esta es tu primera visita";
}
?>
