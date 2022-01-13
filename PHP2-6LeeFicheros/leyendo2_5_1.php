<?php

$file="./mensajes2_5_1.txt";
$tamaño=filesize($file);

if (file_exists($file)){
    $fp=@fopen($file,"r");
    
    if ($tamaño >0){
        echo"El contenido del fichero $file es ...<p/>";
        $contenido=fread($fp, $tamaño);
        echo $contenido;
    }
    else {
        echo "El fichero está vacío";
    }    
    fclose($fp);
}
else{
    echo "El fichero no existe";
}
