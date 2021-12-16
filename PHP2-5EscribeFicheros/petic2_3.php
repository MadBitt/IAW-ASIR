<?php

//Texto
echo "<h3>Escritura datos Formularioen archivo</h3>";
echo "<b><i>Incluye control de error en apertura y escritura del fichero</i></b><p/>";

echo "Intentando volcar la información en el archivo...<p/>";
echo "<b><i>Se ha escrito información en el fichero</i></b>";

//Recogida de variables de formulario
$nom=$_POST['nom'];
$dir=$_POST['direccio'];

//Creación de array tiempo
$dia=getdate();
echo $dia[wday] ."/" .$dia[mon];

//Manipulación del archivo
//$file="encargos2_3.txt";
//$fp= fopen($file, "r+");
//if ($fp){
//    fwrite($fp, )
//}
