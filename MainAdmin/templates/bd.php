<?php

$database = "restaurante";
$usuario = "root";
$contrasena = "Alejandro15.";
$servidor = "localhost";


try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error){
    echo $error->getMessage();
}

?>