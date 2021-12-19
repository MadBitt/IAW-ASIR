<?php

//Recogida de variables de formulario
$cFrenos=$_POST['cFrenos'];
$cAceite=$_POST['cAceite'];
$cRuedas=$_POST['cRuedas'];
$nom=$_POST['nom'];
$dir=$_POST['dir'];

//Creación de constantes de precios
define("PRECIOFRENOS", 100);
define("PRECIOACEITE",10);
define("PRECIORUEDAS",4);

//Creación de fecha
$dia=getdate();
$fecha=$dia[mday] ."/" .$dia[mon] ."/" .$dia[year];

//Cálculo de importe
$importe=($cFrenos*PRECIOFRENOS)+($cAceite*PRECIOACEITE)+($cRuedas*PRECIORUEDAS);

//Texto de salida
echo "<b>Escritura en fichero en carpeta PETICIONES</b><p/>";

echo "Su petición Sr/Sra $nom es la siguiente:<br/>";
echo "$cFrenos frenos.<br/>";
echo "$cAceite latas de aceite.<br/>";
echo "$cRuedas ruedas.<br/>";
echo "Importe total:" .number_format($importe,2) ." €<br/>";
echo "Intentamos volcar la información<br/>";
echo "...................<p/>";

//Acceso a archivo
$file="./peticiones2_4/encargos2_4.txt";
$fp=fopen($file,"r+");

if (file_exists($file)){
    
    fclose($fp);
    $fp=fopen($file,"a+");
    
    if(fwrite($fp, "$fecha\t$nom\t$dir\t$cFrenos\t$cAceite\t$cRuedas\n")){
        echo "Escrita la información en archivo";
        fclose($fp);
    }
    else{
        echo "No tiene permisos de escritura sobre el archivo";
        fclose($fp);
    }

}
else{
    echo "El fichero no existe.<br/>";
    echo "Creando encargos2_4.txt........<p/>";
    fclose($fp);
    $fp=fopen($file,"a+");
    if(fwrite($fp, "$fecha\t$nom\t$dir\t$cFrenos\t$cAceite\t$cRuedas\n")){
        echo "Escrita la información en archivo";
        fclose($fp);
    }
    else{
       echo "No tiene permisos de escritura sobre el archivo";
       fclose($fp);
    }
}
