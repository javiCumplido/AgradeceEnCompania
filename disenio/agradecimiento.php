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
    <form method="get" action="./ver_agradecimientos.php">
      <label for="">Para:</label>
      <select name="" id="">
        <button>
          <selectedcontent></selectedcontent>
        </button>
        <?php
        include '../programacion/operacionesBD.php';
        recogerUsuarios();
        ?>
      </select>
      <label for="">Quiero agradecerte:</label>
      <textarea name="" id="" placeholder="Quiero agradecerte..."></textarea>
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