<?php

//Asignación de valores a variables
$n1=$_GET['operador1'];
$n2=$_GET['operador2'];

echo "<h1>Introducción de dos números</h1>";
echo "<h3>Operaciones básicas</h3>";

//Operaciones aritméticas
$suma=$n1+$n2;
$resta=$n1-$n2;
$mult=$n1*$n2;
$div=$n1/$n2;
$mod=$n1%$n2;

echo "<h2>Las operaciones aritméticas son:</h2>";
echo "La suma vale: $suma<br/>";
echo "La resta vale: $resta<br/>";
echo "La multiplicación vale: $mult<br/>";
echo "La división vale: $div<br/>";
echo "El resto de la división vale: $mod<p/>";

//Operaciones lógicas

echo "<h2>Las operaciones LÓGICAS son</h2>";
if ($n1&&$n2){
    echo "AND de los números: " .true ."<br/>";
}
if ($n1||$n2){
    echo "OR de los números: " .true ."<br/>";
}


//Operaciones a nivel de BIT

$and=$n1&$n2;
$or=$n1|$n2;
$izqda=$n1 << $n2;
$drcha=$n1 >> $n2;


echo "<h2>Las operaciones a nivel de BIT son</h2>";

echo "AND bit de los números: $and<br/>";
echo "OR bit de los números: $or<br/>";
echo "Desplazamiento del número $n1 ==> $n2 posiciones a la izqda $izqda<br/>";
echo "Desplazamiento del número $n1 ==> $n2 posiciones a la drcha $drcha";
