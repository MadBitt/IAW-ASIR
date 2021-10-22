<?php

//Declaración de la función
function media_arit($x,$y){
    
    //$numargs= func_num_args();
    $media=($x+$y)/2;
    //$media=floatval($media);
    return $media;
    
    
}

//Programa principal

//Definición de argumentos
$a=10;
$b=20;
echo "<b>Programa principal</b><br>";
echo "El valor de los parámetros lo establecemos desde él<br>";
echo "Hacemos la llamada a la función<br>";

echo "<h4><b>Función Media Aritmética de Dos valores</b></h4>";
echo "Número de argumentos utilizados:2<br><br>";
echo "Valor de los argumentos utilizados:<br>";
echo "=========================<br>";

echo "argumento 1: " .$a ."<br>";
echo "argumento 2: " .$b ."<br>";
echo "ahora estoy en el Ppal<br>";

echo "<h1>La media de dichos argumentos es: " 
.number_format(media_arit($a, $b),2) ."</h1>";
