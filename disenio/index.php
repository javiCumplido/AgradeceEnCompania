<?php
session_start();
if (isset($_SESSION["activo"])) {
    // if (session_status() == 2) {
    header("Location: ./agradecimiento.php");
    exit(0);
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - Agradece en Compañía</title>
    <link rel="stylesheet" type="text/css" href="../estilos/style.css">
</head>

<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr />
    </header>

    <main>
        <form method="post" action="../programacion/inicioSesion.php">
            <h2>Inicia sesión</h2>
            <label for="nombre">Correo electrónico</label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre de usuario">
            <label for="contrasenia">Contraseña</label>
            <input type="password" id="contrasenia" name="contrasenia" placeholder="Introduce tu contraseña">
            <button type="submit">Entrar</button>
        </form>
    </main>

    <footer>
        <hr />
        <div>
            <img src="../img/imagenFooter.png" alt="Logo">
        </div>
        <hr />
    </footer>
</body>

</html>