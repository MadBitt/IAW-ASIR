<?php

function mediaValoresReferArgum ($a,$b,$c,$d,&$e,&$f){
    
    $numArgs= func_num_args();
    
    echo "<b>Estamos en Función Media Aritmética</b><br>";
    echo "<b>=============================</b><br>";
    echo "Valor de los argumentos utilizados:<br>";
   
    
    $args= func_get_args();
  
    for ($i=0; $i <= $numArgs -3; $i++){
        echo "<ul><li>Parámetro " .($i+1) ."==> $args[$i]</li></ul>";
        $e+=$args[$i];   
    }
    
    
    echo "<br>";
    echo "Valor del parámetro SUMA= $e<br>";
    $f=$e/4;
    echo "Valor del parámetro MEDIA= $f<br><br>";
  
       
}
$uno=10;
$dos=20;
$tres=30;
$cuatro=40;
$suma=0;
$media=0;

echo "<b>Programa Principal</b><br>";
echo "<b>===============</b><br>";
echo "El valor de los parámetros lo establecemos desde él.<br><br>";
echo "Invocamos a la función<br>";
echo "=================<br><br>";
mediaValoresReferArgum($uno,$dos,$tres,$cuatro,$suma,$media);

echo "<b>Estamos de nuevo en el Programa Principal</b><br>";
echo "<b>================================</b><br>";
echo "La SUMA está en parámetro suma y es: <b>$suma</b><br>";
echo "La MEDIA está en parámetro media y es: <b>$media</b>";
