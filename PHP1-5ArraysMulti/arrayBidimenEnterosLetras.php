<?php

$nums [0][0]= 0;
$nums [0][1]= 1;
$nums [0][2]= 2;
$nums [1][0]= 3;
$nums [1][1]= 4;
$nums [1][2]= 5;
$nums [2][0]= 6;
$nums [2][1]= 7;
$nums [2][2]= 8;


$letras = array (
    
        array ('a', 'b', 'c'),
        array ('d', 'e', 'f')
);

echo "Visualizamos con FOR anidado las filas y las columnas de la MATRIZ<br>";
for ($i=0; $i<3;$i++){
    
    for ($n=0; $n<3;$n++){
        
        echo $nums[$i][$n] ."<br>";
    }
}

echo "<br>Visualizamos con WHILE<br>";
$i=0;
$l=0;
while ($i < 2){
    
    while ($l < 3){
        
        echo $letras[$i][$l] ."<br>";
        $l++;
        
    }
    $l=0;
    $i++;
    
}    
