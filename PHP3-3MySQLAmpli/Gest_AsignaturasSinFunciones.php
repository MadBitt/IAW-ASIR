<?php
//Datos de conexión mysql
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="gest_asignaturasdb";
        
        $conn= mysqli_connect($server, $user, $pass, $db);
        
//Consultas
//cabeceras
$cabFam= "SHOW columns FROM famprofesional";
$cabCic= "SHOW columns FROM ciclo";
$cabGrado= "SHOW columns FROM grado";
$cabMod= "SHOW columns FROM modulo";

//Información
$fam="SELECT * FROM famprofesional";
$cic= "SELECT * FROM ciclo";
$grado= "SELECT * FROM grado";
$mod= "SELECT * FROM modulo";

//Familias, ciclos, modulosm Grado, cerrar
//Ejecución ppal
//Familia profesional
echo "<b>Estamos en listar familias profesionales<br/></b>";
//Cabecera
$i=0;
 if ($select=mysqli_query($conn, $cabFam)){
                    while ($row= mysqli_fetch_assoc($select)){
                        if ($i==0){
                            echo $row['Field'];
                            echo " | ";
                        }
                        else{
                             echo $row['Field'];
                        }
                        $i++;
                    }
                echo "<br/>";
                }
//datos
 if ($select=mysqli_query($conn, $fam)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo $row['codFamilia'];
                        echo " | ";
                        echo $row['nomFamilia'];
                        echo "<br/>";

                    }
 }
 echo "<p/>";

 
 //Ciclos formativos
echo "<b>Estamos en listar ciclos<br/></b>";
$i=0;
 if ($select=mysqli_query($conn, $cabCic)){
                    while ($row= mysqli_fetch_assoc($select)){
                        if ($i<3){
                            echo $row['Field'];
                            echo " | ";
                        }
                        else{
                             echo $row['Field'];
                        }
                        $i++;
                    }
                echo "<br/>";
                }
//datos
 if ($select=mysqli_query($conn, $cic)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo $row['codCiclo'];
                        echo " | ";
                        echo $row['nomCiclo'];
                        echo " | ";
                        echo $row['codFamilia'];
                        echo " | ";
                        echo $row['codGrado'];
                        
                        echo "<br/>";

                    }
 }

 echo "<p/>";
//Listar módulos
echo "<b>Estamos en listar módulos<br/></b>";
//Cabecera
$i=0;
 if ($select=mysqli_query($conn, $cabMod)){
                    while ($row= mysqli_fetch_assoc($select)){
                        if ($i<3){
                            echo $row['Field'];
                            echo " | ";
                        }
                        else{
                             echo $row['Field'];
                        }
                        $i++;
                    }
                echo "<br/>";
                }
//datos
 if ($select=mysqli_query($conn, $mod)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo $row['codModulo'];
                        echo " | ";
                        echo $row['nomModulo'];
                        echo " | ";
                        echo $row['codCiclo'];
                        echo " | ";
                        echo $row['curso'];
                        
                        echo "<br/>";

                    }
 }
echo "<p/>";
//Listar grado
echo "<b>Estamos en listar Grado<br/></b>";
//Cabecera
$i=0;
 if ($select=mysqli_query($conn, $cabCic)){
                    while ($row= mysqli_fetch_assoc($select)){
                        if ($i<3){
                            echo $row['Field'];
                            echo " | ";
                        }
                        else{
                             echo $row['Field'];
                        }
                        $i++;
                    }
                echo "<br/>";
                }
//datos
 if ($select=mysqli_query($conn, $cic)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo $row['codCiclo'];
                        echo " | ";
                        echo $row['nomCiclo'];
                        echo " | ";
                        echo $row['codFamilia'];
                        echo " | ";
                        echo $row['codGrado'];
                        
                        echo "<br/>";

                    }
 }



