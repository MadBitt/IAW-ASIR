<?php

function compruebaEmail ($string){
    echo "Email a analizar:<br/>";
    echo "'$string'<p/>";
    
    if (strstr($string, "@") && strstr($string, ".")){
    echo "Tiene " .strlen($string) . " letras";
    echo "Es una dirección de email válida<p/>";
    
    echo "El nombre de usuario es:";
    }
}

$email="nombreApellido@gmail.com";

compruebaEmail($email);