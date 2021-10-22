<?php

echo "<h3><b>Listado de Números</h3></b>";
$ini=100;
$fin=200;
$suma=0;

while ($ini <= $fin){
    echo $ini ."<br>";
    $suma=$suma+$ini;
    $ini++;
}

echo "<h3><b>Suma de los Números es:$suma</b></h3>";
