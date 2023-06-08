<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/global_dasboard.css">
  <!-- CDN fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>SellWise</title>
</head>
<body>
  <div class="principal">
    <div class="panel">
      <div class="logo">
        <img src="../img/logo_sellwise.png" alt="">
      </div>
      <ul>
        <li><a href="#"><i class="fa-solid fa-house-laptop"></i> Panel de control</a></li>
        <li><a href="#"><i class="fa-solid fa-file-invoice"></i> Informe</a></li>
        <li><a href="#"><i class="fa-solid fa-file-invoice-dollar"></i> Facturas</a></li>
        <li><a href="#"><i class="fa-solid fa-truck-field"></i> Facturas provedor</a></li>
      </ul>
    </div>
    <div class="contenido-dashboard">
      <div class="menu">
        <ul>
          <li><a href="#"><i class="fa-solid fa-bell efecto-campana"></i></a></li>
          <li><a href="#"><i class="fa-solid fa-gear engrange-efecto"></i></a></li>
          <li>
            <a href="#"><i class="fa-solid fa-circle-user"></i></a>
            <ul class="submenu">
              <li><a href="#">configuraciones</a></li>
              <li><a href="#">Acerca de</a></li>
              <li><a href="#">Terminos y condiciones</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="contenedor-dashboard">
        <div class="etiqueta">
          <p>Actividad de ventas</p>
        </div>
        <div class="panel-ventas">
          <div class="columna-1">
            <div class="grup-1">
              <div class="cuadrito-ventas">
                <p>Por empaquetar</p>
              </div>
              <div class="cuadrito-ventas">
                <p>Por enviar</p>
              </div>
            </div>
            <div class="grup-2">
              <div class="cuadrito-ventas">
                <p>Por entregar</p>
              </div>
              <div class="cuadrito-ventas">
                <p>Por factuarar</p>
              </div>
            </div>
          </div>
          <div class="columna-2">
            <h1>Resumen de inventario</h1>
            <div class="cuadrito-inventario">
              <p>Cantidad Disponible</p>
            </div>
            <div class="cuadrito-inventario">
              <p>Cantidad por recibir</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>