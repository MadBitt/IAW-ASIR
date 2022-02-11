<!DOCTYPE html>

<html>
    <head>
        <title>General</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, th {
                border: 1px solid black;   
            }
            .center{
                text-align: center;
            }
        </style>   
    </head>
    <body>
        <?php
        //Datos de conexión mysql
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="gest_asignaturasdb";
        
        $conn= mysqli_connect($server, $user, $pass, $db);
        $familia="SELECT nomFamilia FROM famprofesional";
        $ciclo="SELECT nomCiclo FROM ciclo";
        $modulo="SELECT nomModulo FROM modulo";
        
        //Comprobación de conexión
        if ($conn){
            echo "Conexión exitosa a bd: <b>$db</b><br/>";
        }
        
        //Creación de tabla formulario
        ?>
        
        <form name="cipf" method="post" action="Gest_AsignaturasSinFunciones.php">
            <table>
                <tr>
                    <th>Familia profesional</th>
                    <th>Grado</th>
                    <th>Ciclo</th>
                    <th>Módulo</th>
                </tr>
                <tr>
                    <td>Seleccione Familia profesional <br/>
                        
                        <select name="familia">
                          
                            <?php
                           
                                if ($select=mysqli_query($conn, $familia)){
                                    while ($row= mysqli_fetch_assoc($select)){

                                    echo "<option value='" .$row['nomFamilia'] ."'>" .$row['nomFamilia'] ."</option>"; 
                                    }
                                }  
                            ?>
                        </select>
                    </td>
                    <td>Seleccione nivel<br/>
                        <select name="nivel">
                            <option value="MEDIO">MEDIO</option>
                            <option value="SUPERIOR">SUPERIOR</option>
                        </select>
                    </td>
                     <td>Seleccione Ciclo<br/>
                        
                        <select name="ciclo">
                          
                            <?php
                           
                                if ($select=mysqli_query($conn, $ciclo)){
                                    while ($row= mysqli_fetch_assoc($select)){

                                    echo "<option value='" .$row['nomCiclo'] ."'>" .$row['nomCiclo'] ."</option>"; 
                                    }
                                }  
                            ?>
                        </select>
                    </td>
                    <td>Seleccione Módulo<br/>
                        
                        <select name="modulo">
                          
                            <?php
                           
                                if ($select=mysqli_query($conn, $modulo)){
                                    while ($row= mysqli_fetch_assoc($select)){

                                    echo "<option value='" .$row['nomModulo'] ."'>" .$row['nomModulo'] ."</option>"; 
                                    }
                                }  
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="center">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
            <?php
                mysqli_close($conn);
            ?>
        </form>
       
    </body>
</html>





