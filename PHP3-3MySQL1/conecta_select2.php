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
        echo "<p/>";
        while ($rows= mysqli_fetch_assoc($select)){
            echo $rows['idArticulo']. "<br/>";
            echo $rows['Descripcion']. "<br/>";
            echo $rows['Precio']. "<br/>";
            echo $rows['Stock']. "<p/>";
        }
        
    }
}
mysqli_close($conn);
