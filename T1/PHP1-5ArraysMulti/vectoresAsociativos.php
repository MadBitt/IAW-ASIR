<?php

$nomsC=array(
            "ape0" => "nom0",
            "ape1" => "nom1",
            "ape2" => "nom2",
            "ape3" => "nom3",
            "ape4" => "nom4",
       );

$nomsC ["ape5"]="nom5";
$nomsC ["ape6"]="nom6";
$nomsC ["ape7"]="nom7";
$nomsC ["ape8"]="nom8";
$nomsC ["ape9"]="nom9";

echo "<ul>";
reset($nomsC);

$valor = each($nomsC);
echo "<h1><b>Vectores Asociativos()</b></h1>";
echo "Recorremos el vector creado --><br><br>";
echo "ESTE FRAGMENTO SÓLO captaría el primer elemento del vector asociativo";
echo "<br>" .$valor[0] ." => " .$valor[1] ."<br><br>";

echo "AHORA RECORRE TODO el vector asociativo";
while ($x=each($nomsC)){
    
    echo "<li>$x[0] => $x[1]</li>";
} 

echo "</ul>";

