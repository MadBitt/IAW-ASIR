<?php

//Recogida variables formulario
$id=$_POST['id'];
$name=$_POST['name'];
$tlf=$_POST['tlf'];

//Datos de conexión mysql
$server="localhost";
$user="alumno";
$pass="alumno";
$db="bd1_iaw";

//Conexión y consulta
$conn= mysqli_connect($server, $user, $pass, $db);
$sql="INSERT INTO clientes_iaw VALUES ($id,'$name','$tlf')";


//Salida
if (mysqli_query($conn, $sql)){
        printf("Filas insertadas= %d", mysqli_affected_rows($conn));
    }
else {
    echo "Error: (" .mysqli_errno($conn) .") " .mysqli_error($conn);
}

    echo "<table border=1>";
    echo "<tr>";
    echo "<td><a href='Formu_DML.html'>Volver al formulario</td>";
    echo "</tr>";
echo "</table>";

//Cierre de conexión
mysqli_close($conn);


