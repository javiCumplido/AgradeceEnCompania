<?php

include 'operacionesBD.php';

session_start();

$idReceptor = $_POST["equipo"];
$mensaje = $_POST["mensaje"];

$conexion = conectar();

$sql = "INSERT INTO agradecimientos (idEmisor, idReceptor, mensaje) VALUES (" . "'" . $_SESSION["idSesion"] . "', '" . $idReceptor . "', '" . $mensaje . "')";

$resultado = $conexion->query($sql);

if ($resultado) {
  header("Location: ./ver_agradecimientos.php");
} else {
  if ($conexion->errno == 1062) echo "Has duplicado";
  else "Error: " . $conexion->error;
}
