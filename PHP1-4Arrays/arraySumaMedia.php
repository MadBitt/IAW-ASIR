<html>
    <style>
        table, th, td {
            border: 1px solid black;
            width: 15%;
        }
        
        th, td {
            text-align: center;
        }
    </style>
    <body>
        <table>
            <tr>
                <th><b>Posición</b></th>
                <th><b>Valor</b></th>
            </tr>
            <?php
            $rango=range(100,500,100);
            $numEle=count($rango);
            $suma=0;
            
            
            for ($i=0; $i<$numEle; $i++){
                
                echo "<tr>";
                echo "<td>$i</td>";
                echo"<td>$rango[$i]</td>";
                echo "</tr>";
                
                $suma=$suma+$rango[$i];
            }
                $media=$suma/$numEle;
            
                echo "<tr>";
                echo "<td><b>SUMA</b></td>";
                echo"<td><b>$suma</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><b>MEDIA</b></td>";
                echo"<td><b>$media</b></td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>