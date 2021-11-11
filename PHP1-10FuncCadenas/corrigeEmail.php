<?php

function compruebaEmail ($string){
    
    
    $arrobaCom=explode("@", $string);
    $arrobaDr=explode(".", $arrobaCom[1]);
    $puntoCom= explode(".", $string);
    $puntoIz= explode("@", $puntoCom[0]);
    
    $comSin=explode(".", trim($string));
    
    
    
    if (strstr($string, "@") 
        && strlen($arrobaCom[0]) > 0 
        && strlen($arrobaDr[0]) > 0
        && strlen($puntoCom[1]) > 0
        ){
    echo "Dirección a analizar:<br/>";
    echo "'$string'<p/>";
    
        if (strncmp($string, trim($string), strlen(trim($string))) != 0){

            echo "Tiene " .strlen($string) . " letras<br/>";
            echo "Se han encontrado blancos.<br/>";
            echo "Los eliminamos....<p/>";

            echo "Hasta ahora<br/>";
            echo "email=$string<p/>";

                if ($comSin[1] == "com"){
                    echo "Buscamos .com en email...<br/>";
                    echo "Hemos encontrado <b>com</b><br/>";
                    echo "Dirección corregida: '" .$comSin[0] .".es'";
                }

        }   

    }
 
}

$email="    nombreApellido@ggggggmail.com    ";

compruebaEmail($email);

