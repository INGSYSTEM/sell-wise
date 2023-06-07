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
            <a href="#">
              <input type="file" id="uploadInput" style="display: none;">
              <i class="fa-solid fa-circle-user" onclick="selectImage()"></i>
            </a>
          </li>
        </ul>
      </div>

      <div id="imagePreview"></div>

      <script>
        function selectImage() {
          document.getElementById('uploadInput').click();
        }

        document.getElementById('uploadInput').addEventListener('change', function(event) {
          var file = event.target.files[0];

          var reader = new FileReader();
          reader.onload = function(e) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
          };
          reader.readAsDataURL(file);
        });
      </script>
      <div class="contenedor-dashboard">
        <div class="etiqueta">
          <p>Activaidad de ventas</p>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>