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
    <form>
      <h2>Ingresar</h2>
      <div class="inputBox">
        <input type="text" required = "required">
        <span>Usuario</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" required = "required">
        <span>Contraseña</span>
        <i></i>
      </div>
      <div class="link">
        <a href="#">¿Olvidaste tu contraseña?</a>
      </div>
      <input type="submit" value="Ingresar">
    </form>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>