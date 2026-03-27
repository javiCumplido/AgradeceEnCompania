<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recibir - Agradece en Compañía</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr />
    </header>

    <nav>
        <a href="./agradecimiento.php">Agradecer</a>
        <a href="./ver_agradecimientos.php">Recibir</a>
        <a href="./cerrarSesion.php">Cerrar Sesión</a>
    </nav>

    <main>
        <h2>Mis Agradecimientos</h2>
        <article>
            <?php include './verMisAgradecimientos.php'; ?>
            <!-- <?php //echo $_SESSION["idSesion"] 
                    ?> Lo utilizo para comprobar que llega el valor de la sesion -->
        </article>
    </main>

    <footer>
        <hr />
        <div>
            <img src="./img/imagenFooter.png" alt="Logo">
        </div>
        <hr />
    </footer>
</body>

</html>