<?php

/* 
 *Ús de opendir(), readdir(), basename() i explode()
 */

//Abro el directorio


$directorio=@opendir("doc/");

$entrada = readdir($directorio);

while ( $entrada != false){
    
    $NComp= $entrada;
    $vector= explode(".", $NComp);
    $Nombre= $vector[0];
    $Extensio = $vector[1];
    
    $tamaño = filesize("doc/" .$entrada);
    
    if ($Extensio == "ps" || $Extensio == "pdf"){
        
        echo "<b>Nombre</b>: $NComp";
        echo "<br/>";
        echo "<b>Tamaño</b>: $tamaño bytes";
        echo "<p/>";
        
        
    }
    
    
    
    $entrada = readdir($directorio);
}
closedir($directorio);






