<html>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>
                    <h3>Listado de<br> Numeros</h3>
                </th>
                <th>
                    <h3>Suma<br>Acumulada </h3>
                </th>
            </tr>
            <?php
            
            //Variables
            $ini=1;
            $fin=500;
            $suma=0;
            
            //bucle
            while ($ini <= $fin){
                echo "<tr>";
                echo"<td>";
                echo $ini;
                
                echo "</td>";
                echo "<td>"; 
                echo $suma;
                echo "</td>";
                echo "</tr>";
                $suma=$suma+$ini;
                $ini++;
            }
            ?>
        </table>
    </body>
</html>

