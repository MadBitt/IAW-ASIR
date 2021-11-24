<?php

function mcdEuclidesRecursiva ($a,$b){
    if($a==$b)
    {
        return $b;
        
    }
    else
    {       
        if ($a > $b)
        {
            return mcdEuclidesRecursiva($a-$b, $b);
        }
        else
        {
            return mcdEuclidesRecursiva($a, $b-$a);
        }
    
}}

$x=25;
$y=15;
$mcd= mcdEuclidesRecursiva($x, $y);
echo 'Llamada al algoritmo RECURSIVO<br>';
echo 'El maximo común divisor de '.$x.' y '.$y.' es: '.$mcd;

?>
