<?php

include 'operacionesBD.php';

$equipo = $_POST["equipo"];
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$jesuita = $_POST["jesuita"];
$informacion = $_POST["informacion"];
$web = "web" . $equipo;

$conexion = conectar();

$sql = "INSERT INTO alumnos (equipo, nombre, usuario, password, nombreJesuita, infoJesuita, web) VALUES ('$equipo','$nombre', '$usuario', '$password', '$jesuita', '$informacion', '$web')";
$conexion->query($sql);

if ($conexion->errno == 0) header("Location: ./inicioSesion.html"); // codigo de error de consulta 0 es que la consulta es successfull
else echo "Ha ocurrido un error fatal : " . $conexion->error;
