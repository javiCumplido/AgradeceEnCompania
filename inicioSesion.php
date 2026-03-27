<?php

include "operacionesBD.php";


$usuario = $_POST["usuario"];
$password = $_POST["password"];

$conexion = conectar();

$sql = "SELECT equipo FROM alumnos WHERE usuario ='" . $usuario . "' AND password = '" . $password . "'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
  session_start();
  $fila = $resultado->fetch_array();
  $_SESSION["idSesion"] = $fila["equipo"];
  header("Location: ./agradecimiento.php");
} else {
  header("Location: ./registrar.php");
}
