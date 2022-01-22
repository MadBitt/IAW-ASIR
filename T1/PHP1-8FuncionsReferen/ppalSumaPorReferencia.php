<?php

function sumaValor ($a, $b, &$res){
    $suma =$a + $b;
    $res=$suma;
    $res = $suma;
    echo "Llamada a Función <b>Suma(a,b,resultado)</b><br>";
    echo "El resultado se obtiene en el parámetro resultado, pasado por referencia<br>";
    echo "La suma de $a y $b es $res";
      
   
}

//Asignación de variables
$a=10;
$b=20;
$res=0;

//texto ppal
echo "Asignamos valores a los dos valores<br>";
echo "\$a= $a<br>";
echo "\$b= $b<br><br>";

//Llamada a función
$resul=sumaValor($a, $b, $res);
