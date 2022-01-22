<?php

for ($hora=0; $hora <24; $hora++) {
    if ($hora == 1){ //Mensaje en singular
        echo "Fracciones de la $hora: <br>";
    }   
    else { //Mensaje en plural
        echo "Fracciones de las $hora: <br>";    
    }
       for ($min=0; $min <=55; $min= $min +5){
            printf("%02d:%02d<br>", $hora, $min);
            
        }               
}

?>
    
