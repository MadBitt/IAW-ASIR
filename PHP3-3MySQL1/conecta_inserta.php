<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$sql="INSERT INTO articulo (Descripcion, Precio, Stock) VALUES('Artículo de prueba', 45.23, 13)";
$insert= mysqli_query($conn, $sql);
        
        
if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
    
    if ($insert){
        printf("Affected rows (INSERT): %d", mysqli_affected_rows($conn));
    }
    else {
        echo "Error: (" .mysqli_errno($conn) .") " .mysqli_error($conn);
    }
}

mysqli_close($conn);
