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
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=1">Ver la tabla del 1</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=2">Ver la tabla del 2</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=3">Ver la tabla del 3</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=4">Ver la tabla del 4</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=5">Ver la tabla del 5</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=6">Ver la tabla del 6</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=7">Ver la tabla del 7</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=8">Ver la tabla del 8</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=9">Ver la tabla del 9</a></td></tr>
            <tr><td><a href="Ejer_multiplicarSelf.php?numero=10">Ver la tabla del 10</td></tr></a>    
            </tbody>
        </table>
    </body>
</html>