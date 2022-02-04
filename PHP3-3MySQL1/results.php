<?php

//Recogida de variables
$campo=$_POST['campo'];
$consulta=$_POST['consulta'];

echo $campo;
echo "<br/>";
echo $consulta;
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
    while ($rows= mysqli_fetch_assoc($select)){
        echo $rows['isb']. "<br/>";
        echo $rows['author']. "<br/>";
        echo $rows['title']. "<br/>";
        echo $rows['price']. "<p/>";     
    }
}
else {
    echo "no va";
}

    
    