<?php

//Recogida de variables
$campo=$_POST['campo'];
$consulta=$_POST['consulta'];

//Comprobación campo consulta
if (empty($consulta)){
    echo "Debes introducir almenos un caracter";
}

//Conexion con mysql
$server="localhost";
$user="alumno";
$pass="alumno";
$db="bookorama";
$conn= mysqli_connect($server, $user, $pass, $db);

//Consulta
$sql="SELECT * FROM books WHERE $campo LIKE '%$consulta%'";

while ($result=mysqli_query($conn, $sql)){
    $row= mysqli_fetch_assoc($result);
    echo "Número de filas recuperadas: $result";
    
}