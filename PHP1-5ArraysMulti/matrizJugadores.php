<?php

$jugadores = array(
        array("Rooney", "Gigs", "Suarez"),
        array('Messi', 'Torres', 'Etoo'),
        array('Fabregas', 'Iniesta', 'Rami')
);

echo "<ul>";
for ($i=0; $i<3; $i++){
    
    for ($j=0; $j<3; $j++){
       
       
        echo "Fila $i-Col$j:<br>";
        echo "<li>" .$jugadores [$i][$j] ."</li>" ."<br>";
        
    }
}
echo "</ul>";


