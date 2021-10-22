<?php

function mediaValores(){
    
    $numArgs= func_num_args();
    echo "<b>Función Media Aritmética</b><br>";
    echo "Número de argumentos utilizados: $numArgs<br><br>";
    echo "Valor de los argumentos utilizados:";
    echo "<br>===================<br>";
    
        $arg_list = func_get_args();
        {
            $suma=0;
            for ($i = 0; $i < $numArgs; $i++)
            {
                echo "Parámetro $i ==> valor: " .$arg_list[$i] ."<br>";
                $suma+=$arg_list[$i];
            }
    $media=$suma/$numArgs;
    echo "<h3>La media de dichos argumentos es: " .number_format($media,2) ."</h3>";
}
}
echo "<b>Estamos en el Programa Principal</b><br>";
echo "El valor de los parámetros lo establecemos desde él.<br>";
echo "Hacemos la llamada a la función...<br><br>";

echo mediaValores(10,20,30,40);

echo "Ahora estoy de vuelta en el ppal";