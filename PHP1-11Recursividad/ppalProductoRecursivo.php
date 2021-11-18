<?php

include'./funcionProductoRecursivo.php';

//Valores
$a=10;
$b=20;

echo "Asignamos valores a los dos valores<br/>";
echo "\$a= $a<br/>";
echo "\$b= $b<p/>";

echo "Llamada a la Función <b> Producto Recursivo Versión</b><br/>";
$res=productoRecV1($a, $b);
echo "El producto de $a por $b es $res<p/>";

echo "Llamada a la Función <b>Producto Recursivo Versión 2</b><br>";
$res1= productoRecV2($a, $b);
echo "El producto de $a por $b es $res1";
        