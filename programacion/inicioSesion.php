i<?php

  include "operacionesBD.php";

  session_start();

  $usuario = $_POST["nombre"];
  $contrasenia = $_POST["contrasenia"];
  $_SESSION["activo"] = 1;

  $conexion = conectar();

  $sql = 'SELECT nombre, contrasenia FROM Usuario WHERE nombre =\'' . $usuario . '\' AND contrasenia = \'' . $contrasenia . '\'';

  $resultado = $conexion->query($sql);

  if ($fila = $resultado->fetch_array()) {
    header("Location: ../disenio/agradecimiento.php");
    exit();
  } else header("Location: ../disenio/registrar.php");
