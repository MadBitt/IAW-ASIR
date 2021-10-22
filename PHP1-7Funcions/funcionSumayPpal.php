<?php

function suma ($x,$y){
    $suma=$x+$y;
    return $suma;
}

//asignación de variables
$a=10;
$b=15;

echo "Asignamos valores a las variables:<br>";
echo "\$a= " .$a ."<br>";
echo "\$b= " .$b ."<br>";

echo "A continuación hacemos la llamada a la función:<br>";
echo "La suma de $a y $b es " .suma($a,$b);