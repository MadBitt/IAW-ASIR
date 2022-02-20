<?php


$servidor="localhost";
$user="alumno";
$pass="alumno";
$db="sakila";


$conexion=mysqli_connect($servidor, $user, $pass, $db);

$sql="SELECT * FROM film";

$resultado = mysqli_query($conexion, $sql);



while ($row = mysqli_fetch_assoc($resultado)){
    echo $row['title'];
    echo "<br/>";
}

mysqli_close($conexion);

