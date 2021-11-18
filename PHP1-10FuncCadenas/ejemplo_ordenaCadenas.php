<?php

function ordena_estandard($array){
   
    
    echo "El array inicial es:<br/>";
    for ($i=0; $i<count($array); $i++){
        echo $array[$i] ." ";
    }
    echo "<p/>";
    //Ahora la ordenamos
    usort($array, "strcmp");
    
    echo "Comparación-Ordenación de cadenas standard<br/>";
    
    for ($i=0; $i<count($array); $i++){
        echo $array[$i] ." ";
    }
    echo "<p/>";
}    

function ordena_natural ($array){
   // $abckp=$array;
    echo "El array inicial es:<br/>";
    for ($i=0; $i<count($array); $i++){
        echo $array[$i] ." ";
    }
    echo "<p/>";
        
    //Ahora la ordenamos
    usort($array, "strnatcmp");
    //natsort($array);
    //sort($array, SORT_NUMERIC);
    
    echo "Comparación-Ordenación de cadenas en orden natural<br/>";
        
    for ($i=0; $i<count($array); $i++){
        echo $array[$i] ." ";
    }
}
 
 
$cadena=array("i12.png", "i10.png", "i2.png", "i1.png");

ordena_estandard($cadena);
ordena_natural($cadena);
