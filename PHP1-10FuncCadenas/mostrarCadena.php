<?php

function mostrar_imparells ($cadena) {
    for ($i=0; $i< strlen($cadena); $i++){
        if ($i%2 == 0){
            echo "<b>$cadena[$i]</b>";
        }
    }
}

function muestra_palabras_impares ($cadena) {
   $palabra=explode(" ", $cadena);
   for ($i=0; $i< count($palabra); $i++){
        if ($i%2 == 0){
            echo "<b>$palabra[$i] </b>";
        }
    }
   
    
}
$frase="A quien madruga Dios le ayuda";

echo "Invocamos a función mostrar_impares...<br/>";
echo "La cadena recibida como argumento era:<br/>";
echo $frase ."<br/>";
echo "La cadena con los caracteres impares es:<br/>";
mostrar_imparells($frase);
echo "<p/><p/>";

echo "Invocamos a función muestra_palabras_impares...<br/>";
echo "La cadena recibida como argumento era:<br/>";
echo $frase ."<br/>";
echo "La cadena con las palabras impares es:<br/>";
muestra_palabras_impares($frase);
