<?php

include('./funcionsSumaProducto.php');

$a=10;
$b=20;


echo "Asignamos valores a los dos valores:<br>";
echo "\$a= $a<br>";
echo "\$b= $b<br>";

echo "<br>Llamada a Función <b>Suma</b><br>";
echo "La suma de $a y $b es " .suma($a,$b);

echo "<br><br>Llamada a Función <b>Producto</b><br>";
echo "El producto de $a y $b es " .mult($a,$b);
