<?php

function funcionCreaEmail ($usu="porDefecto", $arr="@", $dom="gmail.com", &$salida){
   
    $numArgs= func_num_args(); 
    if ($numArgs == 1){
        echo "Se ha generado signo arroba y nombre de dominio por defecto";
    }
    elseif ($numArgs == 2) {
        echo "Se ha generado el nombre de dominio por defecto";
    }
    else {
        echo "Se ha generado todo por defecto";
    }
    
    if ($dom == "gmail.com" || $dom == "gmail.es"){
        echo "Invocando a función...<br><br>";
        echo "Email completo es...<br><br>";
        $salida=$usu .$arr .$dom;
        echo "<b>$salida</b>";
    }
    else {
        echo "Invocando a función...<br><br>";
        echo "Extensión incorrecta: <b>$dom</b>";
    }
}

$usu="lwtstudent";
$arr="@";
$dom="gmail.cat";
$salida= " ";

funcionCreaEmail($usu, $arr, $dom, $salida);

