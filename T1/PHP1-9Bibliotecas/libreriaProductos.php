<?php

function producte ($multiplicant, $multiplicador){
    $res=$multiplicant*$multiplicador;
    echo "<b>Producto</b><br/>";
    return $res;
}

function productoVarios (){
    $nArgs= func_num_args();
    $lArgs= func_get_args();
    
    echo "<b>Función Producto Varios</b><br>";
    echo "Número de elementos a multiplicar: $nArgs<p/>";
    echo "Valores: (";
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