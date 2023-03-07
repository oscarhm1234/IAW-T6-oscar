<?php

function agregar_nota($array, $nota) {
    $array[] = $nota;
    return $array;
  }
  
  // Ejemplo de uso:
  $notas = array(80, 90, 70, 85, 95);
  $notas_con_nueva_nota = agregar_nota($notas, 100);
  print_r($notas_con_nueva_nota);
  

?>