<?php

function porDefecto ($param1="You", $param2="my", $param3="Blue"){
    return $param1 ." " .$param2 ." " .$param3;
    
}

$argm1="Hello";
$argm2="World";
$argm3="Moon";
echo "Incocamos con tres argumentos<br>";
echo porDefecto($argm1, $argm2, $argm3);
echo "<br><br>Invocamos con dos argumentos<br>";
echo porDefecto($argm1, $argm2);
echo "<br><br>Invocamos con un argumento<br>";
echo porDefecto($argm1);
echo "<br><br>Invocamos sin argumentos<br>";
echo porDefecto();

