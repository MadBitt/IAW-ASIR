
<html>
    <head>
        <title>Ejer_self2</title>
    </head>
    <body>
        <?php
        if (isset($_GET['Enviar'])){
            if (!empty($_GET['Nom']) && !empty($_GET['Empresa'])&& !empty($_GET['Tlf'])){
                $nom=$_GET['Nom'];
                $emp=$_GET['Empresa'];
                $tlf=$_GET['Tlf'];
            
                echo "Su nombre es <b>$nom</b>, trabaja en <b>$emp</b> y su teléfono es <b>$tlf</b>";
                exit();    
            }
        }
        ?>
    
        <form name="Reentrante" action="Ejer_self2.php">
            Nombre: <input type="text" name="Nom" value="" size="20" /><br/>
            Empresa: <input type="text" name="Empresa" value="" size="20" /><br/>
            Teléfono: <input type="text" name="Tlf" value="+34" size="10" /><br/>
            <input type="submit" value="Enviar" name="Enviar" />
        </form>
        
        
        
    </body>
</html>






