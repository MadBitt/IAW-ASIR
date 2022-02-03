<?php

//Recogida variables del formulario
$isbn=$_POST['isbn'];
$author=$_POST['author'];
$title=$_POST['title'];
$price=$_POST['price'];

if (empty($isbn) || empty($author) || empty($title) || empty($price)){
    echo "Debes rellenar todos los campos";
}
else{
    if (strstr($price, ",")){
        $pru=explode(",", $price);       
        $price=$pru[0] ."." .$pru[1];
    }
    else{
        $price=$price;   
    }
}

//Conexion con mysql
$server="localhost";
$user="alumno";
$pass="alumno";
$db="bookorama";
$conn= mysqli_connect($server, $user, $pass, $db);


//Consulta inserción
$sql="INSERT INTO books VALUES('$isbn', '$author', '$title', $price)";

if(mysqli_query($conn, $sql)){
    echo "Valor introducido con éxito";
}
else{
    echo "error:" .mysqli_error($conn);
}

mysqli_close>($conn);
