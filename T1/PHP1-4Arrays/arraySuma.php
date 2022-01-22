<?php

$nums=range(10,50, 10);
$numEle=count($nums);
$suma=0;
echo "Los elementos de la array son:<br>";

            
    for ($i=0; $i < $numEle; $i++){
                    
        echo "$nums[$i]<br>";
        $suma=$suma+$nums[$i];
                    
        }
echo "<br><b>SUMA= $suma</b>";
