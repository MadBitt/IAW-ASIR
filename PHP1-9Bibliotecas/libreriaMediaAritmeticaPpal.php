<?php

include './libreriaMediaAritmetica.php';

//array y variables
$nums=array(12,13,15,16);
$a=25;
$b=45;

//Media aritmética de tamaño variable
echo "Invocamos a función media aritmética con tantos valores como se desee ...<br/>";
mediaValores(10,20,30);
echo "<p/>";

//Media aritmética a partir de array
echo "Invocamos a función media aritmética del vector que se le pase...<br/>";
mitjana_array($nums);

//Media aritmética dos valores
echo "Invocamos a función media aritmética Referencia con dos valores...<br/>";
mediaValoresRefer($a, $b);