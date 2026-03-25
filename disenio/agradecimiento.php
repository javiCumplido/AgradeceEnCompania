<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8" />

  <title>Agradecimiento</title>
  <link rel="stylesheet" href="../estilos/style.css" />

</head>



<body>
  <header>
    <h1>Agradece en Compañia</h1>
    <hr />
  </header>
  <nav>
    <a href="#">Agradecer</a>
    <a href="./ver_agradecimientos.php">Recibir</a>
    <a href="../programacion/cerrarSesion.php">Cerrar Sesión</a>
  </nav>
  <main>
    <form method="post" action="../programacion/insertarAgradecimiento.php">
      <label for="nombre">Para:</label>
      <select name="idAlumno" id="nombre" required>
        <button>
          <selectedcontent></selectedcontent>
        </button>
        <?php
        include '../programacion/operacionesBD.php';
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
      <img src="../img/imagenFooter.png" alt="Imagen Footer">
    </div>
    <hr />
  </footer>



</body>



</html>