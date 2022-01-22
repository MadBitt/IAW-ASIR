<?php

//Texto
echo "<h3>Escritura datos Formularioen archivo</h3>";
echo "<b><i>Incluye control de error en apertura y escritura del fichero</i></b><p/>";

echo "Intentando volcar la información en el archivo...<p/>";


//Recogida de variables de formulario
$nom=$_POST['nom'];
$dir=$_POST['direccio'];

//Creación de array tiempo
$dia=getdate();

$fecha=$dia[mday] ."/" .$dia[mon] ."/" .$dia[year];

//Manipulación del archivo
$file="encargos2_3.txt";
$fp= fopen($file, "r+");
if ($fp){
    fwrite($fp, "$fecha\t$nom\t$dir\n");
    echo "<b><i>Se ha escrito información en el fichero</i></b>";
    
}
else{
    echo "El archivo no existe o no se ha podido acceder a él";
}

fclose($file);
