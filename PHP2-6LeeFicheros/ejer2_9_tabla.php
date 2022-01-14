<?php
//Ubicación de txt y fecha con getdate()
$file="ejer2_9_tabla.txt";

$fecha=getdate();
$hoy=$fecha["mday"] ."/" .$fecha["mon"] ."/" .$fecha["year"];

//Texto plano
echo "Contenido del fichero $file hasta la fecha de hoy ($hoy)<p/>";
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Ampliación tabla</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Fecha Compra</th>
                    <th>Usuario</th>
                    <th>Dirección</th>
                    <th>Frenos</th>
                    <th>Aceite</th>
                    <th>Ruedas</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //Manipulación de txt

               $fp=fopen($file, "r");
               $word="";
                while (!feof($fp)){
                    
                    $char=fgetc($fp);
                    $word=$word .$char;
                    if ($char == "\t"){
                        echo "<td>";
                        echo $word;
                        echo "</td>";
                        $word="";
                    }
                    elseif ($char == "\n"){
                        echo "<td>";
                        echo $word;
                        echo "</td>";
                        echo "</tr>";
                        $word="";
                    }
                   
                    }
                        echo "<td>";
                        echo $word;
                        echo "</td>";
                        echo "</tr>";
                fclose($fp);
                ?> 
            </tbody>
        </table>
        
    </body>
</html>




