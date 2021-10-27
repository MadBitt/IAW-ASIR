<html>
    <style>
        table, td, th {
            border: 1px solid black
        }
    </style>  
    <body>
        <table>
            <tr><th colspan="20">Datos Personales</th></tr>
            <?php
            include ('./datPersonales.php');
            
            echo "<tr><td>Nombre</td>";
            echo "<td>$nom</td></tr>";
            echo "<tr><td>Apellidos</td>";
            echo "<td>$apellidos</td></tr>";
            echo "<tr><td>Edad</td>";
            echo "<td>$edad</td></tr>";
            echo "<tr><td>Tlf Móvil</td>";
            echo "<td>$TlfMovil</td></tr>";
        
            ?>
        </table>
    </body>
        
</html>