<?php

$primero=4;
$segundo=0;
$div = @($primero/$segundo);
$sum = $primero + $segundo;
$rest= $primero - $segundo;
$mult= $primero * $segundo;

echo "<h3><b>Operaciones aritméticas:</b></h3>";
echo "<h4><b>Control de errores</b></h4>";

echo "Vamos a realizar las operaciones con los dos números <br>"
    ."\$primero= 4 <br>"
    ."\$segundo= 0 <br> <br>";

echo "La suma vale: " .$sum ."<br>" 
    ."La resta vale: " .$rest ."<br>"
    ."La multiplicación vale: " .$mult ."<br>"
    ."La división vale: " .$div;
        
        
        
?>

