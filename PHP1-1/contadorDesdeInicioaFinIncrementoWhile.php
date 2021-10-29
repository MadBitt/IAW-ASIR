<html>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width:30%
        }
        th{
            text-align: left;
        }
    </style>    
    <body>
        <table>
            <tr>
                <th>
                    <?php
                    $x=3; //variable de incremento
                    echo "Incremento el valor en $x"
                    ?>
                </th>
            </tr>
                    <?php
                    
                    //Variables
                    
                    $ini=32;
                    $fin=315;
                    
                    //bucle
                    while ($ini <= $fin)
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo $ini;
                        $ini= $ini + $x;
                        echo "</td>";
                        echo "</tr>";
                    }
                    
                    ?>
        </table>
    </body> 
        
</html>