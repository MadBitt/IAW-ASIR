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

$valor = each($nomsC);
echo "<h1><b>Vectores Asociativos()</b></h1>";

echo "Recorremos el vector creado ==><br><br>";


reset($nomsC);

foreach ($nomsC as $key=>$value){
    
    echo "<li>$key => $value</li>";
}

echo "</ul>";
