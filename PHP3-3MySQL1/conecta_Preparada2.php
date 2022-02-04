<?php

$server="localhost";
$user="alumno";
$pass="alumno";
$db="clientesdb_iaw";

$conn= mysqli_connect($server, $user, $pass, $db);
$PrepSql="SELECT idArticulo FROM articulo "
        ."WHERE Descripcion=?";
$sentencia= mysqli_prepare($conn, $PrepSql);

if ($conn){
    echo "Conexión exitosa!<br/>";
    echo "<b>BD: $db</b><p/>";
    
    $val1="Brujula T30";
    
    mysqli_stmt_bind_param($sentencia, "s", $val1);
    
    if (mysqli_stmt_execute($sentencia)){
        //Ligar variables de resultado
        mysqli_stmt_bind_result($sentencia, $idArt);
        //Obtener valor
        mysqli_stmt_fetch($sentencia);
        //mostrar salida
        echo "$idArt es el idArticulo del producto $val1";
        //cerrar sentencia
        mysqli_stmt_close($sentencia);
    }
    else {
        echo "Error: (" .mysqli_errno($conn) .") ".mysqli_error($conn);
    }
}
mysqli_close($conn);
