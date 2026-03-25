<?php

include 'operacionesBD.php';

$idAlumno = $_POST["idAlumno"];
$mensaje = $_POST["mensaje"];

$conexion = conectar();

$sql = "INSERT INTO Agradecimiento (idUsuarioEmisor, idUsuarioReceptor, mensaje) VALUES (" . "'" . $_SESSION["idAlumno"] . ", " . $idAlumno . ", " . $mensaje . ")";

$resultado = $conexion->query($sql);

if ($resultado) {
  header("Location: ../disenio/ver_agradecimientos.php");
} else {
  echo "Error: " . $conexion->error;
}
