<?php
$host = "localhost";
$db_name = "refugio_aves_reyes_cielo";
$user = "root";
$password = "root";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>