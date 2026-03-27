<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - Agradece en Compañía</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <header>
        <h1>Agradece en Compañía</h1>
        <hr />
    </header>

    <main>
        <h2>Registrate</h2>
        <form method="post" action="./insertarUsuario.php">
            <label for="equipo">Equipo</label>
            <input type="text" name="equipo" id="equipo" placeholder="Introduce tu equipo" required />
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" required />
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" placeholder="Introduce tu nombre de usuario" required />
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Introduce tu contraseña" required />
            <label for="jesuita">Jesuita</label>
            <input type="text" name="jesuita" id="jesuita" placeholder="Introduce tu Jesuita" required />
            <label for="informacion">informacion</label>
            <textarea name="informacion" id="informacion" placeholder="Introduce la informacion" required></textarea>
            <button type="submit">Registrarme</button>
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