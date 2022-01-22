<html>
    <head>
        <?php $num=$_GET['numero'];?>
        <title>Tabla de multiplicar del <?php echo $num;?></title>
        <style>
            table, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
            echo "<b>VER LA TABLA DEL $num</b><p/>";
            for ($i=0; $i<11; $i++){
            echo "<tr><td>$num X $i</td><td>" .$num*$i ."</td></tr>";
            }
            ?>
        </table>
    </body>
</html>




