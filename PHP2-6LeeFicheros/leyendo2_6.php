<?php

$file="./mensajes2_6.txt";
$tamaño=filesize($file);

if (file_exists($file)){
    echo "El contenido del fichero <b>$file</b> es:<p/>";
    $fp=fopen($file, "r");
    
    
    $contenido=fread($fp, $tamaño);
    echo $contenido;
    
    echo "<br/>El tamaño es:<br/>";
    echo $tamaño . " carácteres";
    
}

