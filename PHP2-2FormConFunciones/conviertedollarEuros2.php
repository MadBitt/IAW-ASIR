<?php

//Asignación de variable cantidad
$cant=$_GET['cantidad'];

//Información común
echo "<h4>Conversión Con Control de errores</h4>";

//Caso1
if ($cant > 0){
echo "<b>Realizamos la conversión a US Dollars</b><p/>";
echo "Usted indicó la siguiente información<p/>";
$cambio=1.13;
$res=$cant*$cambio;
echo "Cantidad= $cant euros<p/>";
echo "Resultado de la conversión = $res US Dollars";
}
//Caso2
elseif ($cant<0){
    echo "<b>Opps...</b><p/>";
    echo "<b>Error: $cant es Valor negativo</b>";
}
//Caso3
else{
    echo "<b>Error: No hay valor</b>";
}

