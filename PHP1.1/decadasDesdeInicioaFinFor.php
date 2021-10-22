<html>
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse:collapse;
            width:35%    
        }   
        th{
            text-align: left;
        }
        
    </style>   
    <body>
        <table>
            <tr>
                <th>Décadas desde el 2000 al 2100</th>
            </tr>
            <?php
            //Variables
            $ini = 2000;
            $fin = 2100;

            //Bucle
            for ($ini; $ini <= $fin; $ini = $ini + 10) {
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

