<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8" />

  <title>Agradecimiento</title>
  <link rel="stylesheet" href="./style.css" />

</head>



<body>
  <header>
    <h1>Agradece en Compañia</h1>
    <hr />
  </header>
  <nav>
    <a href="./agradecimiento.php">Agradecer</a>
    <a href="./ver_agradecimientos.php">Recibir</a>
    <a href="./cerrarSesion.php">Cerrar Sesión</a>
  </nav>
  <main>
    <form method="post" action="./insertarAgradecimiento.php">
      <label for="nombre">Para:</label>
      <select name="equipo" id="nombre" required>
        <button>
          <selectedcontent></selectedcontent>
        </button>
        <?php
        include './operacionesBD.php';
        recogerUsuarios();
        ?>
      </select>
      <label for="mensaje">Quiero agradecerte:</label>
      <textarea name="mensaje" id="mensaje" placeholder="Quiero agradecerte..." required></textarea>
      <button type="submit">Enviar</button>
    </form>
  </main>
  <footer>
    <hr />
    <div>
      <img src="./img/imagenFooter.png" alt="Imagen Footer">
    </div>
    <hr />
  </footer>



</body>



</html>