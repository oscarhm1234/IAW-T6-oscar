<?php

function estadisticas($array) {
    $nota_maxima = max($array);
    $nota_minima = min($array);
    $nota_media = array_sum($array) / count($array);
    echo "Nota máxima: " . $nota_maxima . "<br>";
    echo "Nota mínima: " . $nota_minima . "<br>";
    echo "Nota media: " . $nota_media . "<br>";
  }
  
  // Ejemplo de uso:
  $notas = array(80, 90, 70, 85, 95);
  estadisticas($notas);
  


?>