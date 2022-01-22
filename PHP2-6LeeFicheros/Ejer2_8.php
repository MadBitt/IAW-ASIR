<?php

//Localización del archivo y tiempo
$file="./ejer2_8.txt";

$fecha=getdate();
$hoy=$fecha["mday"] ."/" .$fecha["mon"] ."/" .$fecha["year"];

//Texto plano
echo "<b>Lee archivo con fgets</b><p/>";
echo "Contenido del fichero $file hasta fecha de hoy ($hoy)<p/>";



$fp=fopen($file,"r");
while (!feof($fp)){
    
    $linea=fgets($fp);
    echo "<b>$linea</b>";
    echo "<br/>";
}

fclose($fp);

