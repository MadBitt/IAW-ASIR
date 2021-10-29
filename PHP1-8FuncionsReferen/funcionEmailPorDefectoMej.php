<?php

function funcionCreaEmail ($usu="you", $arr="@", $dom="gmail.es"){//&$salida){
    
    $numArgs= func_num_args();
    
    if ($dom == "gmail.com" || $dom == "gmail.es"){
        echo "Invocando a función...<br><br>";
        echo "Email completo es...<br><br>";
        echo "<b>$usu$arr$dom</b>";
        
        if ($numArgs == 1){
            echo "<br><br>Has introducido $usu , $arr y $dom se han completado automáticamente";
        }
        elseif ($numArgs == 2) {
            echo "<br><br>Has introducido $usu y $arr , $dom se ha completado automáticamente";
        }
        elseif ($numArgs == 3) {
            echo "<br><br>Has introducido todos los parámetros";
        }
        else {
            echo "<br>Todos los valores se han añadido por defecto";
        }
        
    }
    
    else {
        echo "Invocando a función...<br><br>";
        echo "Extensión incorrecta: <b>$dom</b>";
    }
}

$usu="lwtstudent";
$arr="@";
$dom="gmail.com";
//$salida= " ";

funcionCreaEmail();
