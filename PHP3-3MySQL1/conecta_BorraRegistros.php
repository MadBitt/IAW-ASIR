<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$sql="DELETE FROM articulo "
        ."WHERE idArticulo=2";

if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
    if (mysqli_query($conn, $sql)){
        printf("Registros borrados: " . mysqli_affected_rows($conn));
    }
    else {
        echo "Error: (" .mysqli_errno($conn) .") ".mysqli_error($conn);
    }
}
mysqli_close($conn);
