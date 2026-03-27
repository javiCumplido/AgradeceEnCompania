<?php
session_start();
$_SESSION["idSesion"] = NULL;
session_destroy();
header("Location: ./inicioSesion.html");
