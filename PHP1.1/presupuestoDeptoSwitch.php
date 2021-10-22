<?php


$a="matemáticas";

switch ($a)
{
    case ("matemáticas"):
    $presupost=200;
    break;
    
    case ("francés"):
    $presupost=500;
    break;

    case ("informática"):
    $presupost=100;
    break;
    default: $presupost="hola";
}

echo  "El departamento escogido es $a y su presupuesto es: $presupost"; 


?>
