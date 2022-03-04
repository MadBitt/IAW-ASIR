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

echo "<h3>Visualización matriz datos</h3>";

echo "<table border=1>";
for ($fila = 0; $fila < $cuentaArrays; $fila++ ){
    echo "<tr>";
    for ($columna=0; $columna<6; $columna++){  
        echo "<td>";
        echo $datos[$fila][$columna];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";


//Crear matriz estadisticas
$estadisticas = array (
    
    array ("EQUIPO", "GOLES A FAVOR POR PARTIDO", "GOLES EN CONTRA POR PARTIDO", "TARJETAS AMARILLAS POR PARTIDO", "TARJETAS AMARILLAS POR FALTA"),
    
);


//Rellenado de matriz estadísticas

for ($fila = 1; $fila < $cuentaArrays; $fila++ ){ 
    for ($columna=0; $columna<5; $columna++){    
        if ($columna == 0){
            $estadisticas[$fila][$columna] = $datos[$fila][$columna];
        }
        elseif ($columna == 1){
            $goles = $datos[$fila][$columna];
            $partidos= $datos[$fila][5];
            
            $res=$goles / $partidos;
            $estadisticas[$fila][$columna] = round ($res,2);
        }
        elseif ($columna == 2){
            $goles = $datos[$fila][$columna];
            $partidos= $datos[$fila][5];
            
            $res=$goles / $partidos;
            $estadisticas[$fila][$columna] = round ($res,2);
        }
        elseif ($columna == 3){
            $$fila = $datos[$fila][$columna];
            $partidos= $datos[$fila][5];
            
            $res=$$fila / $partidos;
            $estadisticas[$fila][$columna] = round ($res,2);
        }
        elseif ($columna == 4){
            $$fila = $datos[$fila][3];
            $faltas= $datos[$fila][4];
            
            $res=$$fila / $faltas;
            $estadisticas[$fila][$columna] = round ($res,2);
        }
    }
}


//Visualizar matriz estadisticas

echo "<h3>Visualización matriz estadísticas</h3>";

echo "<table border=1>";
for ($fila = 0; $fila < $cuentaArrays; $fila++ ){
    echo "<tr>";
    for ($columna=0; $columna<5; $columna++){  
        echo "<td>";
        echo $estadisticas[$fila][$columna];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

//Insertar matdades

//Conexión a base de datos

////Esquema conexión base de datos
    $server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="equipos";
            
    $link=mysqli_connect($server, $user, $pass, $db);
    
    $contador = 0;
if ($link) {


    for ($fila = 1; $fila < $cuentaArrays; $fila++) {
        ////Consulta para saber las columnas
        $sql = "DESC datosDB"; //cambiar a la tabla que se quiera
        mysqli_query($link, $sql);
        $columnas = mysqli_affected_rows($link);


        $sentencia = "INSERT INTO datosDB VALUES (";



        for ($columna = 0; $columna < $columnas; $columna++) {

            if ($columna != $columnas - 1) {
                $sentencia .= "'" . $datos[$fila][$columna] . "',";
            } else {
                $sentencia .= "'" . $datos[$fila][$columna] . "')";
            }
        }
        if (mysqli_query($link, $sentencia)) {
            $contador++;
        } else {
            echo "Error (" . mysqli_errno($link) . ") " . mysqli_error($link);
        }
    }
} else {
    echo "Error (" . mysqli_errno($link) . ") " . mysqli_error($link);
}

echo "Valores introducidos = $contador";

mysqli_close($link);

