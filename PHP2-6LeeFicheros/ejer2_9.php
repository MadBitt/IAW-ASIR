<?php

//Ubicación de txt y tiempo
$file="./ejer2_9.txt";

$date=getdate();
$hoy=$date["mday"] ."/" .$date["mon"] ."/" .$date["year"];

//Texto plano
echo "<b>Utiliza fgetc()</b><p/>";
echo "Contenido del fichero $file hasta fecha $hoy<br/>";

if (fopen($file, "r")){
    $fp=fopen($file, "r");
    while (!feof($fp)){
        $char=fgetc($fp);
        if ($char=="\n"){
            echo "<br/>";
        }
        else{
            echo $char;
        }
    }
}
else{
    echo "El fichero no existe";
}
    
