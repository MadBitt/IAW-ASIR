<?php

//Asignación de valores a variables
$n1=$_GET["operador1"];
$n2=$_GET["operador2"];

echo "<h1>Introducción de dos números</h1>";
echo "<h3>Operaciones básicas</h3>";

//Operaciones aritméticas
$suma=$n1+$n2;
$resta=$n1-$n2;
$mult=$n1*$n2;
$div=$n1/$n2;
$mod=$n1%$n2;

echo "<h1>Las operaciones aritméticas son:</h1>";
echo "La suma vale: $suma<br/>";
echo "La resta vale: $resta<br/>";
echo "La multiplicación vale: $mult<br/>";
echo "La división vale: $div<br/>";
echo "El resto de la división vale: $mod<p/>";

//Operaciones lógicas

echo "<h1>Las operaciones LÓGICAS son</h1>";


//Operaciones a nivel de BIT
echo "<h1>Las operaciones a nivel de BIT son</h1>";

