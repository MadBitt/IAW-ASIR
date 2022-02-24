<?php

//Definición de matriz matdades

$matdades = array (
    
    array ("DATA", "PRECIPITACIO", "TªMIN", "TªMAX", "VEL VENT", "HORES SOL"),
    array ("1/2/22", 0, 4.2, 17.3, 1.4, 8.8),
    array ("2/2/22", 0, 4.8, 16.9, 1.9, 8.7),
    array ("3/2/22", 25, 5.9, 20.3, 2.2, 7.3),
    array ("4/2/22", 26, 7.5, 22.0, 43.0, 9.4),
    array ("5/2/22", 10, 6.8, 23.3, 44.0, 8.8),
    array ("6/2/22", 30, -7.0, 23.8, 50.0, 9.2),
    array ("7/2/22", 0, -5.0, 20.4, 0.3, 8.7),
    array ("8/2/22", 0, -8.0, 18.6, 0.8, 8.5),
    array ("9/2/22", 0, 4.5, 20.8, 1.1, 8.4),
    array ("10/2/22", 0, 7.3, 21.2, 2.8, 9.1),
    array ("11/2/22", 0, 4.2, 16.9, 1.4, 7.8),
    array ("12/2/22", 2.4, 6.0, 18.4, 1.4, 7.0),
    array ("13/2/22", 3.8, 8.4, 14.6, 5.3, 5.2),
    array ("14/2/22", 0, 3.0, 15.2, 1.1, 6.4),
    array ("15/2/22", 0, 3.0, 16.0, 1.7, 8.9)
 
);


$filas=count($matdades);

//Visualización de matriz matdates
echo "<h3>Visualizació taula matdades</h3>";

echo "<table border=1>";
for ($a=0;$a<$filas;$a++){
    echo "<tr>";
    for ($i=0;$i<6;$i++){
        echo "<td>";
        echo $matdades[$a][$i];
        echo "</td>";
    }
    echo "</tr>";
    
}
echo "</table>";


//Definición de array matresult

$matresult=array (
    
    array ("DATA", "INTER TERMIC", "RISC VENT", "RISC PLUJA", "RISC TERMIC")
    
);

//Calcul columnes de matresult
for ($a=1;$a<$filas;$a++){    
    for ($i=0;$i<5;$i++){
        if ($i==0){    
            $matresult[$a][$i]=$matdades[$a][$i];
        }
        elseif ($i==1){
            $Tmin=$matdades[$a][2];
            $Tmax=$matdades[$a][3];
            $Inter=$Tmax - $Tmin;
            $matresult[$a][$i]=$Inter;
        }
        elseif ($i==2){
            $cant=$matdades[$a][4];
            if ($cant > 40.0){
                $matresult[$a][$i]= "RISC";
            }
            else{
                $matresult[$a][$i]= "NO";
            }
        }
        elseif ($i==3){
            $cant=$matdades[$a][1];
            if ($cant > 20.0){
                $matresult[$a][$i]= "RISC";
            }
            else{
                $matresult[$a][$i]= "NO";
            }
        }
        elseif ($i==4){
            $cant=$matresult[$a][1];
            if ($cant > 25.0){
                $matresult[$a][$i]= "RISC";
            }
            else{
                $matresult[$a][$i]= "NO";
            }
        }
    }
}

//Visualizació matriz matresult
echo "<h3>Visualizació taula matdades</h3>";

echo "<table border=1>";
for ($a=0;$a<$filas;$a++){
    echo "<tr>";
    for ($i=0;$i<5;$i++){
        echo "<td>";
        echo $matresult[$a][$i];
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
    $db="meteodb";
            
    $link=mysqli_connect($server, $user, $pass, $db);
    
    if ($link){
        if ($link){
            
        $filas=count($matdades);  
        for ($a=0; $a<$filas;$a++){
        ////Consulta para saber las columnas
        $sql="DESC meteodata"; //cambiar a la tabla que se quiera
        mysqli_query($link, $sql);
        $columnas= mysqli_affected_rows($link); 
        
        $sentencia="INSERT INTO meteodata VALUES (";
        
            
            for ($i=0; $i<$columnas;$i++){
                               
                        if ($i!=$columnas-1){
                            $sentencia.="'" .$matdades[$a][$i] ."',";
                            
                        }
                        else{
                            $sentencia.="'" .$matdades[$a][$i] ."')";
                            
                        }  
                    }
                   mysqli_query($link, $sentencia);
                   
                }         
            }
            else {
                echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
            }
    }
    else {
         echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
    }
    
    mysqli_close($link);
    
//Insertar matresult

//Conexión a base de datos

////Esquema conexión base de datos
    $server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="meteodb";
            
    $link=mysqli_connect($server, $user, $pass, $db);
    
    if ($link){
        if ($link){
            
        $filas=count($matdades);  
        for ($a=0; $a<$filas;$a++){
        ////Consulta para saber las columnas
        $sql="DESC meteoresult"; //cambiar a la tabla que se quiera
        mysqli_query($link, $sql);
        $columnas= mysqli_affected_rows($link); 
        
        $sentencia="INSERT INTO meteoresult VALUES (";
        
            
            for ($i=0; $i<$columnas;$i++){
                               
                        if ($i!=$columnas-1){
                            $sentencia.="'" .$matresult[$a][$i] ."',";
                            
                        }
                        else{
                            $sentencia.="'" .$matresult[$a][$i] ."')";
                            
                        }  
                    }
                   mysqli_query($link, $sentencia);
                   
                }         
            }
            else {
                echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
            }
    }
    else {
         echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
    }
    
    mysqli_close($link);