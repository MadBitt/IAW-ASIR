<?php


echo "versión con shell_exec <br>";
echo "FECHA<br>";

$date= shell_exec ('date /t');
$separado= explode("/", $date);


$time= shell_exec ('time /t');
echo $time .$date;





