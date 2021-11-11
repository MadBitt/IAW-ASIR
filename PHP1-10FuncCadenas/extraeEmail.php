<?php

function compruebaEmail ($string){
    
    
    $arrobaCom=explode("@", $string);
    $arrobaDr=explode(".", $arrobaCom[1]);
    $puntoCom= explode(".", $string);
    $puntoIz= explode("@", $puntoCom[0]);
    
    
    if  (
        strlen($arrobaCom[0]) > 0 
        && strlen($arrobaDr[0]) > 0
        && strlen($puntoCom[1]) > 0
        ){
    echo "Email a analizar:<br/>";
    echo "'$string'<p/>";
    echo "Tiene " .strlen($string) . " letras<br/>";
    echo "Es una dirección de email válida<p/>";
    
    echo "El nombre de usuario es: <b>$arrobaCom[0]</b><br/>";
     echo "El dominio es: <b>$arrobaCom[1]</b><br/>";
      
   
    }
     
     
}

$email="nombreApellido@gmail.com";

compruebaEmail($email);

