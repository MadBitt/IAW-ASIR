<?php

//Recogida de variables
$nomTemporal=$_FILES['subir']['tmp_name'];
$nomReal=$_FILES['subir']['name'];


//Ruta de subida
$uploadDir=$uploadDir="D:\\PROJECTS_PHP_IAW\\IAW-ASIR\\PHP2-8SubirAServidor\\UPLOADS\\";

//Variables a utilizar
$nomFinal= "up_" .$nomReal;


//Vista general
echo "<h2>ejercicio 5.2</h2>";
echo "<b>Comprueba si existe el directorio UPLOADS</b><p/>";

if (@opendir($uploadDir)){
    
    if (move_uploaded_file($nomTemporal, $uploadDir .$nomFinal)){
        echo "Nombre y ruta completa del archivo: <b>$uploadDir$nomFinal</b><br/>";
        echo "Si existe el directorio <b>$uploadDir</b>";
    }    
}
else {
    echo "Error. No existe el directorio $uploadDir";
}

