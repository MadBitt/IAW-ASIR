<?php


//Variables de control
$tmp=$_FILES['subir']['tmp_name'];
$name=$_FILES['subir']['name'];
$type=$_FILES['subir']['type'];

$UpName="up_" .$name;

//Directorio subida
$uploadDir="/home/bitt/Documents/apache/IAW-ASIR/PHP2-8SubirAServidor/UPLOADS/";


//Ppal
echo "<h3>ejercicio 5.4</h3>";

if ($type == 'application/pdf' || $type == 'application/postscript' ){
   
    echo "<b>El tipo de fichero escogido es:</b>$type<p/>";
    
    if (move_uploaded_file($tmp, $uploadDir .$UpName)){
    echo "Fichero válido. Carga realizada con éxito!";
    }
}

else{
    echo "<b>El tipo de fichero escogido es:</b>$type<p/>";
    echo "Sólo se pueden subir los ficheros pdf y ps";
}
