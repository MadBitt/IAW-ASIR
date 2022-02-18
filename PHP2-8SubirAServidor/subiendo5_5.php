<?php


//Variables de control

$tmp=$_FILES['subir']['tmp_name'];
$name=$_FILES['subir']['name'];

$UpName= "up_" .$name;


//Directorio subida
$uploadDir="doc/";



//Ppal
echo "<h3>ejercicio 5.5</h3>";
echo "Vamos a intentar subir el archivo el directorio <b>$uploadDir</b><br/>";

//Si doc existe
if (opendir($uploadDir)){
    echo "Carga realizada con éxito!.<p/>";
    
    if (move_uploaded_file($tmp, $uploadDir .$UpName)){
    echo "Subido archivo <b>$name</b> al directorio <b>$uploadDir</b>";
    }
}

//Si doc no existe
else{
    echo "No existe el directorio $uploadDir<br/>";
    echo "Lo vamos a crear...<p/>";
    
    if (mkdir($uploadDir, 0777)){
       if (chmod($uploadDir, 0777)){
            if (move_uploaded_file($tmp, $uploadDir .$UpName)){
            echo "Carga realizada con éxito!.<p/>";
            echo "Subido archivo $name al directorio $uploadDir";
            } 
       }
    }
    
}
