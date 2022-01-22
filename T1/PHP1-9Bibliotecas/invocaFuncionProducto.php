<?php

include './funcionProducto.php';

$n1=10;
$n2=20;

echo "Asignamos valor a las variables<p/>";
echo "multiplicando: $n1<br/>";
echo "multiplicador: $n2<p/>";

echo "Invocamos a la función<br/>";
echo "Se encuentra en el archivo: <b>funcionProducto.php</b><br/>";

$res=producte($n1, $n2);
echo "El resultado de $n1 x $n2 es $res";