<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$sql="DROP TABLE articulos2";

if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
    if (mysqli_query($conn, $sql)){
        echo "Tabla borrada";
    }
    else {
        echo "Error: (" .mysqli_errno($conn) .") ".mysqli_error($conn);
    }
}
mysqli_close($conn);