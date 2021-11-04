<?php

include './funcionSumaProducto.php';

$a=10;
$b=20;

echo "Asignamos valores qa los dos valores<br/>";
echo "\$a= $a<br/>";
echo "\$b= $b<p/>";

echo "Llamada a Función <b>Suma</b><br/>";
suma($a, $b);
echo "<p/>";

echo "Llamada a Función <b>Producto</b><br/>";
producto($a, $b);

