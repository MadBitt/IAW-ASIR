<?php

session_start();

echo "Intentamos acceder al contenido de la variable \$_SESSION:...<p/>";

echo "El contenido de \$_SESSION['sess_var'] es: " .$_SESSION['sess_var'];

echo "<p>Ahora aplicamos unset(\$SESSION['sess_var'])<br/>";
echo "por lo que se pierde el valor de la variable ...<p/>";
unset($_SESSION['sess_var']);

echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page3...<p/>";
?>

<a href="page3.php">Siguiente página</a>

