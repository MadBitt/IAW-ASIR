<?php

for ($hora=0; $hora <24; $hora++){
    for ($min=0; $min < 55; $min = $min+15){
        printf("%02d:%02d<br>", $hora, $min);
    }
}

?>