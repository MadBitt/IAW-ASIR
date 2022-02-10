<!DOCTYPE html>

<html>
    <head>
        <title>Borrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <b>Borrar un registro</b><p/>
        <form name="borrar" action="borrar.php" method="post">
            <select name="registro">
                <?php
                //Datos de conexión mysql
                $server="localhost";
                $user="alumno";
                $pass="alumno";
                $db="bd1_iaw";
                $conn= mysqli_connect($server, $user, $pass, $db);

                $sql="SELECT * FROM clientes_iaw";
        
                if ($select=mysqli_query($conn, $sql)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo "<option value='" .$row['nombre'] ."'>" .$row['nombre'] ."</option>"; 
                    }
                
                }
                echo "</select><p/>";
                ?>
                <input type="submit" value="borrar" name="butt">
        
        <?php
        
        //Recogida variables self
        @$registro=$_REQUEST['registro'];
        @$butt=$_REQUEST['butt'];
        
        
        //Si butt está enviado procedemos a borrar
        if (isset($butt)){
            $borrar="DELETE FROM clientes_iaw WHERE nombre='$registro'";
            if (mysqli_query($conn, $borrar)){
                echo "Registro borrado con éxito";
            }
            //Si hay un error:
            else{
                echo "Error: (" .mysqli_errno($conn) .") " .mysqli_error($conn);
            }
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

