<?php
function listarVectorTabla($array) {
    echo "<html>
            <style>
                table, th, td {
                border: 1px solid black;
                }
            </style>
        <body>
    
        <table>
            <tr>
                <th><b>Elemento</b></th>
                <th><b>Valor</b></th>
            </tr>";

    foreach ($array as $posicion => $valor) {

        echo "<tr><td>$posicion</td><td>$valor</td></tr>";   
    }
    echo "</body>";
    echo "</table>";
}

function listarVectorNoOrdenada ($array) {
   
            $numEle=count($array);
            
            for ($i=0; $i < $numEle; $i++){
                    
                    echo "<li>$array[$i]</li>";
                    
            }
}
