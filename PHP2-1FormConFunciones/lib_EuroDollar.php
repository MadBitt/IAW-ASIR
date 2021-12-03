<?php

$cant=$_GET['cantidad'];
$opc=$_GET['moneda'];




    function conv_USDtoEu ($cant){
        $cambio=1.13;
        $dolar=$cant*$cambio;
        return $dolar;
    }

    function conv_EUtoUSD ($cant){
        $cambio=0.88;
        $euros=$cant*$cambio;
        return $euros;
    }

        $euros= conv_EUtoUSD($cant);
        $dolar= conv_USDtoEu($cant);

    function visualiza ($cant, $opc, $euros, $dolar){

        if ($opc == "$"){
            echo "<b>Realizamos la conversión a US Dollars</b><p/>";
            echo "Usted indicó la siguiente información<p/>";

            echo "Cantidad= $cant euros<p/>";
            echo "Resultado de la conversión = $euros US Dollars";
        }
        else{
            echo "<b>Realizamos la conversión a US Dollars</b><p/>";
            echo "Usted indicó la siguiente información<p/>";

            echo "Cantidad= $cant euros<p/>";
            echo "Resultado de la conversión = $dolar US Dollars";
        } 
    }



    function error_negativo ($cant){
    echo "<b>Opps...</b><p/>";
    echo "<b>Error: $cant es Valor negativo</b>";
    }   



    function error_vacio ($cant) {
    echo "<b>Error: No hay valor</b>"; 
    }






    
