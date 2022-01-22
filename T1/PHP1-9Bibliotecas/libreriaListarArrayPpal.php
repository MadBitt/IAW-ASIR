<?php

include './libreriaListarArray.php';

$nums=array(10,20,30,40);

echo "Invocamos a la función listarVectorTabla ...<p/>";
listarVectorTabla($nums);
echo "<p/>";

echo "Invocamos a la función listarVectorNoOrdenada ...<br/>";
listarVectorNoOrdenada($nums);
