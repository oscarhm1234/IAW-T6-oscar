<?php

echo "Notas aleatorias\n";

function notas_aleatorias($size) {
  $notas = array();
  for ($i = 0; $i < $size; $i++) {
    $nota = rand(0, 100); // Genera un número aleatorio entre 0 y 100
    $notas[] = $nota; // Agrega la nota al final del array
  }
  return $notas;
}

// Ejemplo de uso:
$tamano = 5;
$notas_aleatorias = notas_aleatorias($tamano);
print_r($notas_aleatorias);

?>