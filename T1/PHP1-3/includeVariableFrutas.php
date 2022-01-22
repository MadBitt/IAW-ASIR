<http>
    <style>
        table, td, th {
            border: 1px solid black;
        }
    </style>
    <body>
        <table>
            <tr>
                <th><b>Variable</b></th>
                <th><b>Valor</b></th>
            </tr>
            <?php
            include ('./varsFrutas.php');   
            echo "<tr><td>Fruta</td><td> $fruta</td></tr>"; 
            echo "<tr><td>Tamaño</td><td> $tamaño</td></tr>"; 
            echo "<tr><td>Color</td><td>$color</td></tr>"; 
            echo "<tr><td>Posición</td><td>$posicion</td></tr>"; 
            ?>
        </table>
    </body>
</http>




