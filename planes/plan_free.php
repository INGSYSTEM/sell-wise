<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Establecer conexión con la base de datos
  $db = new SQLite3('../db/base_de_datos.db');

  // Obtener los valores ingresados por el usuario
  $nombre = $_POST['nombre'] ?? '';
  $apellido = $_POST['apellido'] ?? '';
  $usuario = $_POST['user'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validar campos obligatorios
  if (!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($password)) {
      // Valor predeterminado para la columna "servicio"
      $servicio = "Free";

      // Verificar si el usuario ya existe en la tabla
      $query_check = "SELECT COUNT(*) FROM Usuarios WHERE user = '$usuario'";
      $result_check = $db->querySingle($query_check);
      if ($result_check > 0) {
          // El usuario ya existe, mostrar advertencia emergente
          echo "<script>alert('El usuario ya existe. Por favor, elija otro usuario.');</script>";
      } else {
          // Insertar los datos en la base de datos
          $query_insert = "INSERT INTO Usuarios (user, password, nombre, apellido, servicio) VALUES ('$usuario', '$password', '$nombre', '$apellido', '$servicio')";
          $db->exec($query_insert);

          // Cerrar la conexión con la base de datos
          $db->close();

          // Redirigir al usuario a una nueva página de éxito

          header('Location: ../index.php');
          exit;
      }
  } else {
      // Mostrar alerta emergente en caso de campos vacíos
      echo "<script>alert('Error: Por favor, complete todos los campos obligatorios');</script>";
  }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/estilos_plan.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <!-- CDN fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>SellWise</title>
</head>
<body>
  <header>
    <div class="logo">
      <a href="../index.php"><img src="../img/logo_sellwise.png" alt="SellWise"></a>
    </div>
    <div class="menu">
    <ul class="menu">
    <li>
        <a href="planes.php" class="no-link" id="mobile-link">Planes <i class="fa-solid fa-angle-down"></i></a>
        <ul class="submenu">
          <li><a href="plan_free.php">Free</a></li>
          <li><a href="plan_premium.php">Premium</a></li>
          <li><a href="plan_premium_plus.php">Premium +</a></li>
        </ul>
      </li>

      <script>
        // Verificar si el dispositivo es móvil y desactivar el enlace
        if (/Mobi/.test(navigator.userAgent)) {
          var mobileLink = document.getElementById('mobile-link');
          mobileLink.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
          });
        }
      </script>
      <li>
        <a href="../inicio_sesion/login.php"><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión</a>
      </li>
    </ul>
    </div>
  </header>

  <div class="free">
    <div class="contenedor-free">
      <div class="imagen-plan">
        <img src="../img/gratis.png" alt="">
      </div>
      <div class="formulario">
      <form action="plan_free.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="user">Nombre de usuario:</label>
        <input type="text" id="user" name="user" required autocomplete="off">

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required autocomplete="off">

        <input type="submit" value="Registrarse">
      </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="primer-contenedor-footer">
      <div class="contactos">
        <h1>contactanos <i class="fa-regular fa-circle-down"></i></h1>
      </div>
      <div class="contenedor-informacion-contactos">
        <div class="contenedor-cuadrito-contactos">
          <p class="titulos-footer">Llamanos a</p>
          <br>
          <br>
          <p>+51 xxx xxx xxx</p>
        </div>
        <div class="contenedor-cuadrito-contactos">
          <p class="titulos-footer">correo</p>
          <br>
          <br>
          <p>enterprise@sellwise.com</p>
        </div>
        <div class="contenedor-cuadrito-contactos">
          <p class="titulos-footer">siguenos en</p>
          <br>
          <br>
          <div class="redes">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            &nbsp;&nbsp;
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            &nbsp;&nbsp;
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
          </div>
        </div>
        <button onclick="redireccionarGratis()">¡Prueba Gratis!</button>
      </div>
    </div>
    <div class="segundo-contenedor-footer">
      <ul>
        <li><a href="#">Soluciones</a></li>
        <li><a href="#">Recursos</a></li>
        <li><a href="#">Atención y soporte</a></li>
      </ul>
    </div>
    <div class="cuadrado">
      <img src="../img/cuadrado.png" alt="">
    </div>
  </footer>
  <script src="../js/main.js"></script>
</body>
</html>