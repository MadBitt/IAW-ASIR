<html>
    <head>
        <title>Exec 1</title>
        <meta charset="UTF-8">
    </head>
</html>

<?php

//Ruta
$ruta='D:\\PROJECTS_PHP_IAW\\IAW-ASIR\\PHP1-7Funcions';
chdir($ruta);


////Versió exec

//
//echo "<b>Versión mediante exec</b><br/>";
//echo "<pre>";
//
//exec ('dir',$result);
//
//foreach ($result as $line){
//    echo $line. "<br/>";
//}
//echo "</pre>";

////Versió system

//
//echo "<b>Versión mediante system</b><br/>";
//
//echo '<pre>';
//$result= system('dir');

//Versió apòstrofs invertits

echo "<b>Versión mediante apòstrofs</b><br/>";
echo "<pre>";

$result=`dir`;
echo $result;

echo "</pre>";

