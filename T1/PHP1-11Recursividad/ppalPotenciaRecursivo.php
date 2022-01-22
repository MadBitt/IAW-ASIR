<?php

include'./funcionPotenciaRecursivo.php';

//Valores
$a=3;
$b=4;

echo "Asignamos valores a los dos valores<br/>";
echo "\$a= $a<br/>";
echo "\$b= $b<p/>";

echo "Llamada a Función <b>Potencia Recursiva</b><br/>";
$res= PotenciaRec($a, $b);
echo "$a elevado a $b es $res";
