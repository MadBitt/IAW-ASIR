<?php

function funcionCreaUrl ($prot, $serv, $nombre, $tipo, $suf, &$res){
    
    echo "Invocando a la función...<br><br>";
    echo "La URL completa es...<br><br>";
    $res=$prot ."://" .$serv ."." .$nombre ."." .$tipo ."." .$suf;
    echo "<b>$res</b>";
    
}

$prot="http";
$serv="www";
$nombre="lagaceta";
$tipo="com";
$suf="ar";
$res=" ";

funcionCreaUrl($prot, $serv, $nombre, $tipo, $suf, $res);