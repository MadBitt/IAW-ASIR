<?php

function productoVarios (){
    $nArgs= func_num_args();
    $lArgs= func_get_args();
    
    echo "<b>Función Producto</b><br>";
    echo "Número de elementos a multiplicar: $nArgs<p/>";
    echo "Valores:<br/>";
    echo "========<br/>(";
    $mult=1;
    for ($i=0; $i<$nArgs; $i++){
        $mult=$mult*$lArgs[$i];
        if ($i == $nArgs-1){
            echo $lArgs[$i];
        }
        else
            echo "$lArgs[$i],";
        
    }
    echo ")<p/>";
    printf ("<b>El producto es: %.1f", $mult) ."</b>";
}

echo "<b>Estamos en Programa Principal</b><br>";
echo "El valor de los parámetros lo establecemos desde él<br>";
echo "Hacemos la llamada a la función...<p/>";
productoVarios(6,5,4,3,2,1);


