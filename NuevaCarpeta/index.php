<?php

//conexion
$servidor="localhost";
$usuario="alumno";
$pass="alumno";
$db="prueba";

$conexion= mysqli_connect($servidor, $usuario, $pass, $db);

//recogida variables
$alumno=$_POST['alumno'];
$nota=$_POST['nota'];

//tabla
$prueba=array(
        array ("ALUMNO", "NOTA"),
        array("Ruben"),
        array("Héctor"),
        array("Paloma"),
        array("victor"),
        array("Javier"),
        array("Aaron"),      
);

$sql="INSERT INTO notas (nombre, nota) VALUES ('$alumno', $nota)";

if (mysqli_query($conexion, $sql)){
    echo "Valor introducido con éxito";
}
else {
    $error=mysqli_error($conexion);
    echo $error;
}





