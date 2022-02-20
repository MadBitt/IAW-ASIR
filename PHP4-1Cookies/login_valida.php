
<?php
session_start();

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $hostname = 'localhost';
    $username = 'alumno';
    $password = 'alumno';
    $database = 'bd1_iaw';

    $link = mysqli_connect($hostname, $username, $password, $database);

    if (!$link) {
        echo "Error";
    }
} else {
    $query = "SELECT * from usuarios WHERE user='$user' and pass='$password'";
    $result = mysqli_query($link, $query);
    $num_filas = mysqli_affected_rows($link);

    if ($num_filas > 0) {
        $_SESSION['valid_user'] = $user;
        echo 'Usuario existente <br>';
        mysqli_close($link);
    }
}
?>


<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

        <h1>Página principal</h1>
        <?php
        if (isset($_SESSION['valid_user'])) {
            echo "Estas conectado como " . $_SESSION['valid_user'] . "<br><br>";
            echo '<a href="logout_alumno.php">Salir (LOG OUT)</a><br><br>';
        } else {
            if (isset($user)) {
                echo 'No se ha podido realizar la conexión!';
            } else {
                echo 'No estas conectado<br>';
            }
        }
        ?>

        <form method="POST" action="login_valida.php">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usu"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center"><input type="submit" value="Conectar" name="sub"></td>
                </tr>
            </table>
        </form>

        <a href="members_only.php">Sección Privada (sólo socios)</a>
    </body>
</html>
