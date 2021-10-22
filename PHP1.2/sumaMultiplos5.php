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
                    <b>Listado de Múltiplos</b>
                </th>
            </tr>
            <?php
            
            //variables
            $num=5;
            $ini=1;
            $fin=15;
            $suma=0;
            
            
            //Bucle
            while ($ini <=$fin){
                
                //Variables bucle
                $elevado= $num ** $ini;
                $suma= $suma+$elevado;
                
                echo "<tr>";
                echo "<td>";
                echo $elevado;
                echo "</td>";
                echo "</tr>"; 
                
                $ini++;
            }
            ?>
            <tr>
                <td>
                    <?php
                    echo "<b>Suma: $suma</b>";
                    ?>
                </td>
            </tr>
            
        </table>
        
    </body>
</html>
