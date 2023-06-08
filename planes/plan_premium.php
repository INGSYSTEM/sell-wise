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
        <img src="../img/premium.png" alt="">
      </div>
      <div class="formulario">
        <form action="#" method="post">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="tarjeta">Número de Tarjeta:</label>
          <input type="text" id="tarjeta" name="tarjeta" required>
          
          <label for="vencimiento">Fecha de Vencimiento:</label>
          <div class="contenedor-fecha">
            <select id="mes" name="mes" required>
              <option value="">Mes</option>
              <option value="01">Enero</option>
              <option value="02">Febrero</option>
              <option value="03">Marzo</option>
              <option value="04">Abril</option>
              <option value="05">Mayo</option>
              <option value="06">Junio</option>
              <option value="07">Julio</option>
              <option value="08">Agosto</option>
              <option value="09">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
              <!-- Agrega más opciones para los meses restantes -->
            </select>

            <span><i class="fa-solid fa-slash"></i></span>

            <select id="anio" name="anio" required>
              <option value="">Año</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
              <option value="2031">2031</option>
              <option value="2032">2032</option>
              <option value="2033">2033</option>
              <!-- Agrega más opciones para los años futuros -->
            </select>
          </div>
          
          <label for="cvv">CVV (3 caracteres):</label>
          <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" title="Debe tener 3 dígitos" required>
          
          <input type="submit" value="Pagar">
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