<?php

function mediaValoresRefer ($a,&$b){
    
    $numArgs= func_num_args();
    
    echo "<b>Función Media Aritmética</b><br>";
    echo "Número de argumentos utilizados: $numArgs";
    echo "<br><br>";
    echo "Valor de los argumentos utilizados:<br>";
    echo "$a y $b<br>";
    echo "No hace falta hacer Return<br>";    
    
    $suma=$a+$b;
    $b=$suma/2;
    echo "El resultado está en b y es: <b>$b</b>";
    
    
}
$x=10;
$y=20;

echo "<b>Programa Principal</b><br>";
echo "El valor de los parámetros lo establecemos desde él.<br>";
echo "Hacemos la llamada a la función<br><br>";
mediaValoresRefer($x,$y);

