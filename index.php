<?php
//esta pagina solo puede ser vista una vez logueado por lo tanto incluímos sesión
require_once 'controlsesion.php';
$mesa=$_GET['mesa'];
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MarchandoSoft - Interfaz pedidos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/pedidosmesa.css" rel="stylesheet">
  <script src="js/capturaarticulo.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">MarchandoSoft - camarero: <span id="nomcamarero"><?php echo $_SESSION['username']; ?></span></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#comidas-items">Comidas</a>
        <div id="comidas-items" class="collapse">
          <?php include 'comidaitems.php' ;?>
        </div>
        <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#bebidas-items">Bebidas</a>
<div id="bebidas-items" class="collapse">
  <?php include 'bebidasitems.php' ;?>
</div>        
        <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#postre-items">Postre</a>
<div id="postre-items" class="collapse">
  <?php include 'postreitems.php' ;?>
</div>
        <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#cafe-items">Cafe</a>
<div id="cafe-items" class="collapse">
  <?php include 'cafeitems.php' ;?>
</div>
        <a href="interfaz.php" class="list-group-item list-group-item-action bg-light">Volver a mesas</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Artículos</button>
      </nav>

      <div class="container-fluid">
        <h5 class="mt-4 text-center">Mesa Nº<?php echo $mesa;?></h5>
        <table class="table-stripped table-bordered mitabla">
          <tr><th>Artículo</th><th>Ud</th><th>Pvp ud</th></tr>
          <tr class="lineapedido"><td class="idarticulo"></td><td class="udarticulo"></td><td class="idpvp"></td></tr>
          <tr><td id="nomart"></td><td id="numud"></td><td id="numpvp"></td></tr>
        </table>
      <div>
        <span style="text-align:left;">TOTAL</span><span id="totalpedido"style="text-align:right;"></span><span> €</span>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
