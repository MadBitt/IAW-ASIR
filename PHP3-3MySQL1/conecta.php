<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);

if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b>";
}
mysqli_close($conn);

