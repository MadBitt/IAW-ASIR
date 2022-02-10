<!DOCTYPE html>

<html>
    <head>
        <title>Leer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, th {
                border: 1px solid black;
                border-collapse:collapse
            }
        </style>
    </head>
    <body>
        
        <b>Lectura de tabla</b><p/>
       
        <?php

        //Datos de conexión mysql
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="bd1_iaw";
        $conn= mysqli_connect($server, $user, $pass, $db);

        $sql="SELECT * FROM clientes_iaw";
        
        if ($select=mysqli_query($conn, $sql)){
        
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>nombre</th>";
        echo "<th>teléfono</th>";
        echo "</tr>";
        
            
            while ($rows= mysqli_fetch_assoc($select)){
                echo "<tr>";
                echo "<td>" .$rows ['id'] ."</td>";
                echo "<td>" .$rows['nombre'] ."</td>";
                echo "<td>" .$rows['telefono'] ."</td>";
                echo "</tr>";

            }
        echo "</table>";
        }
        
        echo "</p>";
        
        echo "<table border=1>";
        echo "<tr>";
        echo "<td><a href='Formu_DML.html'>Volver al formulario</td>";
        echo "</tr>";
        echo "</table>";

        
        ?>
    </body>
</html>

