<?php

function notas_aprobadas($array) {
    $notas_aprobadas = array();
    foreach ($array as $nota) {
      if ($nota >= 5) {
        $notas_aprobadas[] = $nota;
      }
    }
    return $notas_aprobadas;
  }
  
  // Ejemplo de uso:
  $notas = array(3, 4, 5, 6, 7, 8);
  $notas_aprobadas = notas_aprobadas($notas);
  print_r($notas_aprobadas);
  


?>