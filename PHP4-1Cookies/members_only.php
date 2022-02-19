<?php

session_start();
echo "<h1>Únicamente socios </h1>";

if (isset($_SESSION['valid_user'])){
    echo "<p>Estás conectado como " .$_SESSION['valid_user'] ."</p>";
    echo "<p>Aquí iría el contenido de Socios Privados</p>";
}
else {
    echo "No estás conectado<p/>";
    echo "Solo los socios pueden ver esta página";
}

echo "<a href='login_alumno.php'>Volver a página principal</a>";