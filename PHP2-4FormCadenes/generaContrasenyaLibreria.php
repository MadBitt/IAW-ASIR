<?php

include './lib_generaContrasenya.php';

//Recogida de variables de formulario
$longBasicos=$_POST['LongBasicos'];
$longEspeciales=$_POST['LongEspeciales'];


//Invocar función
generaPassword($longBasicos, $longEspeciales);

