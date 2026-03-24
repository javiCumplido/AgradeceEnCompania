<?php

include 'constantes.php';



function conectar()
{

  $conexion = new mysqli(SERVER, USER, PASSWORD, BD1);

  $conexion->set_charset("utf8");

  return $conexion;
}



function recogerUsuarios()
{

  $conexion = conectar();

  $sql = 'SELECT idAlumno, nombre FROM Usuario';

  $resultado = $conexion->query($sql);

  while ($fila = $resultado->fetch_array()) {

    echo '<option value="' . $fila["idAlumno"] . '"' . '>' . $fila["nombre"] . '</option>';
  }

  $conexion->close();
}
