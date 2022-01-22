<?php

echo "<b>utiliza fpassthru</b><p/>";
echo "<b>Visualiza el contenido del fichero mensajes2_7.txt</b>";

echo"<ul>";
    echo "<li>Archivo completo mediante readfile()</li>";
    echo "<li>La primera línea en negrita, utilizando fopen() y fgets()</li>";
    echo "<li>Volcar el resto del fichero salida estándar con fpassthru</li>";
echo "</ul>";


$file="./mensajes2_7.txt";

echo "Visualizamos con readfile()<br/>";
readfile($file);
echo "<br/>";



//Solo primera linea
$fp=fopen($file, "r");
$lineaU=fgets($fp);
echo "<b>$lineaU</b><br/>";


//Hasta final del documento
echo "Resto con fpassthru():<br/>";
fpassthru($fp);
