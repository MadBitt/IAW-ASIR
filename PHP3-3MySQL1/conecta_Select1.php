<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$sql="SELECT * FROM articulo";

if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
    if ($select=mysqli_query($conn, $sql)){
        printf("Affected rows (SELECT): " . mysqli_affected_rows($conn));
        echo "<br/>";
        $rows= mysqli_fetch_all($select, MYSQLI_ASSOC);
        foreach ($rows as $fila){
            print_r ($fila);
            echo "<br/>";
        }
    }
}
mysqli_close($conn);
