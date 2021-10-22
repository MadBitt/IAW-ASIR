<html>
    <style>
        table, td, th {
            border: 1px solid black;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>
                    <h3>Listado de Números</h3>
                </th>
            </tr>
            <?php
            
            //Variables
            $ini=200;
            $fin=500;
            $suma=0;
            
            //bucle
            while ($ini <= $fin){
                echo "<tr>";
                echo "<td>";
                echo $ini ."<br>";
                $suma=$suma+$ini;
                $ini++;
                echo "</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td>
                    <?php
                    echo "<h3><b>Suma: $suma</b></h3>"
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>