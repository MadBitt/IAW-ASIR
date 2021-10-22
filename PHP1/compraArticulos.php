<?php

//Inicialización de constantes
    define("PrecioFrenos", 100);
    define("PrecioAceite", 10);
    define("PrecioRuedas", 4);


//Inicialización de variables
    $numFrenos = 0;
    $numAceite = 2;
    $numRuedas = 3;
    
//Operaciones matematicas 
    $totFrenos = $numFrenos * PrecioFrenos;
    $totAceite = $numAceite * PrecioAceite;
    $totRuedas = $numRuedas * PrecioRuedas;
    $total = $totFrenos + $totAceite + $totRuedas;
    $nele= $numFrenos + $numAceite + $numRuedas;

    
//Print generico
    echo "Suponiendo que hemos comprado las siguientes unidades: " . "<br>" .
            "<br>";
    echo "numFrenos = $numFrenos" . "<br>";
    echo "numAceite = $numAceite" . "<br>";
    echo "numRuedas = $numRuedas " . "<br>";
    echo "<br>" . "<br>";
    echo "<b>PRECIOS DE LOS ARTÍCULOS</b>" ."<br>" ."<br>";

    echo "PRECIOFRENOS= " .PrecioFrenos ."<br>";
    echo "PRECIOACEITE= " .PrecioAceite ."<br>";
    echo "PRECIORUEDAS= " .PrecioRuedas ."<br>" ."<br>";
    
    
//Salidas posibles sin comprar todos los articulos
 if ($numFrenos ==0 || $numAceite == 0 || $numRuedas ==0){

    if ($numFrenos == 0 && $numAceite >= 1 && $numRuedas >= 1){
        echo "No comprado: frenos";
    }
    if ($numFrenos >=1 && $numAceite == 0 && $numRuedas >= 1){
        echo "No comprado: aceite";
    }
    if ($numFrenos >=1 && $numAceite >= 1 && $numRuedas == 0){
    echo "No comprado: ruedas";
    }
    if ($numFrenos == 0 && $numAceite ==0 && $numRuedas >=1){
        echo "No comprados: frenos, aceite";
    }
    if ($numFrenos == 0 && $numAceite >=1 && $numRuedas ==0){
        echo "No comprados: frenos, ruedas";
    }
    if ($numFrenos >= 1 && $numAceite ==0 && $numRuedas ==0){
        echo "No comprados: aceite, ruedas";
    }
    if ($numFrenos == 0 && $numAceite ==0 && $numRuedas ==0){
        echo "No comprados: frenos, aceite, ruedas";
    }
    echo "<br> <br>";    
    echo "<h3><b>La petición ha de contener todos los tipos de artículo!!</b></h3>";
}

//Salida comprando todos los articulos
else{
 
    echo "<b>Número de elementos solicitados:</b>"
    ."<b>" .$nele ."</b><br>";
    
    echo "<b>Subtotal:</b>"
    ."<b>$total euros</b><br>";
    
    $conIva = ($total*0.21) + $total;
    
    echo "<b>Total con el IVA:</b>"
    ."<b>$conIva euros</b>";
}

?>