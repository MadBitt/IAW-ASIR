<?php

function fvisualizaTablaEntrada ($array){
    ?>
<html>
    <head>
        <style>
            table, td, th {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                <?php
                for ($a=0; $a<1;$a++){
                    for ($i=0; $i<11; $i++){
                        echo "<td>" .$array[$a][$i] ."</td>";
                    }
                }
                ?>
                </tr>
            </thead>
            <tbody>
                
                <?php
                for ($a=1; $a<count($array);$a++){
                    echo "<tr>";
                    for ($i=0; $i<11; $i++){
                        
                        echo "<td>" .$array[$a][$i] ."</td>";
                    }
                
                echo "</tr>";        
                }
                ?>  
            </tbody>
        </table>
    </body>
</html>
<?php
}

function fvisualizaTablaSalida ($array){
    $suma=0;

//creación cabecera array salida    
$alumnos1=array(
    array ("ALUMNO", "MEDIA 1", "MEDIA 2", "MEDIA CICLO", "NOTA MAX alumno", "NOTA MIN alumno", "Num Asig APROBADAS", "Num Asig SUSPENSAS"),
    array ("Ruben"),
    array ("Héctor"),
    array ("Paloma"),
    array ("Victor"),
    array ("Javier"),
    array ("Aarón")
);   
    //media1
    for ($a=1; $a<count($array); $a++){
        
        for ($i=1;$i<6;$i++){  
        $suma=$suma+$array[$a][$i];
        }
        
        $media1=$suma/5;
        $alumnos1 [$a][1]= $media1;
        $suma=0;
    }

 //media2
    $suma=0;
    
    for ($a=1; $a<count($array); $a++){
        
        for ($i=6;$i<11;$i++){  
        $suma=$suma+$array[$a][$i];
        $alumnos1 [$a][$i]= $array [$a][$i];
        
        }
        $media2=$suma/5;
        $alumnos1 [$a][2]= $media2;
        $suma=0;
    }



//mediaciclo
$suma=0;

    for ($a=1; $a<count($array); $a++){
        
        for ($i=1;$i<11;$i++){  
        $suma=$suma+$array[$a][$i];
        
        
        }
        $mediaTot=$suma/10;
        $alumnos1 [$a][3]= $mediaTot;
        $suma=0;
    }


//Num Aprobadas
$contApr=0;
     for ($a=1; $a<count($array); $a++){
        
        for ($i=1;$i<11;$i++){  
            if ($array[$a][$i] >= 5){
                $contApr++;
            }    
        }
        $alumnos1 [$a][6]=$contApr;
        $contApr =0;
     }       
    
//Num Suspendidas
$contSus=0;
     for ($a=1; $a<count($array); $a++){
        
        for ($i=1;$i<11;$i++){  
            if ($array[$a][$i] < 5){
                $contSus++;
            }    
        }
        $alumnos1 [$a][7]=$contSus;
        $contSus =0;
     }
 
//Nota MAX


for ($a=1; $a<count($array); $a++){    
    for ($i=1;$i<11;$i++){  
    usort($array[$a], "strcmp");
    $x=$array[$a][9];
    }  
    $alumnos1[$a][4]=$x;
    $x=0;
}
     
//Nota MIN
for ($a=1; $a<count($array); $a++){    
    for ($i=1;$i<11;$i++){  
    usort($array[$a], "strcmp");
    $x=$array[$a][0];
    }  
    $alumnos1[$a][5]=$x;
    $x=0;
}     
     
    ?>
<html>
    <head>
        <style>
            table, td {
                border: 1px solid black
            }
        </style>
       
    </head>
    <body>
        <table>
            <tr>
               <?php
                for ($a=0; $a<1;$a++){
                    for ($i=0; $i<8; $i++){
                        echo "<td>" .$alumnos1[$a][$i] ."</td>";
                    }
                }
                ?> 
            </tr>
            <tbody>
                <tr>
                <?php
               for ($a=1; $a<count($alumnos1);$a++){
                    echo "<tr>";
                    for ($i=0; $i<8; $i++){
                        
                        echo "<td>" .$alumnos1[$a][$i] ."</td>";
                    }
               }
                ?>
                </tr>
            </tbody>
        </table>
    </body>
        
</html>

<?php

}

function fgeneraArrayMaximaPorAlumno($array){
    $prueba=array(
        array ("ALUMNO", "NOTA", "ASIGNATURA"),
        array("Ruben"),
        array("Héctor"),
        array("Paloma"),
        array("victor"),
        array("Javier"),
        array("Aaron"),
        
    );
   
    //Nota
    for ($a=0; $a<count($array); $a++){    
        $x=0;
        $y=" ";
        for ($i=1;$i<2;$i++){ 
            
            if ($array[$a][$i]>$x){
                $x=$array[$a][$i];
                //$y=$[]
            }
            else{
                $x=$x;
            }
        }  
          
           $prueba [$a-1][1]= $x;
           $prue [$a-1][2]=$y;
    
    }
    
    //Asignatura
    
    
  
    //Texto
    for ($a=0; $a<6;$a++){
        for ($i=0; $i<1; $i++){
            $for1="MAXIMA de" .$prueba[$a][$i];
        }
        
    
        for ($i=1; $i<2; $i++){
            $for2="es " .$prueba[$a][$i];
        }
        echo $for1;
        echo $for2;
    }
   
    
}








