<?php

function generaArrayPasswords ($numContra,$LBasc,$LEsp){
    
    //Recibimiento de global POST de option
    $Ord=$_POST['option'];

    //Creación de strings de carácteres
    $Basicos="0123456789abcdefghijklmnopqrstuvwxyz";
    $Especiales="?)(/&$%!][{}";

    //Creación de string Basica y especial
    $bascPass="";
    $espPass="";

    echo "<b>Genera Contrasenya Varias Función:<p/>";
    echo "<b>El contenido del array de contraseñas es<b/><p/>";


    //Creación array passwd
    $arrayPass=array();

    //Bucle según input
    for ($cant=0;$cant<$numContra;$cant++){
        for ($i=1;$i<=$LBasc;$i++){
            $x=rand(0, strlen($Basicos)-1);
            $y=substr($Basicos, $x, 1);
            $bascPass.=$y;
        }

        for ($i=1;$i<=$LEsp;$i++){
            $x=rand(0, strlen($Especiales)-1);
            $y=substr($Especiales, $x, 1);
            $espPass.=$y;
        }

        //Concatenación según el input elegido
        if ($Ord=="BasicosEspe"){
            $pass=$bascPass .$espPass;
            //echo $pass ."</b>";
        }

        else {
            $pass=$espPass .$bascPass;
            //echo $pass ."</b>";
        }
        $arrayPass[$cant]=$pass;
        $bascPass="";
        $espPass="";
  
    }
    return $arrayPass;
}

//Programa principal
//Recibimiento variables del formulario
$nContraseñas=$_POST['NumContraseñas'];
$longBas=$_POST['LongBasicos'];
$longEsp=$_POST['LongEspeciales'];

$contraseñas=generaArrayPasswords($nContraseñas, $longBas, $longEsp);
for ($i=0;$i<count($contraseñas);$i++){
    echo $contraseñas[$i] ."<br/>";
}

