<?php

include './libreriaMediaAritmetica.php';

//array y variables
$nums=array(10,20,30);
$a=10;
$b=20;

//Media aritmética de tamaño variable
echo "Invocamos a función media aritmética con tantos valores como se desee ...<br/>";
mediaValores(30,40,10);
echo "<p/>";

//Media aritmética a partir de array
echo "Invocamos a función media aritmética del vector que se le pase...<p/>";
mitjana_array($nums);

//Media aritmética dos valores
echo "Invocamos a función media aritmética Referencia con dos valores...<p/>";
mediaValoresRefer($a, $b);