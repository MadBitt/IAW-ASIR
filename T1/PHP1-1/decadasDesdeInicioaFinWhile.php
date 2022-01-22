<html>
    <style>
        table, td, th{
            border:1px solid black;
            border-collapse: collapse;
            width:25%
        }    
        th{
            text-align:left    
        }
    </style>
    <body>
        <table>
            <tr>
                <th>Décadas desde 1900 hasta 2000</th>    
            </tr>       
            <?php
            //Variables 
            $cont = 1900;
            $fin = 2020;

            //bucle a ejecutar
            while ($cont <= $fin) 
            {
                echo "<tr>";
                echo "<td>";
                echo $cont;
                echo "<br>";
                echo "</td>";
                echo "</tr>";
                $cont = $cont + 10;
            }
            ?>   

        </tr>   
    </table> 
</body>
</html>
