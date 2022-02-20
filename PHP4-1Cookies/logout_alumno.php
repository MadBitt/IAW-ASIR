<?php

session_start();
$olduser=$_SESSION['valid_user'];
unest($_SESSION['valid_user']);
session_destroy();

echo "<h1>Desconexión</h1>";