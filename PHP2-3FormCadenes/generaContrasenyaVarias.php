<?php

//Recogida de variables del formulario
$LBasc=$_POST['LongBasicos'];
$LEsp=$_POST['LongEspeciales'];
$Ord=$_POST['option'];
$Num=$_POST['NumContraseñas'];

//Creación de strings de carácteres
$Basicos="0123456789abcdefghijklmnopqrstuvwxyz";
$Especiales="?)(/&$%!][{}";

//Creación de string Basica y especial
$bascPass="";
$espPass="";

echo "<b>Los passwords generados aleatoriamente son:<p/>";


//Creación array passwd
$arrayPass=array();

//Bucle según input
for ($cant=0;$cant<$Num;$cant++){
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

for ($i=0;$i<count($arrayPass);$i++){
    echo $arrayPass[$i] ."<br/>";
}
 
