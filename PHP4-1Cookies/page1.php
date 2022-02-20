<?php

session_start();

//Hola Mundo
$_SESSION['sess_var']="Hola Mundo!";

//Ppal

echo "El contenido de \$_SESSION['sess_var'] es " .$_SESSION['sess_var'];

echo "<p>Veamos como se mantiene su valor al enlazar con la siguiente página....</p>";

echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page2 ....<p/>";

?>

<a href="page2.php">Siguiente página</a>

