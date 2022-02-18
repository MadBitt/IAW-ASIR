<?php

//Control de formulario y variables de nombre
$desc=$_POST['desc'];
$tmp=$_FILES['subir']['tmp_name'];
$name=$_FILES['subir']['name'];
$nomFinal= "up_" .$name;

//Carpeta dsc y comandos sistema Linux
$carpetaDsc="descripciones.dsc";
$fecha= exec('date +%d/%m/%Y');
$hora= exec('date +%H:%M');

//Comandos de sistema Windows


//Rutas
$uploadDir="doc/";
$DescDir="dsc/";


//Ppal

if (empty($desc) && empty($tmp)){
    echo "Debes rellenar todos los campos";
}
elseif (empty($desc)){
    echo "Debes introducir una descripción";
    
}
elseif (empty($tmp)){
    echo "Debes escoger el fichero a subir";
}

else{
   //Ya hemos comprobado que ambos están rellenados
    if (opendir($uploadDir)){
        //doc existe, realizamos la subida
        if (move_uploaded_file($tmp, $uploadDir.$nomFinal)){
            //La subida se ha realizado
            echo "Subida realizada!.<p/>";    
            if (opendir($DescDir)){
                //dsc existe, añadimos la descripción
                echo "cc";
                echo "Añadimos descripción introducida al archivo dsc/descripciones.dsc<p/>";
                $fp=fopen($DescDir.$carpetaDsc, "a+");
                    fwrite($fp, $fecha ."\t" .$hora ."\t" .$desc ."\n");
                    
                fclose($fp); 
                echo "<b>Se ha escrito toda la información en el fichero</b>";

            }
            else {
                //dsc no existe, lo creamos
                mkdir($DescDir, 0777);
                chmod($DescDir, 0777);
                //añadimos la descripción
                echo "Añadimos descripción introducida al archivo dsc/descripciones.dsc<p/>";
                
                $fp=fopen($DescDir.$carpetaDsc, "a+");
                    fwrite($fp, $fecha ."\t" .$hora ."\t" .$desc ."\n");
                fclose($fp);           
                echo "<b>Se ha escrito toda la información en el fichero</b>";
            }     
        }    
    }
    else {
        //doc no existe
        echo "No existe el directorio doc/<br/>";
        echo "Vamos a crearlo...<p/>";
        mkdir($uploadDir, 0777);
        chmod($uploadDir, 0777);
        
        if (move_uploaded_file($tmp, $uploadDir .$nomFinal)){
            //La subida se ha realizado
            echo "Subida realizada!.<p/>";    
            if (opendir($DescDir)){
                //dsc existe, añadimos la descripción
                
                echo "Añadimos descripción introducida al archivo dsc/descripciones.dsc<p/>";
                $fp=fopen($DescDir.$carpetaDsc, "a+");
                    fwrite($fp, $fecha ."\t" .$hora ."\t" .$desc ."\n");       
                fclose($fp);
                echo "<b>Se ha escrito toda la información en el fichero</b>";
            }
            else {
                //dsc no existe, lo creamos
                mkdir($DescDir, 0777);
                chmod($DescDir, 0777);
                //añadimos la descripción
                echo "Añadimos descripción introducida al archivo dsc/descripciones.dsc<p/>";
                $fp=fopen($DescDir.$carpetaDsc, "a+");
                    fwrite($fp, $fecha ."\t" .$hora ."\t" .$desc ."\n");    
                fclose($fp);
                echo "<b>Se ha escrito toda la información en el fichero</b>";          
            }
    }
}
}