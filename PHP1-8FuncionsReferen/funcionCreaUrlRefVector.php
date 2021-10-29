<?php

function funcionCreaUrlReferencia ($prot, $serv, $nombre, $tipo, $suf, $a, &$res){
    
    echo "Invocando a la función...<br><br>";
    echo "La URL completa es...<br><br>";
    $res=$prot ."://" .$serv ."." .$nombre ."." .$tipo ."." .$suf;
    
    if (in_array($suf,$a)){
          echo "<b>$res</b>";
    }
        elseif (!in_array($suf,$a)) {
            echo "$a no es un dominio válido";
        } 
    
    
    
    
}

$prot="http";
$serv="www";
$nombre="lagaceta";
$tipo="com";
$suf="ar";
$a=array ("ar","es","fr", "it", "uk");
$res=" ";

funcionCreaUrlReferencia($prot, $serv, $nombre, $tipo, $suf, $a, $res);
