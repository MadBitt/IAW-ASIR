<html>
    <style>
        table, th, tr {
            border: 1px solid black;
            border-collapse: collapse;
            width: 30%;
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
                    $y=14; //Variable de incremento
                    
                    echo "Incremento el valor en $y";
                    ?>
                </th>
            </tr>
                    <?php
                    //Inicialización de variables
                    $ini=41;
                    $fin=245;
                    
                    //bucle
                    for ($ini; $ini <=$fin; $ini=$ini+$y)
                        {
                        echo "<tr>";
                        echo "<td>";
                        echo $ini;
                        echo "</td>";
                        echo "</tr>";
                        }
                    ?>
        </table>
            
            
    </body> 
        
        
</html>