<?php
// Verificamos si existe la cookie contador
if (!isset($_COOKIE["contador"])) {
    // Si no existe, creamos la cookie con el valor 1
    setcookie("contador", 1, time()+3600); // expira en 1 hora
    echo "Esta es tu primera visita";
} else {
    // Si existe, incrementamos el valor de la cookie
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador, time()+3600); // expira en 1 hora
    echo "Esta es tu visita número " . $contador;
}
?>
