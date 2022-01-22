<html>
    <body>
        <ul>
            <?php
            $cadena = array("Pepito", "Juanito", "Andresito", "Felipito", "Gerardito");
            $var = reset($cadena);
            while ($var) {
                echo "<li>$var</li>";
                $var = next($cadena);
            }
            ?>
        </ul>
    </body>
</html>



