<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $notas = $_POST['notas'];
    $suma = 0;
    $todas_aprobadas = true;
    foreach ($notas as $asignatura => $nota) {
        $suma += $nota;
        if ($nota < 5) {
            $todas_aprobadas = false;
        }
    }
    $media = $suma / count($notas);
    echo "La media de las notas es: $media<br>";
    if ($todas_aprobadas) {
        echo "Todas las asignaturas están aprobadas";
    } else {
        echo "Hay alguna asignatura que no está aprobada";
    }
}
?>
