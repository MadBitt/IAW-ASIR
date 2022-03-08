<?php

//Crear matriz datos
$datos = array(
    array("EQUIPO", "GOLES A FAVOR", "GOLES EN CONTRA", "TARJETAS AMARILLAS", "FALTAS", "PARTIDOS"),
    array("Real Madrid", 52, 20, 50, 273, 26),
    array("Real Betis", 48, 32, 59, 340, 26),
    array("Villarreal", 47, 25, 57, 345, 26),
    array("Atletico de Madrid", 47, 34, 71, 316, 26),
    array("FC Barcelona", 46, 28, 55, 350, 25),
    array("Sevilla FC", 39, 18, 64, 317, 26),
    array("Valencia CF", 38, 42, 89, 454, 26)
);

//Visualizar matriz datos
$cuentaArrays = count($datos);

echo "<table border=1";
for ($filas=0; $filas < $cuentaArrays; $filas ++){
    echo "<tr>";
    for ($columnas=0; $columnas <= 5; $columnas++){
        echo "<td>";
        echo $datos[$filas][$columnas];
        echo "</td>";       
    }
    echo "</tr>";
}

echo "</table>";


//Conexión
$server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="equipos";
            
    $link=mysqli_connect($server, $user, $pass, $db);
    
if ($link){
    
    $contador=0;
    for ($filas = 1; $filas < $cuentaArrays; $filas++){
        $cuenta="DESC datosDB";
        mysqli_query($link, $cuenta);
        $cuenta=mysqli_affected_rows($link);
  
        $sentencia = "INSERT INTO datosDB VALUES (";
        
        for ($columnas = 0; $columnas < $cuenta; $columnas++){
            
            if ($columnas != $cuenta -1) {
                $sentencia .= "'" . $datos[$filas][$columnas] . "',";
            } else {
                $sentencia .= "'" . $datos[$filas][$columnas] . "')";
            }       
        }
        
        if (mysqli_query($link, $sentencia)) {
            $contador++;
        }
        else {
            echo "Error (" . mysqli_errno($link) . ") " . mysqli_error($link);
            echo "<p/>";
        }     
    }
 
}
else {
    echo "Error (" . mysqli_errno($link) . ") " . mysqli_error($link);
}

echo "Valores introducidos en la base de datos: $contador";