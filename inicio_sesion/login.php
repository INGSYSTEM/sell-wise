<?php
session_start();

// Establecer conexión con la base de datos SQLite
$db = new SQLite3('../db/base_de_datos.db');

// Verificar si se ha enviado el formulario
if (isset($_POST['login'])) {
  // Obtener los valores ingresados por el usuario
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Realizar la validación en la base de datos
  // Aquí debes implementar tu lógica de validación utilizando consultas SQL

  // Ejemplo de consulta SQL para validar los datos ingresados
  $query = "SELECT * FROM Usuarios WHERE user = '$username' AND password = '$password'";
  $result = $db->query($query);

  // Verificar si la consulta retorna algún resultado
  if ($result->fetchArray()) {
    // La validación es exitosa, establecer variable de sesión
    $_SESSION['isLoggedIn'] = true;

    // Redirigir al usuario al dashboard u otra página protegida
    header('Location: dashboard.php');
    exit();
  } else {
    // La validación ha fallado, mostrar un mensaje de error o realizar alguna acción adicional
    $error = 'Nombre de usuario o contraseña incorrectos.';
  }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilos_login.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <!-- CDN fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>SellWise</title>
</head>
<body>
  <a href="#" class="btn_regreso" onclick="goBack()"><i class="fa-solid fa-right-from-bracket regresar"></i></a>
  <div class="box">
    <span class="borderLine"></span>
    <form action="login.php" method="POST">
      <h2>Ingresar</h2>
      <div class="inputBox">
        <input type="text" name="username" required>
        <span>Usuario</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" name="password" required>
        <span>Contraseña</span>
        <i></i>
      </div>
      <div class="link">
        <a href="#">¿Olvidaste tu contraseña?</a>
      </div>
      <input type="submit" name="login" value="Ingresar">
    </form>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>