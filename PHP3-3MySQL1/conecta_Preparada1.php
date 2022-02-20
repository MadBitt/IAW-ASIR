<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$PrepSql="INSERT INTO articulo (Descripcion, Precio, Stock) VALUES (?,?,?)";
$sentencia= mysqli_prepare($conn, $PrepSql);
        
        
if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
       

    $val1='Articulo12';
    $val2=133.0;
    $val3=13;
    
    mysqli_stmt_bind_param($sentencia, "sdi", $val1, $val2, $val3); 
    
    if (mysqli_stmt_execute($sentencia)){
        printf ("Registros insertados: " .mysqli_affected_rows($conn));
    }
    else {
        echo "Error: (" .mysqli_errno($conn) .") ".mysqli_error($conn);
    }
}

mysqli_close($conn);
