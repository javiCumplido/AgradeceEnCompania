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

  for ($i = 0; $fila = $resultado->fetch_array() and $i < 2; $i++)
  {

    echo '<option value="' . $fila["idAlumno"] . '"' . '>' . $fila["nombre"] . '</option>';
  }

  $conexion->close();

}



function saludar()
{

  echo "Hola";

}

