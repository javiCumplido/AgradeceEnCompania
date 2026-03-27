<?php

include 'operacionesBD.php';

session_start();
$conexion = conectar();
$sql = "SELECT idAgradecimiento, idEmisor FROM agradecimientos WHERE idReceptor ='" . $_SESSION["idSesion"] . "'";
$resultado1 = $conexion->query($sql);
while ($fila1 = $resultado1->fetch_array()) {
  $agradecimiento = $fila1["idAgradecimiento"];
  $sql = "SELECT nombreJesuita, infoJesuita, web FROM alumnos WHERE equipo = '" . $fila1["idEmisor"] . "'";
  $fila2 = $conexion->query($sql)->fetch_array();
  echo '<section>' . "<h3>" . $fila2["nombreJesuita"] . "</h3>" . "<p>" . $fila2["infoJesuita"] . "</p>" . '<a href="' . './miAgradecimiento.php?id=' . $agradecimiento .  '">IR</a>' . "</section>";
}
