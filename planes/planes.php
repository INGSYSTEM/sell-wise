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
        <a href="planes/planes.php">Planes <i class="fa-solid fa-angle-down"></i></a>
        <ul class="submenu">
          <li><a href="plan_free.php">Free</a></li>
          <li><a href="plan_premium.php">Premium</a></li>
          <li><a href="plan_premium_plus.php">Premium +</a></li>
        </ul>
      </li>
      <li>
        <a href="inicio_sesion/login.php"><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión</a>
      </li>
    </ul>
    </div>
  </header>

  <h1 class="titulo">Planes</h1>
  <div class="planes">
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/gratis.png" alt="">
      </div>
      <p>Plan Free</p>
      <ul>
        <li></li>
      </ul>
      <div class="boton-compra">
        <button>Comprar Ahora</button>
      </div>
    </div>
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/premium.png" alt="">
      </div>
      <p>Plan Premium</p>
      <ul>
        <li></li>
      </ul>
      <div class="boton-compra">
        <button>Comprar Ahora</button>
      </div>
    </div>
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/plus.png" alt="">
      </div>
      <p>Plan Premium Plus</p>
      <ul>
        <li></li>
      </ul>
      <div class="boton-compra">
        <button>Comprar Ahora</button>
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
        <button>¡Prueba Gratis!</button>
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