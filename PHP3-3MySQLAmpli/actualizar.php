<!DOCTYPE html>

<html>
    <head>
        <title>Actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>
    <body>
        
        <b>Actualiza la fila cuyo ID se indique en la tabla Clientes_iaw</b><p/>
        
        <form name="actualizar" method="post" action="actualizar.php">
            <table>
                <tr><td>Identificador</td></tr>
                <tr><td><input type="text" name="id"></td></tr>
                <tr><td>Nombre cliente</td></tr>
                <tr><td><input type="text" name="name"></td></tr>
                <tr><td>Teléfono</td></tr>
                <tr><td><input type="text" name="tlf"></td></tr>
                <tr><td><input type="submit" value="actualizar" name="act"> </td></tr>
            </table>
        </form>
       
        <?php
        //Recogida variables formulario
        @$id=$_POST['id'];
        @$name=$_POST['name'];
        @$tlf=$_POST['tlf'];
        @$act=$_POST['act'];

        //Datos de conexión mysql
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="bd1_iaw";

        if (isset ($act)){
            //Conexión y consulta
            $conn= mysqli_connect($server, $user, $pass, $db);
            $sql="UPDATE clientes_iaw "
            ."SET nombre='$name', telefono='$tlf' "
            ."WHERE id=$id";
            
            if (mysqli_query($conn, $sql)){       
                
                    printf("Filas modificadas= %d", mysqli_affected_rows($conn));
                
            }
            else{
                echo "Error (" .mysqli_errno($conn) .") " .mysqli_error($conn);
            }
        mysqli_close($conn);
            
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




