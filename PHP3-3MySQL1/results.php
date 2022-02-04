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

if ($query=mysqli_query($conn, $sql)){
    
    printf("Nº de filas recuperadas: " . mysqli_affected_rows($conn));
    echo "<br/>";
    
    $rows= mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    foreach ($rows as $fila){
        print_r($fila);
        echo "<br/>";
    }
}

mysqli_close($conn);
    
    