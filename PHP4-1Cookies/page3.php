<?php

session_start();
echo "El contenido de \$_SESSION['sess_var'] es: " .$_SESSION['sess_var'];

echo "<br/>Hemos visto que se ha perdido el valor de la variable<p/>";

echo "A continuación vamos a destruir el identificador de la sesión<br/>";
echo "mediante session_destroy()<p/>";

if (session_destroy())
{
    echo "<b>Sesión destruida!!</b>";
}    

