<?php

$ini=0;
$fin=100;
$par=0;
$impar=0;

while ($ini < $fin){
    $ini++;
    switch ($ini % 2 == 0)
    {
    case 0:
    $impar=$impar + $ini;
    break;

    case 1:  
    $par=$par + $ini;
    break;    
    }

}

echo "En el rango 0.. 100:<br>";
echo "La suma de los <b>PARES</b> es: $par<br>";
echo "La suma de los <b>IMPARES</b> es: $impar<br>";




