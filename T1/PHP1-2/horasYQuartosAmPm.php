<?php

echo "<b>HORAS AM</b>";
for ($hora=1; $hora <13; $hora++){
    echo "<br>";
    for ($min=0; $min < 55; $min = $min+15){
        printf("%02d:%02dAM<br>", $hora, $min);   
    }

}
echo "<br><b>HORAS PM</b>";
for ($hora=1; $hora <13; $hora++){
    echo "<br>";
    
    for ($min=0; $min < 55; $min = $min+15){
    printf("%02d:%02dPM<br>", $hora, $min);   

    }
}