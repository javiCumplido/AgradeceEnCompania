<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8"/>

  <title>Agradecimiento</title>
  <link rel="stylesheet" type="text/css" href="../estilos/style.css"/>

</head>



<body>
  <header>
    <h1>Agradece en Compañia</h1>
    <hr/>
  </header>
  <nav>
    <a href="">Agradecer</a>
    <a href="">Recibir</a>
    <a href="">Cerrar Sesión</a></nav>
  <main>
    <form action="">
      <label for="">Para:</label>
      <select name="" id="">
        <?php
          include '../programacion/operacionesBD.php';
          recogerUsuarios();
        ?>   
      </select>
      <label for="">Quiero agradecerte:</label>
      <textarea name="" id="" placeholder="Quiero agradecerte..."></textarea>
    </form>
  </main>
  <footer>
    <hr/>
    <div>
      <img src="..img/ImagenFooter.png" alt="Imagen Footer">
    </div>
    <hr/>
  </footer>

  

</body>



</html>