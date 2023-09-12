<?php
/* mostrar els errors de la plana */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* llegim llistat de cotxes */
$pdo = new PDO('mysql:host=localhost;dbname=concesionario;charset=utf8', 'root', '');

?>