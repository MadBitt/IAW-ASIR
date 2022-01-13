<?php

$file="./ejer2_8_0_amb_br.txt";

echo "<b>Lectura con readfile</b><p/>";

echo "Las peticiones contenidas en $file hasta la fecha 28/1/2018 son:<p/>";

readfile($file);