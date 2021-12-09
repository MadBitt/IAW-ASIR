<?php

function generaPassword ($longBasicos, $LongEspeciales){
   
    //Creación de string básica y especial
    $basica="abcd";
    $especial="[])(?!)";
    
    //Creación de basicaPass y EspecialPass
    $basicaPass="";
    for ($i=1;$i<=$longBasicos;$i++){
        $x= rand(0, $strlen($basica));
        $y= substr($basica, $x,1);
        $basicaPass.=$y;
    }
    
    $especialPass="";
    for ($i=1;$i<=$longEspeciales;$i++){
        $x= rand(0, $strlen($especial));
        $y= substr($especial, $x,1);
        $especialPass.=$y;
    }
    
    //concatenación
    $opt=$_POST['option'];
    
    if ($Ord=="BasicosEspe"){
    $pass=$bascPass .$espPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}

    else {
    $pass=$espPass .$bascPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}
}

//Programa Principal
//Recogida de variables de formulario
$longBasicos=$_POST['LongBasicos'];
$longEspeciales=$_POST['LongEspeciales'];


//Invocar función
generaPassword($longBasicos, $LongEspeciales);