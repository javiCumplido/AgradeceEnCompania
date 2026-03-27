<?php

include 'constantes.php';


function conectar()
{
  $conexion = new mysqli(SERVER, USER, PASSWORD, BD1);

  $conexion->set_charset("utf8");

  $controlador = new mysqli_driver();
  $controlador->report_mode = MYSQLI_REPORT_OFF;

  return $conexion;
}



function recogerUsuarios()
{
  $conexion = conectar();

  session_start();

  //  TENIA COMPROBADO QUE NO MUESTRE A UN USUARIO QUE YA HAS MANDADO PERO COMO DA PROBLEMA MEJOR LO HE QUITADO

  // $sql = "SELECT idUsuarioReceptor FROM Agradecimiento WHERE idUsuarioEmisor='" . $_SESSION["idSesion"] . "'";
  // $resultado = $conexion->query($sql);
  // while ($fila = $resultado->fetch_array()){
  // $sql = "SELECT NIA, nombre FROM Usuario WHERE NIA <> '" . $fila["idUsuarioReceptor"] . "' AND NIA <> '" . $_SESSION["idSesion"] . "'";
  // $resultado2 = $conexion->query($sql);
  // while ($fila2 = $resultado2->fetch_array()){
  //   echo "<option value=\"" . $fila2["NIA"] . "\">" . $fila2["nombre"] . "</option>";
  $sql = "SELECT equipo, nombre FROM alumnos WHERE equipo <> '" . $_SESSION["idSesion"] . "'";
  $resultado2 = $conexion->query($sql);
  while ($fila2 = $resultado2->fetch_array())
    echo "<option value=\"" . $fila2["equipo"] . "\">" . $fila2["nombre"] . "</option>";
  // }

  $conexion->close();
}
