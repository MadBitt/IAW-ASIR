<html>
    <head>
    </head>
    <body>
        <table>
            <form name="insertar" method="post" action="insertar.php">
                <tr><td>Nombre:</td><td><input name="nombre"></td></tr>
                <tr><td>Apellido:</td><td><input name="apellido"></td></tr>
                <tr><td colspan="2"><input type="submit" name="insert" value="Insertar"></td></tr>   
            </form>    
        </table>    
    </body>
</html>


<?php

//Recogida de variables del formulario
if (!isset($_POST['insert']))//Controlamos que el formulario se haya enviado
{

}
else
{
    if (empty($_POST['nombre']) || empty($_POST['apellido'])) //Para controlar que ambos campos tengan algo
    {
        echo "Debes rellenar ambos campos para insertar<p/>";   
    }
    elseif (!empty($_POST['nombre']) && !empty($_POST['apellido'])) 
    {
        //Si ambos campos se han enviado asigno variables para trabajar con ellas
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
    }
}

//Conexión con Base de datos
$server="localhost";
$user="alumno";
$pass="alumno";
$db="notasasir";

$link= mysqli_connect($server, $user, $pass, $db);

if (!$link)
{
    echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata
}
else {
    @$sentencia="INSERT INTO alumno (nombre, apellido) VALUES ('$nombre','$apellido'";
    //echo $sentencia;
    if (mysqli_query($link, $sentencia))//Controlamos que la query se ejecute correctamente
    {
        echo "Valor introducido con éxito<p/>";
    }
//    else
//    {
//        echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata
//    }
}




echo "<a href='index.html'>Volver a inicio</a>";

