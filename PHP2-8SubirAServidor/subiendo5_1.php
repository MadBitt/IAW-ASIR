<?php


//Recogida de variables
$nomOriginal=$_FILES['userfile']['name'];
$nomTemporal=$_FILES['userfile']['tmp_name'];

//Nombre subido
$nomSubido= "up_" .$nomOriginal;


//Directorio de subida
$uploadDir="D:\\PROJECTS_PHP_IAW\\IAW-ASIR\\PHP2-8SubirAServidor\\subidos\\";


//A la vista

echo "<b>ejercicio 5.1</b><p/>";

if (move_uploaded_file($nomTemporal, $uploadDir .$nomSubido)){
    echo "Fichero válido. Carga realizada con éxito<p/>";
    
    echo "Nombre temporal del archivo: $nomTemporal<br/>";
    echo "Nombre final del archivo subido: $nomSubido";
    
    
}

