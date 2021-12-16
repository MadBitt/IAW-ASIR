<html>
    <head>
        <title>Ejer_multiplicarSelf</title>
        <style>
            table, td{
                border: 1px solid black;
            }
            .tabla_ini{
                width: 180
                
            }
            .tabla_res{
                width: 140;
                text-align: center
            }
            
        </style>
    </head>
    <body>
        <?php
        if (isset($_GET['numero'])){
            
                $num=$_GET['numero'];              
                echo "<b>Tablas de multiplicar Autollamante</b><p/>";
                ?>
                <table class="tabla_res">
                <?php
                for ($i=0; $i<11; $i++){
                    echo "<tr><td>$num x $i</td><td>" .$num*$i ."</td></tr>";
                }
                echo "</table>";
                exit();    
            
        }
        ?>
        <b>Tablas de multiplicar autollamante</b><p/>
        <table class="tabla_ini">
            <tbody>
                <?php
                for ($i=1; $i<11; $i++){
                    echo "<tr><td><a href='Ejer_multiplicarSelf.php?numero=$i'>Ver la tabla del $i</a></td></tr>";
                }
                ?>   
            </tbody>
        </table>
    </body>
</html>