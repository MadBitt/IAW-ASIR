<html>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style> 
    <body>
        <h2><b>Vectores Asociativos</b></h2>
        <h3><b>Visualizamos con una tabla</b></h3>
        <p>Recorremos el vector creado</p>
        <p>Construimos una tabla con sus elementos</p>
        <table>
         
            <tr>
                <th><b>Apellido</b></th>
                <th><b>Nombre</b></th>
            </tr>
            
            <?php
            $nomsC=array(
            "ape0" => "nom0",
            "ape1" => "nom1",
            "ape2" => "nom2",
            "ape3" => "nom3",
            "ape4" => "nom4",
       );

            $nomsC ["ape5"]="nom5";
            $nomsC ["ape6"]="nom6";
            $nomsC ["ape7"]="nom7";
            $nomsC ["ape8"]="nom8";
            $nomsC ["ape9"]="nom9";
            
            foreach ($nomsC as $key=>$value){
    
            echo "<tr><td>$key</td><td>$value</td></tr>";
}           ?>
        </table>
    </body>
</html>

