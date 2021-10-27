<html>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 25%;
        }
        
    </style>
    <body>
        <table>
            <?php
            
            //Variables
            $a=50;
            $b=5;
            $ini=1;
            $suma=0;
            
                if ($a > 0 && $b >0 && $a<$b){
                    echo "<b>VALORES INTRODUCIDOS</b><br>";
                    echo "<b>A= $a</b><br>";
                    echo "<b>B= $b</b><br><br>";
                    echo "<tr>";
                    echo "<th>Listados de <br> Múltiplos</th>";
                    echo "<th>Suma<br> Acumulada</th>";
                    echo "</tr>";


                    while (($a*$ini)<=$b){

                        $x=$a*$ini;
                        echo "<tr>";
                        echo "<td>";
                        echo "$x<br>";
                        $suma=$suma+$x;
                        echo "</td>";
                        echo "<td>";
                        echo $suma;
                        echo "</td>";
                        echo "</tr>";
                        $n=$ini;
                        $ini++;
                    }
                    echo "<tr>";
                    echo "<td colspan=20>";                      
                    echo "<b>Múltiplos Generados: $n</b>";                        
                    echo"</td>";
                    echo "</tr>";   
                }   
                elseif ($a>0 && $b>0 && $a>$b){

                    echo "A= $a<br>";
                    echo "B= $b<br>";
                    echo "<br>Hay que intercambiar A y B, pues no se cumple que"
                         ." A sea mayor que B<br>";
                    echo "<br>NUEVOS VALORES<br>";
                    echo "A= $b<br>";
                    echo "B= $a";
                    echo "<tr>";
                    echo "<th>Listados de <br> Múltiplos</th>";
                    echo "<th>Suma<br> Acumulada</th>";
                    echo "</tr>";


                    while (($b*$ini)<=$a){

                        $x=$b*$ini;
                        echo "<tr>";
                        echo "<td>";
                        echo "$x<br>";
                        $suma=$suma+$x;
                        echo "</td>";
                        echo "<td>";
                        echo $suma;
                        echo "</td>";
                        echo "</tr>";
                        $n=$ini;
                        $ini++;
                    }
                    echo "<tr>";
                    echo "<td colspan=20>";                      
                    echo "<b>Múltiplos Generados: $n</b>";                        
                    echo"</td>";
                    echo "</tr>";      
                }
                elseif ($a<0 && $b <0){

                    echo "<b>No podemos usar números negativos</b><br><br>";
                    echo "<br><b>Has puesto A y B negativos</b><br>";
                    echo "<b>VALORES INTRODUCIDOS</b><br>";
                    echo "<b>A= $a</b><br>";
                    echo "<b>B= $b</b><br><br>";   
                }        
                elseif ($a<0 && $b>0){
                    echo "<b>No podemos usar números negativos</b><br><br>";
                    echo "<br><b>Has definido A negativo</b><br>";
                    echo "<b>VALORES INTRODUCIDOS</b><br>";
                    echo "<b>A= $a</b><br>";
                    echo "<b>B= $b</b><br><br>";  
                }   
                else{
                    echo "<b>No podemos usar números negativos</b><br><br>";
                    echo "<br><b>Has definido B negativo</b><br>";
                    echo "<b>VALORES INTRODUCIDOS</b><br>";
                    echo "<b>A= $a</b><br>";
                    echo "<b>B= $b</b><br><br>"; 
                } 
            ?>         
        </table>
    </body>
</html>