<?php

function borra_cookie($nombre_cookie)
{
    if (isset($_COOKIE[$nombre_cookie]))
    {
        setcookie($nombre_cookie);
        unset($_COOKIE[$nombre_cookie]);
        return true;
    }    
    else
    {
        return false;
    }
}

$nombre_cookie="contador";
$segundos=1000;
$valor=0;

echo "<br>Intentamos borrar manualmente el cookie ......<br/>";
$borra= borra_cookie($nombre_cookie);
if ($borra)
{
    echo "Borrado el cookie <b>$nombre_cookie</b><br/>";
    echo "Intentamos ver su contenido ...<p/>";
    if (isset($_COOKIE["$nombre_cookie"]))
    {
        echo "Valor del cookie: " .$_COOKIE[$nombre_cookie];
    }
    else
    {
        echo "No tiene contenido <br/>";
    }
}
else
{
    echo "No se ha podido borrar el cookie<br/>";
}    