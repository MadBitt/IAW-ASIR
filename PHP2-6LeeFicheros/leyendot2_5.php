<?php

$text="./mensajes2_5_1.txt";
if (file_exists($text)){
    readfile($text);
}
else{
    echo "El fichero no existe";
}

