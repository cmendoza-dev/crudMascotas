<?php 
/*
Credenciales para la conexión DB
================================
*/
$contraseña = "";
$usuario = "";
$nombreBaseDeDatos = "";
# Pude ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "";
$puerto = "";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos, $usuario, $contraseña");
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}  catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: ". $e->getMessage();
}