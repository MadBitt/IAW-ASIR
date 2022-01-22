<html>
    <style>
        table, td {
            background-color:gainsboro;
            border: 3px solid white; 
            border-collapse: collapse
        }
        .tamaño {
            width: 200px;
        }
    </style>

<?php

$directorio=@opendir("doc/");

$entrada = readdir($directorio);

echo "<table border=>";
    echo "<thead>";
        echo "<tr>";
            echo "<td>Fichero</td>";
            echo "<td>Tamaño</td>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
while ( $entrada != false){
    
    $NComp= $entrada;
    $vector= explode(".", $NComp);
    $Nombre= $vector[0];
    $Extensio = $vector[1];
    
    $tamaño = filesize("doc/" .$entrada);
    
    if ($Extensio == "ps" || $Extensio == "pdf"){
        
        echo "<tr>";
            echo "<td>";
            echo $NComp;
            echo "</td>";
            
            echo "<td class='tamaño'>";
            echo $tamaño;
            echo "</td>";
        echo "</tr>";
 
    }
    

    $entrada = readdir($directorio);
}
echo "</tbody>";
echo "</table>";
closedir($directorio);
?>
</html>