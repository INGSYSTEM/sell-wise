<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!-- CDN fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>SellWise</title>
</head>
<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="img/logo_sellwise.png" alt="SellWise"></a>
    </div>
    <div class="menu">
    <ul class="menu">
      <li>
        <a href="planes/planes.php" class="no-link" id="mobile-link">Planes <i class="fa-solid fa-angle-down arriba-abajo"></i></a>
        <ul class="submenu">
          <li><a href="planes/plan_free.php">Free</a></li>
          <li><a href="planes/plan_premium.php">Premium</a></li>
          <li><a href="planes/plan_premium_plus.php">Premium +</a></li>
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
        <a href="inicio_sesion/login.php"><i class="fa-solid fa-right-to-bracket"></i> Iniciar Sesión</a>
      </li>
    </ul>
    </div>
  </header>
  <div class="contenido-principal">
    <img src="img/estrella.png" alt="" class="estrella">
    <div class="contenedor-1">
      <img src="img/logo_sellwise.png" alt="SellWise">
      <p class="textos-frases">Optimiza y gestiona tus operaciones comerciales</p>
      <button onclick="redireccionarPlanes()">Comienza Ahora</button>
    </div>
    <img src="img/aro.png" alt="" class="aro">
  </div>
  <div class="contenedor-2">
    <div class="contenedor-cuadrito-img">
      <div class="cuadrito">
        <p>¡Bienvenido a SellWise!</p>
        <br>
        <p>Nuestra plataforma integral te ofrece una amplia gama de herramientas para automatizar tus procedimientos comerciales y gestionar eficientemente tu inventario. </p>
      </div>
    </div>
    <div class="imagen-facurar">
      <img src="img/facturar.png" alt="">
    </div>
  </div>
  <div class="contenedor-3">
    <div class="flamita">
      <img src="img/flamita.png" alt="">
    </div>
    <div class="beneficios">
      <h1 class="titulo">Beneficios</h1>
      <div class="contenedor-cuadritos-beneficio">
        <div class="cuadrito-benficio">
          <p class="titulo-benficio">Vigila tus productos</p>
          <br>
          <p>Desde el momento que ingresan a tu inventario hasta cuando se venden.</p>
        </div>
        <div class="cuadrito-benficio-alterno">
          <p class="titulo-benficio">Sigue tus ventas</p>
          <br>
          <p>Puedes realizar el seguimiento de tus ventas y aumentar la rentabilidad.</p>
        </div>
        <div class="cuadrito-benficio">
          <p class="titulo-benficio">Simplifica la Administración de tus proveedores y pedidos</p>
          <br>
          <p>Puede realizar un seguimiento de ellos, recibir alertas cuando sus suministros se están agotando y realizar pedidos rápidamente.</p>
        </div>
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
      <img src="img/cuadrado.png" alt="">
    </div>
  </footer>
  <script src="js/main.js"></script>
</body>
</html>