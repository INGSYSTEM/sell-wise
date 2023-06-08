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

  <h1 class="titulo-planes">Planes</h1>
  <div class="planes">
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/gratis.png" alt="">
      </div>
      <p>Plan Free</p>
      <ul>
        <li>
        <strong>Acceso básico:</strong> Los usuarios gratuitos pueden acceder a funciones básicas de la aplicación que les permiten gestionar su inventario de manera limitada. Esto puede incluir el seguimiento de productos, registros de entradas y salidas, y algunas funcionalidades esenciales.
        </li>
        <li>
          <strong>Bajo costo:</strong> Al ser gratuito, los usuarios pueden utilizar la aplicación sin incurrir en ningún costo adicional, lo que puede ser atractivo para aquellos que tienen presupuestos limitados.
        </li>
        <li>
          <strong>Evaluación inicial:</strong> El nivel gratuito permite a los usuarios probar la aplicación y evaluar su utilidad y eficacia antes de considerar una actualización a niveles premium.
        </li>
      </ul>
      <div class="boton-compra">
        <button onclick="redireccionarFree()">Comprar Ahora</button>
      </div>
    </div>
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/premium.png" alt="">
      </div>
      <p>Plan Premium</p>
      <ul>
        <li>
          <strong>Funcionalidades avanzadas:</strong> Los usuarios premium tienen acceso a características adicionales y avanzadas de la aplicación. Esto puede incluir herramientas de análisis de datos, integraciones con otros sistemas empresariales, seguimiento de múltiples ubicaciones de inventario, notificaciones personalizadas, informes detallados, entre otras funcionalidades mejoradas.
        </li>
        <li>
          <strong>Soporte prioritario:</strong> Los usuarios premium generalmente reciben un soporte prioritario, lo que significa que sus consultas y problemas se manejan de manera más rápida y eficiente en comparación con los usuarios gratuitos.
        </li>
        <li>
          <strong>Actualizaciones regulares:</strong> Los usuarios premium suelen recibir actualizaciones periódicas de la aplicación, lo que les permite aprovechar las últimas mejoras y nuevas características que se agregan al sistema.
        </li>
      </ul>
      <div class="boton-compra">
        <button onclick="redireccionarPremium()">Comprar Ahora</button>
      </div>
    </div>
    <div class="cuadrados-planes">
      <div class="plan-logo">
        <img src="../img/plus.png" alt="">
      </div>
      <p>Plan Premium Plus</p>
      <ul>
        <li>
          <strong>Características exclusivas:</strong> Los usuarios premium plus disfrutan de todas las características y funcionalidades premium, y también tienen acceso a características exclusivas adicionales. Estas características pueden incluir personalizaciones avanzadas, informes más detallados, asesoramiento personalizado de expertos en gestión de inventario, servicios adicionales como capacitación o consultoría, entre otros.
        </li>
        <li>
          <strong>Integración y escalabilidad:</strong> Los usuarios premium plus pueden beneficiarse de integraciones más avanzadas con otros sistemas empresariales, como software de contabilidad, sistemas de gestión de relaciones con clientes (CRM) u otros sistemas relacionados. También pueden contar con opciones de escalabilidad para adaptarse al crecimiento y las necesidades cambiantes de la empresa.
        </li>
        <li>
          <strong>Servicio personalizado:</strong> Los usuarios premium plus generalmente reciben un servicio personalizado y adaptado a sus necesidades específicas. Esto puede incluir asistencia personalizada, consultas individuales, asesoramiento estratégico y otros servicios de valor agregado.
        </li>
      </ul>
      <div class="boton-compra">
        <button onclick="redireccionarPremiumPlus()">Comprar Ahora</button>
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