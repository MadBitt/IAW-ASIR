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
                <th>Números pares</th>    
            </tr>       
                <?php
                 
                $cont = 0;
                $fin= 200;
                do
                    {
                    echo "<tr>";
                    echo "<td>";
                    echo $cont;
                    echo "<br>";
                    echo "</td>";
                    echo "</tr>";
                    $cont = $cont + 2;
                    }while($cont <= $fin)
                    
                    
                
            ?>   
                  
        </tr>   
    </table> 
</body>
</html>