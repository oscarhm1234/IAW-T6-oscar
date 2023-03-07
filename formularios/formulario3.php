<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacion'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    if ($operacion == "suma") {
      $resultado = $num1 + $num2;
    } elseif ($operacion == "resta") {
      $resultado = $num1 - $num2;
    } elseif ($operacion == "multiplica") {
      $resultado = $num1 * $num2;
    }
    echo "El resultado de la $operacion es: $resultado";
  }
  

?>