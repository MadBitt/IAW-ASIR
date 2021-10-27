<?php

$cont=1;
$aprobados=0;

while ($cont <=5){
    $a=random_int(0,10) . "<br>";
    if ($a >=5){
        $aprobados++;
    } 
    echo $a;
    $cont++;
}

echo "<b>El número de alumnos aprobados es: " .$aprobados ."</b>";
