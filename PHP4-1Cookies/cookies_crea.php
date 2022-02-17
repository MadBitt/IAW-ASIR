<?php

$segundos_año=25;
$fecha=time() + $segundos_año;

//Comprobamos si la cookie está creada
if (isset($_COOKIE['contador'])){
    $veces=$_COOKIE['contador'] + 1;
    setcookie('contador', $veces, $fecha);
    echo "Número de visias a la web: " .$_COOKIE['contador'];
      
    
}
else {
    $veces=1;
    setcookie('contador', $veces, $fecha);
    echo "Has visitado la página por primera vez";   
}



?>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h4>Ejemplo de COOKIES en página web</h4>
    </body>
</html>


