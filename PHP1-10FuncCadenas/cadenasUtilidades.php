<?php

function contar_letras ($cadena){
  
   echo "La frase '$cadena' tiene " .strlen($cadena) ." letras<p/>";
}

function contar_palabras ($cadena){
    
    $palabra= explode(" ", $cadena);
    echo "La frase '$cadena' tiene " .count($palabra) ." palabras<p/>";
}

function letras_palabra ($cadena){
    
    $palabra= explode(" ", $cadena);
    for ($i=0; $i<count($palabra); $i++){
        echo $palabra[$i] ." " .strlen($palabra[$i]) ."<br/>";
    }
}


$frase="A quien madruga Dios le ayuda";

contar_letras($frase);
contar_palabras($frase);
letras_palabra($frase);


