<?php

function funcionCreaEmail ($usu, $arr, $dom, &$salida){
    
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

