<?php

$personas=array("Pepito", "Juanito", "Andresito","Felipito", "Gerardito");
$var=reset($personas);
echo gettype($var);
echo gettype($personas);

while($var){
    echo "<ul><li>$var</li></ul>";
    $var=next($personas);
}