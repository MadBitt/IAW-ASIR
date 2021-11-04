<?php

function mediaValores() {

    $numArgs = func_num_args();
    echo "<b>Función Media Valores</b><br>";
    echo "=================<br/>";
    echo "Número de argumentos utilizados: $numArgs<br><br>";

    $arg_list = func_get_args(); {
        $suma = 0;
        for ($i = 0; $i < $numArgs; $i++) {
            echo "Parámetro $i ==> valor: " . $arg_list[$i] . "<br>";
            $suma += $arg_list[$i];
        }
        $media = $suma / $numArgs;
        echo "<b>Valor de la media:" .$media ."</b>";
    }
}

function mitjana_array($array) {
    echo "<b>Función MediaArray</b><br>";
    echo "=================<br/>";
    echo "Número de elementos del array recibido: " . count($array) . "<p/>";
    echo "El contenido del array recibido es:<br>";
    print_r($array);

    $suma = 0;
    for ($i = 0; $i < count($array); $i++) {
        $suma += $array [$i];
    }

    $media = $suma / count($array);
    echo "<h4>La media de dichos argumentos es: " . number_format($media, 2) . "</h4>";
}

function mediaValoresRefer ($a,&$b){
    
    $numArgs= func_num_args();
    
    echo "<b>Función Media ValoresRefer</b><br>";
    echo "==========================<br/>";
    echo "Valor de los argumentos utilizados:<br>";
    echo "$a y $b<br>";
    echo "No hace falta hacer Return<br>";    
    echo "Damos formato al valor de la media mediante printf<br/>";
    
    $suma=$a+$b;
    $b=$suma/2;  
    printf ("<b>La media de dichos argumentos es: %.2f",$b ."</b>");
    
   
}

