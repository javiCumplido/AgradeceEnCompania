<?php
session_start();
$_SESSION["activo"] = 0;
session_destroy();
header("Location: ../disenio/index.php");
