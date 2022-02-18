<?php

//Variables de control
$tamany=$_FILES['subir']['size'];
$nomTemporal=$_FILES['subir']['tmp_name'];
$nomReal=$_FILES['subir']['name'];
$nomSubida= "up_" .$nomReal;
$maximo=100000;


$uploadDir="/home/bitt/Documents/apache/IAW-ASIR/PHP2-8SubirAServidor/UPLOADS/";

//Ppal
echo "<b>ejercicio 5.3</b><p/>";
echo "<b>Controla que el tamaño del fichero no supere los 100k</b><p/>";


if ($tamany > $maximo){
    echo "Fichero excede limite. Supera los 100kb <br/>";
    echo "<b>No podemos realizar la operación de subida</b><br/>";
    echo "El archivo tiene un tamaño = $tamany bytes";
}
else {
  
    if(move_uploaded_file($nomTemporal, $uploadDir .$nomSubida)){
        echo "Fichero válido. Carga realizada con éxito!.";
    }
    

    
}



