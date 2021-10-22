<html>
    <style>
        table, td, th {
            border: 1px solid black
        }
    </style>  
    <body>
        <table>
            <tr><th colspan="20">Datos Personales Alumnos</th></tr>
            <?php
            include ('./datPersonalesAlumnos.php');
            
            echo "<tr><td>Nombre</td>";
            echo "<td>$nom_1</td></tr>";
            echo "<tr><td>Apellidos</td>";
            echo "<td>$ape_1</td></tr>";
            echo "<tr><td>Edad</td>";
            echo "<td>$edad_1</td></tr>";
            echo "<tr><td>Tlf Móvil</td>";
            echo "<td>$TlfMovil_1</td></tr>";
            echo "<td colspan='20' align='center'>========</td>";
            
            echo "<tr><td>Nombre</td>";
            echo "<td>$nom_2</td></tr>";
            echo "<tr><td>Apellidos</td>";
            echo "<td>$ape_2</td></tr>";
            echo "<tr><td>Edad</td>";
            echo "<td>$edad_2</td></tr>";
            echo "<tr><td>Tlf Móvil</td>";
            echo "<td>$TlfMovil_2</td></tr>";
            echo "<td colspan='20' align='center'>========</td>";
        
            ?>
        </table>
    </body>
        
</html>

