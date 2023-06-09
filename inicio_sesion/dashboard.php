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
  <div class="menu-lateral">
    <div class="logo">
      <img src="../img/logo_sellwise.png" alt="Logo de la página">
    </div>
    <ul>
      <li><a href="dashboard.php">
        <i class="fa-solid fa-table-columns"></i>&nbsp;&nbsp;<span>Panel de control</span></a>
      </li>
      <li>
        <a href="#"><i class="fa-solid fa-chart-simple"></i>&nbsp;&nbsp;<span>Informe</span></a>
      </li>
      <li>
        <a href="#"><i class="fa-solid fa-newspaper"></i>&nbsp;&nbsp;<span>Facturas</span></a>
      </li>
      <li>
        <a href="#"><i class="fa-solid fa-file-invoice"></i>&nbsp;&nbsp;<span>Facturas del proveedor</span></a>
      </li>
      <li>
        <a href="#"><i class="fa-solid fa-right-from-bracket" style="transform: rotate(180deg);"></i>&nbsp;&nbsp;<span>Cerrar Sesión</span></a>
      </li>
    </ul>
  </div>
  <div class="contenedor">
    <div class="cabecera">
      <div class="menu">
        <div class="buscador">
          <input type="text" placeholder="Buscar">
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
        <div class="usuario">
          <a href="#" class="boton">
            <i class="fa-solid fa-bell"></i>&nbsp;&nbsp;
          </a>
          <a href="#" class="boton">
            <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;
          </a>
          <a href="#" class="boton">
            <i class="fa-solid fa-circle-user"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="contenido">
      <!-- Primera sección -->
      <div class="titulos">
        <h1>Actividad ventas</h1>
      </div>
      <div class="actividad-ventas">
        <div class="columna">
          <div class="tarjetas-contenido">
            <div class="tarjeta">
              <p><i class="fa-solid fa-box-open"></i> Por empequetar</p>
            </div>
            <div class="tarjeta">
              <p><i class="fa-solid fa-paper-plane"></i> Por enviar</p>
            </div>
          </div>
          <div class="tarjetas-contenido">
            <div class="tarjeta">
              <p><i class="fa-solid fa-truck-fast"></i> Por entregar</p>
            </div>
            <div class="tarjeta">
              <p><i class="fa-solid fa-file-invoice"></i> Por facturar</p>
            </div>
          </div>
        </div>
        <div class="columna">
          <h1>Resumen de inventario</h1>
          <div class="tarjeta">
            <p>Cantidad disponible</p>
          </div>
          <div class="tarjeta">
              <p>Cantidad por recibir</p>
          </div>
        </div>
      </div>
      <!-- Segunda sección -->
      <div class="detalles-articulos">
        <h1>Detalles producto y artículos vendidos</h1>
        <div class="detalles-producto">
          <div class="tabla">
            <div class="filas">
              <p><i class="fa-solid fa-arrow-down"></i> Artículos con exitencia bajas</p>
            </div>
            <div class="filas">
              <p><i class="fa-solid fa-globe"></i> Todos los articulos</p>
            </div>
            <div class="filas">
              <p><i class="fa-solid fa-hourglass-start"></i> Artículos sin confirmar</p>
            </div>
          </div>
          <div class="orden-fecha">
            <div class="titulos-columnas">
              <div class="titulo">
                <p>Orden Compras</p>
              </div>
              <div class="titulo">
                <p>Coste total</p>
              </div>
            </div>
            <div class="tarjetas-columnas">
              <div class="tarjeta">
                <p>Cantidad pedida</p>
              </div>
              <div class="tarjeta">
                <p>Coste total</p>
              </div>
            </div>
          </div>
          <div class="articulo-ventas">
            <div class="tarjeta">
                
            </div>
            <div class="tarjeta">
              
            </div>
            <div class="tarjeta">
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>