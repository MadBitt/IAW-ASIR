<?php

$alumnos=array(
    array ("ALUMNO", "PAR", "ISO", "GBD", "FHW", "LMSGI", "SRI", "ASO", "IAW", "SGBD", "SAD"),
    array ("Rubén", 9, 6, 9, 8, 9, 9, 8, 7, 6, 5),
    array ("Héctor", 5, 5, 8, 7, 7, 8, 8, 9, 7, 4),
    array ("Paloma", 9, 3, 7, 8, 8, 2, 7, 8, 3, 6),
    array ("Víctor", 3, 5, 6, 7, 8, 7, 6, 6, 4, 3),
    array ("Javier", 4, 9, 5, 9, 9, 8, 8, 8, 8, 8),
    array ("Aarón", 9, 8, 9, 8, 7, 9, 7, 6, 5, 7)
);
//Incluimos el archivo de funciones
include './funcions.php';

//Función tabla entrada
echo "<b>Función tabla Entrada</b><br/>";
fvisualizaTablaEntrada($alumnos);

//Función tabla salida
echo "<b>Función tabla Salida</b><br/>";
fvisualizaTablaSalida($alumnos);

fgeneraArrayMaximaPorAlumno($alumnos);
