<html>
    <body>
        <ul>
            <?php
            $cadena = array("Pepito", "Juanito", "Andresito", "Felipito", "Gerardito");
            $var = end($cadena);
            while ($var) {
                echo "<li>$var</li>";
                $var = prev($cadena);
            }
            ?>
        </ul>
    </body>
</html>