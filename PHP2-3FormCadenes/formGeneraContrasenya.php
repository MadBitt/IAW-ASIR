<html>
    <head>
        <title>Generador de contraseña</title>
    </head>
    <body>
        <table>
            <form name="GeneraContrasenya" action="GeneraContrasenya.php" method="POST">

                <tr><td>Long. de Básicos</td> <td><input type="text" name="LongBasicos" value="" size="20" /></td></tr>
                <tr><td>Long. de Especiales</td> <td><input type="text" name="LongEspeciales" value="" size="20" /></td></tr>
        </table>
        <p/>
                <input type="radio" name="option" value="BasicosEspe" checked="checked" />
                Carácteres Básicos - Carácteres Especiales <br/>
                <input type="radio" name="option" value="EspeBasicos" />
                Carácteres Especiales - Carácteres básicos <br/>
                <input type="submit" value="Enviar consulta" name="BotEnv" />

            </form>
       
    </body>
        
</html>




