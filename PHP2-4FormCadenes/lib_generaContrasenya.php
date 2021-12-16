<?php

function generaPassword ($longBasicos, $longEspeciales){
   
    //Creación de string básica y especial
    $basica="abcdefghijklmnopqrstu";
    $especial="[])(?!)";
    
    //Creación de basicaPass y EspecialPass
    $basicaPass="";
    for ($i=1;$i<=$longBasicos;$i++){
        $x= rand(0, strlen($basica));
        $y= substr($basica, $x,1);
        $basicaPass.=$y;
    }
    
    $especialPass="";
    for ($i=1;$i<=$longEspeciales;$i++){
        $x= rand(0, strlen($especial)-1);
        $y= substr($especial, $x,1);
        $especialPass.=$y;
    }
    
    //concatenación
    $Ord=$_POST['option'];
    
    if ($Ord=="BasicosEspe"){
    $pass=$basicaPass .$especialPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}

    else {
    $pass=$especialPass .$basicaPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}
}

