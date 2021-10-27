<?php

$fin=100;
$ini=1;
$sum=0;
$num=$ini;


while ($num <= $fin){
    
    if ($num%10==0){
        echo $num . "<br>";
    }
    else{
        echo $num ."-";
    }
    $sum = $num+$sum;
    $num++;
    
   
}

echo "La suma es de los números <br>";
echo "entre 1 y 100 es: " ."<b>" .$sum ."</b>";