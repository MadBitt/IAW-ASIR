<?php

function precioConIva ($a, &$b){
    echo "Invocamos a la función<br><br>";
    echo "El precio INICIAL sin IVA es: <b>$b</b><br>";
    $iva=$a*$b;
    $b+=$iva;
    echo "El precio con IVA es: <b>$b</b>";
    
}

$iva=0.21;
$precio=100;

echo "<b>Programa Principal</b><br>";
echo "El valor del IVA lo establecemos desde él<br>";
echo "El valor del IVA es: <b>$iva</b><br>";

precioConIva($iva, $precio);
