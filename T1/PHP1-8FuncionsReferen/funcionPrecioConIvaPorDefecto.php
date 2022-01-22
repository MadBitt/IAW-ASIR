<?php

function precioConIvaPorDefecto (&$p1=0, $p2=0.21){
    echo "El precio INICIAL sin IVA es: <b>$p1</b><br>";
    $iva=$p1*$p2;
    $p1=$p1+$iva;
    echo "El precio con IVA es: <b>$p1</b><br>";
    
}

$a=100;

echo "<b>Programa Principal</b><br>";
echo "Invocamos a la función<br><br>";

precioConIvaPorDefecto($a);

