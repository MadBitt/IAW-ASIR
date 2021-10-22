<?php

function mitjana_array($array){
    echo "<b>Función Media Aritmética con array</b><br>";
    echo "Número de elementos del array recibido: " .count($array) ."<br><br>";
    echo "El contenido del array recibido es:<br>";
    print_r($array);
    
    $suma=0;
    for ($i=0; $i<count($array); $i++){
        $suma+=$array [$i];
    }
    
    $media=$suma/count($array);
    echo "<h4>La media de dichos argumentos es: " .number_format($media,2) ."</h4>";
    
    
}

$nums= array (10,20,30);

echo "<b>Programa Principal</b><br>";
echo "Creamos el vector de valores<br>";
echo "Hacemos la llamada a la función con dicho vector<br><br>";

mitjana_array($nums);


