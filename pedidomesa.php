<?php
require_once "controlsesion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MarchandoSoft - Pedido mesa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/pedidomesa.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/togglemenu.js"></script>
</head>
<body>
<div class="container">
<div class="jumbotron text-center">
  <h5>Mesa nº</h5>
  <h5>Camarero: <?php echo htmlspecialchars($_SESSION["username"])?></h5>
</div>
  <div class="row">
    <div class="col-sm-12 top">
      <table class="table-striped table-bordered text-center tablamesas" id="tablapedidos">
      <tr><th>Nombre artículo</th><th>Número unidades</th><th>PVP ud</th><th>Subtotal</th></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      <tr><td>Fake articulo</td><td>2</td><td>1,5</td><td>3,0</td></tr>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 bottom" style="background-color:gray;">
              <button type="button" class="btn btn-primary btn-sm" onclick="togglemenu('comidas')" id="comidas">Comidas</button>
              <button type="button" class="btn btn-primary btn-sm" onclick="togglemenu('bebidas')" id="bebidas">Bebidas</button>
              <button type="button" class="btn btn-primary btn-sm" onclick="togglemenu('postre')" id="postre">Postres</button>
              <button type="button" class="btn btn-primary btn-sm" onclick="togglemenu('cafe')" id="cafe">Cafés</button>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
              <button type="button" class="btn btn-success">Enviar</button>
              <button type="button" class="btn btn-warning">Anular</button>
    </div>
  </div>
</div>

</body>
</html>
